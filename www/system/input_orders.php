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
            <li class="breadcrumb-item active">Compras - Cadastrar </li>
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
                        <form method="POST" name='frmOrders' accept-charset="utf-8">
                            <div class="card-header d-flex align-items-center">
                                <h3 class="h4" style="font-family: 'Bai Jamjuree'"><i style="font-size: 2em" class="fas fa-file-invoice-dollar"></i></h3>
                            </div>
                            <div class="card-body">
                                <form class="form-horizontal">
                                    <div class="row">
                                        <div class="form-group col-md-2">
                                            <label for="">Número NF-e</label>
                                            <input type="text" class="form-control" id="invoice_number">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">Fornecedor</label>
                                            <input type="text" class="form-control" id="provider_name">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="">Entrada</label>
                                            <input type="text" class="form-control" id="inbound_date" disabled>
                                        </div>

                                        <div class="form-group col-md-2">
                                            <label for="">Saída</label>
                                            <input type="text" class="form-control" id="outbound_date" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-2">
                                            <label for="">Vencimento</label>
                                            <input type="text" class="form-control" id="deadline">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="">Imposto</label>
                                            <input type="text" class="form-control" id="duty">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="">Frete</label>
                                            <input type="text" class="form-control" id="freight">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="">Valor Total</label>
                                            <input type="text" class="form-control" id="total">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label for="">Observações</label>
                                            <textarea rows="2" type="" class="form-control" id="notes"></textarea>
                                        </div>
                                    </div>
                                    <div class="line"></div>
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
                                        <div class="col-sm-4">
                                            <a href="" style="font-family: 'Bai Jamjuree'; font-size: 1em" class="btn btn-secondary" role="button">Cancel</a>
                                            <a class="btn btn-default" id="btn_addOrder" style="font-family: 'Bai Jamjuree'; font-size: 1em">Adicionar Produto</a>
                                        </div>
                                    </div>
                                    <div class="line"></div>
                                    <div class="form-group row">
                                        <div class="col-sm-4 offset-sm-9">
                                            <a href="" style="font-family: 'Bai Jamjuree'; font-size: 1em" class="btn btn-secondary" role="button">Cancel</a>
                                            <a type="" href="" style="font-family: 'Bai Jamjuree'; font-size: 1em" class="btn btn-success" role="button">Cadastrar</a>
                                        </div>
                                    </div>
                                    <div class="line"></div>
                                </form>
                            </div>
                    </div>
                </div>
            </div>
    </section>

<script src="js/input_orders.js"></script>
<?php include(FOOTER_TEMPLATE); ?>