<?php
include 'koneksi.php';

$no = $_GET['no'];

$sql = "DELETE FROM keterlambatan WHERE no='$no'";
$query = mysqli_query($connect, $sql);

if(isset($_GET['no'])) {
    header ('Location: dasboard.php');
}
else {
    header('Location: hapus.php?status=gagal');
}
?>