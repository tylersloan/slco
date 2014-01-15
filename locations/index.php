<!DOCTYPE html>
<html>
<head>
	<title>Carolina Oaks | Locations</title>
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="../css/build/pages.css">
	<link rel="stylesheet" type="text/css" href="../css/build/style.css">
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700,500|Roboto+Condensed:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="../css/icon-font.css">
	<script src="../js/build/production.min.js"></script>
	<script type="text/javascript" src="../js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="//use.typekit.net/gfr3hyo.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
</head>
<body class="locations">
	
	<header>
		<div class="header">
			<a href="../" class="logo">Carolina Oaks</a>
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
	</div>

	<hr class="square"></hr>

	<section class="main-content">

		<ul class="js-slides">
			<span id="x" class="js-hide-options js-show-options"></span>
			<li class="show-menu">Menu</li>
			<li><a class="tab selected" id="loc-1">Location 1</a></li>
			<li><a class="tab" id="loc-2">Location 2</a></li>
			<li><a class="tab" id="loc-3">Location 3</a></li>
		</ul>
		
		<div class="main slide visible loc-1">
			<p class="title">Our Greenville Location</p>
			<p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum interdum, vel lobortis nunc tincidunt quis. Fusce varius magna felis, a porttitor nisi porta. Quisque risus dolor, tempor id dui quis, consequat iaculis nisl. Sed odio dui, vitae enim ut, sagittis convallis sem. Aenean accumsan scelerisque volutpat.</p>

			<div class="third-width long">
				<div class="entry">
					<p class="title">Email</p>
					<p>contact@carolinaoaks.com</p>
				</div>
			</div>

			<div class="third-width short">
				<div class="entry">
					<p class="title">Phone</p>
					<p>800-123-4567</p>
				</div>
			</div>

			<div class="third-width">
				<div class="entry">
					<p class="title">Emergency Phone</p>
					<p>800-987-6543</p>
				</div>
			</div>

			<div class="third-width long">
				<div class="entry">
					<p class="title">Address</p>
					<p>101 Donnybrook Ave<br>Greenville, SC 29601</p>
				</div>
			</div>
			<div class="third-width short">
				<div class="entry">
					<p class="title">Follow Us</p>
					<p>
						<a href="http://twitter.com">Twitter</a>
						<a href="http://facebook.com">Facebook</a>
					</p>
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
				<div id="contact" class="contactformbutton">
					
					<fieldset>

						<form name="contactme" class="contactme" id="contactme" action="" method="post">

							<input placeholder="Your Name" type="text" name="name" id="name" maxlength="100" autocomplete="off" autocapitalize="on" value="" />
							<input placeholder="Your Email" type="text" name="email" id="email" autocomplete="off" autocapitalize="on" value="" />
							<input placeholder="Daytime Phone" type="tel" name="phone" id="phone" maxlength="13" autocomplete="off" autocapitalize="on" value="" /> 
							<input placeholder="Best Time to Call" type="text" name="time" id="time" max-length="100" autocomplete="off" autocapitalize="on" value="" />
							<input class="reset" type="submit" value="Continue">

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

		$(document).ready(function() {

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
					$.post('../contactme/process.php', $('#contactme').serialize(), function(data) {
						$('#results').html(data);
					});
				},
			});

			// $(".contactme")[0].reset();

				// $(".reset").click(function() {
			 //    $(this).closest('form').find("input, textarea").val("");
				// });

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

		  var windowWidth = $(window).width();
		  var li = $('.tab')
		  var liLength = li.length
		  var liHeight = $('.js-slides').height()
		  var multiplier = liLength + 1
		  var ulHeight = multiplier*liHeight

		  if(windowWidth < 481) {
		  	
		  	$('#x').on('click', function(){

		  		if( $('#x').hasClass('js-show-options') ) {
		  			console.log('show options clicked');
		  			$(this).removeClass('js-show-options');
		  			$('.js-slides').css({"height": ulHeight});
		  		}
		  		else {
		  			console.log('hide options clicked');
		  			$(this).addClass('js-show-options');
		  			$('.js-slides').css({"height": liHeight});
		  		};

		  	});

		  	$('.tab').on('click', function(){
		  		$('#x').addClass('js-show-options');
		  		$('.js-slides').css({"height": liHeight});
		  	});
		  };
		  
		});
	
	</script>
	
</body>
</html>