<!DOCTYPE html>
<html lang ="es">
    <head>


        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/estilos.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <script type="text/javascript" src =" js/validar.js"></script>
        <link href="css/bootstrap.css" rel="stylesheet">
        <!--ESTILOS EXTRAS-->
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
        
       
        <link rel="stylesheet" type="text/css" href="lineicons/style.css">    

        <!--LOS ESTILOS QUE SE OCUPAN -->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/style-responsive.css" rel="stylesheet">

        <script src="js/chart-master/Chart.js"></script>
        
            <?php
        if (!isset($titulo) || empty($titulo)) {
            $titulo = 'C.A.P.E.P.';
        }

        echo "<title>$titulo</title>";
        ?>


    </head>
    <body>
