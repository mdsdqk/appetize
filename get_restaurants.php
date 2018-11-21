<?php

    // incoming an object of json array 
    $data = file_get_contents("php://input");
    $restaurants_obj = json_decode($data);

    $conn = mysqli_connect("127.0.0.1","root","");
    if(! $conn ) 
    {
        die('Could not connect: ' . mysqli_error());
    }
    //echo 'Connected successfully';

    $db = mysqli_select_db($conn,"appetize");
    
    // didnt work json_decode($data,false) with $restaurants_obj['R1'] and $restaurants_obj.R1
    $q = "SELECT restaurant_id,name,locality,average_cost,aggregate_rating,rating_text,votes FROM restaurants where restaurant_id = $restaurants_obj->R1 OR restaurant_id = $restaurants_obj->R2 OR restaurant_id = $restaurants_obj->R3";
    $res = mysqli_query($conn,$q);
    
    $restaurant_row = array();

    $i=0;
    while($row = mysqli_fetch_array($res))
    {
        $restaurant_row[$i] = array("restaurant_id"=>$row[0],"restaurant_name"=>$row[1],"locality"=>$row[2],"average_cost"=>$row[3],"aggregate_rating"=>$row[4],"rating_text"=>$row[5],"votes"=>$row[6]);
        $i = $i+1;

    }
    mysqli_close($conn);

    echo json_encode($restaurant_row);
?>