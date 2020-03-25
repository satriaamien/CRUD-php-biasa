<?php 
	include('crud.php');

	$id=$_GET['id'];

	$delete=mysqli_query($connect, "DELETE FROM mahasiswa WHERE id=$id"); 


	if ($delete) {
		header('Location:getdata.php');
	}else{
		echo("delete gagal");
	}