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

    <title>TAMBAH JADWAL</title>
</head>
<body>
  
    <div class="container mt-4">

        <?php include('pesan.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Detail Jadwal CC
                        <a href="tambah_siswa.php" class="btn btn-primary float-end">Tambah Siswa</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>Absen</th>
                                    <th>Kelas</th>
                                    <th>Foto</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM siswa";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $siswa)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $siswa['id']; ?></td>
                                                <td><?= $siswa['nama']; ?></td>
                                                <td><?= $siswa['absen']; ?></td>
                                                <td><?= $siswa['kelas']; ?></td>
                                                <td><img src="berkas/<?= $siswa['foto']; ?>" height="50px" width="50px" alt=""></td>
                                                <td>
                                                    <a href="detail_siswa.php?id=<?= $siswa['id']; ?>" class="btn btn-info btn-sm">View</a>
                                                    <a href="edit_siswa.php?id=<?= $siswa['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                    <form action="coding.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_siswa" value="<?=$siswa['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>