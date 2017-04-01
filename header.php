<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui">
        <title>Stucomp | Online Assignment</title>
        <link href="./images/fovicon.png" type="image/x-icon" rel="shortcut icon">
        <link href="assets/css/master.css" rel="stylesheet">
        <script src="assets/plugins/jquery/jquery-1.11.3.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="css/easy-responsive-tabs.css" />
    </head>
    <body>
        <div id="page-preloader"><span class="spinner"></span></div>
        <style>
            * {margin:0;padding:0}
            html {
                background: lightgray;
            }
            .header {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                padding: 0;
                z-index: 10000;
                transition: all 0.2s ease-in-out;
                height: auto;
                background-color:transparent; 
                text-align: center;
                line-height: 40px;
            }
            .header.active {
                background: #02cc8b;
                -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.25);
                -moz-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.25);
                box-shadow: 0 1px 5px rgba(0, 0, 0, 0.25);
            }
        </style>
        <div class="layout-theme animated-css"  data-header="sticky" data-header-top="200"> 
            <header class="header">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="header-inner">
                                <nav class="navbar yamm">
                                    <div class="navbar-header hidden-md  hidden-lg  hidden-sm pull-right"style="margin-top: 10px">
                                        <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                                    </div>
                                    <?php

                                    function detectDevice() {
                                        $userAgent = $_SERVER["HTTP_USER_AGENT"];
                                        $devicesTypes = array(
                                            "computer" => array("msie 10", "msie 9", "msie 8", "windows.*firefox", "windows.*chrome", "x11.*chrome", "x11.*firefox", "macintosh.*chrome", "macintosh.*firefox", "opera", "Safari"),
                                            "tablet" => array("tablet", "android", "ipad", "tablet.*firefox"),
                                            "mobile" => array("mobile ", "android.*mobile", "iphone", "ipod", "opera mobi", "opera mini"),
                                            "bot" => array("googlebot", "mediapartners-google", "adsbot-google", "duckduckbot", "msnbot", "bingbot", "ask", "facebook", "yahoo", "addthis")
                                        );
                                        foreach ($devicesTypes as $deviceType => $devices) {
                                            foreach ($devices as $device) {
                                                if (preg_match("/" . $device . "/i", $userAgent)) {
                                                    $deviceName = $deviceType;
                                                }
                                            }
                                        }
                                        return ucfirst($deviceName);
                                    }

                                    if (detectDevice() == 'Computer') {
                                        ?>
                                    <div class="pull-left" style="margin-right: 232px; margin-top: -40px;"> <img src="images/Studycomp.jpg" height="50px;"></div>
                                        <div id="navbar-collapse-1" class="navbar-collapse collapse pull-left">
                                            <ul class="nav navbar-nav"style="margin-top: -22px">
                                                <li><a href="index.php" style="color: white"><i class="fa fa-home"></i> Home</a></li>
                                                <li><a href="about.php" style="color: white"><i class="fa fa-info-circle"></i> About Us</a></li>
                                                <li><a href="courses.php" style="color: white"><i class="fa fa-book"></i> Subjects</a></li>
                                                <li><a href="contact.php" style="color: white"><i class="fa fa-map-marker"></i> Contact</a></li>
                                                <li><a href="callto:+1-877-778-8130" style="color: white;"><i class="fa fa-phone"></i> +1-877-778-8130</a></li>
                                                <li><a href="mailto:cs@stucomp.com?Subject=Say%20Hello" style="color: white;"><i class="fa fa-envelope"></i> cs@stucomp.com</a></li>
                                            </ul>
<!--                                            <script>
                                                </script>-->
                                        </div> 
                                    <?php } else { ?>
                                    <div style="margin-right: 232px"> <img src="images/Studycomp.jpg" height="40px;"></div>
                                        <div id="navbar-collapse-1" class="navbar-collapse collapse"style=" background-color: rgba(0, 1, 24,0.48)">
                                            <ul class="nav navbar-nav">
                                                <li><a href="index.php" style="color: white"><i class="fa fa-home"></i> Home</a></li>
                                                <li><a href="about.php" style="color: white"><i class="fa fa-info-circle"></i> About Us</a></li>
                                                <li><a href="courses.php" style="color: white"><i class="fa fa-book"></i> Subjects</a></li>
                                                <li><a href="contact.php" style="color: white"><i class="fa fa-map-marker"></i> Contact</a></li>
                                                <li><a href="tel:+1-877-778-8130" style="color: white;"><i class="fa fa-phone"></i> +1-877-778-8130</a></li>
                                                <li><a href="mailto:cs@stucomp.com?Subject=Say%20Hello" style="color: white;"><i class="fa fa-envelope"></i>cs@stucomp.com</a></li>
                                            </ul>
                                        </div>
                                    <?php } ?>    
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        <script>
            $(window).on("scroll", function () {
                if ($(window).scrollTop() > 50) {
                    $(".header").addClass("active");
                } else {
                    $(".header").removeClass("active");
                }
            });
        </script>