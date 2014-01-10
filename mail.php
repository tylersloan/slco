<html>
<head>
  <title>Carolina Oaks | Locations</title>
  <meta name="viewport" content="width=device-width, user-scalable=no">
  <link rel="stylesheet" type="text/css" href="../css/build/style.css">
  <link rel="stylesheet" type="text/css" href="../css/build/care.css">
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700,500|Roboto+Condensed:400,300' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="../css/icon-font.css">
  <script src="../js/build/production.min.js"></script>
  <script type="text/javascript" src="//use.typekit.net/gfr3hyo.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
</head>
<body class="locations">

  <?php
  $to = "tyler.g.sloan@gmail.com";
  $subject = "Test mail";
  $message = "Hello! This is a simple email message.";
  $from = "someonelse@example.com";
  $headers = "From:" . $from;
  mail($to,$subject,$message,$headers);
  echo "Mail Sent.";
  ?>

<?php
if (isset($_REQUEST['email']))
//if "email" is filled out, send email
  {
  //send email
  $email = $_REQUEST['email'] ;
  $subject = $_REQUEST['subject'] ;
  $message = $_REQUEST['message'] ;
  mail("someone@example.com", $subject,
  $message, "From:" . $email);
  echo "Thank you for using our mail form";
  }
else
//if "email" is not filled out, display the form
  {
  echo "<form method='post' action='mailform.php'>
  Email: <input name='email' type='text'><br>
  Subject: <input name='subject' type='text'><br>
  Message:<br>
  <textarea name='message' rows='15' cols='40'>
  </textarea><br>
  <input type='submit'>
  </form>";
  }
?>

</body>
</html>