<?php

include_once("dbconn.php");



function validate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$username = validate($_POST["USERNAME"]);
$gmail = validate($_POST["GMAIL"]);
$password_hash = validate($_POST["PASSWORD"]);
$password_len = $_POST["PASSWORD"];
$password = md5($password_hash);


$select = "SELECT * FROM `admin_acc` WHERE admin_username ='$username' AND admin_gmail = '$gmail' ";

if (isset($_POST["REGISTER-BTN"])) {
    $result = mysqli_query($conn, $select);
    if (mysqli_num_rows($result) > 0) {
        header("location: index.php?error=Account already Registered");
    }elseif ($password_len < 8) {
        header("location: index.php?error=Password Should be 8 Char");
    }elseif (empty($password_hash)) {
        header("location: index.php?error=Password is Required");
    } elseif (empty($username)) {
        header("location: index.php?error=Name is Required");
    } elseif (empty($gmail)) {
        header("location: index.php?error=Gmail is Required");
    } elseif (!filter_var($gmail, FILTER_VALIDATE_EMAIL)) {
        header("location: index.php?error=Gmail is Invalid");
    }else {
        mysqli_query($conn, "INSERT INTO `admin_acc` (admin_username, admin_gmail, admin_password) VALUES ('$username', '$gmail', '$password')");
        header("location: index.php?success=Registration Successfully!");
    }
}

?>  