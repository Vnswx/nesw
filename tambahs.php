<?php
include 'koneksi.php';

if(isset($_POST['simpan'])){
    $nama_siswa = $_POST['nama_siswa'];
    $kelas = $_POST['kelas'];
    $alasan_terlambat = $_POST['alasan_terlambat'];

    $sql = "INSERT INTO keterlambatan(nama_siswa, kelas, alasan_terlambat) VALUES('$nama_siswa', '$kelas', '$alasan_terlambat')";

    $query = mysqli_query($connect, $sql);

    if($query){
        header('Location: dasboard.php');
    }else{
        header('Location: tambahs.php?status=gagal');
    }
}
?>