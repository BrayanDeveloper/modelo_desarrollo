<?php

    class Model
    {
        public static function enlacesModel($enlaces)
        {

            if($enlaces == "dashboard" || $enlaces == "profile" || $enlaces == "add_user" || $enlaces == "accounts_report" || $enlaces == "personally_enrolled")
                {
                    $modules = "views/modules/".$enlaces.".php";
                }
                else
                {
                    if(isset($_SESSION['user']))
                    {
                        $modules = "views/modules/dashboard.php";
                    }
                    else
                    {
                        $modules = "views/modules/login.php";
                    }

                }

                return $modules;

        }

        public static function scriptsModel($script)
        {
            if($script == "dashboard" || $script == "profile" || $script == "add_user" || $script == "accounts_report" || $script == "personally_enrolled")
                {
                    $js = "views/modules/js/".$script.".js";
                }
                else
                {
                    if(isset($_SESSION['user']))
                    {
                        $js = "views/modules/js/dashboard.js";
                    }
                    else
                    {
                        $js = "views/modules/js/login.js";
                    }

                }
                if (file_exists($js))
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
