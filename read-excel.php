<?php
include 'database.php';
require_once "./Classes/PHPExcel.php";
$path = "./test.xlsx";
$reader = PHPExcel_IOFactory::createReaderForFile($path);
$excel_Obj = $reader->load($path);

//Get the first sheet in excel
$worksheet = $excel_Obj->getSheet('0');
$lastRow = $worksheet->getHighestRow();
$colomncount = $worksheet->getHighestDataColumn();
$colomncount_number = PHPExcel_Cell::columnIndexFromString($colomncount);

//  Get worksheet dimensions
$sheet = $excel_Obj->getSheet(0);
$highestRow = $sheet->getHighestRow();
$highestColumn = $sheet->getHighestColumn();
$query = 'INSERT INTO login (firstName,lastName,loginId,pswd) VALUES ';
$query_parts = array();

//  Loop through each row of the worksheet in turn
for ($row = 2; $row <= $highestRow; $row++) {
	//  Read a row of data into an array
	$rowData = $sheet->rangeToArray(
		'A' . $row . ':' . $highestColumn . $row,
		NULL,
		TRUE,
		FALSE
	);
	// Preparing query data
	$query_parts[] = "('" . $rowData[0][0] . "', '" . $rowData[0][1] . "','" . $rowData[0][0] . $rowData[0][1] . "','" . md5($rowData[0][0] . "_" . $rowData[0][1]) . "')";
}
$query .= implode(',', $query_parts);
if ($conn->multi_query($query) === TRUE) {
	$response = array(
		"status" => "alert-success",
		"message" => "New Judge Added succesfully ."
	);
	header("location: admin-judge.php");
} else {
	echo "Error: " . $query . "<br>" . $conn->error;
}

?>
<?php
if (!empty($_POST["save"])) {

	$fname = $_POST["firstName"];
	$lname = $_POST["lastName"];

	//////////////////// Excel Code ///////////////////


	/////////////////////// Excelcode end //////////////////////

}
?>