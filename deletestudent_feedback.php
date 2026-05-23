<?php
$conn = mysqli_connect("localhost", "root", "", "college");

// Check if 'idd' is set
if (isset($_GET['delete'])) {
    $delid = $_GET['delete'];


    // Optional: You could verify the record exists first
    $sel = "SELECT * FROM `admission` WHERE CR_number = ?";
    $stmt_sel = $conn->prepare($sel);
    $stmt_sel->bind_param("s", $delid);
    $stmt_sel->execute();
    $result = $stmt_sel->get_result();

    if ($result->num_rows > 0) {
        // Record exists, now delete
        $del = "DELETE FROM `admission` WHERE CR_number = ?";
        $stmt_del = $conn->prepare($del);
        $stmt_del->bind_param("s", $delid);

        if ($stmt_del->execute()) {
            header("Location: showstudent.php");
            exit();
        } else {
            echo "Error deleting record: " . $stmt_del->error;
        }

        $stmt_del->close();
    } else {
        echo "Record not found.";
    }

    $stmt_sel->close();
} else {
    echo "Invalid request.";
}

$conn->close();
?>
