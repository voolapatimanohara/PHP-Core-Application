<?php
 include 'database.php';

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
//   }
  
//   if(isset($_POST['save']))
// {	 
// 	 $judge_first_name = $_POST['firstName'];
// 	 $judge_last_name = $_POST['lastName'];
// 	 $insertresult = "INSERT INTO login (firstName, lastName, loginId, pswd)
// 	 VALUES ('$judge_first_name','$judge_last_name','$judge_first_name$judge_last_name','".md5($judge_first_name."_".$judge_last_name)."')";
// 	 if (mysqli_query($conn, $insertresult)) {
// 		header("location: admin-judge.php");       
// 	 } else {
// 		echo "Error: " . $insertresult . "
// " . mysqli_error($conn);
// 	 }
// 	 mysqli_close($conn);
// }





?>
<?php 
 if(!empty($_POST["save"])) {

		$fname = $_POST["firstName"];
		$lname = $_POST["lastName"];
			
		// Store contactor data in database
		$sql = $conn->query("INSERT INTO login(firstName, lastName, loginId, pswd)
		VALUES ('{$fname}', '{$lname}', '{$fname}', '{$lname}')");

		if(!$sql) {
		  die("MySQL query failed.");
		} else {
		  $response = array(
			"status" => "alert-success",
			"message" => "We have received your query and stored your information. We will contact you shortly."
		  );     
		  header("location: admin-judge.php");          
		}
	
  }  
  ?>