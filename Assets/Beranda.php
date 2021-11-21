<?php
include "koneksi.php";
if (isset ($_POST['upload'])) {
    $nama_kegiatan=$_POST["tex1"];
    $daftar_hadir=$_POST["text2"];
    $lokasi=$_POST["text3"];
    $direktori="storage/";
    $rilis_kegiatan=$_FILES["file"]["name"];
    move_uploaded_file($_FILES["file"]["tmp_name"],$direktori.$rilis_kegiatan);
    $sql="insert into db_layanan(nama_kegiatan,daftar_hadir,lokasi,rilis_kegiatan) values
    ('$nama_kegiatan','$daftar_hadir','$lokasi','$rilis_kegiatan')";
    $hasil=mysqli_query($koneksi,$sql);
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
<?php
session_start();
if($_SESSION['status']!="login"){
    header("location:login.php?pesan=belum_login");
}
?>

<?php echo"<script>alert('Selamat, Anda Berhasil Login')</script>"?>
    <!-- navbar -->
    <div class="navbar">
        <a href="index.html" id="logo">
            <img src="Kabupaten Sukabumi.png" alt="logo">
            <p>SISTEM INFORMASI AGENDA PIMPINAN</p>
        </a>
        <div class="navbar-right">
            <a class="" href="beranda.php">Home</a>
            <a href="kegiatan.php">Kegiatan</a>
            <a href="Logout.php">Logout</a>
        </div>
    </div>
    <div class="inputdata">
        <div class="card">
        <!-- form -->
    <div class="input-data">
        <div class="card">
            <form action="" method="POST" enctype="multipart/form-data">
                <tr>
                    <td>
                        <label>Input Kegiatan :</label>
                        <input type="text" class="form-control" name="tex1" placeholder="Input Kegiatan">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Yang Hadir:</label>
                        <input type="text" class="form-control" name="text2" placeholder="Input Pimpinan">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Lokasi Kegiatan :</label>
                        <input type="text" class="form-control" name="text3" placeholder="Input Lokasi">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Rilis Kegiatan :</label>
                        <input type="file" name="file">
                    </td>
                </tr>

                <input type="submit" name="upload" class="btn btn-primary" value="Upload">
            </form>
        </div>
    
        </div>
    </div>
    </div>
    </div>
</body>
</html>