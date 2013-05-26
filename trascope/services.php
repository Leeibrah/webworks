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
  <link rel="stylesheet" type="text/css" href="css/demo.css" />
  <link rel="stylesheet" type="text/css" href="css/carastyle.css" />
  <link rel="stylesheet" type="text/css" href="css/jquery.jscrollpane.css" media="all" />
  <link rel="stylesheet" href="css/style.css">
  <!-- end CSS-->

  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

  <!-- All JavaScript at the bottom, except for Modernizr / Respond.
       Modernizr enables HTML5 elements & feature detects; Respond is a polyfill for min/max-width CSS3 Media Queries
       For optimal performance, use a custom Modernizr build: www.modernizr.com/download/ -->
  <script src="js/libs/modernizr-2.0.6.min.js"></script>
</head>

<body>
<div class="social_media_box">
	<a href="http://facebook.com/trascope" onclick="add_to_faves('facebook')"><div class="sprites" id="facebook_png"></div></a>
  <a href="http://twitter.com/trascope" onclick="add_to_faves('twitter')"><div class="sprites" id="twitter_png"></div></a>
</div>
  <div id="container">
    <header>
		<div id="logo">
			<a href="index.php"><img src="img/logo.png" /></a>
		</div>
		<div class="menu">
		<a href="index.php" /><div id="home"></div></a>
			<ul>
            	<li><a href="about.php">About Us</a></li>
				<li><a href="products.php">Products</a></li>
				<li class="active"><a href="services.php">Services</a></li>
				<li><a href="http://trascope.wordpress.com">Blog</a></li>
				
			  <li><a href="contact.php">Contacts</a></li>
			</ul>
			</div>
    </header>
    <div id="main" role="main">
		<span id="hs">Trascope works hard, to bring you quality services you find only with us 
Come one, COME ALL!!</span>
        <div id="ca-container" class="ca-container">
				<div class="ca-wrapper">
					<div class="ca-item ca-item-1">
						<div class="ca-item-main">
							<div class="ca-icon"></div>
							<h3>Product Development</h3>
							<h4>
								<span>Providing simple yet profound software development services.</span>
							</h4>
								<a href="#" class="ca-more">more...</a>
						</div>
						<div class="ca-content-wrapper">
							<div class="ca-content">
								<h6>Product Development</h6>
								<a href="#" class="ca-close">close</a>
								<div class="ca-content-text">
									<p>Since we started our services we have been providing simple yet profound software development services that span  from mobile application development to web services. We excel in mobile development arena.We will also be happy to work with you to develop your complete application.</p>
								</div>
								<ul>
									<li><a href="contact.php">Would you like a quote?</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="ca-item ca-item-2">
						<div class="ca-item-main">
							<div class="ca-icon"></div>
							<h3>Customer Service</h3>
							<h4>
								<span>Our customers can submit their request and complains .</span>
							</h4>
								<a href="contact.php" class="ca-more">more...</a>
						</div>
						<div class="ca-content-wrapper">
							<div class="ca-content">
								<h6>Customer Service</h6>
								<a href="#" class="ca-close">close</a>
								<div class="ca-content-text">
									<p>What we offer is excellence customer service as customers have a wide range of networks to reach us: We provide multiple channels of contact in which our customers can submit their request and complains through the mobile phone, email and our dedicated web portal as indicated in the <a href="contact.php">contact page.</a></p>
								</div>
								<ul>
									<li><a href="contact.php">Would you like a quote?</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="ca-item ca-item-3">
					<div class="ca-item-main">
							<div class="ca-icon"></div>
							<h3>Full Support</h3>
							<h4>
								<span>We provide full spectrum support.</span>
							</h4>
								<a href="#" class="ca-more">more...</a>
						</div>
						<div class="ca-content-wrapper">
							<div class="ca-content">
								<h6>Full Support</h6>
								<a href="#" class="ca-close">close</a>
								<div class="ca-content-text">
									<p>We provide full spectrum support to our clients by delivering support service to our customers with the following commitments: 
<b>Best practices</b>: and guidelines ensuring quality in service delivery
<b>Openness</b>: we provide our customers with ongoing visibility of the feedback we receive through customer satisfaction survey 
<b>Integrity</b>: Consistency of actions, honesty, ethical values, principles, expectations and outcomes.
<b>Innovation</b>: Creation of effective and unique products, processes, technologies and ideas that add value to the users and create an impact of positive change.
<b>Excellence</b>: Consistently upgrading oneself to achieve excellence.</p>
								</div>
								<ul>
									<li><a href="contact.php">Would you like a quote?</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="ca-item ca-item-4">
						<div class="ca-item-main">
							<div class="ca-icon"></div>
							<h3>Tech Consultancy</h3>
							<h4>
								<span class="ca-quote">&ldquo;</span>
								<span>Trascope provides you with answers regarding Unstructured Supplementary Service Data (USSD).</span>
							</h4>
								<a href="#" class="ca-more">more...</a>
						</div>
						<div class="ca-content-wrapper">
							<div class="ca-content">
								<h6>Tech Consultancy</h6>
								<a href="#" class="ca-close">close</a>
								<div class="ca-content-text">
									<p>Trascope provides you with answers regarding Unstructured Supplementary Service Data (USSD), a unique technology to GSM. The modern mobile world is changing, as the rate of mobile subscribers continue to increase, there is need to build applications that can reach mass target users with cheap and low-end phones in the market. Trascope has the detailed know-how, understanding, resources and in-depth expertise to build simple apps that are in-line with your goals and business challenges
 using USSD technology. Trascope also offers professional and reliable Tech consultancy..</p>
								</div>
								<ul>
									<li><a href="contact.php">Would you like a quote?</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="ca-item ca-item-5">
						<div class="ca-item-main">
							<div class="ca-icon"></div>
							<h3>Maintenance</h3>
							<h4>
								<span>We ensure continuous quality performance of your systems.</span>
							</h4>
								<a href="#" class="ca-more">more...</a>
						</div>
						<div class="ca-content-wrapper">
							<div class="ca-content">
								<h6>Maintenance</h6>
								<a href="#" class="ca-close">close</a>
								<div class="ca-content-text">
									<p>We ensure continuous quality performance of your systems by identifying the defects and preventing them from happening through effective measures and controls in place.</p>
								</div>
								<ul>
									<li><a href="contact.php">Would you like a quote?</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="push"></div>
	  </div> <!--! end of #container -->
    <footer>
		Copyright. All rights reserved. Trascope.
    </footer>
  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.2.min.js"><\/script>')</script>


  <!-- scripts concatenated and minified via ant build script-->
  <script defer src="js/plugins.js"></script>
  <script defer src="js/script.js"></script>
  <!-- end scripts-->

  <!-- Take care of the fonts -->
  <script src="js/cufon.yui.js"></script>
  <script src="css/fonts/Helv_HelvBold_400-Helv_HelvBold_700.font.js"></script>
  <script type="text/javascript">
	Cufon.replace('#hs', {fontFamily: 'HelvLight'});
	Cufon.replace('.menu,#c_head ,footer', {fontFamily: 'HelvBold'});
  </script>
	
  <!-- The other scripts -->
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
		<script type="text/javascript" src="js/jquery.contentcarousel.js"></script>
		<script type="text/javascript">
			$('#ca-container').contentcarousel();
		</script>
	
	<script type="text/javascript">
function add_to_faves(wheretosend){
    var url=this.location;
    var title=document.title;
    var addthis_username = "whatever";
    if(wheretosend=="more"){
        var the_url="http://api.addthis.com/oexchange/0.8/forward/offer?username=" + addthis_username + "&title="+title+"&url="+url;
    } else {
        var the_url="http://api.addthis.com/oexchange/0.8/forward/"+wheretosend+"/offer?username=" + addthis_username + &title="+title+"&url="+url;
    }
    window.open(the_url,'mywin','left=20,top=20,width=600,height=600,toolbar=0,resizable=1,scrollbars=0,status=0,location=0');
}
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
