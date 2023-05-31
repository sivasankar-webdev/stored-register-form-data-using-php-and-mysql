<?php
require "config.php";

$uname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$pass = $_POST['password'];
$gen = $_POST['gender'];
$address = $_POST['addr'];
$language = $_POST['lang'];
$lan = implode(",", $language);

$query = "INSERT INTO phpregister (username, email, phone, password, gender, lang, address) 
          VALUES ('$uname', '$email', $phone, '$pass', '$gen', '$lan', '$address')";

if (isset($_POST['submit'])) {
    if ($res = mysqli_query($conn, $query)) {
        echo "<script>alert('Stored success');</script>";
    } else {
        echo "<script>alert('Stored error');</script>";
    }
}

?>
