<?php
    ob_start( 'ob_gzhandler' );
    $title = "RW Hot Shot Service, LLC";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title><?php echo($title); ?> | Professional Delivery Service</title>
    <meta name="robots" content="index, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=yes" />
    <meta name="theme-color" content="#B72F23" />
    <meta name="description" content="Professional Delivery Service |  Competitive rates | Local pickup within 1 hour | Operating 24/7/365 | Insured | Experienced Drivers" />
    <meta name="author" content="Jason L Campbell" />
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="<?php echo($title); ?>"/>
    <meta property="og:site_name" content="<?php echo($title); ?>"/>
    <meta property="og:description" content="Professional Delivery Service |  Competitive rates | Local pickup within 1 hour | Operating 24/7/365 | Insured | Experienced Drivers"/>
    <meta property="og:url" content="http://rw-hotshot.com/"/>
    <meta property="og:image" content="http://rw-hotshot.com/images/rw-hotshot_socialmedia.jpg">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@RWHotShot">
    <meta name="twitter:creator" content="@RWHotShot">
    <meta name="twitter:title" content="<?php echo($title); ?>">
    <meta name="twitter:description" content="Professional Delivery Service |  Competitive rates | Local pickup within 1 hour | Operating 24/7/365 | Insured | Experienced Drivers">
    <meta name="twitter:image:src" content="http://rw-hotshot.com/images/rw-hotshot_socialmedia.jpg">
    <meta name="twitter:image:width" content="252">
    <meta name="twitter:image:height" content="47">
    <link rel=”publisher” href=”https://www.google.com/+Rwhotshotrw-hotshot”>
    <link rel="canonical" href="http://rw-hotshot.com/"/>
    <link rel="shortcut icon" type="image/x-icon" href="images/rw-favicon.png" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" crossorigin="anonymous" rel="stylesheet" />
    <link href="common/CSS/global.min.php"  type="text/css" rel="stylesheet" />
    <script async src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script async src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script async src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body class="home">
<nav>
    <div id="logo-wrap">
        <div class="container">
            <div class="row">
                <div>
                    <a href="/" id="logo">
                        <img src="images/rw-hotshot.png" alt="<?php echo($title); ?>" />
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
<script>
    $(function () {
        var ww = $(window).width();
        if(ww > 767) {
            $("header").append($('<img src="images/highway-through-the-forest.jpg" alt="<?php echo($title); ?>" id="banner-background" class="fadein">').on('transitionend', function() {
                if (this.style.opacity == 1) {
                    //console.log('the highway through the forest image has loaded and transitioned');
                    var image = document.getElementById('banner-background');
                    //image.onload = function () {
                        //var engine = new RainyDay({
                            //image: this,
                            //blur: 0,
                            //opacity: .5
                        //});
                        //engine.trail = engine.TRAIL_SMUDGE;
                        //engine.rain([[2, 0, 4], [5, 4, .2]], 100);
                        //$(engine.canvas).wrap(function () {
                            //return "<div>" + $(this).text() + "</div>";
                        //});
                    //};
                    //image.crossOrigin = 'anonymous';
                    image.src = 'images/highway-through-the-forest.jpg';
                }
            }));
        }
        $('.fadein').each(function(index, image) {
            if (image.complete) {
                image.style.opacity = 1;
            } else {
                image.addEventListener('load', function() {
                    this.style.opacity = 1;
                });
            }
        });
    });
</script>
<header>
    <div class="banner-txt">
        <img src="images/makingItPossible.png" alt="Making the Impossible POSSIBLE" class="fadein user-experience" />
    </div>
</header>
<section class="black-banner">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-10 col-md-offset-1" style="font-family: MarkoOneRegular">
                <h2 style="text-decoration: underline; padding-bottom: 8px;"><?php echo($title); ?></h2>
                <p>We are prepared to take care of your delivery needs around the clock.</p>
                <p>Our highest priority is building a solid working-relationship with each client</p>
                &#187; Operating 24/7/365<br />
                &#187; Competitive rates<br />
                &#187; Deliveries with the U.S.<br />
                &#187; Loads up to 5,000 pounds<br />
                &#187; Local pickup within 1 hour<br />
                &#187; Insured<br />
                &#187; Reliable &amp; Experienced Drivers<br />
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-3 center">
                                <a href="/"><img src="images/logo-football.png" alt="<?php echo($title); ?>" /></a>
                            </div>
                            <div class="col-md-3">
                                <h5 class="dbl-border border-bottom small-pad"><span>Business</span></h5>
                                Based in Spokane, WA<br />
                                Operating 24/7<br />
                                Competitive Rates<br />
                                Loads up to 5,000 lbs.<br />
                                Deliveries within the<br />U.S.<br />
                                Experienced Drivers
                            </div>
                            <div class="col-md-3">
                                <h5 class="dbl-border border-bottom small-pad"><span>Employees</span></h5>
                                Change 6A Universal<br />
								IACSSP Certfied<br />
								TSA certified-Change 5A<br />
                                Information available at <a href="https://www.veroot.com/search/facilities?query=rw+hot+shot" target="_blank">Veroot</a><br />
                                STA cards<br />
                                FAST cards<br />
                                <?php //SIDA badges<br />?>
                            </div>
                            <div class="col-md-3">
                                <h5 class="dbl-border border-bottom small-pad"><span>Contact</span></h5>
                                <a href="tel:5098632155" title="Click to call (mobile only)" class="phone-number">(509) 863-2155</a><br />
                                shawn@rw-hotshot.com<br />
                                Spokane, WA 99203<br />
                                DOT 2378155<br />
                                MC 946441<br />
                                Fax: <a href="tel:5097472169" title="(fax only)" class="phone-numbers fax">(509) 747-2169</a><br />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row center legal"><?php echo "&copy; ".date("Y")."&#44; ".$title; ?>. All rights reserved.</div>
    </div>
</footer>
</body>
</html>