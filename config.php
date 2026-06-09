<?php
$db=mysqli_connect("localhost","root","","infes.");
if($db===false)
{
    die("Connection is not established :".mysqli_connect_error());
}
?>