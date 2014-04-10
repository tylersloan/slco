<!DOCTYPE HTML>
<html>
<head>
	<title>Carolina Oaks | Care</title>
	<!-- <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"> -->
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="../css/build/pages.css">
	<link rel="stylesheet" type="text/css" href="../css/build/style.css">
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700,500|Roboto+Condensed:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="../font/icon-font.css">
	<script src="../js/build/production.min.js"></script>
	<script type="text/javascript" src="../js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="//use.typekit.net/ava6syz.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
</head>
<body class="care">
	
	<header>
		<div class="header">
			<a href="../" class="logo">Carolina Oaks</a>
			<span class="mobile-menu-icon icon-menu2"></span>
			<nav>
				<ul>
					<li class="selected"><a href="../care/">Care</a></li>
					<li><a href="../doctors/">Doctors</a></li>
					<li><a href="../locations/">Locations</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<div class="hero">
		<div class="wrapper">
			<div class="banner">
				<p>Contact us to set up your next visit today.</p>
			</div>
			<div class="headline">
				<span class="icon-heart"></span>
				<p class="title">Care</p>
				<p class="cond">Whether you&#8217;re visiting for a routine check-up or your first visit in years, we&#8217;ve got you covered.</p>
			</div>
		</div>
	</div>

	<hr class="square"></hr>

	<section class="main-content">

		<ul class="js-slides">
		</ul>

		<div class="main slide visible preventative">
			<p class="title">Preventative</p>
			<p class="description">Preventive dental care is the best possible means of maintaining optimum oral health, assisting in the prevention of cavities, gum disease, enamel wear, and more.  In the dental office setting, preventive dental care consists of semi-annual teeth cleanings and check ups.</p>
		</div>

		<div class="main slide visible restorative">
			<p class="title">Restorative</p>
			<p class="description">When damage has occurred to teeth or their surrounding structures, restorative dental care is necessary to return the teeth to their optimal function.  Restorative dental care includes fillings, porcelain crowns, porcelain bridges, root canals, partials, and dentures.</p>
		</div>

		<div class="main slide visible emergency">
			<p class="title">Emergency</p>
			<p class="description">Most dental problems can be avoided through preventive and restorative care, but dental emergencies are not uncommon.  Dental emergencies commonly consist of broken teeth, trauma, a sudden loss of a dental restoration, or pain related to teeth, gums, or supporting bone.</p>
			<hr>
			<p class="light">If you&#8217;re interested in general care or have an emergency, please let us know.</p>
			<a href="#contact" class="button">Contact Us</a>
		</div>		

		<aside>

			<span class="icon-iphone"></span>

			<p class="title">Schedule and Appointment</p>
			<p class="description">Contact us to set up an appointment at one of our convenient locations across the Carolinas.</p>
			<p>With years of experience and advanced technical training, our doctors are highly qualified to serve all of your dental needs. We would love to get you set up today!</p>
			<a href="#0" class="button">Schedule Visit</a>
			
		</aside>

	</section>

	<footer>
		<section id="contact" class="empathy">
			<p class="cond">Hey, we get it. Going to the dentist can be difficult.<br>It doesn&#8217;t have to be. We&#8217;ll even help you get started.</p>
		</section>

		<div class="full-width">
			<section class="half-width">
				<p class="cond">Share some information, and we&#8217;ll gladly help set up your next visit.</p>
				<p>With years of experience and advanced technical training, our doctors are highly qualified to serve all of your dental needs. We would love to get you set up today!</p>
			</section>
			<section class="half-width">
				<div class="contactformbutton">
					
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
				<li>&copy; 2014 Carolina Oaks</li>
				<li><a href="../care/">Care</a></li>
				<li><a href="../doctors/">Doctors</a></li>
				<li><a href="../locations/">Locations</a></li>
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
					$.post('../contactme/process.php', $('#contactme').serialize(), function(data) {
						$('#results').html(data);
					});
				}
			});
		  
		  $('.mobile-menu-icon').on('click', function(){
		  	$('header').toggleClass('open');
		  });

		  // $('.tab').on('click', function(){
		  // 	var id = $(this).attr('id');

		  // 	$('.tab').removeClass('selected');
		  // 	$(this).addClass('selected');
		  // 	$('.slide').removeClass('visible');
		  // 	$('.' + id).addClass('visible');
		  // });

		  var windowWidth = $(window).width();
		  var li = $('.tab')
		  var liLength = li.length
		  var liHeight = $('.js-slides').height()
		  var multiplier = liLength + 1
		  var ulHeight = multiplier*liHeight

		  if(windowWidth < 481) {
		  	
		  	$('#x').on('click', function(){

		  		if( $('#x').hasClass('js-show-options') ) {
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