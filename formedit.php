<?php
include 'koneksi.php';

$id_barang = $_GET['no'];
$sql = "SELECT * FROM keterlambatan WHERE no='$no'";
$query = mysqli_query($connect, $sql);
$pel = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) <1){
    die ("data tidak ditemukan");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
    <form action="edit.php" method="post">
        <h3>Edit Data barang</h3>
        <p><label>No : <input value="<?php echo $pel['no']?>" required="required" type="number" name="no"></label></p>
        <p><label>Nama Siswa: <input value="<?php echo $pel['nama_siswa']?>" required="required" type="text" name="nama_siswa"></label></p>
        <p><label>Kelas: <input value="<?php echo $pel['kelas']?>" required="required" type="text" name="kelas"></label></p>
        <p><label>Alasan terlambat : <input value="<?php echo $pel['alasan_terlambat']?>" required="required" type="text" name="alasan_terlambat"></label></p>

        <input type="submit" name="simpan" value="simpan">
    </form>
</body>
</html>
