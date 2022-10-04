<?php
    include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<div class="opm" style="display: flex; flex-wrap: wrap;justify-content: center;position: relative;top:  110px; border: black 3px solid; width: 400px; left: 35%; border-radius: 5px; background-color: transparent; height: 400px; border: none; box-shadow: 0 5px 30px black;">
    <div class="logo"><img src="asdw.png" alt=""></div>
    <form method="post">
        <div class="form"><input type="text" name="user" placeholder="Username" required autocomplete="off" style="position: absolute; width: 360px; height: 30px; left: 10px; top: 100px; font-size: 15px;">
        </div>
        <br>
        <div class="form"><input type="password" name="pas" placeholder="Password" required style="position: absolute; width: 360px; height: 30px; left: 10px; top: 165px; font-size: 15px;">
        </div>
        <br>
        <button type="submit" name="login" style="position: absolute; width: 360px; height: 40px; left: 18px; top: 275px; border-radius: 3px; border: none; font-size: 20px; cursor:pointer;">Login</button>
    </form>
</div>

    
    <?php
        if (isset($_POST['login'])) {
            $username = $_POST['user'];
            $password = $_POST['pas'];
            $qer = mysqli_query($connect,"SELECT * FROM login WHERE username = '$username' AND password = md5('$password')");
            
            $tes = mysqli_num_rows($qer);
            if ($tes==1) {
                $_SESSION['userweb']=$username;
                header ("Location:dasboard.php");
                exit;
            }
            else{
                echo "<script>alert('Username atau Passwordmu salah');window.location='login.php'</script>";
            }
        }
    ?>
</body>
</html>