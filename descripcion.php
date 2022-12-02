<!DOCTYPE html>
<html lang="en">
<?php include "cabecera.php" ?>

<?php include "conexion.php";
$id = $_GET['id'];
$descripcion = "SELECT * FROM menu WHERE idmenu='$id'";
?>



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css only -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- stylesheet -->
    <link rel="stylesheet" href="estilos.css?a=4">
    <!-- javaScript  -->
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>

<body style="background-color: #f4b184; ">
    <div class="img">
        <?php
        $resultado = mysqli_query($conexion, $descripcion);
        while ($mostrarmenu = mysqli_fetch_array($resultado)) { ?>

            <div class="col-2 row mt-5 informacion ">
                <a  ><img src="<?php echo $mostrarmenu['imagen']; ?>" width="300"></a><br>
                <h5><?php echo $mostrarmenu['descripcion']; ?></h5>
                <p><?php echo $mostrarmenu['ingredientes']; ?></p>
                <div>
                    <a href="pagina2.php" style="text-decoration: none;" class="mb-2 btn btn-primary">Regresar</a>
                </div>
            </div>

        <?php
        }
        ?>

    </div>

</body>

</html>


<div style="background-color: #DCDCDC;">
    <?php include('pie.php') ?>
</div>


<style>
    .img {
        display: flex;
        flex-direction: column;
        max-width: 100vw;
        text-align: center;
        margin-left: 2%;
        border-radius: 8px;
        box-shadow: 0 2px 2ox;
        margin: 20px;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;

    }

    .informacion {
        background-color: white;
        padding-top: 10px;
        text-align: center;
        margin-left: 2%;
        border-radius: 8px;
        box-shadow: 0 2px 2ox;
        overflow: hidden;
        display: flex;
        justify-content: center;
        width: 40%;

    }
</style>