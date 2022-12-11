<?php
session_start();
require 'conf.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="tambah.css">

    <title>EDIT SISWA</title>
</head>
<body>
  
<div class="bungkus">
   <div class="bungkus-dalem">
    <center>
</center>
<?php
                        if(isset($_GET['id']))
                        {
                            $id_siswa= mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM siswa WHERE id='$id_siswa' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $siswa = mysqli_fetch_array($query_run);
                                ?>
		<div class="kiri">
       <img src="berkas/<?=$siswa['foto'];?>" "  height="350em" width="350em" alt=""></div>
	   <div class="kanan">
	   <h2>Nama : <?=$siswa['nama'];?></h2><br><br>
	   <h2>Kelas : <?=$siswa['absen'];?></h2><br><br>
	   <h2>Absen : <?=$siswa['kelas'];?></h2><br><br>
	   <a href="index.php">Kembali</a>
	   <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
						?>
	   </div>
   </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
