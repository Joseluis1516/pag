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
    <link rel="stylesheet" href="estilos.css?a=1">
    <!-- javaScript  -->
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>

<body style="background-color: #f4b184; ">
    <div class="img">
        <?php
        include "mostrarmenu.php";
        $resultado = mysqli_query($conexion, $imagen);
        while ($mostrarmenu = mysqli_fetch_array($resultado)) { ?>

            <div class="col-2 row mt-5 informacion ">
                <a href="descripcion.php?id=<?php echo $mostrarmenu['idmenu'] ?>"><img src="<?php echo $mostrarmenu['imagen']; ?>" width="180"></a><br>
                <span><?php echo $mostrarmenu['descripcion']; ?></span>
            </div>


        <?php
        }
        ?>

    </div>

    <br><br><br>
</body>

</html>


<div style="background-color: #DCDCDC;">
    <?php include('pie.php') ?>
</div>


<style>
    .img {
        display: flex;
        max-width: 100vw;
        text-align: center;
        margin-left: 2%;
        border-radius: 8px;
        box-shadow: 0 2px 2ox;
        margin: 20px;
        flex-wrap: wrap;
        align-items: center;

    }

    .informacion {
        background-color: white;
        padding-top: 10px;
        text-align: center;
        margin-left: 2%;
        border-radius: 8px;
        box-shadow: 0 2px 2ox;
        overflow: hidden;
        margin: 20px;


    }
</style>