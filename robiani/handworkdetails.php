<!DOCTYPE html>
<html>
    <head>
        <title>Robiani</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.css" />
        <link rel="stylesheet" href="css/map.css" />

        <meta name="layout" content="mobile"/>
    <link href="css/stylesheet.css" rel="stylesheet" type="text/css">
    
     <script type="text/javascript" src="js/map.js"></script>

        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.js"></script>
    </head>

    <body>
        <div id="details" data-role="page" class="details-page">
            <div data-role="header" class="header_color"><a href="" data-icon="refresh" class="ui-btn-left" data-transition="fade" data-iconpos="notext" data-theme="a"></a>
                <h3>Robiani</h3>
                <a href="/robiani" data-icon="home" data-iconpos="notext" data-direction="reverse" class="ui-btn-right jqm-home" data-ajax="false">Home</a>
            </div>
			
            <!-- Start of fecthed content-->
             <div data-role="content" rel="external"> 

		<?php
		include_once('includes/config.php');

		$sql = "select e.id, e.firstName, e.lastName, e.managerId, e.title, e.department, e.city, e.officePhone, e.cellPhone, " .
				"e.email, e.picture, m.firstName managerFirstName, m.lastName managerLastName, count(r.id) reportCount " . 
				"from employee e left join employee r on r.managerId = e.id left join employee m on e.managerId = m.id " .
				"where e.id=:id group by e.lastName order by e.lastName, e.firstName";
				
		$sqll = "select g.id, g.type, g.name, g.description, g.image, g.place from art as g left join art r on r.id = g.id left join art m on g.id = m.id	where g.id=:id group by g.id";
		try {
			$dbh = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);	
			$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$stmt = $dbh->prepare($sqll);  
			$stmt->bindParam('id', $_GET['id']);
			$stmt->execute();
			$employee = $stmt->fetchObject();  
			$dbh = null;
		?>	
			
  			<img src="pics/<?php echo $employee->picture ?>" class="guides-pic" width="100"/>
			<div class="guides-details">
       			<h3><?php echo "$employee->name" ?></h3>
       			
   			</div>
	 
    		<ul data-role="listview" data-inset="true" class="action-list">
		    	<?php
	    		
		    	//the guides details begin here
				if (!is_null($employee->type))
		    	{
					//echo "$employee->type";
				}
		    	if (!is_null($employee->description))
		    	{
					echo "$employee->description";
				}
		    	
		    	?>
    		</ul>
		
		<?php	
		} catch(PDOException $e) {
			echo $e->getMessage(); 
		}
		?>


  	</div>
            
            
            <div data-role="content" id="map_content" data-theme="a">
                <div id="small_map_content">
                    <div id="small_map_canvas"></div>
                </div>
            </div>
            
            <br>
                <hr class="page-splits">
                <br>
      <div data-role="navbar">
	                	<ul>
                            <li><a href="#" rel="external" id="pictures" data-icon="custom" data-iconpos="top" data-theme="c"><small>Home</small></a></li>
                            <li><a href="about.php" rel="external" id="news" data-icon="custom" data-iconpos="top" data-theme="c"><small>About</small></a></li>
                            <li><a href="map.php" rel="external" id="maps" data-icon="custom" data-iconpos="top" data-theme="c"><small>Map</small></a></li>
                            <li><a href="contacts.php" rel="external" id="contacts" data-icon="custom" data-iconpos="top" data-theme="c"><small>Contacts</small></a></li>
                      </ul>
                    </div>
             
        </div>

       
        <script type="text/javascript">
            function initialize() {		//-1.080201,35.866902
                setupMap(-1.080201,35.866902, 11, true);				
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
