<?php
	$title = "Home";
	include 'templates/_header.php';
?>

	<div class="hero">
		<div class="banner">
			<p><a href="#contact">Contact us</a> to set up your next visit today.</p>
		</div>
		<div class="factoid">
			<h4>Your smile says a lot about you. That's why it's so important to us.</h4>
			<hr>
			<span class="icon-acorn"></span>
			<p>Our team is dedicated to providing every patient with the best possible care in a relaxed, friendly environment. We accomplish this by combining the latest technologies with real relationships and care.</p>
		</div>
	</div>

	<hr class="square"></hr>

	<section class="main-content">

		<div class="third-width care">
			<a href="/care/">
				<span class="icon-heart"></span>
			</a>
			<p class="title">Care</p>
			<p class="description">Whether you&#8217;re visiting for a routine check-up or your first visit in years, we&#8217;ve got you covered.</p>
			<a class="button" href="/care/">Learn More</a>
		</div>

		<div class="third-width staff">
			<a href="/staff/">
				<span class="icon-user"></span>
			</a>
			<p class="title">Our Staff</p>
			<p class="description">We staff the most skilled and trust-worthy dentists around to ensure a quality experience for you.</p>
			<a class="button" href="/doctors/">Learn More</a>
		</div>

		<div class="third-width appointment">
			<a href="#contact">
				<span class="icon-iphone"></span>
			</a>
			<p class="title">Schedule an Appointment</p>
			<p class="description">Contact us to set up an appointment at one of our convenient locations across the Carolinas.</p>
			<a class="button" href="#contact">Contact Us</a>
		</div>

	</section>

	<?php
		include 'templates/_footer.php';
	?>