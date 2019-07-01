<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Simple PHP App</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="public/assets/css/bootstrap.min.css" rel="stylesheet">
        <style>body {margin-top: 40px; background-color: #ccc;}</style>
        <link href="public/assets/css/bootstrap-responsive.min.css" rel="stylesheet">
        <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    </head>
    <style>
      body {
        font-family: 'Roboto Condensed', sans-serif;
        font-size: 48px;
      }
    </style>
    <body>
                <div class="container">
            <div class="hero-unit">
                <h1><img src="https://s3.amazonaws.com/cdn.freshdesk.com/data/helpdesk/attachments/production/6000441619/logo/k68pEIS95R2nxQjoEu3NlXZmeizE70Y10Q.png"> Sample PHP App</h1>
                <hr>
                <h2>Congratulations!</h2>
                <p>Your PHP application is now running on the host &ldquo;<?php echo gethostname(); ?>&rdquo; in your own dedicated environment in the AWS&nbsp;Cloud.</p>
                <p>This host is running PHP version <?php echo phpversion(); ?>.</p>
<?php
    session_start();
    if(!isset($_SESSION['visit']))
    {
        echo "This is the first time you're visiting this server</br>";
        $_SESSION['visit'] = 0;
    }
    else
            echo "Your number of visits: ".$_SESSION['visit'] . "</br>";

    $_SESSION['visit']++;

    echo "Server IP: ".$_SERVER['SERVER_ADDR'] . "</br>";
    echo "Client IP: ".$_SERVER['HTTP_X_FORWARDED_FOR'] . "</br>";
    echo "Cookies: </br>";
    print_r($_COOKIE);
?>
<hr>
<p>Hier gehts zum <a href="https://root360.atlassian.net/wiki/spaces/KBDE/pages/66153456/Schnelleinstieg" target="_blank">root360 Quickstart</a></p>
<p>See <a href="https://root360.atlassian.net/wiki/spaces/KB/pages/66154327/Quickstart" target="_blank">root360 Quickstart</a></p>
<hr>
<script type="text/javascript" src="http://assets.freshdesk.com/widget/freshwidget.js"></script>
<style type="text/css" media="screen, projection">
	@import url(http://assets.freshdesk.com/widget/freshwidget.css);
</style>
<iframe title="Feedback Form" class="freshwidget-embedded-form" id="freshwidget-embedded-form" src="https://root360.freshdesk.com/widgets/feedback_widget/new?&widgetType=embedded&screenshot=no&searchArea=no" scrolling="no" height="900px" width="100%" frameborder="0" >
</iframe>

</div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src=public/assets/js/bootstrap.min.js"></script>
    </body>

</html>