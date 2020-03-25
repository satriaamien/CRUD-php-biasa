<?php  
include('crud.php');

$query= mysqli_query($connect, "SELECT * FROM mahasiswa");
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

// var_dump($result);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="search.php" method="get" accept-charset="utf-8">
	<input type="text" name="search" placeholder="search.."> <button type="submit">cari</button>
</form>

<table border="1">
	<thead>
		<tr>
			<th>Nama</th>
			<th>Nim</th>
			<th>Asal</th> 
			<th>tambah</th> 			
			<th>edit</th> 
			<th>delete</th> 
		</tr>
	</thead>
	<tbody>
		<?php foreach ($result as $value) {?>
			<tr style="color: brown;">
				<td><?php echo $value['nama']; ?></td>
				<td><?php echo $value['nim']; ?></td>
				<td><?php echo $value['asal']; ?></td>
				<td><a href="add.php">tambah</a></td>
				<td><a href="edit.php?id=<?php echo $value['id']?>">edit</a></td>
				<td><a href="delete.php?id=<?php echo $value['id']?>">delete</a></td>
			</tr>			
		<?php } ?>
	</tbody>
</table>

</body>
</html>