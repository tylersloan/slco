<!DOCTYPE HTML>
<html>
<head>
	<title>Carolina Oaks | Home</title>
	<!-- <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"> -->
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="css/build/style.css">
	<link rel="stylesheet" type="text/css" href="css/build/home.css">
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700,500|Roboto+Condensed:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/icon-font.css">
	<script src="js/build/production.min.js"></script>
	<script type="text/javascript" src="js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="//use.typekit.net/gfr3hyo.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	
</head>
<body class="home">
	
	<header>
		<div class="header">
			<a href="../" class="logo">Carolina Oaks</a>
			<!-- <div class="logo">
				<h1><a href="../">Carolina Oaks</a></h1>
			</div> -->
			<span class="mobile-menu-icon icon-menu2"></span>
			<nav>
				<ul>
					<li><a href="/care/">Care</a></li>
					<li><a href="../doctors/">Doctors</a></li>
					<li><a href="../locations/">Locations</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<div class="hero">
		<div class="banner">
			<p>Call or text 864.235.3949 to set up your next visit today.</p>
		</div>
		<div class="factoid">
			<h4>Your smile says a lot about you. That's why it's so important to us.</h4>
			<hr>
			<span class="icon-acorn"></span>
			<p>Ut quam lectus, blandit a viverra nec, scelerisque quis orci. Proin id aliquet nisi. In porttitor ac dolor id dignissim. Pellentesque nisl massa, convallis vitae dui vitae, bibendum egestas risus.</p>
		</div>
	</div>

	<hr class="square"></hr>

	<section class="main-content">

		<div class="third-width care">
			<span class="icon-heart"></span>
			<p class="title">Care</p>
			<p class="description">Whether you&#8217;re visiting for a routine check-up or your first visit in years, we&#8217;ve got you covered.</p>
			<p class="more-details">
				Ut quam lectus, blandit a viverra nec, scelerisque quis orci. Proin id aliquet nisi. In porttitor ac dolor id dignissim. Pellentesque nisl massa, convallis vitae dui vitae, bibendum egestas risus.</p>
			<a class="button" href="/care/">Learn More</a>
		</div>

		<div class="third-width staff">
			<span class="icon-user"></span>
			<p class="title">Our Staff</p>
			<p class="description">We staff the most skilled and trust-worthy dentists around to ensure a quality experience for you.</p>
			<p class="more-details">
				Pellentesque nisl massa, convallis vitae. Ut quam lectus, blandit a viverra nec, scele risque quis orci. Proin id aliquet nisi. In port titor ac dolor id dignissim.</p>
			<a class="button" href="/doctors/">Learn More</a>
		</div>

		<div class="third-width appointment">
			<span class="icon-iphone"></span>
			<p class="title">Schedule and Appointment</p>
			<p class="description">Text, call or email to set up an appointment at one of our many locations across the Carolinas.</p>
			<p class="more-details">
				Ut quam lectus, blandit a viverra nec, scelerisque quis orci. Proin id aliquet nisi. In porttitor ac dolor id dignissim. Pellentesque nisl massa, convallis vitae dui vitae, bibendum egestas risus.</p>
			<a class="button" href="#0">Learn More</a>
		</div>

	</section>

	<footer>
		<section class="empathy">
			<p class="cond">Hey, we get it. Going to the dentist can be difficult.<br>It doesn&#8217;t have to be. We&#8217;ll even help you get started.</p>
		</section>

		<div class="full-width">
			<section class="half-width">
				<p class="cond">Share some information, and we&#8217;ll gladly help set up your next visit.</p>
				<p>Ut quam lectus, blandit a viverra nec, scelerisque quis orci. Proin id aliquet nisi. In porttitor ac dolor id dignissim. Pellentesque nisl massa, convallis vitae dui vitae, bibendum egestas risus.</p>
			</section>
			<section class="half-width">
					
					<div id="contact" class="contactformbutton">
						
						<fieldset>

							<form name="contactme" class="contactme" id="contactme" action="" method="post">

								<input placeholder="Your Name" type="text" name="name" id="name" maxlength="100" autocomplete="off" autocapitalize="on" value="" />
								<input placeholder="Your Email" type="text" name="email" id="email" autocomplete="off" autocapitalize="on" value="" />
								<input placeholder="Daytime Phone" type="tel" name="phone" id="phone" maxlength="13" autocomplete="off" autocapitalize="on" value="" /> 
								<input placeholder="Best Time to Call" type="text" name="time" id="time" max-length="100" autocomplete="off" autocapitalize="on" value="" />
								<input type="submit" value="Continue">

							</form>
							<div id="results"></div>

						</fieldset>

					</div>
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
			<p>Call <span>864.235.3949</span> to set up your next visit today.</p>
		</div>		
		
	</footer>

	<script>

		$( document ).ready(function() {

			$('#contactme').validate({
				debug: false,
				rules: { 
					name: { required: true, minlength:2 },
					email: { required: true, email: true },
					phone: { required:true, number:true, rangelength:[4,15] },
					time: { required: true, minlength:2, }		
				},

				messages: {<? $msj='""'; /*you can insert here a customized error message*/ ?>      
					name: <? echo $msj; ?>, 
					email: <? echo $msj; ?>,
					phone: <? echo $msj; ?>,
					time: <? echo $msj; ?>
				},

				submitHandler: function(form) {
					// do other stuff for a valid form
					$.post('contactme/process.php', $('#contactme').serialize(), function(data) {
						$('#results').html(data);
						$(this).reset();
					});
				}
			});
		  
		  $('.mobile-menu-icon').on('click', function(){
		  	$('header').toggleClass('open');
		  });
		  
		});
	
	</script>
	
</body>
</html>