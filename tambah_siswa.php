<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="bungkus">
   <div class="bungkus-dalem">
    <center>
    <?php include('pesan.php'); ?>
        <h3 class="judul">Tambah Siswa | <a href="index.php">Kembali</a></h2>
        <form action="coding.php" method="POST" class="form1" enctype="multipart/form-data" name="form-eksperimen">

            <div class="form-bungkus">
                <label for="" class="label-form">Nama</label>
                <input type="text" name="nama_siswa" class="form-pendek" id="" placeholder="Masukan Nama Anda"></div>
    

            <div class="form-bungkus">
            <label for="" class="label-form">Absen</label>
            <input type="text" name="absen_siswa" class="form-pendek" id="" placeholder="Masukan Absen Anda"></div>
    

            <div class="form-bungkus">
            <label for="" class="label-form">Kelas</label>
            <input type="text" name="kelas_siswa" class="form-pendek" id="" placeholder="Masukan Kelas Anda"></input></div>


            <div class="form-bungkus">
            <input type="file" name="foto_siswa" class="form-file" id="file-form" placeholder="Masukan Foto Anda"  accept="image/*"></div>
                
        <button type="submit" name="tambah" value="send" class="button btn-kirim">Tambah Siswa</button>

        <button class="button btn-loading d-none"><span class="loader"></span></button>
    </center>
        </form>
   </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>