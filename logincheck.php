<?php

session_start();
$name = $_SESSION['name'];
if ($_SESSION['name'] == true) {
    header("Location: loginsucess.php");
} else {
    header("Location: loginpage.html");
}
