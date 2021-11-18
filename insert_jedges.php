<?php
 include 'database.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  if(isset($_POST['save']))
{	 
	 $judge_first_name = $_POST['judge_first_name'];
	 $judge_last_name = $_POST['judge_last_name'];
	 $insertresult = "INSERT INTO login (firstName, lastName, loginId, pswd)
	 VALUES ('$judge_first_name','$judge_last_name','$judge_first_name$judge_last_name','".md5($judge_first_name."_".$judge_last_name)."')";
	 if (mysqli_query($conn, $insertresult)) {
		header("location: admin-judge.php");       
	 } else {
		echo "Error: " . $insertresult . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}

?>