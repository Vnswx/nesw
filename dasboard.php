<?php
    include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/cc2a263139.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        <?php
            include "style.css";
        ?>
    </style>
</head>
<body>
    <?php
        include "header.php";
    ?>
    <br>
    <br>
    <br>
        <main>
        <h1 style="position: relative; left: 90px; width: 40px; font-size: 60px;">Keterlambatan</h1>
            <p>
                <a href="tambah.php">
                    <i class='fa-solid fa-arrow-up-from-bracket' id='aa' style="position: relative; left: 90px;">
                    </i>
                </a>
            </p>
            <div class="container-md">
            <table class="table table-hover">
                    <tr>
                        <th class="col-1">No</th>
                        <th>Nama Siswa</th>
                        <th>Kelas</th>
                        <th>Alasan Terlambat</th>
                        <th class="col-2">opsi</th>
                    </tr>

                 <?php
                $d22 = "SELECT * FROM keterlambatan";
                $f22 = mysqli_query($connect, $d22);
                while($r22 = mysqli_fetch_array ($f22)){
                    echo"
                    <tr>
                        <td>$r22[no]</td>
                        <td>$r22[nama_siswa]</td>
                        <td>$r22[kelas]</td>
                        <td>$r22[alasan_terlambat]</td>
                        <td>
                        <a href='formedit.php?no=$r22[no]'><i class='fa-solid fa-pen-to-square 'id='ae'></i></a>
                        <a href='hapus.php?no=$r22[no]'><i class='fa-solid fa-trash-can' id='ae'></i></a>
                        </td>
                    </tr>
                    ";
                };
                ?>
            </table>
            </div>
        </main>
        <br>
        <br>
        <br>
    <?php
        include "footer.php";
    ?>
</body>
</html>