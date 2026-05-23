<?php

include 'dbconnect.php';

// Generate a unique CR number
$year = date('y');
$month = date('m');
$sql = "SELECT CR_number FROM admission WHERE CR_number LIKE '$year$month%' ORDER BY CR_number DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $lastCustomId = $row['CR_number'];
    // Extract the last sequential number and increment it
    $lastNumber = (int)substr($lastCustomId, 4);
    $sr_no = str_pad($lastNumber + 1, 3, '0', STR_PAD_LEFT);
} else {
    // No entries for this month, start with 001
    $sr_no = '001';
}
$CR_number = $year . $month . $sr_no;// Unique CR number

// Collecting form data
$b = $_POST['Student_Name'];
$c = $_POST['Father_Name'];
$d = $_POST['Phone_number'];
$e = $_POST['Address'];
$f = $_POST['DOB'];
$g = $_POST['Gender'];
$h = $_POST['Courses'];
$ins = "INSERT INTO `admission` (`CR_number`, `Student_Name`, `Father_Name`, `Phone_number`, `Address`, `DOB`, `Gender`, `Courses`) 
        VALUES ('$CR_number', '$b', '$c', '$d', '$e', '$f', '$g', '$h')";

if(mysqli_query($conn, $ins)) {
    header("Location: receipt.php");
} else {
    echo "Data not inserted: " . mysqli_error($conn);  
}

?>
