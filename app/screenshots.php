<?php
/**
* Gallery for screenshots
*
* @category Screenshots
* @package  Probe
* @author   Édouard Lopez <dev+probe@edouard-lopez.com>
* @license  http://creativecommons.org/licenses/by-nc-sa/3.0/legalcode CC-by-nc-sa-3.0
* @link     http://probe.com/doc
 */
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Screenshots ‹ Probe</title>
        <meta name="description" content="screenshosts for data-visualization software for meteorological station Probe">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style/bootstrap-responsive.css" rel="stylesheet">
            <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" href="styles/main.css">
        <link rel="stylesheet" href="bootstrap-image-gallery/css/bootstrap-image-gallery.min.css">
    </head>
    <body id="gallery">
      <div class="container">
        <div class="hero-unit">
            <ul class="thumbnails row">
            <?php
                require_once './gallery.php';
                define('SCREENSHOTS_DIR', 'images/assets/screenshosts');
                gallery(SCREENSHOTS_DIR);
            ?>
            </ul>
        </div>
    </div>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-39489032-3', 'probe-meteo.com');
          ga('send', 'pageview');
        </script>

        <!-- build:js scripts/main.js -->
        <script src="components/jquery/jquery.js"></script>
        <script src="scripts/main.js"></script>
        <!-- endbuild -->

         <!-- build:js scripts/plugins.js -->
<!--         <script src="components/sass-bootstrap/js/bootstrap-carousel.js"></script>-->
        <!-- endbuild -->

<!--        <script type="text/javascript">-->
<!--        /* <![CDATA[ */-->
<!--            (function() {-->
<!--                var s = document.createElement('script'), t = document.getElementsByTagName('script')[0];-->
<!--                s.type = 'text/javascript';-->
<!--                s.async = true;-->
<!--                s.src = 'http://api.flattr.com/js/0.6/load.js?mode=auto';-->
<!--                t.parentNode.insertBefore(s, t);-->
<!--            })();-->
<!--        /* ]]> */</script>-->
<!--</body>-->
</html>
