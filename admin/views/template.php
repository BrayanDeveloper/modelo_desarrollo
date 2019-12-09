<!DOCTYPE html>
<html lang="en" class="">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Nuestracoop Back Office</title>
    <?php include "modules/head.php"; ?>
</head>

<body class="fixed-sn white-skin">
    <!-- <a href="models/logout" class="bnt btn-danger">Cerrar</a> -->
    <?php

    /* ============================
    LINKS DEL PROYECTO
=============================== */
    if (isset($_GET['view'])) 
    {

        if (isset($_SESSION['user']) && $_GET['view'] != 'login') 
        {     
            echo '<header>';

                include "modules/main-left.php";
                include "modules/main-top.php";

            echo '</header>';

            echo '<main>';

                echo '<div class="container-fluid">';
        }

    } 
    // else 
    // {
    //     if (isset($_SESSION['user'])) 
    //     {
            
    //     }
    // }


    $mvc = new MVCcontroller();
    $mvc->enlacesController();

    if (isset($_GET['view'])) 
    {
        if (isset($_SESSION['user'])) 
        {
                echo '</div>';

            echo '</main>';
            
            include "modules/footer.php";
        }
    }

    /* ============================
    SCRIPTS DEL PROYECTO
=============================== */
    include 'modules/scripts.php';
    echo $mvc->scriptsController();
    ?>
</body>

</html>