<!DOCTYPE HTML>
<html>
<head>
	<title>Carolina Oaks | Locations</title>
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="../css/build/style.css">
	<link rel="stylesheet" type="text/css" href="../css/build/pages.css">
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700,500|Roboto+Condensed:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="../css/icon-font.css">
	<script src="../js/build/production.min.js"></script>
	<script type="text/javascript" src="//use.typekit.net/gfr3hyo.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
</head>
<body class="locations">
	
	<header>
		<div class="header">
			<div class="logo">
				<h1><a href="../">Carolina Oaks</a></h1>
			</div>
			<span class="mobile-menu-icon icon-menu2"></span>
			<nav>
				<ul>
					<li><a href="/care/">Care</a></li>
					<li><a href="../doctors/">Doctors</a></li>
					<li class="selected"><a href="../locations/">Locations</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<div class="hero">
		<div id="map-canvas" class="map"></div>
		<!-- <div class="responsive-wrapper"> -->
		<!-- </div> -->
		<!-- <div class="wrapper"> -->
			<!-- <div class="banner">
				<p>Call or text 864.235.3949 to set up your next visit today.</p>
			</div>
			<div class="headline">
				<span class="icon-user"></span>
				<p class="title">Doctors</p>
				<p class="cond">Rest assured, when you&#8217;re with us your mouth is in good hands. Actually, good hands are in your mouth.</p>
			</div> -->
		<!-- </div> -->
	</div>

	<hr class="square"></hr>

	<section class="main-content">

		<ul>
			<li><a class="tab selected" id="loc-1">Location 1</a></li>
			<li><a class="tab" id="loc-2">Location 2</a></li>
			<li><a class="tab" id="loc-3">Location 3</a></li>
		</ul>
		
		<div class="main slide visible loc-1">
			<p class="title">Our Greenville Location</p>
			<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum interdum, vel lobortis nunc tincidunt quis. Fusce varius magna felis, a porttitor nisi porta. Quisque risus dolor, tempor id dui quis, consequat iaculis nisl. Sed odio dui, vitae enim ut, sagittis convallis sem. Aenean accumsan scelerisque volutpat.</p>

			<div class="third-width">
				<div class="entry">
					<p class="title">Email</p>
					<p>contact@carolinaoaks.com</p>
				</div>
				<div class="entry">
					<p class="title">Address</p>
					<p>101 Donnybrook Ave<br>Greenville, SC 29601</p>
				</div>
			</div>

			<div class="third-width">
				<div class="entry">
					<p class="title">Phone</p>
					<p>800-123-4567</p>
				</div>
				<div class="entry">
					<p class="title">Follow Us</p>
					<p>
						<a href="http://twitter.com">Twitter</a>
						<a href="http://facebook.com">Facebook</a>
					</p>
				</div>
			</div>

			<div class="third-width">
				<div class="entry">
					<p class="title">Emergency Phone</p>
					<p>800-987-6543</p>
				</div>
			</div>

			<hr>

			<p class="light">If you&#8217;re interested in general care or have an emergency, please let us know.</p>
			<a href="#0" class="button">Contact Us</a>
		</div>

		<div class="main slide loc-2">
			<p class="title">2</p>
			<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum interdum, vel lobortis nunc tincidunt quis. Fusce varius magna felis, a porttitor nisi porta. Quisque risus dolor, tempor id dui quis, consequat iaculis nisl. Sed odio dui, vitae enim ut, sagittis convallis sem. Aenean accumsan scelerisque volutpat.</p>

			<hr>

			<p class="light">If you&#8217;re interested in general care or have an emergency, please let us know.</p>
			<a href="#0" class="button">Contact Us</a>
		</div>

		<div class="main slide loc-3">
			<p class="title">3</p>
			<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum interdum, vel lobortis nunc tincidunt quis. Fusce varius magna felis, a porttitor nisi porta. Quisque risus dolor, tempor id dui quis, consequat iaculis nisl. Sed odio dui, vitae enim ut, sagittis convallis sem. Aenean accumsan scelerisque volutpat.</p>

			<hr>

			<p class="light">If you&#8217;re interested in general care or have an emergency, please let us know.</p>
			<a href="#0" class="button">Contact Us</a>
		</div>

		<aside>

			<span class="icon-iphone"></span>

			<p class="title">Schedule and Appointment</p>
			<p class="description">Text, call or email to set up an appointment at one of our many locations across the Carolinas.</p>
			<p>Ut quam lectus, blandit a viverra nec, scelerisque quis orci. Proin id aliquet nisi. In porttitor ac dolor id dignissim. Pellentesque nisl 
			<a href="#0" class="button">Schedule Visit</a>
			
		</aside>

	</section>

	<footer>
		<section class="empathy">
			<p class="cond">Hey, we get it. Going to the dentist can be difficult.<br>It doesn&#8217;t have to be. We&#8217;ll even help you get started.</p>
		</section>

		<div class="full-width">
			<section class="half-width">
				<p class="cond">Share some information, and we&#8217;ll gladly help set up your next visit.</p>
				<p>Ut quam lectus, blandit a viverra nec, scelerisque quis orci. Proin id aliquet nisi. In porttitor ac dolor id dignissim. Pellentesque nisl 
			</section>
			<section class="half-width">
				<?php // if(isset($emailSent) && $emailSent): ?>
				    <!-- <div class="col-md-6 col-md-offset-3">
				        <div class="alert alert-success text-center">Your message was sent successfully.</div>
				    </div> -->
				<?php // else: ?>
				    <?php // if(isset($hasError) && $hasError): ?>
				    <!-- <div class="col-md-5 col-md-offset-4">
				        <div class="alert alert-danger text-center">There was an error in sending, please try again later.</div>
				    </div> -->
				    <?php // endif; ?>
				<!-- <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" id="contact-form" autocomplete="on" method="post">
					<input placeholder="Your Name" id="name" name="name">
					<input placeholder="Your Email" id="email" name="email" type="email">
					<input placeholder="Daytime Phone" id="phone" name="phone" type="tel">
					<input placeholder="Best Time to Call" id="time-to-call" name="time" maxlength="100">
					<input type="submit" value="Continue">
				</form> -->
				<?php // endif; ?>
				<script type="text/javascript">
				//message box validation
				function limitarelungime(obj, length){
				        var lungime=length
				        if (obj.value.length>lungime)
				        obj.value=obj.value.substring(0, lungime)
				        }
					
				//email form validation

				function everif(str) {

						var at="@"
						var punct="."
						var lat=str.indexOf(at)
						var lstr=str.length
						var lpunct=str.indexOf(punct)
						if (str.indexOf(at)==-1){
						   alert("Valid email must be entered")
						   return false
						}

						if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
						   alert("Valid email must be entered")
						   return false
						}

						if (str.indexOf(punct)==-1 || str.indexOf(punct)==0 || str.indexOf(punct)==lstr){
						    alert("Valid email must be entered")
						    return false
						}

						 if (str.indexOf(at,(lat+1))!=-1){
						    alert("Valid email must be entered")
						    return false
						 }

						 if (str.substring(lat-1,lat)==punct || str.substring(lat+1,lat+2)==punct){
						    alert("Valid email must be entered")
						    return false
						 }

						 if (str.indexOf(punct,(lat+2))==-1){
						    alert("Valid email must be entered")
						    return false
						 }
						
						 if (str.indexOf(" ")!=-1){
						    alert("Valid email must be entered")
						    return false
						 }

				 		 return true					
					}

				function evalid(){
					var emailID=document.contact_form.mail
					
					if (everif(emailID.value)==false){
						emailID.focus()
						return false
					}
					
				//empty field validation
					
					var fname=document.contact_form.fname
					if ((fname.value==null)||(fname.value=="")){
				        alert("Fields marqued with * must be entered")
				        fname.focus()
				        return false
				        }
				 
					var message=document.contact_form.message	
					if ((message.value==null)||(message.value=="")){
				        alert("Fields marqued with * must be entered")
				        message.focus()
				        return false
				        }
							
					return true
				 }
				 </script>
				<form name="contact_form" method="post" action="mailer.php" onSubmit="return evalid()">
				<table border="0"><tr>
				    <td>First Name *</td>
				    <td colspan="2"><input name="fname" type="text" size="30" /></td>
				  </tr><tr>
				    <td>Your E-mail *</td>
				    <td colspan="2"><input type="text" name="mail" size="30" /></td>
				  </tr><tr>
				    <td>Phone</td>
				    <td colspan="2"><input name="phone" type="text" size="30" onkeypress="return numere(event)" onkeyup="return limitarelungime(this, 10)"  /></td>
				  </tr><tr>
				    <td>Message *</td>
				    <td colspan="2"><textarea name="message" onkeyup="return limitarelungime(this, 100)"  cols="35" rows="5"></textarea></td>
				  </tr><tr>
				    <td> </td>
				    <td colspan="2"> </td>
				  </tr>
				  <tr>
				    <td><input type="reset" name="reset" value="Reset"/></td>
				    <td align="right"><input type="submit" name="Submit" value="Submit"></td><td align="right"><a href="http://www.scriptgenerator.net/71/HTML%7B47%7DPHP-Contact-Form-Mailer-Generator/" title="Valid Contact Form"><img src="http://www.scriptgenerator.net/images/validform.jpg" alt="Valid Contact Form" width="20" height="20" border="0" /></a></td>
				  </tr>
				</table>
				</form>
			</section>
		</div>

		<div class="footer-nav">
			<ul>
				<li>&copy; 2013 Carolina Oaks</li>
				<li><a href="/care/">Care</a></li>
				<li><a href="/doctors/">Doctors</a></li>
				<li><a href="/locations/">Locations</a></li>
				<li><a href="#contact">Contact</a></li>
			</ul>
			<p>Call 864.235.3949 to set up your next visit today.</p>
		</div>		
		
	</footer>

	<script type="text/javascript" src="../js/contact-form.js"></script>

	<script>

		$( document ).ready(function() {

			var map;
			function initialize() {
			  var mapOptions = {
			    zoom: 8,
			    center: new google.maps.LatLng(34.841387, -82.364462)
			  };

			  map = new google.maps.Map(document.getElementById('map-canvas'),
			      mapOptions);
			}

			google.maps.event.addDomListener(window, 'load', initialize);
		  
		  $('.mobile-menu-icon').on('click', function(){
		  	$('header').toggleClass('open');
		  });

		  $('.tab').on('click', function(){
		  	var id = $(this).attr('id');

		  	$('.tab').removeClass('selected');
		  	$(this).addClass('selected');
		  	$('.slide').removeClass('visible');
		  	$('.' + id).addClass('visible');
		  });
		  
		});
	
	</script>
	
</body>
</html>