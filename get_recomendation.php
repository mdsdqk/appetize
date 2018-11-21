<?php

    // incoming an object of json array of users
    $data = file_get_contents("php://input");
    $group_obj = json_decode($data,TRUE);

    $url = "http://127.0.0.1:5000/group";

    $options = array(
    'http' => array(
      'method'  => 'POST',
      'content' => json_encode( $group_obj ),
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

    // echo "successfully recieved json array,return resto ids
    // echo json_encode($response);

    // above code is for getting recomended restos ids
// -------------------------------------------------------------------------------------------------


    // below code is fetch the restos details from db
    $conn = mysqli_connect("127.0.0.1","root","");
    if(! $conn ) 
    {
        die('Could not connect: ' . mysqli_error());
    }
    $db = mysqli_select_db($conn,"appetize");
    
    // didnt work json_decode($data,false) with $restaurants_obj['R1'] and $restaurants_obj.R1
    $q = "SELECT restaurant_id,name,locality,average_cost,aggregate_rating,rating_text,votes FROM restaurants where restaurant_id = $r1 OR restaurant_id = $r2 OR restaurant_id = $r3";
    $res = mysqli_query($conn,$q);
    
    $restaurant_row = array();

    $i=0;
    while($row = mysqli_fetch_array($res))
    {
        $restaurant_row[$i] = array("restaurant_id"=>$row[0],"restaurant_name"=>$row[1],"locality"=>$row[2],"average_cost"=>$row[3],"aggregate_rating"=>$row[4],"rating_text"=>$row[5],"votes"=>$row[6]);
        $i = $i+1;

    }
    mysqli_close($conn);

    // send restos details for the given resto ids
    echo json_encode($restaurant_row);
?>