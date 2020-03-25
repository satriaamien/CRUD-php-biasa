<?php 
include('crud.php');

$nama=$_POST['nama'];
$nim=$_POST['nim'];
$alamat=$_POST['asal'];

$insert = mysqli_query ($connect, "INSERT INTO mahasiswa SET nama='$nama',nim ='$nim',asal='$alamat' ");

if ($insert)
	header('Location:getdata.php');
else
	echo('input gagal');

