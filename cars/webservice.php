<?php


header("Content-Type:application/json");


require_once("query.php");


       //Generating JSON from the $response array
       $json_response=json_encode($rows);
    
       // Outputting JSON to the client
       echo $json_response;
    
