<?php
    //Connect to database
    $dbc = mysqli_connect("localhost", "user", "", "bargraph") or die("error connecting to database");

    //Create query to fetch the records
    $query = "SELECT COUNT( * ) as visits , Country FROM  `visitors` GROUP BY country";

    //Execute the query
    $visitors = mysqli_query($dbc, $query) or die("error executing the query");

    //Create an array to hold the records
    $records = array();

    //Retrive the records and add it to the array
    while($row  = mysqli_fetch_assoc($visitors)){
        $records[] = $row;
    }

    print(json_encode($records));

    //Clean up
    mysqli_free_result($visitors);

    //Close connection
    mysqli_close($dbc);
    
?>