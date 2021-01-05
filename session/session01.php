<?php
    session_start();
    if(isset($_POST['Login']))
    {
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        if($user=='wahyu' && $pass=='123')
    {
        $_SESSION['sesLogin']=$user;
        echo "<h1>Anda berhasil LOGIN</h1>";
        echo "<h2>Klik <a href='session02.php'>disini(session02.php)</a> untuk menuju ke halaman pemeriksaan session";

    }else{
        header("location:$PHP_SELF");
    }
    
    }else{
?>
<html>
<head>
<title>[ Login disini ]</title>
</head>
<body>
<form method="post" action="">
<h2>[ Login Disini ]</h2>
Username : <input type="text" name="user"><br>
Password : <input type="password" name="pass"><br>
<input type="submit" name="Login" value="Log In">

</form>
</body>
</html>
<?php
}
?>