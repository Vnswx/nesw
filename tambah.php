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
            <div class="new">
        <form action="simpan.php" method="post">
            <table class="oiu">
                <tr>
                    <td><label class="ok">No : </label></td>
                    <td><input class="input" required="required" type="number" name="no"></td>
                </tr>
                <tr>
                    <td><label class="ok">Nama Siswa : </label></td>
                    <td><input class="input" required="required" type="text" name="nama_peminjam"></td>
                </tr>
                <br>
                <tr>
                    <td><label class="ok">Kelas : </label></td>
                    <td><input class="input" required="required" type="text" name="nama_barang"></td>
                </tr>
                <tr>
                    <td><label class="ok">Alasan Terlambat : </label></td>
                    <td><input class="input" required="required" type="text" name="jenis_barang"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="simpan" value="simpan" class="oj"></td>
                </tr>
            </table>
            <br>
    </div>    
    <?php include ('footer.php') ?>
</body>
</html>