<?php
#VINCENTIUS DANIEL B XIIA6/33
$conn = new mysqli("localhost", "root", "", "db_12a6_33");
if ($conn->connect_errno) {
  die("Gagal Koneksi: " . $conn->connect_error);
 }

$id=$_GET["id"];
$kode=$_GET["kode"];
$nama=$_GET["nama"];
$email=$_GET["email"];
$no_hp=$_GET["no_hp"];
$alamat=$_GET["alamat"];
$kota=$_GET["kota"];
$status=$_GET["status"];

$sql = "UPDATE tb_fsupp SET
  id='$id',
  kode='$kode',
  nama='$nama',
  email='$email',
  no_hp='$no_hp',
  alamat='$alamat',
  kota='$kota',
  status='$status'
  WHERE id='$id';";

if ($conn->query($sql) === FALSE) {
  die("Update gagal: " . $conn->error);
} else {?>
  <html>
  <html>
   <link rel="stylesheet" href="style.css">
   <body><div class=box align=center> <h2>DATA BERHASIL UPDATE</h2>
    Kembali ke <a href=index_supp_33.html>forms</a><br>
    Melihat atau mengedit <a href=tampil_supp_33.php>isi tabel</a>
    <div class="tenor-gif-embed" data-postid="27021837" data-share-method="host" data-aspect-ratio="0.628125" data-width="30%"><a href="https://tenor.com/view/bocchi-the-rock-bocchi-nijika-ijichi-pachi-pachi-pachi-gif-27021837">Bocchi The Rock Nijika Ijichi GIF</a>from <a href="https://tenor.com/search/bocchi+the+rock-gifs">Bocchi The Rock GIFs</a></div> <script type="text/javascript" async src="https://tenor.com/embed.js"></script>
   </body></div>
  </html>
<?php } ?>
