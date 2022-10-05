<?php
include 'koneksi.php';

if(isset($_POST['simpan'])){
    $no = $_POST['no'];
    $nama_siswa = $_POST['nama_siswa'];
    $kelas = $_POST['kelas'];
    $alasan_terlambat = $_POST['alasan_terlambat'];

    $sql = "INSERT INTO keterlambatan(no, nama_siswa, kelas, alasan_terlambat) VALUES('$no', '$nama_siswa', '$kelas', '$alasan_terlambat')";

    $query = mysqli_query($connect, $sql);

    if($query){
        header('Location: dasboard.php');
    }else{
        header('Location: tambahs.php?status=gagal');
    }
}
?>