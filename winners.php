<?php
 include 'database.php';

 $projectId = $_REQUEST["id"]; 
 //echo $projectId; 

  $res =  $conn->query("UPDATE projects SET roundNumber = '4' WHERE id = " . $projectId . "");
 
 if($res){
	header("location: final-results.php"); 
 }




  ?>