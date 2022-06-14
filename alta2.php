<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="tabla.php" method="">
        <input type="submit" value="consultar">
    </form>
</body>
</html>

<?php 
$servidor="localhost";
$puertodb="3306";
$usuario="root";
$password="";
$basedatos="usuarios";

$conectado=mysqli_connect($servidor,$usuario,$password,$basedatos);
 if (!$conectado){
     echo"Error de conexion en la base de datos";
     exit();
 }
 else{
    $nombreUsuario=$_POST["nombreUsuario"];
    $gamertag=$_POST["gamertag"];
    $CorreoElectronico=$_POST["CorreoElectronico"];
    $telefono=$_POST["telefono"];
    $pais=$_POST["pais"];

    $consulta="INSERT INTO usuariodatos (Nombre,Gamertag,CorreoElectronico,Numero,Pais)
     VALUES ('$nombreUsuario','$gamertag','$CorreoElectronico','$telefono','$pais')";
     }
     $insertLado=mysqli_query($conectado,$consulta);
     if($insertLado){
         echo"Registro agregado";
     }
     else{
         echo"Error: No se pudo agregar el registro";
     }



     ?> 
 <style>
    body{
  text-align: center;
  background-color:black;
}

</style>
 