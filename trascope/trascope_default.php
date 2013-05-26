<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/b/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Trascope</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

  <!-- CSS: implied media=all -->
  <!-- CSS concatenated and minified via ant build script-->
  <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="css/style.css" />
  <!-- end CSS-->

  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

  <!-- All JavaScript at the bottom, except for Modernizr / Respond.
       Modernizr enables HTML5 elements & feature detects; Respond is a polyfill for min/max-width CSS3 Media Queries
       For optimal performance, use a custom Modernizr build: www.modernizr.com/download/ -->
  <script src="js/libs/modernizr-2.0.6.min.js"></script>
  
</head>

<body>
<div class="social_media_box">
    <a href="http://facebook.com/myorder.ke" onclick="add_to_faves('facebook')"><div class="sprites" id="facebook_png"></div></a>
    <a href="http://twitter.com/myorder_africa" onclick="add_to_faves('twitter')"><div class="sprites" id="twitter_png"></div></a>
</div>
  <div id="container">
    <header>
		<div id="logo">
			<a href="index.php"><img src="img/logo.png" alt="trascope_logo" /></a>
		</div>
		<div class="menu">
		<a href="index.php" ><div id="home"></div></a>
			<ul>
            	<li><a href="about.php">About Us</a></li>
				<li><a href="products.php">Products</a></li>
				<li><a href="services.php">Services</a></li>
				<li><a href="http://trascope.wordpress.com">Blog</a></li>				
				<li><a href="contact.php">Contacts</a></li>
			</ul>
			</div>
    </header>
    <div id="main" role="main">
            <div class="slider-wrapper theme-default">
            <div class="phone_number">Call us at +254710742134</div>
            <div id="slider" class="nivoSlider">
			<a href="http://trascope.com"><img src="img/slider/slider_1.jpg" alt="" ></a>
				<img src="img/slider/slider_2.jpg" alt="" >
                <a href="http://trascope.com"><img src="img/slider/slide3.png" alt=""></a>
                <img src="img/slider/slider_3.jpg" alt="" data-transition="slideInLeft" >
                <img src="img/slider/slider_4.png" alt="">
				<img src="img/slider/slider_5.jpg" >
            </div>
           <!-- <div id="htmlcaption" class="nivo-html-caption">
                <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>.
            </div>-->
        </div>
		
	<div class="bottom_section">
		<div class="column1">
		<span>Our Clients</span>
			<div class="box">
				<ul id="logos">
					<li><a href="http://www.mamamikes.com"><div id="logo1"></div></a></li>
					<li><a href="http://www.momoviez.net"><div id="logo2"></div></a></li>
					<li><a href="http://www.petescoffee.com"><div id="logo3"></div></a></li>
					<li><a href="http://mmaji.wordpress.com"><div id="logo4"></div></a></li>
				</ul>
				</div>
			</div>
			
		<div class="column2" style="margin-left:10px;">
			<span>About Us</span>
			<div class="box">
			<p>
			Trascope is a visionary firm that leverages on technologies such as, <b>USSD</b>-the focal technology, <b>Mobile Web</b>, and <b>SMS</b> to provide order management, distribution, tracking, circulation and validation solutions. Trascope also offers reliable customer service, support and maintenance to its clients.
			</p>
				</div>
			</div>
			
			<div class="column3" style="float:right;">
			<span>Partnership</span>
			<div class="box">
			<p>To provide more value to our clients we actively seek strategic alliances. Who can partner with us:
			<br/>-<em>Distribution & delivery companies</em>
			<br/>-<em>PRSP service providers</em>
			<br/>-<em>Other software & Integration companies</em>
			<br/>-<em>Mobile payment providers</em></p>
				</div>
			</div>
			<br /><br /><br />
			<span id="coverage_span">Visit our coverage page <a href="coverage.php">here...</a></span>
			
		</div>
	
		</div>
		<div class="push"></div>
	  </div> <!--! end of #container -->
    <footer>
		Copyright. All rights reserved. Trascope.
    </footer>
  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.2.min.js"><\/script>')</script>
  <script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
  
  <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider({
		effect:'random',
		animSpeed:500,
		pauseTime:9000,
		});
    });
    </script>
	
	<link rel="stylesheet" href="css/mediaboxAdv-Dark.css" type="text/css" media="screen" />
	<script src="js/mootools-core-1.4.2.js" type="text/javascript"></script>
	<script src="js/mediaboxAdv.js" type="text/javascript"></script>
	
  <!-- scripts concatenated and minified via ant build script-->
  <script defer src="js/plugins.js"></script>
  <script defer src="js/script.js"></script>
  <!-- end scripts-->

  <!-- Take care of the fonts -->
  <script src="js/cufon.yui.js"></script>
  <script src="css/fonts/Helv_HelvBold_400-Helv_HelvBold_700.font.js"></script>
  <script type="text/javascript">
	Cufon.replace('', {fontFamily: 'HelvLight'});
	Cufon.replace('.menu,span,.phone_number,footer', {fontFamily: 'HelvBold'});
  </script>
  <!-- Change UA-XXXXX-X to be your site's ID -->
  <script>
    window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
    Modernizr.load({
      load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
    });
  </script>


  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
  
</body>
</html>
