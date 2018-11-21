<?php
    // incoming get request to fetch users data from the db
    // this should have been baised on the specific user but right now its fetching all the users
    /*
    if we want to fetch only the friends of the user,then
    we can acces users id from the SESSION variable and send it to GET request
    as url?userid=SESSION_variable

    here in php we could fetch those rows(users) whose id is given under the friends column
    */




    $conn = mysqli_connect("127.0.0.1","root","");
    if(! $conn ) 
    {
        die('Could not connect: ' . mysqli_error());
    }
    //echo 'Connected successfully';

    $db = mysqli_select_db($conn,"appetize");
    $q = "SELECT * FROM users";
    $res = mysqli_query($conn,$q);

    $user_row = array();

    $i=0;
    while($row = mysqli_fetch_array($res))
    {
        $user_row[$i] = array("user_id"=>$row[0],"email"=>$row[1],"password"=>$row[2],"username"=>$row[3],"latitude"=>$row[4],"longitude"=>$row[5],"diet"=>$row[6],"cuisines"=>$row[7],"friends"=>$row[8]);
        $i = $i+1;

    }
    mysqli_close($conn);

    echo json_encode($user_row);
?>