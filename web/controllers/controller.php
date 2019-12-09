<?php 

    class MVCcontroller
    {
        public function template()
        {
            include "views/template.php";
        }

        public function enlacesController()
        {
            if(isset($_GET['view']))
            {
                $enlaces = $_GET['view'];
            }
            else
            {
                $enlaces = "dashboard";
            }

            $respuesta = Model::enlacesModel($enlaces);
            include $respuesta;
        }

        public function scriptsController()
        {
            if(isset($_GET['view']))
            {
                $enlaces = $_GET['view'];
            }
            else
            {
                $enlaces = "dashboard";
            }

            $respuesta = Model::scriptsModel($enlaces);
            if($respuesta  != "nothing")
            {
                $ret = "<scrip src ='".$respuesta."'></script>";
                return $ret;
            }
        }
    }


?>