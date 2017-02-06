<!DOCTYPE html>
<html>
<head>
</head>
<body>
   <form action="index.php" method="get" autocomplete="off">
   	<input type="text" name="location"/>
   	<button type="submit">Submit</button>
   	<br>
   	<?php
      if(!empty($instagram_array))
      {
      	foreach($instagram_array['data'] as $image)
      	{
      	echo '<img src="'.$image['images']['low_resolution']['url'].'" alt=""/>';	
      	}
      }	

   	?>
   </form>
</body>
</html>

<?php
  if(!empty($_GET['location']))
  {
  	$map_url='http://maps.googleapis.com/maps/api/geocode/json?address='.urlencode($_GET['location']);
    //This function is convenient when encoding a string to be used in a query part of a URL, as a convenient way to pass variables to the next page.
  	$maps_json=file_get_contents($map_url);
  	$maps_array=json_decode($maps_json, true);

    $lat=$maps_array['results'][0]['geometry']['location']['lat'];
    $lng=$maps_array['results'][0]['geometry']['location']['lng'];

    // echo "<pre>".print_r($lat,true)."</pre>";
    // echo "<pre>".print_r($lng,true)."</pre>";
    // die();
  // https://api.instagram.com/oauth/authorize/?client_id=CLIENT-ID&redirect_uri=REDIRECT-URI&response_type=token
    $instagram_ul="https://api.instagram.com/v1/media/search?lat="
                 .$lat.'&lng='.$lng.
                 '&client_id=664ed1e3c753434ebfda22647486d08d';

    $instagram_json=file_get_contents($instagram_ul);
    $instagram_array=json_decode($instagram_json, true);

   }

 ?>