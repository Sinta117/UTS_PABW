<?php
include "koneksi.php";
?>
<?php
$squery = mysqli_query($koneksi,"SELECT * FROM db_layanan ORDER BY id DESC");
if(isset($_GET['id'])){
  $squeri = mysqli_query($koneksi,"DELETE FROM db_layanan WHERE id='$_GET[id]'");
  echo"
  <script>
  alert('data berhasil di hapus');
  document.location.href='kegiatan.php';
  </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIAP</title>
    <!-- boostrap -->
    
  
    <link rel="stylesheet" href="Beranda.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <!-- navbar -->
    <div class="navbar">
        <a href="index.html" id="logo">
            <img src="Kabupaten Sukabumi.png" alt="logo">
            <p>SISTEM INFORMASI AGENDA PIMPINAN</p>
        </a>
        <div class="navbar-right">
            <a class="" href="beranda.php">Home</a>
            <a href="kegiatan.php">Kegiatan</a>
            <a href="Login.html">Logout</a>
        </div>
    </div>

    <div>
    <table class="table table-bordered mt-5">
          <thead>
            <tr>
              <th scope="col">NO</th>
              <th scope="col">NAMA KEGIATAN</th>
              <th scope="col">YANG HADIR</th>
              <th scope="col">LOKASI KEGIATAN</th>
              <th scope="col">RILIS KEGIATAN</th>
              <th scope="col">AKSI</th>
            </tr>
            <?php
            if(isset($_GET['cari'])){
              $cari = $_GET['cari'];
              $squeri = mysqli_query($koneksi, "select * from db_layanan where nama_kegiatan like '%".$cari."%'");
            }else{
              $squeri = mysqli_query($koneksi, "select * from db_layanan");
            }
            $no = 1;
            while($d = mysqli_fetch_array($squeri)){
            ?>  
          </thead>
          <tbody>
            <tr>
              <td><?php echo $no++ ?></td> 
              <td><?php echo $d["nama_kegiatan"];?></td>
              <td><?php echo $d["daftar_hadir"];?></td>
              <td><?php echo $d["lokasi"];?></td>
              <td><?php echo $d["rilis_kegiatan"];?></td>
              <td>
              <a href='?id=<?php echo $d["id"]?>' class="btn btn-danger">Delete</a>
              </td>
            </tr>
          <?php } ?>
          </tbody>
      </table>
    </div>
</main>
</body>
</html>