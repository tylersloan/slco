<?php
$str = $title;
$str = strtolower($str);
?>

<!DOCTYPE HTML>
<html>
<head>
  <title>Carolina Oaks | <?php echo $title; ?></title>
  <!-- <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"> -->
  <meta name="viewport" content="width=device-width, user-scalable=no">
  <link rel="stylesheet" type="text/css" href="<?php echo "http://" . $_SERVER['HTTP_HOST']; ?>/css/build/style.css">
  <link rel="stylesheet" type="text/css" href="<?php echo "http://" . $_SERVER['HTTP_HOST']; ?>/css/build/home.css">
  <link rel="stylesheet" type="text/css" href="<?php echo "http://" . $_SERVER['HTTP_HOST']; ?>/css/build/pages.css">
  <link rel="stylesheet" type="text/css" href="<?php echo "http://" . $_SERVER['HTTP_HOST']; ?>/js/plugins/jq.chosen/chosen.css">
  <link href="<?php echo "http://" . $_SERVER['HTTP_HOST']; ?>/contact-form/css/form.css" rel="stylesheet">
  <!--[if lt IE 10]>
    <link rel="stylesheet" type="text/css" href="css/build/ie9-and-down.css" />
  <![endif]-->
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700,500|Roboto+Condensed:400,300' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="<?php echo "http://" . $_SERVER['HTTP_HOST']; ?>/font/icon-font.css">
</head>
<body class="<?php echo $str; ?>">
  
  <header>
    <div class="header">
      <a href="../" class="logo">Carolina Oaks</a>
      <span class="mobile-menu-icon icon-menu2"></span>
      <nav>
        <ul>
          <li><a href="<?php echo "http://" . $_SERVER['HTTP_HOST']; ?>/care">Care</a></li>
          <li><a href="<?php echo "http://" . $_SERVER['HTTP_HOST']; ?>/doctors">Doctors</a></li>
          <li><a href="<?php echo "http://" . $_SERVER['HTTP_HOST']; ?>/locations">Locations</a></li>
          <li class="contact-link"><a class="contact-link" href="#contact">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>