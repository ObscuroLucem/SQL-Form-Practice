<?php
  $conn = new mysqli("localhost", "root", "", "db_12a6_33");
  if ($conn->connect_errno) {
    die("Gagal Koneksi: " . $conn->connect_error);
  }
  $id=$_GET['id'];
  $query = "SELECT * FROM tb_fsupp WHERE id=$id";
  $result = mysqli_query($conn, $query);
  $data = mysqli_fetch_array($result);
?>
<html>
<link rel="stylesheet" href="style.css">
<body>
  <img class=logo src="https://upload.wikimedia.org/wikipedia/commons/a/a8/Bocchi_the_Rock%21_logo.svg">
  <div class="box"><div align=center><h2 style="padding:15px; margin:auto; width: 400px;">
    Form Update Data Supplier</h2><div style="padding: 0 0 20px 0;">
    Vincentius Daniel B XIIA6/33</div></div>
    <div class="forms"><form method=get action="update_supp_33.php">
      <table><tr><td>
        <input name=id value="<?php echo $data["id"]?>" type=hidden>
        Kode Supplier</td><td><Input maxlength=50 type=text name="kode" value="<?php echo $data['kode'] ?>" required></td></tr><tr><td>
        Nama Supplier</td><td><Input maxlength=50 type=text name="nama" value="<?php echo $data['nama'] ?>" required> </td></tr><tr><td>
        Email</td><td><Input maxlength=100 type=text name="email" value="<?php echo $data['email']?>" required> </td></tr><tr><td>
        No Handphone</td><td><Input maxlength=50 type=text name="no_hp" value="<?php echo $data['no_hp']?>" required> </td></tr><tr><td><style="vertical-align: top;">
        Alamat</td><td><textarea maxlength=200 rows=4 name="alamat" required><?php echo $data['alamat']?></textarea></td></tr><tr><td>
        Kota</td><td><Input maxlength=50 type=text name="kota" value="<?php echo $data['kota']?>" required> </td></tr><tr><td>
        Status</td><td><Input maxlength=50 type=text name="status" value="<?php echo $data['status']?>" required> </td></tr><tr><td>
      </table>
      <input type=submit>
      <input type=reset>
    </div></form>
    <div class="clearfix">
      <iframe class="video" src="https://www.youtube.com/embed/YfeSBOCNIJo?mute=1&controls=0&loop=1&playlist=YfeSBOCNIJo&autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share;" allowfullscreen> </iframe>
    </div>
  </div>
  <div class=txtmove><img src="https://bocchi.rocks/assets/img/page/character/ikuyo/name.svg"></div>
</body>
</html>
