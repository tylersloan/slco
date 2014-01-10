<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<title>Contact Me Form v2</title> 

		<script type="text/javascript" src="contact_files/js/jquery-1.4.2.min.js"></script>
		<script type="text/javascript" src="contact_files/js/jquery.validate.min.js"></script>
	    <script type="text/javascript">
		$(document).ready(function(){
			$('#contactme').validate({
				debug: false,
				rules: {
					 
					fname: { required: true, minlength:2 },
					 	
					email: { required: true, email: true },
					 
					phone: { required:true, number:true, rangelength:[4,15] },
					 
					message: { required: true, minlength:2, },				
								},
				messages: {<? $msj='""'; /*you can insert here a customized error message*/ ?>				
	                
	                fname: <? echo $msj; ?>,
					 
					email: <? echo $msj; ?>,
					 
					phone: <? echo $msj; ?>,
					 
					message: <? echo $msj; ?>,				
	                				
				},
				submitHandler: function(form) {
					// do other stuff for a valid form
					 
					$.post('process.php', $('#contactme').serialize(), function(data) {
						$('#results').html(data);
					});
				}
			});
		});
		</script>
	<style type="text/css">
	.contactformbutton input[type="submit"] {
		background:url(contact_files/img/submit.png) no-repeat;
		border:1px;
		border-color:#0C0;
		text-indent:25px;
		padding: 10px 8px;
		cursor: pointer;
	}
	.contactformbutton input[type="reset"] {
		background:url(contact_files/img/cancel.png) no-repeat;
		border:1px;
		border-color:#0C0;
		text-indent:25px;
		padding: 10px 8px;
		cursor: pointer;
	}
	.contactformbutton input, .contactformbutton textarea, .contactformbutton select { border: 1px solid #9C3; }
	.contactformbutton input[type="radio"] { border: none; }
	.contactformbutton input:focus, .contactformbutton textarea:focus { border: 1px dashed #9C3; }
	.contactformbutton input.error, .contactformbutton textarea.error { border: 1px dashed #F93; }
	form.contactme label {
		display: inline-block;
		width:120px;
		line-height: 1.8;
		vertical-align: top;
		cursor: hand;
		color: #666;
	}
	</style>
</head>
<body>
	<div class="contactformbutton">
	<fieldset style="width:400px;">
		<legend>Contact Me Form</legend>
	<form name="contactme" class="contactme" id="contactme" action="" method="post">
	<p>
	 
	<br />
		<label for="fname" id="fname_label">First Name *</label><input type="text" name="fname" id="fname" size="30" maxlength="100" value="" />
	 
	<br />
	    <label for="email" id="email_label">Email *</label><input type="text" name="email" id="email" size="30" maxlength="100" value="" /> 
	 
	<br />
	    <label for="phone" id="phone_label">Phone *</label><input type="text" name="phone" id="phone" size="20" maxlength="30" value="" /> 
	 
	<br />
	    <label for="message" id="message_label">Message *</label><textarea style="width:200px; height:120px;" rows="10" cols="10" name="message" id="message"></textarea>
	<br />    
		<input type="reset" name="reset" value="Reset" />
		<input type="submit" name="submit" value="Submit" />
	    <span style="position:relative; left:150px; top:5px;"><a href="http://www.scriptgenerator.net/78/HTML-PHP-jQuery-ContactForm-v2/" title="" style="border:0px;"><img style="border:0px" border="0" src="http://www.scriptgenerator.net/generator/contactme_v2/contact_files/img/ok.png" width="16" height="16" alt="Valid Contact Form" /></a></span>
	</p>
	</form>
	<!-- We will output the results from process.php here -->
	<div id="results"></div>
	</fieldset>
	</div>
</body>
</html>