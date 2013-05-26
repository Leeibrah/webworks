<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a3/jquery.mobile-1.0a3.min.css" />
    <script src="http://code.jquery.com/jquery-1.5.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.0a3/jquery.mobile-1.0a3.min.js"></script>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Robiani</title>
<link href="../css/stylesheet.css" rel="stylesheet" type="text/css">
</head>
 
<body>
        <div data-role="page" data-theme="c">
         
        <div data-role="header" class="header_color">
          <h1>Handwork</h1>
            <a href="/robiani" data-icon="home" data-iconpos="notext" data-direction="reverse" class="ui-btn-right jqm-home" data-ajax="false">Home</a>
        </div> <!--header--><!-- Content closing tag -->
        <div data-role="content"> 
    <ul data-role="listview" data-filter="true">
		<?php
		include_once('includes/config.php');
		$sql = "select c.id, c.name, c.type, c.description, count(r.id) reportCount " . 
				"from curios c left join curios r on r.id = c.id " .
				"group by c.id order by c.name";
				
		$sqll = "select * from curios";
		try {
			$dbh = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);	
			$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$stmt = $dbh->query($sql); 
			while ($emp = $stmt->fetch(PDO::FETCH_OBJ)) {  
				echo "<li><a href='details.php?id=$emp->id'>" .
					"<h4>$emp->name</h4></a></li>";
					
			}
			$dbh = null;
		} catch(PDOException $e) {
			echo $e->getMessage(); 
		}
		?> 
	</ul>
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
          
           	  </div> <!--/footer-->
        
        </div> <!-- Closing of page content -->
        

    
</body>
</html>
