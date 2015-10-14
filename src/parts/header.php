<!doctype html>
<html class="no-js">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title></title>
        <link href="//www.google-analytics.com" rel="dns-prefetch">
        <link rel="icon" href="/assets/images/icons/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/icons/apple-touch-icon-144x144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/icons/apple-touch-icon-114x114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/icons/apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/images/icons/apple-touch-icon-precomposed.png">
        <?php get_fonts(); ?>
        <link rel="stylesheet" type="text/css" href="assets/stylesheets/foundation.css">
        <script src="assets/javascript/vendor/modernizr.js"></script>
        <script src="assets/javascript/vendor/fastclick.js"></script>
        <script src="assets/javascript/vendor/jquery.js"></script>
    </head>
    <body>
         <div class="off-canvas-wrap" data-offcanvas>
            <div class="inner-wrap">
                <?php get_off_canvas_menu(); ?>
                <?php get_menu(); ?>
