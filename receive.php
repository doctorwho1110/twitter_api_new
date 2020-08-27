<?php

$requestPayload=file_get_contents("php://input");

$object=json_decode($requestPayload); //true => for array insetead of object

var_dump($object);
?>