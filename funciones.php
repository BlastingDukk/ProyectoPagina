<?php

//FUNCION QUE BORRA UN REGISTRO DE EL SERVIDOR
function borrar(){
    $server = "localhost";
    $puertodb = "3306";
    $usuario = "root";
    $contraseña = "";
    $basedatos = "usuarios";

  $conexion = mysqli_connect($server, $usuario, $contraseña, $basedatos);
  if(!$conexion){
    echo "<script>alert('Error de conexion a la base de datos');</script>";
  }
    else{
      $gamertagEliminar = $_POST["gamertag"];
      $correoUsuarioEliminar = $_POST["CorreoElectronico"];
      $consulta = "DELETE FROM usuariodatos WHERE Gamertag = '$gamertagEliminar' AND CorreoElectronico = '$correoUsuarioEliminar'";
      $insertado = mysqli_query($conexion, $consulta);

      if($insertado){
         return "REGISTRO ELIMINADO";
     }else
        {
         return "No se pudo eliminar el registro";
         }
        
  }

}
//FUNCION QUE BUSCA LOS DATOS DE UN REGISTRO DESDE EL DATO GAMERTAG
function buscar(){
  $server = "localhost";
  $puertodb = "3306";
  $usuario = "root";
  $contraseña = "";
  $basedatos = "usuarios";

  $conexion = mysqli_connect($server, $usuario, $contraseña, $basedatos);
if(!$conexion){
  echo "<script>alert('Error de conexion a la base de datos');</script>";
}
  else{
      $gamertag= $_POST["gamertag"];
      
      $consulta = "SELECT * FROM usuariodatos WHERE Gamertag = '$gamertag'";
      $resultado = mysqli_query($conexion, $consulta);
      if($resultado){
        return mysqli_fetch_array($resultado);
      }else{
        return false;
      }

}
}
//FUNCION QUE MODIFICA LOS DATOS DE UN REGISTRO
function modificar(){
    $server = "localhost";
    $puertodb = "3306";
    $usuario = "root";
    $contraseña = "";
    $basedatos = "usuarios";

    $conexion = mysqli_connect($server, $usuario, $contraseña, $basedatos);
  if(!$conexion){
    echo "<script>alert('Error de conexion a la base de datos');</script>";
  }
    else{
      $nombre= $_POST["nombreUsuario"];
     $gamertag = $_POST["gamertag"];
     $correoElectronico = $_POST["CorreoElectronico"];
     $telefono = $_POST["telefono"]; 
     $pais = $_POST["pais"];
     $gamertagOriginal = $_POST["gamertagOriginal"];
     $consulta = "UPDATE usuariodatos SET Nombre = '$nombre',Gamertag = '$gamertag',CorreoElectronico = '$correoElectronico',Numero = '$telefono',Pais = '$pais' WHERE Gamertag = '$gamertagOriginal'";
     $insertado = mysqli_query($conexion, $consulta);

     if($insertado){
      echo "<script>alert('Usuario modificado correctamente');</script>";
     }else{
       echo "<script>alert('Error de modificacion');</script>";
     }
  }
}
//FUNCION PARA REALIZAR LA COMPRA DE UN JUEG
function compra(){
  $juegoCompra = "";
    $precio = 0;
    switch ($_POST["compra"]){
        case "cuphead":{
            $juegoCompra = "Cuphead";
            $precio = 381.63;
            break;
        }
        case "gears5":{
            $juegoCompra = "Gears 5";
            $precio = 809.50;
            break;
        }
        case "gta5":{
            $juegoCompra = "Gta 5";
            $precio = 919;
            break;
        }
        case "haloInfinite":{
            $juegoCompra = "Halo Infinite";
            $precio = 499;
            break;
        }
        default:{break;}

    }
  echo "<script>if(confirm('Juego elegido: ".$juegoCompra."')){
    var cantProduct = prompt ('¿Que cantidad desea comprar?');
    var direccion = prompt ('Ingresa tu Direccion');
    var total = cantProduct * ".$precio.";
    alert('Selecciono la cantidad de '+cantProduct+' titulos '+ '".$juegoCompra." ' + ' que se enviaran a: '+ direccion + ' con un TOTAL de: $'+total);
    prompt ('Ingrese los numeros de su tarjeta de debito o credito:');
    prompt ('Ingresa tu nip');
    alert ('Compra realizada exitosamente :) ');
}else{alert('Siga navegando :D');}</script>"    ;

}
//FUNCION PARA REALIZAR LA COMPRA DE UNA MEMBRESIA
function compra2(){
  $membresiaCompra = "";
    $precio = 0;
    switch ($_POST["compra2"]){
        case "gamepass":{
            $membresiaCompra = "Game Pass";
            $precio = 1159.00;
            break;
        }
        case "gamepassultimate":{
            $membresiaCompra = "Game Pass Ultimate";
            $precio = 2959.55;
            break;
        }
        case "xboxlive":{
            $membresiaCompra = "Xbox Live";
            $precio = 1149.56;
            break;
        }
        case "xboxlivegold":{
            $membresiaCompra = "Xbox Live Gold";
            $precio = 1242.44;
            break;
        }
        default:{break;}

    }
  echo "<script>if(confirm('Membresia elegida: ".$membresiaCompra."')){
    var cantProduct = prompt ('¿Que cantidad desea comprar?');
    var total = cantProduct * ".$precio.";
    alert('Selecciono la cantidad de '+cantProduct+' membresias '+ '".$membresiaCompra." ' + ' con un TOTAL de: $'+total);
    prompt ('Ingrese los numeros de su tarjeta de debito o credito:');
    prompt ('Ingresa tu nip');
    prompt ('Ingresa tu Gamertag');
    alert ('Compra realizada exitosamente, ya cuentas con la membresia en tu cuenta de Xbox :) ');
}else{alert('Siga navegando :D');}</script>"    ;

}
