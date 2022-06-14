
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar</title>
</head>
<body>
<div class="informacion">
    <h1>
    <?php
    //FUNCION BORRAR EJECUTADA
    include "funciones.php";
    echo borrar();
    ?>
    </h1>
    <a href="index.html"><h1>REGRESAR</h1></a>
</div>
</body>
</html>


<style>
a{
    text-decoration:none;
    color:white;
}
body{
background-color: yellow;}   

.informacion{
    margin-top: 20%;
    Color: white;
    background-color:#0E7A0D;
    text-align: center;  

}
h1{
    font-size: 40px;
    font-family: SegoeProBlack, Segoe UI,SegoeUI,Helvetica,Arial,sans-serif;
    position:relative;
}

</style>