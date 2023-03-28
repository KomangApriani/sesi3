<?php 
   //model 1
   //$cars = array("volvo","bmw","toyota");

   //model 2
   $cars[0] = "volvo";
   $cars[1] = "bmw";
   $cars[2] = "toyota";

header('content-type: application/json; charset=utf-8');
echo json_encode($cars);