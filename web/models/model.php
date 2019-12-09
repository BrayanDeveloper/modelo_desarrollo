<?php 

    class Model
    {
        public function enlacesModel($enlaces)
        {
            if($enlaces == "dashboard" ||
                $enlaces == "about" ||
                $enlaces == "services" ||
                $enlaces == "gallery" ||
                $enlaces == "contact")
            {
                $modules = "views/modules/".$enlaces.".php";
            }
            else
            {
                $modules = "views/modules/dashboard.php";
            }
            return $modules;
            
        }

        public function scriptsModel($script)
        {
            if($script == "dashboard" ||
               $script == "about" ||
               $script == "services" ||
               $enlaces == "gallery" ||
               $script == "contact")
            {
                $js = "views/modules/js/".$script.".php";
            }
            else
            {
                $js = "views/modules/js/dashboard.php";
            }
            if(file_exists($js))
            {
                return $js;
            }
            else
            {
                return "nothing";
            }

        }
    }


?>