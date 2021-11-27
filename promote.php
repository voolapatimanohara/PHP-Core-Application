<?php
 include 'database.php';

 $projectId = $_REQUEST["id"]; 

  $res =  $conn->query("UPDATE projects SET roundNumber = '2' WHERE id = " . $projectId . "");
 
 if($res){
	header("location: round1-results.php"); 
 }




  ?>