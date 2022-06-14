<?php 
//Direccion del Servidor
$servidor="localhost";
$puertodb="3306";
$usuario="root";
$password="";
$basedatos="usuarios";

//Comprobacion de conexion con el servidor
$conectado=mysqli_connect($servidor,$usuario,$password,$basedatos);
 if (!$conectado){
     echo"Error de conexion en la base de datos";
     exit();
 }
 else{
$consulta="SELECT *FROM usuariodatos";
$resultado=mysqli_query($conectado,$consulta);
}

if($resultado){
    
//Tabla donde se muestran los datos de el servidor    
    echo"<p>ENCUENTRA NUEVOS AMIGOS :) <br> </p>";
    while($registro =mysqli_fetch_array($resultado)){
        echo "<br>";
       
echo "<table>";
echo "<tr>";
echo "<td> NOMBRE </td>";
echo "<td>".$registro ['Nombre']. "</td>";
echo "</tr>";

echo "<tr>";
echo "  <td> GAMERTAG </td>";
echo "  <td>" .$registro ['Gamertag']. "</td>";
echo "</tr>";

echo " <tr>";
echo "  <td> CORREO ELECTRONICO </td>";
echo "  <td>"  .$registro ['CorreoElectronico']. "</td>";
echo "</tr>";

echo "<tr>";
echo "  <td> NUMERO </td>";
echo "<td> " .$registro ['Numero']. "</td>";
echo " </tr>";

echo "<tr>";
echo "  <td> PAIS </td>";
echo "<td> " .$registro ['Pais']. "</td>";
echo " </tr>";

    }
    
}
//lo que se mostrara en caso de que no se conecte a la base de datos
else{
echo"no se pudo consultar";
}
echo '<a href="index.html">REGRESAR</a>';
 ?> 
<style>
    body{
  text-align: center;
  background-color:black;
 
}
p{
    
    color: white;
}
table{
   
    text-align: center;
			width:60%;
            margin:auto;
			
			border:5px solid white;
		}
		td,th{
           padding:10px;
            text-align: center;
			border:5px solid white;
            color: white;
		}
 
a{
    font-family: fantasy;
    text-decoration:none ;
    color:white;
}       
a:hover {
  background-color: white ;
  color: black;
  text-shadow: 1px 1px 0px black; 
}

</style>