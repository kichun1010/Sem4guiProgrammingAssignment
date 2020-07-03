<?php
extract($_POST);
    $conn = mysqli_connect("127.0.0.1","root","","ITP4506")
			or die(mysqli_connect_error());
	$sql = "DELETE FROM menu WHERE ID = '$delID'";
	$rs = mysqli_query($conn, $sql)
			or die(mysqli_error($conn));
    mysqli_close($conn);
    header("Location:menuManagement1.php");
?>