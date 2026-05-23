<?php
session_start();

if (isset($_POST['Submit'])) {
    $conn = new mysqli("localhost", "root", "", "college");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $email = trim($_POST['Email']);
    $password = $_POST['Password'];

    $stmt = $conn->prepare("SELECT Email, Password, Name FROM `faculty signup` WHERE Email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows === 1) {
        $stmt->bind_result($db_email, $db_password, $db_name);
        $stmt->fetch();

        if ($password === $db_password) { // For real use, use password_verify()
            $_SESSION['email'] = $db_email;
            $_SESSION['username'] = $db_name;
            header("Location: facultydashboard.php");
            exit;
        } else {
            echo "<script>alert('Invalid Password'); window.location.href='facultylogin.php';</script>";
        }
    } else {
        echo "<script>alert('Email not found'); window.location.href='facultylogin.php';</script>";
    }

    $stmt->close();
    $conn->close();
} else {
    header("Location: facultylogin.php");
    exit;
}
?>
