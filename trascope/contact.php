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
			<a href="index.htm"><img src="img/logo.png" /></a>
		</div>
		<div class="menu">
		<a href="index.php" /><div id="home"></div></a>
			<ul>
	            <li><a href="about.php">About Us</a></li>
				<li><a href="products.php">Products</a></li>
				<li><a href="services.php">Services</a></li>
				<li><a href="http://trascope.wordpress.com">Blog</a></li>
				
				<li class="active"><a href="contact.php">Contacts</a></li>
			</ul>
			</div>
    </header>
    <div id="main" role="main">
			<span id="c_head">We always look forward to hearing from you at <span class="id">info@trascope.com</span>.</span>			
			 <div class="phone_number">Call us at +254714019079</div>
			 <div class="node-body">
                        <form action="contact.php" method="post" id="contactform">
                        
                        <p><label for="name">Your name*</label>
                        <input id="name" name="name" placeholder="Name" class="text" /></p>
                        
                        <p><label for="email">Your email*</label>
                        <input id="email" name="email" placeholder="name@email.com" class="text" /></p>
                        
                        <p><label for="subject">The Subject:</label>
                        <input id="subject" name="subject" placeholder="www.name.com" class="text" /></p>
                        
                        <p><label for="subject">Your message*</label>
                        <textarea id="message" placeholder="type in your message there" name="message"></textarea></p>
                        
                        <p><input type="submit" name="submit" id="submit" value="Send mail" class="send"/></p>
                        
                        </form>
                        
                        <div class="required-message">*Required fields</div>
							
						</div>
						<div id="map">
																<!--<img src="img/map.png" />-->
							</div>
	  </div> 
	  <div class="push"></div>
	  </div><!--! end of #container -->
    <footer id="footer">
		Copyright. All rights reserved. Trascope.
    </footer>
  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="js/libs/jquery-1.6.2.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.2.min.js"><\/script>')</script>


  <!-- scripts concatenated and minified via ant build script-->
  <script defer src="js/plugins.js"></script>
  <script defer src="js/script.js"></script>
  <!-- end scripts-->
  <script type="text/javascript">
	$(function() {
		$("#map").gMap();
			});
</script>
  
  <!-- Map -->
  <script type="text/javascript" src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAAfqhf116bThb-YfnaFfjhTxRfS1L1jmE4w3AHSMaeig4ujnnS4hQmyPhq0U_ZM4gC2UO5G2lrbfGWqw"></script>
  <script type="text/javascript" src="js/jquery.gmap-1.1.0.js"></script>
  
  <!-- Take care of the fonts -->
  <script src="js/cufon.yui.js"></script>
  <script src="css/fonts/Helv_HelvBold_400-Helv_HelvBold_700.font.js"></script>
  <script type="text/javascript">
	Cufon.replace('#c_head', {fontFamily: 'HelvLight'});
	Cufon.replace('span,.menu,.phone_number,#footer', {fontFamily: 'HelvBold'});
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
