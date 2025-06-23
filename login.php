<?php
session_start();
include("connect.php");

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
    $loginresult = executeQuery($query);

    if (mysqli_num_rows($loginresult) > 0) {
        while ($row = mysqli_fetch_assoc($loginresult)) {
            $_SESSION["admin_logged_in"] = true;
            $_SESSION["admin_username"] = $row['username'];
            $_SESSION["admin_password"] = $row['password'];
        }

        header("Location: admin/HomeAdmin.php");
    } else {
        echo "NO USER FOUND";
    }
}
?>
