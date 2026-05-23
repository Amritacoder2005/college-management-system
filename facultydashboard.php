<?php
$conn = mysqli_connect("localhost", "root", "", "college");

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    // Prepare statement to prevent SQL injection
    $stmt = $conn->prepare("DELETE FROM contact WHERE sr_no = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        // Show success message and redirect
        echo "<script>
            alert('Record deleted successfully.');
            window.location.href = 'student_query.php';
        </script>";
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
