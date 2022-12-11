<?php
session_start();
require 'conf.php';

if(isset($_POST['delete_siswa']))
{
    $id_siswa = mysqli_real_escape_string($con, $_POST['delete_siswa']);

    $query = "DELETE FROM siswa WHERE id='$id_siswa' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "BERHASIL DI-DELETE";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "TIDAK BERHASIL DI-DELETE";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['update']))
{
    $id_siswa = mysqli_real_escape_string($con, $_POST['id_siswa']);

    $nama = mysqli_real_escape_string($con, $_POST['nama_siswa']);
    $absen = mysqli_real_escape_string($con, $_POST['absen_siswa']);
    $kelas = mysqli_real_escape_string($con, $_POST['kelas_siswa']);

    $direktori = "berkas/";
    $nama_file=$_FILES['foto_siswa']['name'];
    move_uploaded_file($_FILES['foto_siswa']['tmp_name'],$direktori.$nama_file);

    $query = "UPDATE siswa SET nama='$nama', absen='$absen', kelas='$kelas', foto='$nama_file' WHERE id='$id_siswa' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "DATA SUKSES DI-UPDATE";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "DATA BELLUM DI-UPDATE";
        header("Location: index.php");
        exit(0);
    }

}



if(isset($_POST['tambah']))
{
    $nama = mysqli_real_escape_string($con, $_POST['nama_siswa']);
    $absen = mysqli_real_escape_string($con, $_POST['absen_siswa']);
    $kelas = mysqli_real_escape_string($con, $_POST['kelas_siswa']);

    $direktori = "berkas/";
    $nama_file=$_FILES['foto_siswa']['name'];
    move_uploaded_file($_FILES['foto_siswa']['tmp_name'],$direktori.$nama_file);

    $query = "INSERT INTO siswa (nama,absen,kelas,foto) VALUES ('$nama','$absen','$kelas','$nama_file')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "SISWA BERHASIL DITAMBAHKAN!!!!";
        header("Location: tambah_siswa.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "SISWA TIDAK BERHASIL DITAMBAHKAN!!";
        header("Location: tambah_siswa.php");
        exit(0);
    }
}

?>