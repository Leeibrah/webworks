<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a3/jquery.mobile-1.0a3.min.css" />
    <script src="http://code.jquery.com/jquery-1.5.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.0a3/jquery.mobile-1.0a3.min.js"></script>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Kibera</title>
<link href="../css/stylesheet.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php include('../includes/header.php');
	  include('../includes/site.php');
 ?>

<?php
// If "siteName" isn't in the querystring, set the default site name to 'nettuts'
/*
$siteName = empty($_GET['siteName']) ? 'nettuts' : $_GET['siteName'];

$siteList = array(
   'nettuts',
   'flashtuts',
   'webdesigntutsplus',
   'psdtuts',
   'vectortuts',
   'phototuts',
   'mobiletuts',
   'cgtuts',
   'audiotuts',
   'aetuts'
);
*/

// For security reasons. If the string isn't a site name, just change to 
// nettuts instead.
if ( !in_array($siteName, $siteList) ) {
   $siteName = 'nettuts';
}

$cache = dirname(__FILE__) . "/cache/$siteName";
// Re-cache every three hours
if(filemtime($cache) < (time() - 10800))
{
   // Get from server
   if ( !file_exists(dirname(__FILE__) . '/cache') ) {
      mkdir(dirname(__FILE__) . '/cache', 0777);
   }
   // YQL query (SELECT * from feed ... ) // Split for readability
   $path = "http://query.yahooapis.com/v1/public/yql?q=";
   $path .= urlencode("SELECT * FROM feed WHERE url='http://voiceofkibera.org/feed'");
   $path .= "&format=json";

   // Call YQL, and if the query didn't fail, cache the returned data
   $feed = file_get_contents($path, true);

   // If something was returned, cache
   if ( is_object($feed) && $feed->query->count ) {
      $cachefile = fopen($cache, 'wb');
      fwrite($cachefile, $feed);
      fclose($cachefile);
   }
}
else
{
   // We already have local cache. Use that instead.
   $feed = file_get_contents($cache);
}

// Decode that shizzle
$feed = json_decode($feed);

// Include the view
include('views/site.tmpl.php');
?>
</body>
</html>