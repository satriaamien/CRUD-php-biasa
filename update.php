<?php 
include('crud.php');
// echo $_GET['id'];



$id  =$_POST['id'];
$nama=$_POST['nama'];
$nim=$_POST['nim'];
$alamat=$_POST['asal'];

$update = mysqli_query ($connect, "UPDATE mahasiswa SET nama='$nama',nim ='$nim',asal='$alamat' WHERE id='$id' ");

if ($update)
	header('Location:getdata.php');
else
	echo('update gagal');