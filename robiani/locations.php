<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a3/jquery.mobile-1.0a3.min.css" />
    <script src="http://code.jquery.com/jquery-1.5.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.0a3/jquery.mobile-1.0a3.min.js"></script>
    <script type="text/javascript" src="js/map.js"></script>
	<script src="js/jquery-1.6.4.min.js"></script>
    <script src="js/jquery.mobile-1.0rc2.min.js"></script>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Robiani</title>
    <link href="css/stylesheet.css" rel="stylesheet" type="text/css">
    <link href="css/map.css" rel="stylesheet" type="text/css">
</head>

<body>
        <div id="details" data-role="page" class="details-page">
            <div data-role="header" class="header_color"><a href="" data-icon="refresh" class="ui-btn-left" data-transition="fade" data-iconpos="notext" data-theme="a"></a>
                <h3>Robiani</h3>
                <a href="/kibera" data-icon="home" data-iconpos="notext" data-direction="reverse" class="ui-btn-right jqm-home" data-ajax="false">Home</a>
            </div>

            <div data-role="content" id="map_content" data-theme="a">
                <div id="map_content">
                    <div id="map_canvas"></div>
                </div>
            </div>
            
                   <!-- Beginning of footer page -->
        
              <div data-role="footer">
               	<div data-role="navbar">
                    <ul>
                        <li><a href="/robiani">Home</a></li>
                        <li><a href="#products">Products</a></li>
                        <li><a href="#contact">Contact Us</a></li>
                    </ul>
                </div> 
          
           	  </div>
        </div>

       
<script type="text/javascript">
        	var lat, log;
            lat = '-1.416699';
            log = '36.78393';
            function initialize() {
                setupMap(-1.316699,36.78393, 11, true);				
                var quakeEventLatlng = new google.maps.LatLng(-1.316699,36.78393);
                var marker = createQuakeEventMarker(quakeEventLatlng)
                marker.setAnimation(google.maps.Animation.DROP)
            }
	
			//$("#map_canvas").gmap({'zoom':7})
            // Initialize the map when the jQuery Mobile pageshow event is triggered
            $('.details-page').live("pageshow", function() {
                if (map == null) {
                    initialize();
                    
                }
            });
	
        </script>

</body>
</html>