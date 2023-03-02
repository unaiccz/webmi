<?php

if($_POST){

    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $edad = $_POST['edad'];
    $sexo=$_POST['sexo'];
    $aficion = $_POST['aficion'];
    $provincia = $_POST['provincia'];
}
echo '<pre>';


echo $nombre;
echo $apellidos;
echo $username;
echo $password;
echo $edad;
echo $aficion;
echo $provincia;
echo $sexo;
echo '</pre>';
$con = mysqli_connect('localhost','root','','blog');
$qr = "INSERT INTO registro(nombre,apellidos,username,password,edad,sexo,aficiones,provincia) 

VALUES('$nombre','$apellidos','$username','$password','$edad','$sexo','$aficion','$provincia') ";
$ejct = mysqli_query($con,$qr);
mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>

    <a href="blog.php">registro</a>
    <a href="index.html">inicio</a>
    </nav>
</body>
</html>