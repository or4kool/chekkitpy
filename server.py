import os, sys
sys.path.append(os.getcwd())

from flask import Flask, render_template, redirect, session, request
from flask_mail import Mail, Message
from models.base_model import DBSingleton
from models.chekkit_model import ChekkitModel


app = Flask(__name__)
mail = Mail(app)

mail_server = os.environ.get("MAIL_SERVER")
mail_port = os.environ.get("MAIL_PORT")
mail_username = os.environ.get("MAIL_USERNAME")
mail_password = os.environ.get("MAIL_PASSWORD")

app.config['MAIL_SERVER'] = mail_server
app.config['MAIL_PORT'] = mail_port
app.config['MAIL_USERNAME'] = mail_username
app.config['MAIL_PASSWORD'] = mail_password

mail = Mail(app)


@app.before_first_request
def initialize_tables():
	connect_db()
	if not ChekkitModel.table_exists():
		ChekkitModel.create_table()
	disconnect_db()



@app.before_request
def connect_db():
	DBSingleton.getInstance().connect()

@app.teardown_request
def disconnect_db(err=None):
	DBSingleton.getInstance().close()


@app.route('/')
def main_page():
	return render_template("index.html")


@app.route('/getem', methods=['POST'])
def save_input():
	name = request.form['fullname']
	phone = request.form['phone']
	email = request.form['email']
	location = request.form['location']
	address = request.form['address']

	completeForm = ChekkitModel.create(name=name, phone=phone, email=email, location=location, address=address)
	completeForm.save()
	# if result < 1:
	# 	return False

	send_mail(name, email)

	return "success"

app.route('/send_mail')
def send_mail(name, email):
	email = []
	email.append(email)
	msg = Message('Thank you '+name, sender=mail_username, recipients=email)
	msg.body=""

	return "Msg Success"


app.secret_key = os.environ.get('FLASK_SECRET_KEY')

