<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="tambah.css">
</head>
<body>
<?php
    include ('header.php')
?>
                <a href="dasboard.php" class="navbar-brand">
                    <input type="button" class="btn btn-secondary" value="kembali" style="position: relative; left: 10px; top: 5px;">
                </a>
<br>
<br>
<br>
            <div class="new">
        <form action="tambahs.php" method="post">
            <table class="oiu">
                <tr>
                    <td><label class="ok">Nama Siswa : </label></td>
                    <td><input class="input" required="required" type="text" name="nama_siswa"></td>
                <tr>
                    <td><label class="ok">Kelas : </label></td>
                    <td><input class="input" required="required" type="text" name="kelas"></td>
                </tr>
                <tr>
                    <td><label class="ok">Alasan Terlambat : </label></td>
                    <td><input class="input" required="required" type="text" name="alasan_terlambat"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="simpan" value="simpan" class="oj"></td>
                </tr>
            </table>
            <br>
            <br>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <?php include ('footer.php') ?>
</body>
</html>