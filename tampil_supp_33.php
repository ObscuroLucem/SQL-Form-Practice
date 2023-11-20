<?php
#VINCENTIUS DANIEL B XIIA6/33
$conn = mysqli_connect("localhost", "root", "", "db_12a6_33");

$query = "SELECT * FROM tb_fsupp";
$result = mysqli_query($conn, $query);
?>
<html>
<link rel="stylesheet" href="style.css">
<body>
	<div class=tablebox>
	<h2 align=center>TABEL DATA SUPPLIER</h2>
	<table class="editor">
		<tr class="header">
			<td> id </td>
			<td> kode </td>
			<td> nama </td>
			<td> email </td>
			<td> no_hp </td>
			<td> alamat </td>
			<td> kota </td>
			<td> status </td>
		</tr>
 	<?php while($row = mysqli_fetch_array($result)){
	echo "<tr>
		<td>". htmlspecialchars($row['id']) . "</td>
		<td>". htmlspecialchars($row['kode']) . "</td>
		<td>". htmlspecialchars($row['nama']) . "</td>
		<td>". htmlspecialchars($row['email']) . "</td>
		<td>". htmlspecialchars($row['no_hp']) . "</td>
		<td>". htmlspecialchars($row['alamat']) . "</td>
		<td>". htmlspecialchars($row['kota']) . "</td>
		<td>". htmlspecialchars($row['status']) . "</td>
		<td><form action='edit_supp_33.php' method='get'><input name='id' value=". $row['id'] ." type='hidden'><button type=submit>Edit</button></form></td>
		<td><form method='post'><input type='hidden' name='deleteid' value=".$row['id']."><input type='submit' name='delete' value='delete' onclick='return confirm(\"Ini akan menghapus data. Apakah Anda yakin?\")'></form>
</tr>";
	}
	if(isset($_POST['delete'])) {
		$id=$_POST['deleteid'];
		$deletequery = "DELETE FROM tb_fsupp WHERE id='$id'";
		if ($conn->query($deletequery) === FALSE){
			die("Gagal :" .$conn->connect_error);
		}else{
			header("Refresh:0");
		}
	}
	?>
</div>
</table>
Kembali ke <a href=index_supp_33.html>forms</a>
</body>
</html>
