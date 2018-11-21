<?php

session_start();
header('Content-Type: application/json');


$db = mysqli_connect('localhost', 'root', '', 'appetize');
$username = $_SESSION['username'];

$user_query = "SELECT userid, latitude, longitude, cuisines FROM users WHERE username='$username'";
$user_result = mysqli_query($db, $user_query);
$user = mysqli_fetch_assoc($user_result);


$cuisines = preg_split("[\,]", $user['cuisines']);

	$data = array (
  'number' => 1,
  'user1' => 
  array (
    'id' => 
    array (
      'uid' => $user['userid'],
    ),
    'location' => 
    array (
      'lat' => $user['latitude'],
      'long' => $user['longitude'],
    ),
    'preferences' => 
    array (
      'cuisines' => $cuisines,
    ),
  ), 
);

/*	
	$url = "http://127.0.0.1:5000/group";

	$options = array(
	'http' => array(
		'method'  => 'POST',
		'content' => json_encode( $data ),
		'header'=>  "Content-Type: application/json\r\n" .
					"Accept: application/json\r\n"
		)
	);
	
  $context  = stream_context_create( $options );
  // fire to acharya api
	$result = file_get_contents( $url, false, $context );
	$response = json_decode( $result, true );

	$r1 = $response["R1"];
	$r2 = $response["R2"];
  $r3 = $response["R3"];
  
*/
  $to_send = array();
  $arr = array(51040, 54162, 18305628);   //replace by $r1, ... and uncomment above stuff for actual recommendation
  //$arr = array($r1, $r2, $r3);

  foreach ($arr as &$i) {
    $restaurant_query = "SELECT name, locality, aggregate_rating FROM restaurants WHERE restaurant_id=$i";
    $resto_result = mysqli_query($db, $restaurant_query);
    $restaurant = mysqli_fetch_assoc($resto_result);
    
    array_push($to_send, $restaurant);
  }

  $to_send = json_encode($to_send);

  echo $to_send;

	
	
	
?>