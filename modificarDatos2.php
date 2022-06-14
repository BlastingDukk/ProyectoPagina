
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        <a href="VentaMembresias.html">MEMBRESIAS</a>       
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

</div>
<?php

        include "funciones.php";
        if(!isset($_POST["nombreUsuario"])){

        $contenidoUsuario = buscar();
       

        if($contenidoUsuario){
        $datosUsuario =$contenidoUsuario;
            echo "<div class='formulario'>

            <h1>MODIFICA TUS DATOS</h1>
            <form action='modificarDatos2.php' method='post'>
            NOMBRE: <input type='text' size='18' name='nombreUsuario' value = ".$datosUsuario['Nombre']."><br>
            <input  type =  'hidden' name = 'gamertagOriginal' value = ".$datosUsuario['Gamertag'].">
            GAMERTAG: <input type='text' size='50' name='gamertag' value = ".$datosUsuario['Gamertag']."><br>
            CORREO ELECTRONICO: <input type='text' size='70' name='CorreoElectronico' value = ".$datosUsuario['CorreoElectronico']."><br>
            TELEFONO: <input type='tel' name='telefono' value = ".$datosUsuario['Numero']."><br>
        
            PAIS <input type = 'text' name = 'pais' value = ".$datosUsuario['Pais']."><br><br>
        
        <input type='submit' value='Modificar'>
        
            </form>
        </div>  ";
        }else{
            
            echo "<script>alert('Usuario no encontrado');window.location.href = 'modificarDatos.html';</script>";
           
            
           
        }
        }else{
            modificar();
            echo "<script>window.location.href = 'modificarDatos.html'</script>";
        }
    ?>

<div class="footer">
    <div class="fondoTraseroDiv">
        <img class="fondo" src="fondoXbox.jpg"> 
    </div>
<div class="fondoDiv">
    <h2>DESCUBRE TU NUEVO JUEGO FAVORITO</h2>
    <p>DEMASIADOS JUEGOS DE XBOX :)</p>
    <img class="fondo2" src="fondo2Xbox.jpg"> 
</div>

</div>
<a href="https://www.xbox.com/es-MX/"><img class="redes" src="logos/xboxlogo.png" alt="redes"></a>
<a href="creditos.html"><img class="redes" src="logos/usuarioLogo.png" alt="redes"></a>
<a href="https://www.instagram.com/im_blasting/"><img class="redes" src="logos/instagram.png" alt="redes"></a>
</div>



</body>
</html>
<style>
*{
  padding:0;
  margin:0;
}
.formulario{ 
    background-color: black;
    color:white;
    text-align: center;
}
.formulario input[type="submit"]{
    font-size:1em;
    position: relative;
    padding:10px;
    left:40%;
    color:white;
    background-color: black;
    border: 2px solid white;
}
.formulario input[type="submit"]:hover{
    
    color:black;
    background-color: white;
   
}
body{
        width: 100%;
        height: 100%;
        text-align:center;      
        background-color:white;
}
  
.textAnuncios{
color:white;
}

.AnunciosIMG{
    position: relative;
    width:250px;
    height:155px;
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
    background-color: black;
    width: 1100px;
    height: 500px;
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

    background-color:black;
    margin:0px;
    padding:0px;
    width: 167px;
    height: 50px;
    border: 3.125px solid black;
}
.menus a:hover {
  background-color: white ;
  color: black;
  text-shadow: 1px 1px 0px black; 
}




.introduccion{
    background-color:#ff00b3;
}
table{
  position:relative;
  font-family: monospace;
  font-size: 1.25em;
  width: 100%;
 
 
  border-spacing: 5px 5px ; 
}


h1{
    color: white;
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
