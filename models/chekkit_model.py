from models.base_model import *
from peewee import CharField, DateTimeField

from datetime import datetime

class ChekkitModel(BaseModel):
	name = CharField(50)
	phone = CharField(20)
	email = CharField(40)
	location = CharField(40)
	address = CharField(80)
	timestamp = DateTimeField(default=datetime.now)