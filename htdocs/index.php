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
    		<form method="POST" action="http://feedburner.google.com/fb/a/mailverify" target="popupwindow"
    			onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=Wakemakin', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
    			<input type="hidden" value="Wakemakin" name="uri"/>
    			<input type="hidden" name="loc" value="en_US"/>
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
				<div class="footerCenter">
		    		<a href="http://twitter.com/#!/wakemakin" target="_blank"><img src="assets/img/social/twitter.png"/></a>
		    		<a href="https://www.facebook.com/pages/WakeMakin-Development-House-LLC/301654423246409" target="_blank"><img src="assets/img/social/facebook.png"/></a>
		    		<a href="https://plus.google.com/110525384915838388220/posts" target="_blank"><img src="assets/img/social/google.png"/></a>
		    		<a href="http://blog.wakemakin.com" target="_blank"><img src="assets/img/social/wordpress.png"/></a>
	    			<a href="http://www.linkedin.com/company/wakemakin-development-house-l-l-c-" target="_blank"><img src="assets/img/social/linked-in.png"/></a>
		    		<a href="http://blog.wakemakin.com/?feed=rss2" target="_blank"><img src="assets/img/social/rss.png"/></a>
	    		</div>
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
				&copy; <?php echo date('Y') ?> WakeMakin Development House L.L.C.
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
	  <?php echo file_get_contents("assets/docs/privacypolicy.html")?>
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal" >Close</a>
	  </div>
	</div>

  </body>
</html>
