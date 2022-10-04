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
<br>
<br>
<br>

                <a href="dasboard.php" class="navbar-brand">
                    <input type="button" class="btn btn-secondary" value="kembali" style="position: relative; left: 10px; top: 5px;">
                </a>
            <div class="new">
        <form action="tambahs.php" method="post">
            <table class="oiu">
                <tr>
                    <td><label class="ok">No : </label></td>
                    <td><input class="input" required="required" type="number" name="no"></td>
                    <br>
                </tr>
                <tr>
<<<<<<< HEAD
                    <td><label class="ok">Nama siswa : </label></td>
=======
                    <td><label class="ok">Nama Siswa : </label></td>
>>>>>>> a28e9a423cace353a030d1f3eea7a50f88d9d53c
                    <td><input class="input" required="required" type="text" name="nama_peminjam"></td>
                </tr>
                <br>
                <tr>
<<<<<<< HEAD
                    <td><label class="ok">kelas : </label></td>
                    <td><input required="required" class="input" type="text" name="stock_barang"></td>
                </tr>
                <tr>
                    <td><label class="ok">Alasan terlambat : </label></td>
                    <td><input class="input" required="required" type="text" name="nama_barang"></td>
                </tr>
                <tr>
=======
                    <td><label class="ok">Kelas : </label></td>
                    <td><input class="input" required="required" type="text" name="nama_barang"></td>
                </tr>
                <tr>
                    <td><label class="ok">Alasan Terlambat : </label></td>
                    <td><input class="input" required="required" type="text" name="jenis_barang"></td>
                </tr>
                <tr>
>>>>>>> a28e9a423cace353a030d1f3eea7a50f88d9d53c
                    <td><input type="submit" name="simpan" value="simpan" class="oj"></td>
                </tr>
            </table>
            <br>
            <br>
    </div>    
    <?php include ('footer.php') ?>
</body>
</html>