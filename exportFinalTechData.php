<?php
include 'database.php';

// Fetch records from database 
$project_list = "SELECT projects.pr_url,projects.id,projects.projectType,projects.title, projects.roundNumber,SUM(results.marks) marks from projects inner JOIN projects_vs_jedges on projects.id=projects_vs_jedges.projectId 
INNER JOIN results on projects_vs_jedges.id=results.judgeAssignedId 
INNER JOIN questions on results.questionId=questions.id 
where projects.projectType = 'Technology' and
projects_vs_jedges.roundNumber=3 group by projects_vs_jedges.projectId";
$query = $conn->query($project_list);

if ($query->num_rows > 0) {
	$delimiter = ",";
	$filename = "Technology_Final_Results_" . date('Y-m-d') . ".csv";

	// Create a file pointer 
	$f = fopen('php://memory', 'w');

	// Set column headers 
	$fields = array('ID', 'PROJECT TITLE', 'TOTAL MARKS');
	fputcsv($f, $fields, $delimiter);

	// Output each row of the data, format line as csv and write to file pointer 
	while ($row = $query->fetch_assoc()) {
		$lineData = array($row['id'], $row['title'], $row['marks']);
		fputcsv($f, $lineData, $delimiter);
	}

	// Move back to beginning of file 
	fseek($f, 0);

	// Set headers to download file rather than displayed 
	header('Content-Type: text/csv');
	header('Content-Disposition: attachment; filename="' . $filename . '";');

	//output all remaining data on a file pointer 
	fpassthru($f);
}
exit;