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

    <title>EDIT SISWA</title>
</head>
<body>
<div class="bungkus">
   <div class="bungkus-dalem">
    <center>
    <?php include('pesan.php'); ?>
        <h3 class="judul">EDIT SISWA | <a href="index.php">Kembali</a></h2>
        <form action="coding.php" method="POST" class="form1" enctype="multipart/form-data" name="form-eksperimen">
        <?php
                        if(isset($_GET['id']))
                        {
                            $id_siswa = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM siswa WHERE id='$id_siswa' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $siswa = mysqli_fetch_array($query_run);
                                ?>
    

        <input type="hidden" name="id_siswa" value="<?= $siswa['id']; ?>">


            <div class="form-bungkus">
                <label for="" class="label-form">Nama</label>
                <input type="text" name="nama_siswa" class="form-pendek" id="" value="<?=$siswa['nama'];?>" placeholder="Masukan Nama Anda"></div>
    

            <div class="form-bungkus">
            <label for="" class="label-form">Absen</label>
            <input type="text" name="absen_siswa" class="form-pendek" id="" value="<?=$siswa['absen'];?>" placeholder="Masukan Absen Anda"></div>
    

            <div class="form-bungkus">
            <label for="" class="label-form">Kelas</label>
            <input type="text" name="kelas_siswa" class="form-pendek" id="" value="<?=$siswa['kelas'];?>" placeholder="Masukan Kelas Anda"></input></div>


            <div class="form-bungkus">
            <input type="file" name="foto_siswa" class="form-file" value="<?=$siswa['foto'];?>" id="file-form" placeholder="Masukan Foto Anda" ></div>
                
        <button type="submit" name="update" value="send" class="button btn-kirim">Update Siswa</button>

        <button class="button btn-loading d-none"><span class="loader"></span></button>
        <?php
                            }
                            else
                            {
                                echo "<h4>SKIP GAK BISA NIH KACIW</h4>";
                            }
                        }
                        ?>
       
        </form>
        </center>
                    </div>
                    </div>
       
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>