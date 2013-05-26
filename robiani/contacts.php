<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a3/jquery.mobile-1.0a3.min.css" />
    <script src="http://code.jquery.com/jquery-1.5.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.0a3/jquery.mobile-1.0a3.min.js"></script>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Robiani</title>
<link href="../css/stylesheet.css" rel="stylesheet" type="text/css">
<link href="css/first.css" rel="stylesheet" type="text/css">
</head>
 
<body>
        <div data-role="page" data-theme="c">
         
        <div data-role="header" class="header_color">
          <h1 class="headtitle">Contact</h1>
          <a href="/robiani" data-icon="home" data-iconpos="notext" data-direction="reverse" class="ui-btn-right jqm-home" data-ajax="false">				Home</a>
        </div> <!--header-->
         
        <div data-role="content" id="pagecontent">
        	<div class="contact-thankyou" style="display: none;">
			Thank you.  Your message has been sent.  We will get back to you as soon as we can.
		</div>
		<div class="contact-form">
			<form method="get" action="">
		  <div data-role="fieldcontain" class="text-field">
          	
				<label for="firstname">First Name*:</label>
				<input type="text" name="firstname" value="" placeholder="" class="required" id="firstname" />
			</div>
			<div data-role="fieldcontain" class="text-field">
				<label for="surname">Last Name:</label>
				<input type="text" name="lastname" value="" placeholder="" id="surname" />
			</div>
		  <div data-role="fieldcontain" class="text-field">
				<label for="email">Email Address*:</label>
				<input type="email" name="email" value="" placeholder="" class="required" id="email"  />
			</div>
		  <div data-role="fieldcontain">
		    <label for="message">Message*:</label>
				<textarea name="message" id="message" placeholder="" class="required"></textarea>                
		  </div>
          </form>
			<div class="send"><a href="../javascript/contacts.js" data-role="button" data-theme="a" data-iconpos="right" id="send-feedback">send feedback</a></div>
		</div><!-- //.contact-form -->
        </div> <!-- Content closing tag -->
        
        <!-- Beginning of footer page -->
        
                <div data-role="footer">
                    <div data-role="navbar" class="nav-glyphish-example">
	                	<ul>
                            <li><a href="#" rel="external" id="home" data-icon="custom" data-iconpos="top" data-theme="c"><small>Home</small></a></li>
                            <li><a href="about.php" rel="external" id="news" data-icon="custom" data-iconpos="top" data-theme="c"><small>About</small></a></li>
                            <li><a href="map.php" rel="external" id="maps" data-icon="custom" data-iconpos="top" data-theme="c"><small>Map</small></a></li>
                            <li><a href="contacts.php" rel="external" id="contacts" data-icon="custom" data-iconpos="top" data-theme="c"><small>Contacts</small></a></li>
                      </ul>
                    </div>
          
            </div> <!--/footer-->
        
        </div> <!-- Closing of page content -->
        

    
</body>
</html>
