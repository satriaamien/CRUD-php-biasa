<?php
include('crud.php'); 
$id= $_GET['id']; // Untuk mengambil id yang dilempar dari form list.php
 
// echo($id);
$query= mysqli_query($connect,"SELECT * FROM mahasiswa WHERE id='$id'"); //mengambil data sesuai dengan id nya
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
// print_r($result);
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="update.php" method="post" accept-charset="utf-8">
		 <input type="hidden" name="id" value=<?php echo $result[0]['id']?>>
		<label for="nama">nama</label>
		<input type="text" name="nama" value="<?php echo $result[0]['nama']; ?>"><br><br> 
		<label for="">nim</label>
		<input type="text" name="nim" value="<?php echo $result[0]['nim']; ?>"><br><br>
		<label for="asal">asal</label>
		<textarea name="asal" ><?php echo $result[0]['asal'];?></textarea>	<br> 
		<button type="submit">edit</button>
	</form>

</body>
</html>