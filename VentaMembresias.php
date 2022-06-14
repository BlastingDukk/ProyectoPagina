<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membresias</title>
</head>

<body>
    <div class="contenido">

    <div class="header">
        <div class="logo">
            <img class="logoIMG" src="logoShare.png">   
        </div>
    <div class="menus">
        <a href="index.html">INICIA SESION</a>  
        <a href="eliminarCuenta.html">ELIMINAR CUENTA</a>  
        <a href="modificarDatos.html">MODIFICAR DATOS</a>    
        <a href="BuscaCuenta.html">ENCUENTRA UN AMIGO</a>  
        <a href="VentaJuegos.php">JUEGOS</a> 
        <a href="VentaMembresias.php">MEMBRESIAS</a>       
    </div>  
</div>

<div class="Introduccion">

<br>       
      <h1>ENCUENTRA JUEGOS Y AMIGOS EN XBOX :)</h1> 

   

<table>
    <tr>
        <td><img class="AnunciosIMG"src="anuncios/GamePassInfo.webp"></td>
        <td><img class="AnunciosIMG"src="anuncios/GruposXbox.jpg"></td>
        <td><img class="AnunciosIMG"src="anuncios/JuegosGamePass.jpg"></td>
        <td><img class="AnunciosIMG"src="anuncios/perfilXbox.jpg"></td>
    </tr>
    <tr>
        <td class = "textAnuncios">
            CUANDO CUENTAS CON ACCESO A UNA MEMBRESIA DE XBOX PUEDES ACCEDER
            A OTRAS EXPERIENCIAS EN TU CONSOLA DE XBOX, PC WINDOWS Y APP PARA
            CELULARES DE XBOX. 
        </td>

        <td class = "textAnuncios">
            AGREGA AMIGOS Y MANTENTE EN CONTACTO CON ELLOS DESDE LOS GRUPOS DE XBOX. 
        </td>

        <td class = "textAnuncios">
        DISFRUTA DE MAS DE 100 JUEGOS COMPETITIVOS Y COOPERATIVOS. 
        </td>

        <td class = "textAnuncios">
           EDITA TU GAMERTAG, UTILIZA UNA NUEVA FOTO DE PERFIL, AGREGA AMIGOS Y MUCHO MAS.  
        </td>

    </tr>
</table>
<h1>MEMBRESIAS DE XBOX</h1> 
<table>
    <tr>
        <td><img class="MembresiasIMG"src="membresias/gamePass.png"></td>
        <td><img class="MembresiasIMG"src="membresias/gamePassUltimate.webp"></td>
        <td><img class="MembresiasIMG"src="membresias/xboxLive.png"></td>
        <td><img class="MembresiasIMG"src="membresias/xboxLiveGold.webp"></td>
    </tr>
    <tr>
        <td class = "textAnuncios">
            XBOX GAME PASS ES UN SERVICIO DE SUSCRIPCIÓN DESARROLLADO POR MICROSOFT PARA USAR CON LAS CONSOLAS DE VIDEOJUEGOS XBOX ONE Y XBOX SERIES X|S.
            <br>PRECIO:MXN$1159.00
        </td>

        <td class = "textAnuncios">
            XBOX GAME PASS ULTIMATE INCLUYE TODAS LAS RECOMPENSAS DE XBOX LIVE GOLD, ADEMÁS DE MÁS DE 100 JUEGOS DE ALTA CALIDAD PARA CONSOLA Y PC. 
            AGREGAMOS NUEVOS JUEGOS CONSTANTEMENTE, POR LO QUE SIEMPRE HABRÁ ALGO NUEVO PARA DISFRUTAR.
            <br>PRECIO:MXN$2959.55
        </td>

        <td class = "textAnuncios">
            ES EL SERVICIO DE VIDEOJUEGOS EN LÍNEA DE MICROSOFT QUE DA SOPORTE A LOS VIDEOJUEGOS MULTIJUGADOR DE SUS VIDEOCONSOLAS XBOX SERIES X|S.
            <br>PRECIO:MXN$1149.56
        </td>

        <td class = "textAnuncios">
            CON XBOX LIVE GOLD, OBTENDRÁS JUEGOS MULTIJUGADOR, JUEGOS GRATUITOS, DESCUENTOS PARA JUEGOS Y MUCHO MÁS.
            <br>PRECIO:MXN$1242.44
        </td>
        </tr>
        <tr>
        <td><form action = "VentaMembresias.php" method = "post"><button type = "submit" value = "gamepass" name = "compra2">Comprar</button></form></td>
        <td><form action = "VentaMembresias.php" method = "post"><button type = "submit" value = "gamepassultimate" name = "compra2">Comprar</button></form></td>
        <td><form action = "VentaMembresias.php" method = "post"><button type = "submit" value = "xboxlive" name = "compra2">Comprar</button></form></td>
        <td><form action = "VentaMembresias.php" method = "post"><button type = "submit" value = "xboxlivegold" name = "compra2">Comprar</button></form></td>
        </tr>
<?php
include "funciones.php";
if(isset($_POST["compra2"])){
    
    sleep (1);
    compra2();
}

?>
    
</table>

</div> 

<div class="footer">
    <div class="fondoTraseroDiv">
        <img class="fondo" src="fondoXbox.jpg"> 
    </div>
<div class="fondoDiv">
    <h2>DESCUBRE TU NUEVO JUEGO FAVORITO</h2>
    <p>DEMASIADOS JUEGOS DE XBOX :)</p>
    <img class="fondo2" src="fondo2Xbox.jpg"> 
</div>
<a href="https://www.xbox.com/es-MX/"><img class="redes" src="logos/xboxlogo.png" alt="redes"></a>
<a href="creditos.html"><img class="redes" src="logos/usuarioLogo.png" alt="redes"></a>
<a href="https://www.instagram.com/im_blasting/"><img class="redes" src="logos/instagram.png" alt="redes"></a>
</div>



</div>



</body>
</html>
<style>
*{
  padding:0;
  margin:0;
}
form button[type="submit"]{
    font-size:0.75em;
    position: relative;
    left:25%;
    padding:5px;
    margin:auto;
    color:black;
   
    border: 2px solid black;
}
form button[type="submit"]:hover{
    
    color:white;
    background-color:black;
   
}

body{
        width: 100%;
        height: 100%;
        text-align:center;      
        background-color:#0E7A0D;
}
  
.textAnuncios{
color:black;

}

.AnunciosIMG{
    position: relative;
    width:250px;
    height:155px;
}
.MembresiasIMG{
    position: relative;
    width:250px;
    height:175px;
}

.fondoDiv{
 
    Color: white;
    position: absolute;
    top: 43%;
    left: 75%;
    transform: translate(-50%, -50%);
}
.fondoTraseroDiv{
    Color: white;
    position:relative;
    display: inline-block;
    text-align: center;   
}

.fondo2{
    width:300px;
    height:200px;
}

.fondo{  
    width:1100px;
    height:500px;
}
.footer{
    position: relative;
}

.contenido{
    margin:auto;
    margin-top: 10px;
    background-color: white;
    width: 1100px;
    height: 1100px;
}



.header{
    width: 100%;
    height: 60px;
}
.logo{

    float: left;
    width: 60px;
    height: 60px;
}
.logoIMG{
    width: 60px;
    height: 60px;
}

.redes{
    width: 60px;
    height: 60px;
}

.menus{
    background-color:black;
    margin-left: 60px;
    width: 1040px;
    height: 60px;

}
a{
    font-family: fantasy;
    text-decoration:none ;
    color:white;
}

.menus a{
    text-shadow: 1px 1px 0px black;
    float:left;
    text-align:center;
    font-size: 1.3em;

    background-color:#0E7A0D;
    margin:0px;
    padding:0px;
    width: 167px;
    height: 60px;
    border: 3.125px solid white;
}
.menus a:hover {
  background-color: black ;
  color: white;
  text-shadow: 1px 1px 0px black; 
}


table{
  position:relative;
  font-family: monospace;
  font-size: 1.25em;
  width: 100%;
 
 
  border-spacing: 5px 5px ; 
}


h1{
    color: black;
    font-size: 40px;
    font-family: SegoeProBlack, Segoe UI,SegoeUI,Helvetica,Arial,sans-serif;
}


form{
  text-align:left ;
  font-size: 1.125em;
  position:relative;
  width:80%;
  height:70%;
  margin:auto;
   
}

input[type=text] {
  width: 100%;
  padding: 1px 1px;
  margin: 1px 0;
}
input[type=tel] {
  width: 100%;
  padding: 1px 1px;
  margin: 1px 0;
}


</style>
