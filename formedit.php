<?php
include 'koneksi.php';

$no = $_GET['no'];
$sql = "SELECT * FROM keterlambatan WHERE no='$no'";
$query = mysqli_query($connect, $sql);
$r22 = mysqli_fetch_assoc($query);
if(mysqli_num_rows($query) <1){
    die ("data tidak ditemukan");
}
?>

<?php
    include ('header.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link rel="stylesheet" href="yaiya.css">
</head>
<body>
    <br>
    <br>
    <form action="edit.php" method="post">
        <h3>Edit Data baranssg</h3>
        <table class="oiu">
                <tr>
                    <td><label class="ok">No : </label></td>
                    <td><input value="<?php echo $r22['no']?>" class="input" type="number" name="no"></td>
                </tr>
                <tr>
                    <td><label class="ok">Nama Siswa : </label></td>
                    <td><input value="<?php echo $r22['nama_siswa']?>" class="input" required="required" type="text" name="nama_siswa"></td>
                </tr>
                <tr>
                    <td><label class="ok">Kelas : </label></td>
                    <td><input required="required" value="<?php echo $r22['kelas']?>" class="input" name="kelas" type="text"></td>
                </tr>
                <tr>
                    <td><label class="ok">Alasan Terlambat : </label></td>
                    <td><input value="<?php echo $r22['alasan_terlambat']?>" class="input" required="required" type="text" name="alasan_terlambat"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="simpan" value="simpan" class="oj"></td>
                </tr>
            </table>
    </form>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <?php
        include ('footer.php')
    ?>
</body>
</html>
