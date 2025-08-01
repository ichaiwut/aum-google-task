<?php
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header("Location: index.php");
}

$username = $_POST['username'];
$password = $_POST['password'];

if ($username && $password) {
    header("Location: index.php");
} else {
    header("Location: login.php");
}

?>

