<?php 
    include 'koneksi.php';

    if(isset($_POST['simpan'])){
        $no = $_POST['no'];
        $nama_siswa = $_POST['nama_siswa'];
        $kelas = $_POST['kelas'];
        $alasan_terlambat= $_POST['alasan_terlambat'];
        

        $sql = "UPDATE keterlmabatan SET nama_siswa = '$nama_siswa', kelas = '$kelas', alasan_terlambat= '$alasan' WHERE barang.no = '$no'";

        $query = mysqli_query($connect, $sql);
        if($query){
            header('Location: tampildatabarang.php');
        }
        else{
            header('Location: simpan_barang.php?status=gagal');
        }
    }
?>