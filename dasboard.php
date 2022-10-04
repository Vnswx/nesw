<?php
    include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include "header.php";
    ?>
        <main>
            <p>
                <a href="login.php">
                    <input type="button" class="btn btn-secondary" value="Kembali" style="position: relative; left: 10px; top: 5px;">
                </a>
            </p>
        <h1 style="position: relative; left: 90px; width: 40px;">keterlambatan</h1>
            <p>
                <a href="input_db.php">
                    <input type="button" class="btn btn-primary" style="position: relative; left: 90px;" value="new">
                </a>
            </p>
            <div class="container-md">
            <table class="table table-hover">
                 <thead>
                    <tr>
                        <th class="col-1">No</th>
                        <th>Nama Siswa</th>
                        <th>Kelas</th>
                        <th>Alasan Terlambat</th>
                        <th class="col-2">opsi</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                        <td>1</td>
                        <td>arkan</td>
                        <td>10 pplg 1</td>
                        <td>Omaga</td>
                        <td>
                        <span class="badge text-bg-warning">Edit</span>
                        <span class="badge text-bg-danger">Delete</span>
                        </td>
                    </tr>
                 </tbody>
            </table>
            </div>
        </main>
    <?php
        include "footer.php";
    ?>
</body>
</html>