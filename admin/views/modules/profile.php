<section class="section team-section">

    <!-- Grid row -->
    <div class="row text-center">

        <!-- Grid column -->
        <div class="col-md-8 mb-4">

            <!-- Card -->
            <div class="card card-cascade cascading-admin-card user-card">

                <!-- Card Data -->
                <div class="admin-up d-flex justify-content-start">
                    <i class="fas fa-users info-color py-4 mr-3 z-depth-2"></i>
                    <div class="data">
                        <h5 class="font-weight-bold dark-grey-text">

                            Editar perfil:
                            <span class="text-muted">

                                complete su perfil

                            </span>
                        </h5>
                    </div>
                </div>
                <!-- Card Data -->

                <!-- Card content -->
                <div class="card-body card-body-cascade">
                    <form class="forms-sample" id = "edit_profile" novalidate="novalidate" onsubmit="return false" enctype="multipart/form-data">
                        <!-- Grid row -->
                        <div class="row">

                            <!-- Grid column name -->
                            <div class="col-lg-4">

                                <div class="md-form form-sm mb-0">
                                    <input type="text" id="name" name="name" class="form-control form-control-sm" value="<?php echo $_SESSION['user']->name; ?>">
                                    <label for="form12" class="">

                                        Nombre completo

                                    </label>
                                </div>

                            </div>
                            <!-- Grid column -->

                            <!-- Grid column last_name -->
                            <div class="col-lg-4">

                                <div class="md-form form-sm mb-0">
                                    <input type="text" id="last_name" name="last_name"class="form-control form-control-sm" value="<?php echo $_SESSION['user']->last_name; ?>">
                                    <label for="form3" class="">
                                        Apellidos
                                        

                                    </label>
                                </div>

                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-4">

                                <div class="md-form form-sm mb-0">
                                    <input type="text" id="website" name="website" class="form-control form-control-sm" value="<?php echo $_SESSION['user']->website; ?>">
                                    <label for="form6" class="">

                                        Sitio web

                                    </label>
                                </div>

                            </div>
                            <!-- Grid column -->

                        </div>
                        <!-- Grid row -->

                        <!-- Grid row -->
                        <div class="row">

                            <!-- Grid column -->
                            <div class="col-lg-4 col-md-6 mb-4">
                                <select class="mdb-select colorful-select dropdown-primary md-form initialized" multiple="" name="language[]" id="language">
                                    <?php 
                                        if($_SESSION['user']->language == '')
                                        {
                                            echo '<option value="" disabled="" selected="">Selecciones lenguajes</option>
                                            <option value="ni">Nicaragüenses</option>
                                            <option value="es">Español</option>
                                            <option value="en">Ingles</option>
                                            <option value="al">Aleman</option>
                                            <option value="fr">Frances</option>
                                            <option value="po">Polaco</option>
                                            <option value="ja">Japones</option>';
                                        }
                                        else
                                        {
                                            echo '<option value="" disabled="" selected="">'.$_SESSION['user']->language.'</option>
                                            <option value="ni">Nicaragüenses</option>
                                            <option value="es">Español</option>
                                            <option value="en">Ingles</option>
                                            <option value="al">Aleman</option>
                                            <option value="fr">Frances</option>
                                            <option value="po">Polaco</option>
                                            <option value="ja">Japones</option>';
                                        }
                                    ?>
                                    

                                </select>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-lg-4 col-md-6">

                                <div class="md-form form-sm mb-0">
                                    <input type="text" id="address" name="address" class="form-control form-control-sm" value="<?php echo $_SESSION['user']->address; ?>">
                                    <label for="form8" class="">

                                        Dirección

                                    </label>
                                </div>

                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-lg-4 col-md-6">

                                <div class="md-form form-sm mb-0">
                                    <input type="text" id="phone" name="phone" class="form-control form-control-sm" value="<?php echo $_SESSION['user']->phone; ?>">
                                    <label for="form9" class="">

                                        Telefono

                                    </label>
                                </div>

                            </div>
                            <!-- Grid column -->

                        </div>
                        <!-- Grid row -->
                        <input type="hidden" name="id_user" id="id_user" value="<?php echo $_SESSION['user']->id_user; ?>">
                        <button type="submit" class="btn btn-primary mt-5">Guardar Cambios</button>
                    </form>
                </div>
                <!-- Card content -->
                

            </div>
            <!-- Card -->

        </div>
        <!-- Grid column -->

        <!-- Grid column foto-->
        <div class="col-md-4 mb-4">

            <!-- Card -->
            <div class="card profile-card">

                <!-- Avatar -->
                <div class="avatar z-depth-1-half mb-4">
                    <?php 

                        $picture =$_SESSION['user']->picture;

                        if($picture == "")
                        {
                            echo '<img src="views/assets/img/default_user.jpeg" class="rounded-circle" alt="Primera imagen de avatar de muestra">';
                        }
                        else
                        {
                            echo '<img class="user-avatar rounded-circle ml-2 mt-5" src="views/assets/img/users/'.$picture.'" alt="User Avatar" style="position: relative; bottom: 48px; right: 8px;">';
                        }

                    ?>
                </div>

                <div class="card-body pt-0 mt-0">

                    <!-- Name -->
                    <h3 class="mb-3 font-weight-bold"><strong>

                            <?php echo $_SESSION['user']->name ." ".$_SESSION['user']->last_name ?>

                        </strong></h3>
                    <h6 class="font-weight-bold cyan-text mb-4">

                        Diseñador web

                    </h6>

                    <!-- <p class="mt-4 text-muted">

                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip consequat.

                    </p> -->

                    <a class="btn btn-info waves-effect waves-light" data-toggle="modal" data-target="#exampleModal">

                        Editar

                    </a>

                </div>

            </div>
            <!-- Card -->

        </div>
        <!-- Grid column -->

        <!-- Grid column seguridad -->
        <div class="col-md-8 mb-4 div-security">

            <!-- Card -->
            <div class="card card-cascade cascading-admin-card user-card">

                <!-- Card Data -->
                <div class="admin-up d-flex justify-content-start">
                    <i class="fas fa-users-cog info-color py-4 mr-3 z-depth-2"></i>
                    <div class="data">
                        <h5 class="font-weight-bold dark-grey-text">

                            Editar perfil seguridad:
                            <span class="text-muted">

                                complete su perfil

                            </span>
                        </h5>
                    </div>
                </div>
                <!-- Card Data -->

                <!-- Card content -->
                <div class="card-body card-body-cascade">
                    <form class="forms-sample" id = "edit_security" novalidate="novalidate" onsubmit="return false" enctype="multipart/form-data">

                        <!-- Grid row -->
                        <div class="row">
                            <!-- Grid column email-->
                            <div class="col-lg-12">

                                <div class="md-form form-sm mb-0">
                                    <input type="text" id="email" name="email" class="form-control form-control-sm" value="<?php echo $_SESSION['user']->email ?>">
                                    <label for="form4" class="">

                                        Correo Electronico

                                    </label>
                                </div>

                            </div>
                            <!-- Grid column -->

                            <!-- Grid column password-->
                            <div class="col-md-6">

                                <div class="md-form form-sm mb-0">
                                    <input type="password" id="pass" name="pass" class="form-control form-control-sm" value="<?php echo $_SESSION['user']->pass; ?>">
                                    <label for="form5" class="">

                                        Contraseña

                                    </label>
                                </div>

                            </div>
                            <!-- Grid column -->

                            <!-- Grid column user name-->
                            <div class="col-md-6">

                                <div class="md-form form-sm mb-0">
                                    <input type="text" id="name_user" name="name_user" class="form-control form-control-sm" value="<?php echo $_SESSION['user']->name_user; ?>">
                                    <label for="form5" class="">

                                        Nombre usuario

                                    </label>
                                </div>

                            </div>
                            <!-- Grid column -->

                        </div>
                        <!-- Grid row -->
                        <input type="hidden" name="id_user" id="id_user" value="<?php echo $_SESSION['user']->id_user; ?>">
                        <button type="submit" class="btn btn-primary mt-5">Guardar Cambios</button>
                        

                    </form>
                </div>
                <!-- Card content -->
                

            </div>
            <!-- Card -->

        </div>
        <!-- Grid column -->

    </div>
    <!-- Grid row -->

</section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="forms-sample" novalidate="novalidate" onsubmit="return false" enctype="multipart/form-data">
            <!-- Grid row -->
            <!-- <div class="row"> -->
                <!-- Grid column email-->
                <!-- <div class="col-lg-12">

                    <div class="md-form form-sm mb-0">
                        <div class="form-group">
                            <label>Cargar foto</label>
                            <div class="file-loading">
                                <input id="users_picture" type="file" name = "user-pic" multiple data-min-file-count="1" data-theme="fas">
                            </div>
                        </div>
                    </div>

                </div> -->
                <!-- Grid column -->
            <!-- </div> -->
            <!-- Grid row -->

      </div>
      <div class="modal-footer">
        <button type="submit" class="btn info-color">Guardar Cambios</button>
        </form>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>

