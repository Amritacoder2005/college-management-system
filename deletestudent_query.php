<?php
$conn = mysqli_connect("localhost", "root", "", "college");

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    // Prepare statement to prevent SQL injection
    $stmt = $conn->prepare("DELETE FROM feedback WHERE sr_no = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        // Redirect after successful deletion
        header("Location: show_studentfeedback.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
