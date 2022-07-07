<?php
include("./proxy.php");

//setup the Proxy with the right credentials
$mySwapiProxy = new Proxy('https://ssd-api.jpl.nasa.gov/fireball.api');
//get the data
$result = $mySwapiProxy->getData('?limit=20');
//print the data to the frontend.
print_r($result);