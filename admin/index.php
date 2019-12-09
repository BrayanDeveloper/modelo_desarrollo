<?php 
    session_start();

    require_once "controllers/controller.php";
    require_once "models/model.php";
    require_once "models/crud.php";
    
    $mvc = new MVCcontroller();
    $mvc -> template();

?>