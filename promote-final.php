<?php
 include 'database.php';

 $projectId = $_REQUEST["id"]; 
 //echo $projectId; 

  $res =  $conn->query("UPDATE projects SET roundNumber = '3' WHERE id = " . $projectId . "");
 
 if($res){
	header("location: semi-final-results.php"); 
 }




  ?>