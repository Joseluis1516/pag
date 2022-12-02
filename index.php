<!DOCTYPE html>
<html lang="en">

<?php include "cabecera.php" ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css only -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- stylesheet -->
    <link rel="stylesheet" href="estilos.css">
    <!-- javaScript  -->
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>

<body style="background-color: #f4b184" class="body" >
<div class="body">
    <div style="text-align:center;" class="img ">
        <div class="uno">
            <h1>Cenaduria Doña Rita</h1>

        </div>

        <img src="img/ama.png" width="700">

    </div>




    <?php
    include 'mostrartexto.php';

    $resultado = mysqli_query($conexion, $descripcion);
    while ($mostrar = mysqli_fetch_array($resultado)) {
    ?>
        <div class="cuatro">
            <p><?php echo $mostrar['texto']; ?></p>
        </div>
    <?php
    }
    mysqli_free_result($resultado)
    ?>
</div>
</body>

</html>
<br>
<br>
<div style="background-color: #DCDCDC;">
    <?php include('pie.php') ?>
</div>



<style>
    .img {
        padding: 15px;

    }
    .body{
        background-image: url('https://p4.wallpaperbetter.com/wallpaper/587/220/849/abstract-colorful-warm-colors-blurred-soft-gradient-wallpaper-preview.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        filter: blur("100px");
    }
    .cuatro{
        background-color: #f4b184;
        padding: 20px;
    }
</style>