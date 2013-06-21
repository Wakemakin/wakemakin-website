<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>WakeMakin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/retro.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

	<!-- jquery links -->
	<script type="text/javascript" src="assets/js/jquery.js" ></script>
	<script type="text/javascript" src="assets/js/bootstrap.js" ></script>
	<script type="text/javascript" src="assets/js/bootstrap-modal.js" ></script>
	

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>
  
  <script type="text/javascript">
  
  	$(document).ready(function(){
  		$("#subscribeEmail").focus(function(){
  				$("#subscribeEmail").val('');
  		});
  		$("#subscribeEmail").focusout(function(){
  			if($("#subscribeEmail").val() == "") {
  				$("#subscribeEmail").val('Enter your email');
  			}
  		});
  	});
  
  </script>

  <body>
    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
      
      
				<img id="logo" src="assets/img/logo001.png" />
	  </div>
	</div>
	<div class="container">
		<div class="center">
    		<div id="comingSoon">
    			<img class="centerimg" style="padding-bottom: 15px" src="assets/img/comingsoon.png"/>
    			<img class="someText"  src="assets/img/someText.png"/>
    		<form method="POST" action="#">
    			<input id="subscribeEmail" type="text" name="email" value="Enter your email"/>
    			<input type="image" name="submit" src="assets/img/subscribe.png"/>
    		</form>
    		</div>
    	</div>
    </div>
	<div class="container-fluid" id="mainbody">
		<div class="row span12" id="maincontent">
			<div class="span4 subSection">
				<img src="assets/img/frontPage_image1.png" />
				<div class="subSectionText">
					<p>WakeMakin has over 25 years of experience in web-technologies and web design.</p>
					<p>Our customer-focused design team will create the web	presence that fully delivers your message.</p> 
				</div>
			</div>
			<div class="span4 subSection">
				<img src="assets/img/frontPage_image2.png" />
				<div class="subSectionText">
					<p>WakeMakin will take your company to the next level of customer interactivity by putting your identity into 
					their pocket.</p>
					<p> The mobile market is booming and WakeMakin will take you there.</p>
				</div>
			</div>
			<div class="span4 subSection">
				<img src="assets/img/frontPage_image3.png" />
				<div class="subSectionText">
					<p>WakeMakin has its roots in desktop development and will bring your business' software requirements to life. </p> 
					<p>From simple consultation to full-fledged, interstate software architectures WakeMakin is the source. </p>
				</div>
			</div>
		</div>
	</div>
	
    
	<div class="container">
		<div class="row span12" id="footercontent">
			<div class="span4" >
	    		<a href="http://twitter.com/#!/wakemakin"><img src="assets/img/social/twitter.png"/></a>
	    		<img src="assets/img/social/facebook.png"/>
	    		<img src="assets/img/social/google.png"/>
	    		<img src="assets/img/social/wordpress.png"/>
	    		<img src="assets/img/social/linked-in.png"/>
	    		<img src="assets/img/social/rss.png"/>
	    	</div>
			<div class="span4" >
			&nbsp;
	    	</div>
			<div class="span4" >
				<p>
				<a href="mailto:info@wakemakin.com" >Contact Us</a>
				</p>
				<p>
				<a data-toggle="modal" href="#myModal" >Privacy Policy</a>
				</p>
				<p>
				&copy; 2012 WakeMakin Development House L.L.C.
				</p>
				<p>
				San Antonio, TX 78240
				</p>
	    	</div>
	    </div>
    </div>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>

	<div id="myModal" class="modal hide" >
	  <div class="modal-header">
	    <button class="close" data-dismiss="modal">×</button>
	    <h3>Privacy Policy</h3>
	  </div>
	  <div class="modal-body">
	    <p class="pp-question">What information do we collect?</p>
	    <p>
	    	We collect information from you when you subscribe to our newsletter.<br/> 
			When ordering or registering on our site, as appropriate, you may be asked 
			to enter your: e-mail address. You may, however, visit our site anonymously.
		</p>
		
		<p class="pp-question">What do we use your information for?</p>
	    <p>Any of the information we collect from you may be used in one of the following ways:</p>
	    <ol>
	    	<li>To send periodic emails</li>
	    </ol>
		<p>
			The email address you provide may be used to send you information, respond to inquiries, 
			and/or other requests or questions.
		</p>
		
		<p class="pp-question">How do we protect your information?</p>
	    <p>
	    	We implement a variety of security measures to maintain the safety of your personal 
	    	information when you enter, submit, or access your personal information. 
		</p>
		
		<p class="pp-question">Do we use cookies?</p>
	    <p>
	    	We do not use cookies.
		</p>
		
		<p class="pp-question">Do we disclose any information to outside parties?</p>
	    <p>
	    	We do not sell, trade, or otherwise transfer to outside parties your personally 
	    	identifiable information. This does not include trusted third parties who assist 
	    	us in operating our website, conducting our business, or servicing you, so 
	    	long as those parties agree to keep this information confidential. We may also 
	    	release your information when we believe release is appropriate to comply with the 
	    	law, enforce our site policies, or protect ours or others rights, property, or safety. 
	    	However, non-personally identifiable visitor information may be provided to other 
	    	parties for marketing, advertising, or other uses.
		</p>
		
		<p class="pp-question">California Online Privacy Protection Act Compliance</p>
	    <p>
	    	Because we value your privacy we have taken the necessary precautions to be in 
	    	compliance with the California Online Privacy Protection Act. We therefore will 
	    	not distribute your personal information to outside parties without your consent.
		</p>
		<p>
			As part of the California Online Privacy Protection Act, all users of our site may make 
			any changes to their information at anytime by logging into their control panel 
			and going to the 'Edit Profile' page
		</p>
		<p class="pp-question">Childrens Online Privacy Protection Act Compliance</p>
	    <p>
	    	We are in compliance with the requirements of COPPA (Childrens Online Privacy 
	    	Protection Act), we do not collect any information from anyone under 13 years 
	    	of age. Our website, products and services are all directed to people who are at 
	    	least 13 years old or older.
		</p>
		
		<p class="pp-question">Your Consent</p>
	    <p>
	    	By using our site, you consent to our privacy policy.
		</p>
		
		<p class="pp-question">Changes to our Privacy Policy</p>
	    <p>
	    	If we decide to change our privacy policy, we will post those changes on this page.
		</p>
		
		<p class="pp-question">Contacting Us</p>
	    <p>
	    	If there are any questions regarding this privacy policy you may contact us using the information below.
		</p>
		<a href="www.wakemakin.com">www.wakemakin.com</a><br/>
		7119 Wood Hollow Dr Ste 200 <br/>
		Austin, TX 78731 <br/>
		United States<br/>
		<a href="mailto:info@wakemakin.com">info@wakemakin.com</a>
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal" >Close</a>
	  </div>
	</div>

  </body>
</html>
