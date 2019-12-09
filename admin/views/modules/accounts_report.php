<?php

    $mvc = new MvcController();

    //$data = $mvc->getAccountsBox();

?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-md-8">
                            <h6 class="m-0 font-weight-bold text-primary">Lista de cuentas</h6>
                        </div>
                        <!--<div class="col-md-4 text-right">
                            <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#newproviderModal">Agregar proveedor</button>
                        </div>-->
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <?php //echo $data->accounts; ?>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="tab-content" id="v-pills-tabContent">
                                <?php// echo $data->movements; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
