<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a3/jquery.mobile-1.0a3.min.css" />
    <link rel="stylesheet" href="css/second.css" />
    <script src="http://code.jquery.com/jquery-1.5.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.0a3/jquery.mobile-1.0a3.min.js"></script>
    
<script src="js/jquery-1.6.4.min.js"></script>
<script src="js/jquery.mobile-1.0rc2.min.js"></script>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Kibera</title>
<link href="../css/stylesheet.css" rel="stylesheet" type="text/css">
</head>
 
<body>
        <div data-role="page" data-theme="c">
         
        <div data-role="header" class="header_color">
          <h1>Details</h1>
            <a href="/robiani" data-icon="home" data-iconpos="notext" data-direction="reverse" class="ui-btn-right jqm-home" data-ajax="false">Home</a>
        </div> <!--header--><!-- Content closing tag -->
        
        <div data-role="content"> 

		<?php
		include_once('includes/config.php');

		$sql = "select e.id, e.firstName, e.lastName, e.managerId, e.title, e.department, e.city, e.officePhone, e.cellPhone, " .
				"e.email, e.picture, m.firstName managerFirstName, m.lastName managerLastName, count(r.id) reportCount " . 
				"from employee e left join employee r on r.managerId = e.id left join employee m on e.managerId = m.id " .
				"where e.id=:id group by e.lastName order by e.lastName, e.firstName";
				
		$sqll = "select c.id, c.name, c.description, c.images, c.place from curios as c left join curios r on r.id = c.id left join curios m on c.id = m.id where c.id=:id group by c.name order by c.name";
		
		try {
			$dbh = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);	
			$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$stmt = $dbh->prepare($sqll);  
			$stmt->bindParam('id', $_GET['id']);
			$stmt->execute();
			$employee = $stmt->fetchObject();  
			$dbh = null;
		?>	
			
  			<img src="images/"<?php echo $employee->images ?>" class="guides-pic" width="100"/> 
			<div class="guides-details">
       			<h3><?php echo "$employee->name" ?></h3>
       			
   			</div>
	 
    		<ul data-role="listview" data-inset="true" class="action-list">
		    	<?php
	    		
		    	//the guides details begin here
				if (!is_null($employee->description))
		    	{
					echo "<li>$employee->description</li>";
				}
				
				
		    	
		    	?>
    		</ul>
		
		<?php	
		} catch(PDOException $e) {
			echo $e->getMessage(); 
		}
		?>


  	</div>
	
    <div id="map-details">
    	
    </div>
    <div>
    	
    </div>
</div>
        
        <!-- Beginning of footer page -->
        
              <div data-role="footer">
               	<div data-role="navbar">
    <ul>
    <li><a href="#home">Home</a></li>
    <li><a href="#products" class="ui-btn-active ui-state-persist">Products</a></li>
    <li><a href="#contact">Contact Us</a></li>
    </ul>
    </div> 
          
           	  </div>
        
        </div> <!-- Closing of page content -->
        

    
</body>
</html>
