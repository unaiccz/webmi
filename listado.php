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
echo "</tr>";




}
echo "</table>";
}


?>