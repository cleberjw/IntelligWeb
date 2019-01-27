<?php 
require_once('inc/functions.php');
add_exp();
add_cat();
?>
<?php include(HEADER_TEMPLATE); ?>


            <div class="content-inner">
                <!-- Page Header-->
                <header class="page-header">
                    <div class="container-fluid">
                        <img id='logo' src="img/logo.png" alt="" width="12%" />
                        <!-- <img id='logoRight' style="display:block; margin-left: auto; margin-right: auto; float: right"
                            src="img/logo-monaco.png" width="14%" class="rounded" alt=""> -->
                        <div class="container-fluid">
                            <h2 id='logo' style="font-family: 'Bai Jamjuree'" class="no-margin-bottom">Produtos</h2>
                        </div>
                    </div>
                </header>
                <!-- Breadcrumb-->
                <div class="breadcrumb-holder container-fluid">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Produtos - Cadastrar </li>
                    </ul>
                </div>
                <!-- Forms Section-->
                <section class="forms">
                    <div class="container-fluid">
                        <div class="row">
                            <!--Modal Form-->
                            <div class="col-lg-3">
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
                                        <h3 class="h4" style="font-family: 'Bai Jamjuree'" >
                                            <ion-icon size="large" name="md-filing"></ion-icon> Categoria
                                        </h3>
                                    </div>
                                    <div class="card-body text-center">
                                        <button type="button" data-toggle="modal" data-target="#myModal"
                                            class="btn btn-secondary">Cadastrar Categoria </button>
                                        <!--Modal-->
                                        <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                            aria-hidden="true" class="modal fade text-left">
                                            <div role="document" class="modal-dialog">
                                                <div style="border-radius: 8px" class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 style="font-family: 'Bai Jamjuree'" id="exampleModalLabel" class="modal-title">
                                                            <ion-icon size="large" name="md-filing"></ion-icon> CATEGORIA
                                                        </h4>
                                                        <button type="button" data-dismiss="modal" aria-label="Close"
                                                            class="close"><span aria-hidden="true">×</span></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Informação sobre a categoria do produto.</p>
                                                        <form method="POST" action="input_prd.php" enctype="multipart/form-data"
                                                            accept-charset="utf-8">
                                                            <div class="row">
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-md-3">
                                                            <label for="name">Cód.</label>
                                                            <input style="border-radius: 3px" type="text" class="form-control" name="category['id_cat']" disabled>
                                                            </div>
                                                        
                                                            <div class="form-group col-md-9">
                                                            <label for="campo2">Descrição</label>
                                                            <input style="border-radius: 3px" type="text" class="form-control" name="category['desc_cat']">
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="modal-footer">
                                                            <a id="confirm" class="btn btn-primary" href="input_prd.php">Cancel</a>
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
                            <div class="col-lg-3">
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
                                        <h3 class="h4" style="font-family: 'Bai Jamjuree'" >
                                            <ion-icon size="large" name="md-laptop"></ion-icon> Fabricante
                                        </h3>
                                    </div>
                                    <div class="card-body text-center">
                                        <button type="button" data-toggle="modal" data-target="#myModal1" 
                                            class="btn btn-secondary">Cadastrar Fabricante </button>
                                        <!--Modal-->
                                        <div id="myModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                            aria-hidden="true" class="modal fade text-left">
                                            <div role="document" class="modal-dialog">
                                                <div style="border-radius: 8px" class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 id="exampleModalLabel" style="font-family: 'Bai Jamjuree'"  class="modal-title">
                                                            <ion-icon size="large" name="md-laptop"></ion-icon> FABRICANTE
                                                        </h4>
                                                        <button type="button" data-dismiss="modal" aria-label="Close"
                                                            class="close"><span aria-hidden="true">×</span></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Informação sobre o fabricante do produto.</p>
                                                        <form method="POST" action="phpmailer/send_data.php" enctype="multipart/form-data"
                                                            accept-charset="utf-8">
                                                            <div class="row">
                                                            <div class="form-group col-md-3">
                                                            <label for="name">Cód.</label>
                                                            <input style="border-radius: 3px" type="text" class="form-control" name="customer['name_cli']" disabled>
                                                            </div>
                                                        
                                                            <div class="form-group col-md-9">
                                                            <label for="campo2">Descrição</label>
                                                            <input style="border-radius: 3px" type="text" class="form-control" name="customer['cpf_cnpj_cli']">
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="modal-footer">
                                                            <a id="confirm" class="btn btn-primary" href="input_prd.php">Cancel</a>
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
                            <div class="col-lg-3">
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
                                        <h3 class="h4" style="font-family: 'Bai Jamjuree'" >
                                            <ion-icon size="large" name="ios-people"></ion-icon> Fornecedor
                                        </h3>
                                    </div>
                                    <div class="card-body text-center">
                                        <button type="button" data-toggle="modal" data-target="#myModal1" 
                                            class="btn btn-secondary">Cadastrar Fornecedor </button>
                                        <!--Modal-->
                                        <div id="myModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                            aria-hidden="true" class="modal fade text-left">
                                            <div role="document" class="modal-dialog">
                                                <div style="border-radius: 8px" class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 id="exampleModalLabel" style="font-family: 'Bai Jamjuree'"  class="modal-title">
                                                            <ion-icon size="large" name="md-laptop"></ion-icon> FORNECEDOR
                                                        </h4>
                                                        <button type="button" data-dismiss="modal" aria-label="Close"
                                                            class="close"><span aria-hidden="true">×</span></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Informação sobre o fornecedor do produto.</p>
                                                        <form method="POST" action="phpmailer/send_data.php" enctype="multipart/form-data"
                                                            accept-charset="utf-8">
                                                            <div class="row">
                                                            <div class="form-group col-md-3">
                                                            <label for="name">Cód.</label>
                                                            <input style="border-radius: 3px" type="text" class="form-control" name="customer['name_cli']" disabled>
                                                            </div>
                                                        
                                                            <div class="form-group col-md-9">
                                                            <label for="campo2">Descrição</label>
                                                            <input style="border-radius: 3px" type="text" class="form-control" name="customer['cpf_cnpj_cli']">
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="modal-footer">
                                                            <a id="confirm" class="btn btn-primary" href="input_prd.php">Cancel</a>
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
                            <div class="col-lg-3">
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
                                        <h3 class="h4" style="font-family: 'Bai Jamjuree'" >
                                            <ion-icon size="large" name="md-briefcase"></ion-icon> Produto
                                        </h3>
                                    </div>
                                    <div class="card-body text-center">
                                        <button type="button" data-toggle="modal" data-target="#myModal2" 
                                            class="btn btn-secondary">Cadastrar Produto </button>
                                        <!--Modal-->
                                        <div id="myModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                            aria-hidden="true" class="modal fade text-left">
                                            <div role="document" class="modal-dialog">
                                                <div style="border-radius: 8px" class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 style="font-family: 'Bai Jamjuree'" id="exampleModalLabel" class="modal-title">
                                                            <ion-icon size="large" name="md-briefcase"></ion-icon>PRODUTO
                                                        </h4>
                                                        <button type="button" data-dismiss="modal" aria-label="Close"
                                                            class="close"><span aria-hidden="true">×</span></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Informações sobre produtos.</p>
                                                        <form method="POST" action="phpmailer/send_data.php" enctype="multipart/form-data"
                                                            accept-charset="utf-8">
                                                            <div class="row">
                                                                <div class="form-group col-md-3">
                                                                    <label for="name">Cód.</label>
                                                                    <input style="border-radius: 3px" type="text" class="form-control" name="customer['name_cli']" disabled>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="name">Fabricante</label>
                                                                    <input style="border-radius: 3px" type="text" class="form-control" name="customer['name_cli']">
                                                                </div>
                                                                <div class="form-group col-md-3">
                                                                    <label for="name">Status</label>
                                                                    <select name="status" class="form-control">
                                                                        <option value="0" select>Ativo</option>
                                                                        <option value="1">Inativo</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                                <div class="row">
                                                                    <div class="form-group col-md-12">
                                                                        <label for="campo2">Descrição</label>
                                                                        <input style="border-radius: 3px" type="text" class="form-control" name="customer['cpf_cnpj_cli']">
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="form-group col-md-6">
                                                                    <label for="name">Custo</label>
                                                                    <input style="border-radius: 3px" type="text" class="form-control" name="customer['name_cli']">
                                                                    </div>
                                                                    <div style="text-align:center" class="form-group col-md-3">
                                                                    <label for="campo2">Estoque</label>
                                                                    <input style="border-radius: 3px" type="text" class="form-control" name="customer['cpf_cnpj_cli']">
                                                                    </div>
                                                                    <div style="text-align:center"  class="form-group col-md-3">
                                                                    <label for="campo2">Ideal</label>
                                                                    <input style="border-radius: 3px" type="text" class="form-control" name="customer['cpf_cnpj_cli']">
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="name">Categoria</label>
                                                                        <select id="category" required name="category" class="form-control">
                                                                            <option value="" selected>Selecionar</option>
                                                                                <?php $conn = open_database();
                                                                                mysqli_set_charset($conn, "utf8");
                                                                                $sql_client = mysqli_query($conn, "select distinct * from tbl_category"); ?>
                                                                                <?php while ($consult = mysqli_fetch_array($sql_client)) : ?>
                                                                            <option>
                                                                                <?php echo $consult[1] ?>
                                                                            </option>
                                                                                <?php endwhile; ?>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="name">Código de Barras</label>
                                                                        <input style="border-radius: 3px" type="text" class="form-control" name="customer['name_cli']">
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <a id="confirm" class="btn btn-primary" href="input_prd.php">Cancel</a>
                                                                    <button id="save" type="submit" class="btn btn-default">Cadastrar</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                        </div>
                    </div>
                </section>
<?php include(FOOTER_TEMPLATE); ?>