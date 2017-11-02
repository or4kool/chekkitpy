<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="bower_components/font-awesome/fonts/fontawesome-webfont.woff">
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Raleway:300,400" rel="stylesheet">
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script> -->
        <!--<link rel="stylesheet" href="css/main.css"> -->
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <section>
        	<nav class="navbar navbar-default navbar-fixed-top">
                <div class="container-fluid">
                <div class="row">
                	
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					    </button>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <div class="col-md-4">
                            <a href="#index"><img src="img/logo3.png" class="mlogo" /></a>
                        </div>
                        <div class="col-md-6">
                            <ul class="nav navbar-nav navbar-adjust">
                                <!-- <li class="active"><a href="#/">Home<span class="sr-only">(current)</span></a></li> -->
                                <li><a href="#features">Features</a></li>
                                <li><a href="#sign-up" ng-click="runStack()">Sign Up</a></li>
                            </ul>
                        </div>
                        <div class="col-md-2 scart">
                            <a href="#index"><img src="img/icon-cart.png" /></a>
                        </div>

                    </div>
                    <!--/.nav-collapse -->
                </div>
                </div>
                <!--/.container-fluid -->
            </nav>

            <section class="banner" id="index">
            	<div class="banner-overlay"></div>
            	<div class="container">
            		<div class="row the-row">
            			<div class="col-md-9 banner-inner">
	            			<div class="col-md-5 banner-info">
	            				<h2>Connect, Verify, Trust!</h2>
	            				<p>We invent technologies to protect life</br>and give real time supply chain insights.</p>
	            				<a href="#sign-up"><div class="btn signup-btn">Sign Up <i class="fa fa-rarrow"></i></div></a>
	            			</div>
	            			<div class="col-md-7"><img src="img/banner_phone.png" alt="" class="phone-img"></div>
            			</div>
            		</div>
            	</div>
            </section>

            <section class="second-sect" id="features">
            	<div class="container">
            		<div class="row features">
	            		<div class="col-md-12">
            				<h2 class="why-chekkit">Why Use Chekkit</h2>
            				<div class="header-divide"></div>
            			</div>
            			<div class="col-md-12 other-row">
	            			<div class="second-sect-img left-features col-md-4">
	            				<div class="col-md-12 feature-info-icon">
	            					<div class="feature-icon">
		            					<img src="img/protect-icon.png" alt="" />
	            					</div>
	            					<div>
		            					<h2>Brand Protection</h2>
		            					<p>Unique QRcode and short code to check if your product is genuine using the Chekkit app or SMS code</p>
	            					</div>
	            				</div>
	            				<div class="col-md-12 feature-info-icon">
		            				<div class="feature-icon">
		            					<img src="img/relationship-icon.png" alt="" />
		            				</div>
		            				<div>
		            					<h2>Consumer Relationship</h2>
		            					<p>Ensure your consumer have adequate knowledge on drug use with simple ilustration and voice prompt in thier local language</p>
		            				</div>
	            				</div>
	            				<div class="col-md-12 feature-info-icon">
	            					<div class="feature-icon">
		            					<img src="img/security-icon.png" alt="" />
	            					</div>
	            					<div>
		            					<h2>Optimize Security</h2>
		            					<p>Unique codes on items are end to end encrypted and logged in blockchain</p>
	            					</div>
	            				</div>
	            			</div>
	            			<div class="second-sect-img col-md-4">
		            			<img src="img/sec-phone.png" alt="">
	            			</div>
	            			<div class="second-sect-img right-features col-md-4">
		            			<div class="col-md-12 feature-info-icon">
		            				<div>
		            					<h2>Reminder</h2>
		            					<p>Get timely notifications to help ensure your consumer follows prescriptions</p>
		            				</div>
		            				<div class="feature-icon">
		            					<img src="img/reminder-icon.png" alt="" />
		            				</div>
	            				</div>
	            				<div class="col-md-12 feature-info-icon">
	            					<div>
		            					<h2>Verified History</h2>
		            					<p>See all drugs you have validated over time with Chekkit</p>
	            					</div>
	            					<div class="feature-icon">
		            					<img src="img/history-icon.png" alt="" />
	            					</div>
	            				</div>
	            				<div class="col-md-12 feature-info-icon">
	            					<div>
		            					<h2>Consumer Insights</h2>
		            					<p>Chekkit ensures secured product information from warehouse to end user</p>
	            					</div>
	            					<div class="feature-icon">
		            					<img src="img/insight-icon.png" alt="" />
	            					</div>
	            				</div>
	            			</div>
            			</div>
            		</div>
            	</div>
            </section>

            <section class="third-sect" id="sign-up">
            	<div class="container">
            		<div class="row other-row">
            			<div class="col-md-6 last-phone">
            				<img src="img/third-phone.png" alt="">
            			</div>
            			<div class="col-md-6">
            				<form>
	            				<h2>Be The First To Know</h2>
	            				<div class="white-header-divide"></div>
	            				<div class="col-md-12 input-section no-padding">
		            				<input type="text" placeholder="Full Name" />
	            				</div>
	            				<div class="col-md-12 input-section no-padding">
		            				<input type="text" placeholder="Phone Number" />
	            				</div>
	            				<div class="col-md-12 input-section no-padding">
		            				<input type="text" placeholder="Email" />
	            				</div>
	            				<div class="col-md-12 input-section no-padding">
		            				<select>
		            					<option>Location</option>
		            					<option>Accra</option>
		            					<option>Kumasi</option>
		            					<option>Lagos</option>
		            					<option>Others</option>
		            				</select>
	            				</div>
	            				<div class="col-md-12 input-section">
		            				<input type="text" placeholder="Address" />
	            				</div>
	            				<div class="register-btn-parent">
		            				<button type="button" class="btn register-btn">Register</button>
	            				</div>
	            				<div class="social-media">
	            					<i class="fa fa-facebook"></i>
	            					<i class="fa fa-twitter"></i>
	            				</div>
            				</form>
            			</div>
            		</div>
            	</div>
            </section>
            <section class="partner-sect">
            	<div class="container">
            		<div class="row">
            			<div class="col-md-12">
            				<h2>Partners</h2>
            				<div class="header-divide"></div>
            				<img src="img/mest-logo.png" alt="">
            			</div>
            		</div>
            	</div>
            </section>
        </section>
        <footer>
        	<div class="foot">
        		<p>Copyright &copy; 2017 Chekkit</p>
        	</div>
        </footer>

        <!-- <script src="http://code.jquery.com/jquery-1.12.4.min.js"></script> -->
        <!-- <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.4.min.js"><\/script>')</script> -->

        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>		
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>



<script>
	$(function() {
	$('ul.nav a').bind('click',function(event){
		var $anchor = $(this);

		$('html, body').stop().animate({
			scrollTop: $($anchor.attr('href')).offset().top
		}, 1500,'easeInOutExpo');
		/*
		if you don't want to use the easing effects:
		$('html, body').stop().animate({
			scrollTop: $($anchor.attr('href')).offset().top
		}, 1000);
		*/
		event.preventDefault();
	});
});

	$('form').submit(function(event){

		event.preventDefault();

		var value = $(this).serialize();

		// console.log(value);

		$(document).ajaxStart(function(){
			// console.log("IN HERE");
        // $('#loader').css('display','block');
        $('#loader').show();
    });

		request = $.ajax({
					url:"outa.php",
					type: "post",
					data: value
		});

		
    $(document).ajaxComplete(function(){
			// console.log("OUT HERE");

        $('#loader').hide();
    });

		request.done(function (response, textStatus, jqXHR){
				// console.log(response);

					
					$('.former').fadeOut( "slow" );
					$('.thanks').fadeIn();
				

		});

		request.fail(function (jqXHR, textStatus, errorThrown){
				alert(textStatus);
		});
	});
</script>

    </body>
</html>