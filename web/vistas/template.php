<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Formato de los caracteres mostrados-->
    <meta charset="UTF-8">
    <!-- Responsivo segun tamaño de pantalla-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Colorea la barra en android y ios -->
    <meta name="theme-color" content="#E30513" />
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- ??? -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Autores</title>

    <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/estilos.css">
</head>
<body id="fondomgk">
    <!-- Barra menu -->
    <?php include 'layout/header.php' ?>

    <!-- Acciones del controlador -->
    <?php 
        $mvc = new MvcController();
        $mvc -> enlacesPaginasController();
    ?>

    <!-- Javascript -->
    <script src="assets/bootstrap/jquery.js"></script>
    <script src="assets/bootstrap/bootstrap.min.js"></script>
</body>
</html>