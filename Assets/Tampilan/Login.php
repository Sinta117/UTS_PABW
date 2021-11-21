<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Login.css">
    <title>SIAP</title>
     <!-- boostrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php
if(isset($_GET['pesan'])){
	if($_GET['pesan'] == "gagal"){
		echo "Login gagal! username dan password salah!";
	}else if($_GET['pesan'] == "belum_login"){
	echo "<script>alert('Anda harus login untuk mengakses halaman admin')</script>";
	}
}
?>
    
<div class="container"> 
    <div class="Judul">
        <h4>PEMERINTAH KABUPATEN SUKABUMI</h4>
        <h4>BAGIAN PROTOKOL DAN KOMUNIKASI PIMPINAN</h4>
        <img src="Kabupaten Sukabumi.png" alt="logo">

        <Div class="card">
           <form action="auth.php" method="post" onSubmit="return valdasi()" >
               <tr>
                   <td>
                       <label for="" class="form-label" >Username:</label>
                       <input type="text" name="username" class="form-control" id="Username" placeholder="Maukan Username">
                   </td>
               </tr>
               <tr>
                   <td>
                       <label for="" class="form-label" >Password:</label>
                       <input type="password" name="password" class="form-control mb-4" id="password" placeholder="Masukan Password">
                   </td>
               </tr>
               <button class="btn btn-primary mt-4">login</button>
            </form>
             
        </div>

    </DIv>
  
    

</div>
</body>
</html>