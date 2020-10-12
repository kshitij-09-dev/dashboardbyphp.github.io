<?php

include 'conn.php';

$id = $_GET['id'];

$q = "DELETE FROM userinfo WHERE id = $id  ";

mysqli_query($con,$q);


header('location:adminmainpage.php');

?>