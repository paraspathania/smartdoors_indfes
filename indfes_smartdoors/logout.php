<?php
session_start();
if(!isset($_SESSION['email']))
{
    echo "<script>window.location.assign('login.php?msg=Please Login!!')</script>";
}
session_unset();
session_destroy();
echo "<script>window.location.assign('login.php?msg=Please login !!')</script>";
?>