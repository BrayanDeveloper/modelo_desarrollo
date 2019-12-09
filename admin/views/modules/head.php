<!-- Favicon-->
<link rel="shortcut icon" type="image/png" href="views/assets/img/FavicoinNuescoop.png">

<?php

if(isset($_GET['view']))
    {
        echo '<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
                <link href="views/assets/css/bootstrap.min.css" rel="stylesheet">
                <link href="views/assets/css/mdb2.min.css" rel="stylesheet">
                <link href="views/assets/css/fileinput.css" rel="stylesheet">

        <style>
            .navbar {
                z-index: 1040;
            }

            .side-nav {
                margin-top: 54px !important;
            }

            .double-nav .breadcrumb-dn p {
                color: #fff;
            }

            .div-security{
                position: relative;
                bottom: 85px;
            }

            @media (min-width: 1200px) {
                .fixed-sn main {
                    margin-left: 20% !important;
                    margin-right: 0% !important;
                }
            }

            @media (max-width: 740px) {
                .side-nav {
                    margin-top: 46px !important;
                }
                .div-security{
                    position: relative;
                    bottom: 0px;
                }
            }
        </style>';
    }
    else
    {
        echo '<!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
        <!-- Bootstrap core CSS -->
        <link href="views/assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="views/assets/css/mdb.css" rel="stylesheet">

        <style>

          html,
              body,
              header,
              .view {
                height: 100vh;
              }

              @media (max-width: 740px) {
                html,
                body,
                header,
                .view {
                //   height: 815px;
                }
              }

              @media (min-width: 800px) and (max-width: 850px) {
                html,
                body,
                header,
                .view  {
                  height: 650px;
                }
              }

              .intro-2 {

                background-color:#fdfdfd;
              }
              .top-nav-collapse {
                  background-color: #3f51b5 !important;
              }
              .navbar:not(.top-nav-collapse) {
                  background: transparent !important;
              }
              @media (max-width: 768px) {
                  .navbar:not(.top-nav-collapse) {
                      background: #3f51b5 !important;
                  }
              }
              @media (min-width: 800px) and (max-width: 850px) {
                  .navbar:not(.top-nav-collapse) {
                      background: #3f51b5!important;
                  }
              }

              .card {
                  background-color: rgba(255, 255, 255);
              }
              .md-form label {
                  color: #000000;
              }
              h6 {
                  line-height: 1.7;
              }


              .card {
                  margin-top: 30px;
                  /*margin-bottom: -45px;*/

              }

              .md-form input[type=text]:focus:not([readonly]),
              .md-form input[type=password]:focus:not([readonly]) {
                  border-bottom: 1px solid #8EDEF8;
                  box-shadow: 0 1px 0 0 #8EDEF8;
              }
              .md-form input[type=text]:focus:not([readonly])+label,
              .md-form input[type=password]:focus:not([readonly])+label {
                  color: #8EDEF8;
              }

              .md-form .form-control {
                  color: #fff;
              }


          </style>';
    }

?>


