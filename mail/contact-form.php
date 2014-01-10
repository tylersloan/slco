<?php
$subjectPrefix = '[Contact form submission]';
$emailTo = 'tyler.g.sloan@gmail.com';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name    = stripslashes(trim($_POST['form-name']));
    $email   = stripslashes(trim($_POST['form-email']));
    $subject = stripslashes(trim($_POST['form-subject']));
    $message = stripslashes(trim($_POST['form-message']));

    $emailIsValid = preg_match('/^[^0-9][A-z0-9._%+-]+([.][A-z0-9_]+)*[@][A-z0-9_]+([.][A-z0-9_]+)*[.][A-z]{2,4}$/', $email);

    if($name && $email && $emailIsValid && $subject && $message){
        $subject = "$subjectPrefix $subject";
        $body = "Name: $name <br /> Email: $email <br /> Message: $message";

        $headers  = 'MIME-Version: 1.1' . PHP_EOL;
        $headers .= 'Content-type: text/html; charset=utf-8' . PHP_EOL;
        $headers .= "From: $name <$email>" . PHP_EOL;
        $headers .= "Return-Path: $emailTo" . PHP_EOL;
        $headers .= "Reply-To: $email" . PHP_EOL;

        mail($emailTo, $subject, $body, $headers);
        $emailSent = true;
    } else {
        $hasError = true;
    }
}
?><!DOCTYPE html>
<html>
<head>
    <title>Simple PHP Contact Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>
    <div class="jumbotron">
        <h1>Simple PHP Contact Form</h1>
        <p>A Simple Contact Form developed in PHP with VanillaJS Form validation.</p>
    </div>
    <?php if(isset($emailSent) && $emailSent): ?>
        <div class="col-md-6 col-md-offset-3">
            <div class="alert alert-success text-center">Your message was sent successfully.</div>
        </div>
    <?php else: ?>
        <?php if(isset($hasError) && $hasError): ?>
        <div class="col-md-5 col-md-offset-4">
            <div class="alert alert-danger text-center">There was an error in sending, please try again later.</div>
        </div>
        <?php endif; ?>

    <div class="col-md-6 col-md-offset-3">
        <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" id="contact-form" class="form-horizontal" role="form" method="post">
            <div class="form-group">
                <label for="name" class="col-lg-2 control-label">Name</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control required" id="form-name" name="form-name" placeholder="Name" />
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-lg-2 control-label">Email</label>
                <div class="col-lg-10">
                    <input type="email" class="form-control required" id="form-email" name="form-email" placeholder="Email" />
                </div>
            </div>
            <div class="form-group">
                <label for="assunto" class="col-lg-2 control-label">Subject</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control required" id="form-subject" name="form-subject" placeholder="Subject" />
                </div>
            </div>
            <div class="form-group">
                <label for="mensagem" class="col-lg-2 control-label">message</label>
                <div class="col-lg-10">
                    <textarea class="form-control required" rows="3" id="form-message" name="form-message" placeholder="Message" /></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-offset-2 col-lg-10">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </div>
        </form>
    </div>
    <?php endif; ?>

    <script type="text/javascript" src="assets/js/contact-form.js"></script>
</body>
</html>