<?php
 include 'database.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  //echo "Connected successfully";
//   if(isset($_POST['save']))
// {	 
// 	 $title = $_POST['title'];
// 	 $program = $_POST['program'];
// 	 $names = $_POST['names'];
//      $sponsor = $_POST['sponsor'];
//      $description = $_POST['pr_description'];
//      $pr_url = $_POST['pr_url'];
//      $projectType = $_POST['projectType'];
//      $mentor = $_POST['mentor'];
// 	 $insertresult = "INSERT INTO projects (title, program, names, sponsor, pr_description, pr_url, projectType, mentor)
// 	 VALUES ('$title','$program','$names','$sponsor', '$description', '$pr_url', '$projectType', '$mentor')";
// 	 if (mysqli_query($conn, $insertresult)) {
// 		header("location: admin-projects.php");
       
// 	 } else {
// 		echo "Error: " . $insertresult . "
// " . mysqli_error($conn);
// 	 }
// 	 mysqli_close($conn);
// }

?>

<?php 
 
