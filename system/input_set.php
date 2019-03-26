<?php
require_once('inc/functions.php');
add_prd();

?>
<?php include(HEADER_TEMPLATE); ?>

    <div class="content-inner">
    <!-- Page Header-->
    <header class="page-header">
        <div class="container-fluid">
            <img id='logo' src="img/logo.png" alt="" width="10%"/>
            <!-- <img id='logoRight' style="display:block; margin-left: auto; margin-right: auto; float: right"
                src="img/logo-monaco.png" width="14%" class="rounded" alt=""> -->
            <div class="container-fluid">
                <h2 id='logo' style="font-family: 'Oswald', sans-serif; letter-spacing: 0.1em; font-size: 0.8em" class="no-margin-bottom"></h2>
            </div>
        </div>
    </header>
    <!-- Breadcrumb-->
    <div class="breadcrumb-holder container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">SetBoat - Cadastrar </li>
        </ul>
    </div>
    <!-- Forms Section-->
    <section class="forms">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-close">
                            <div class="dropdown">
                                <button type="button" id="closeCard5" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                <div aria-labelledby="closeCard5" class="dropdown-menu dropdown-menu-right has-shadow"><a
                                            href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a
                                            href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a>
                                </div>
                            </div>
                        </div>
                        <form method="POST" action="input_prd.php" enctype="multipart/form-data"
                              accept-charset="utf-8">
                            <div class="card-header d-flex align-items-center">
                                <h3 class="h4" style="font-family: 'Oswald', sans-serif; letter-spacing: 0.1em; font-size: 1em"><i style="font-size: 2em; color: darkgray" class="fas fa-funnel-dollar"></i></h3>
                            </div>
                            <div class="card-body">
                                <form class="form-horizontal">
                                    <div class="row">
                                        <div class="form-group col-md-1">
                                            <label for="name">ID SetBoat</label>
                                            <input type="text" class="form-control" name="product['id_prd']" placeholder="00<?php echo last_prd() + 1?>" disabled>
                                        </div>
                                        <div class="form-group col-md-5">
                                            <label for="">Modelo</label>
                                            <input type="text" class="form-control" name="">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <input type="file" name="file" id="file" class="input-file">
                                            <label for="file" class="btn btn-tertiary js-labelFile">
                                                <i class="icon fa fa-check"></i>
                                                <span class="js-fileName">Imagem</span>
                                            </label>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="">Modificado</label>
                                            <input type="text" class="form-control" name="" disabled>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="">Status</label>
                                            <input value="Ativo" placeholder="Ativo" type="text" class="form-control" name="product['status_prd']" disabled>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive" >
                                            <table class="table table-striped table-hover">
                                                <thead>
                                                <tr>
                                                    <th>CÓDIGO</th>
                                                    <th>DESCRIÇÃO DO PRODUTO</th>
                                                    <th style="text-align: center">QTD.</th>
                                                    <th>VALOR</th>
                                                    <th>EDITAR</th>
                                                </tr>
                                                </thead>
                                                <tbody id="campos">
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-3 offset-sm-1">
                                            <a href="" style="font-family: 'Bai Jamjuree'; font-size: 1em" class="btn btn-secondary" role="button">Cancel</a>
                                            <a class="btn btn-default" style="font-family: 'Bai Jamjuree'; font-size: 1em" data-toggle="modal" data-target="#add-modal">Adicionar Produto</a>
                                        </div>
                                    </div>
                                    <div class="line"></div>

                                    <div class="line"></div>
                                    <div class="form-group row">
                                        <div class="col-sm-4 offset-sm-10">
                                            <a href="report_prd.php" style="font-family: 'Bai Jamjuree'; font-size: 1em" class="btn btn-secondary" role="button">Cancel</a>
                                            <button id="save" type="submit" style="font-family: 'Bai Jamjuree'; font-size: 1em" class="btn btn-primary" ><span
                                                        id="button"> Cadastrar</span></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                    </div>
                </div>
            </div>
    </section>
<?php include(FOOTER_TEMPLATE); ?>