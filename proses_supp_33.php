<?php
#Vincentius Daniel B 12A6 33
$conn = new mysqli("localhost", "root", "", "db_12a6_33");
if ($conn->connect_errno) {
  die("Gagal Koneksi: " . $conn->connect_error);
 }
$query = "insert into tb_fsupp (kode, nama, email, no_hp, alamat, kota, status)
  values (
		\"" . $conn->real_escape_string($_POST["kode"]) . "\",
		\"" . $conn->real_escape_string($_POST["nama"]) . "\",
		\"" . $conn->real_escape_string($_POST["email"]) . "\",
		\"" . $conn->real_escape_string($_POST["no_hp"]) . "\",
		\"" . $conn->real_escape_string($_POST["alamat"]) . "\",
		\"" . $conn->real_escape_string($_POST["kota"]) . "\",
		\"" . $conn->real_escape_string($_POST["status"]) . "\");";
$result = $conn->query($query);
if (!$result) {
	die("Gagal");
 }else{?>
  <html>
   <link rel="stylesheet" href="style.css">
   <body><div class=box align=center>
     <h2>DATA BERHASIL TERKIRIM </h2>
     Kembali ke <a href=index_supp_33.html>forms</a><br>
     Melihat atau mengedit <a href=tampil_supp_33.php>isi tabel</a>
     <div class="tenor-gif-embed" data-postid="27021837" data-share-method="host" data-aspect-ratio="0.628125" data-width="30%"><a href="https://tenor.com/view/bocchi-the-rock-bocchi-nijika-ijichi-pachi-pachi-pachi-gif-27021837">Bocchi The Rock Nijika Ijichi GIF</a>from <a href="https://tenor.com/search/bocchi+the+rock-gifs">Bocchi The Rock GIFs</a></div> <script type="text/javascript" async src="https://tenor.com/embed.js"></script>
   </div></body>
  </html>
<?php } ?>
