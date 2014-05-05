<?php
  $title = strtolower($page_title);
  function create_slug($title){
    $title_slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $title);
    return $title_slug;
  }
  $title = create_slug($title);
?>

<!DOCTYPE HTML>
<html>
<head>
  <title>Carolina Oaks | <?php echo $page_title; ?></title>

  <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

  <link rel="stylesheet" type="text/css" href="<?php echo "http://" . $_SERVER['HTTP_HOST']; ?>/css/build/style.css">
  <link rel="stylesheet" type="text/css" href="<?php echo "http://" . $_SERVER['HTTP_HOST']; ?>/css/build/home.css">
  <link rel="stylesheet" type="text/css" href="<?php echo "http://" . $_SERVER['HTTP_HOST']; ?>/css/build/pages.css">
  <link rel="stylesheet" type="text/css" href="<?php echo "http://" . $_SERVER['HTTP_HOST']; ?>/js/plugins/jq.chosen/chosen.css">
  <link rel="stylesheet" type="text/css" href="<?php echo "http://" . $_SERVER['HTTP_HOST']; ?>/contact-form/css/form.css">
  <link rel="stylesheet" type="text/css" href="<?php echo "http://" . $_SERVER['HTTP_HOST']; ?>/icon-font/co-font.css">
  
  <!--[if lt IE 10]>
    <link rel="stylesheet" type="text/css" href="css/build/ie9-and-down.css" />
  <![endif]-->

  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700,500|Roboto+Condensed:400,300' rel='stylesheet' type='text/css'>
</head>
<body class="<?php echo $title; ?>">

  <!-- MODAL -->
  <div id="phone-popup" class="popup mfp-hide">
    <div class="top">
      <p>Phone Numbers by Location</p>
    </div>
    <div class="location-number">
      <section>
        <h5>Greenville</h5>
        <p>864-235-3949</p>
      </section>
      <section>
        <h5>West Greenville</h5>
        <p>864-246-1811</p>
      </section>
      <section>
        <h5>Clemson</h5>
        <p>864-654-6700</p>
      </section>
      <section>
        <h5>North Greenville</h5>
        <p>864-836-8416</p>
      </section>
      <section>
        <h5>Anderson</h5>
        <p>864-261-3132</p>
      </section>
    </div>
  </div>
  <!-- END MODAL -->
  
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
          <li class="icon">
            <a href="<?php echo "http://" . $_SERVER['HTTP_HOST']; ?>/location-phones" data-mfp-src="#phone-popup" class="launch-popup">
              <span class="icon-phone"></span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </header>