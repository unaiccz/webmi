<?php
$conn = mysqli_connect('localhost','root','','blog');
if(!$conn){

    die('error al conectar');
}else{

$qr = "SELECT * FROM registro";



$eject = mysqli_query($conn,$qr);
echo "<table>";
echo "<thead>";
echo "<tr>";

echo "<th>";
echo "id";
echo "</th>";
echo "<th>";
echo "nombre";
echo "</th>";
echo "<th>";
echo "apellidos";
echo "</th>";
echo "<th>";
echo "username";
echo "</th>";
echo "</tr>";

echo "</thead>";
while($row=mysqli_fetch_assoc($eject)){

echo "<tr>";

echo "<td>";

echo $row['id'].'';
echo "</td>";
echo "<td>";

echo $row['nombre'].'';
echo "</td>";
echo "<td>";

echo $row['apellidos'].'';
echo "</td>";
echo "<td>";

echo $row['username'].'';
echo "</td>";
echo "</tr>";




}
echo "</table>";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
<div class="menu">
    <img src="img/lista.png" alt="" class="desplegable" onclick="desp()">
    <div class="lateral">
       <ul id="items">
       <li> <a href="listado.php" class="item">Home</a></li>
        <li><a href="#" class="item">Abaut</a></li>
        <li><a href="blog.html" class="item">Blog</a></li>
        <li><a href="#" class="item">Cositas</a></li>
       </dul>
  </div>
    </div>
    <script src="js/index.js"></script>
</body>
</html>