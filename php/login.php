<?php
require '../db_config/config.php';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Using prepared statements to prevent SQL injection
    $stmt = $conn->prepare("SELECT `password`, `name` FROM `login` WHERE `email` = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($stored_password, $role);
        $stmt->fetch();

        // Directly compare the passwords
        if ($password === $stored_password) {
            if ($role === 'admin') {
                echo "<script type='text/javascript'>alert('Admin login successful'); window.location.href = '../admin/index.php';</script>";
            } else {
                echo "<script type='text/javascript'>alert('User login successful'); window.location.href = '../user/index.php';</script>";
            }
        } else {
            echo "<script type='text/javascript'>alert('Incorrect password'); window.location.href = '../pages/login.php';</script>";
        }
    } else {
        echo "<script type='text/javascript'>alert('No user found with that email'); window.location.href = '../pages/login.php';</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
