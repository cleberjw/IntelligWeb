<?php 	  
    require_once('inc/functions.php');
    add_exp();	
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
                        <li class="breadcrumb-item active">Financeiro - Cadastrar </li>
                    </ul>
                </div>
                <!-- Forms Section-->
                <section class="forms">
                    <div class="container-fluid">
                        <div class="row">
                            <!--Modal Form-->
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-close">
                                        <div class="dropdown">
                                            <button type="button" id="closeCard4" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                            <div aria-labelledby="closeCard4" class="dropdown-menu dropdown-menu-right has-shadow"><a
                                                    href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a
                                                    href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                                        </div>
                                    </div>
                                    <div class="card-header d-flex align-items-center">
                                        <h3 class="h4" style="font-family: 'Oswald', sans-serif; letter-spacing: 0.1em; font-size: 1em">
                                            <a> </a>
                                        </h3>
                                    </div>
                                    <div class="card-body text-center">
                                        <button type="button" data-toggle="modal" data-target="#myModal" id="btn-fin-inputEx"
                                            class="btn btn-secondary">Cadastrar Despesa </button>
                                        <!--Modal-->
                                        <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                            aria-hidden="true" class="modal fade text-left">
                                            <div role="document" class="modal-dialog">
                                                <div style="border-radius: 8px" class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 style="font-family: 'Oswald', sans-serif; letter-spacing: 0.1em; font-size: 1em" id="exampleModalLabel" class="modal-title">
                                                            <i style="font-size: 2.5em" class="fas fa-credit-card"></i>
                                                        </h4>
                                                        <button type="button" data-dismiss="modal" aria-label="Close"
                                                            class="close"><span aria-hidden="true">×</span></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Informação sobre a despesa.</p>
                                                        <form method="POST" action="input_fin.php" enctype="multipart/form-data"
                                                            accept-charset="utf-8">
                                                            <div class="form-group">
                                                                <label>Fornecedor</label>
                                                                <input type="text" name="expense['supplier_exp']" class="form-control" required="">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Valor</label>
                                                                <input type="number" name="expense['value_exp']" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Vencimento</label>
                                                                <input type="date" name="expense['date_exp']" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Pagamento</label>
                                                                <input type="date" name="expense['date_pay_exp']" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Código de Barra</label>
                                                                <input type="text" name="expense['codebar_exp']" class="form-control">
                                                            </div>
                                                            <div class="form-group row">
                                                            <div class="modal-footer">
                                                            <a id="confirm" class="btn btn-primary" href="input_fin.php">Cancel</a>
                                                            <button id="save" type="submit" class="btn btn-default">Cadastrar</button>
                                                        </div>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Modal Form-->
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-close">
                                        <div class="dropdown">
                                            <button type="button" id="closeCard4" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                            <div aria-labelledby="closeCard4" class="dropdown-menu dropdown-menu-right has-shadow"><a
                                                    href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Fechar</a><a
                                                    href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Editar</a></div>
                                        </div>
                                    </div>
                                    <div class="card-header d-flex align-items-center">
                                        <h3 class="h4" style="font-family: 'Oswald', sans-serif; letter-spacing: 0.1em; font-size: 1em">
                                            <a> </a>
                                        </h3>
                                    </div>
                                    <div class="card-body text-center">
                                        <button type="button" data-toggle="modal" data-target="#myModal1" id="btn-fin-inputIn"
                                            class="btn btn-secondary">Cadastrar Recebimento </button>
                                        <!--Modal-->
                                        <div id="myModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                            aria-hidden="true" class="modal fade text-left">
                                            <div role="document" class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 id="exampleModalLabel" style="font-family: 'Oswald', sans-serif; letter-spacing: 0.1em; font-size: 1em"  class="modal-title">
                                                            <i style="font-size: 2.5em" class="far fa-money-bill-alt"></i>
                                                        </h4>
                                                        <button type="button" data-dismiss="modal" aria-label="Close"
                                                            class="close"><span aria-hidden="true">×</span></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Informação sobre o recebimento.</p>
                                                        <form method="POST" action="phpmailer/send_data.php" enctype="multipart/form-data"
                                                            accept-charset="utf-8">
                                                            <div class="form-group">
                                                                <label>Cliente</label>
                                                                <input type="text" name="Supplier_exp" placeholder=""
                                                                    class="form-control" required="">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Descrição</label>
                                                                <input type="text" name="desc_exp" placeholder=""
                                                                    class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Valor</label>
                                                                <input type="number" name="value_exp" placeholder=""
                                                                    class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Vencimento</label>
                                                                <input type="text" name="date_exp" id="datepicker"
                                                                    class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Recebimento</label>
                                                                <input type="date" name="date_exp" placeholder=""
                                                                    class="form-control">
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Modal Form-->
                        </div>
                    </div>
                </section>
<?php include(FOOTER_TEMPLATE); ?>