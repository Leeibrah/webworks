<div class="border_box">
         <div class="product_title"><a href="details.html">
		 <?php 
		include_once('includes/config.php');
		$sqll = "select * from tbl_product where pd_id='1'";
		
		try {
			$dbh = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);	
			$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$stmt = $dbh->query($sqll); 
			while ($emp = $stmt->fetch(PDO::FETCH_OBJ)) {  
				echo 
					"<h4>$emp->pd_name </h4>".
					"<img src='images/db/$emp->pd_image'/></a>".
					"<h4>KSH. $emp->pd_price </h4>";
					
			}
			$dbh = null;
		} catch(PDOException $e) {
			echo $e->getMessage(); 
		}
		// Close the database connection
		//mysql_close();
	?></div>
        
     </div>