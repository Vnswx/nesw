<?php
include 'koneksi.php';
if(isset($_POST['simpan'])) {
    $no = $_POST['no'];
    $nama_siswa = $_POST['nama_siswa'];
    $kelas = $_POST['kelas'];
    $alasan_terlambat = $_POST['alasan_terlambat']; 

    $sql =  "UPDATE keterlambatan SET no='$no',nama_siswa='$nama_siswa',kelas='$kelas',alasan_terlambat='$alasan_terlambat' WHERE 1"
    $query = mysqLi_query($connect, $sql); 
    if($query){
    header('Location: dasboard.php'); 
    }else{
    header('Location: edit.php?status=error'); 
    }
}
?>