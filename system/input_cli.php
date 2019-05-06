<?php
require_once('inc/functions.php');
add();
echo $customer;
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
            <li class="breadcrumb-item active">Clientes - Cadastro </li>
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
                        <form method="POST" action="input_cli.php" enctype="multipart/form-data"
                              accept-charset="utf-8">
                            <div class="card-header d-flex align-items-center">
                                <h3 class="h4" style="font-family: 'Oswald', sans-serif; letter-spacing: 0.1em; font-size: 1em"><i style="font-size: 2em; color: darkgray" class="far fa-address-card"></i></h3>
                            </div>
                            <div class="card-body">
                                <form class="form-horizontal">
                                    <div class="row">
                                        <div class="form-group col-md-1">
                                            <label for="">ID Cliente</label>
                                            <input type="text" class="form-control" name="customer['id_cli']" placeholder="000<?php echo last() + 1?>" disabled>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="">Nome / Razão Social</label>
                                            <input type="text" class="form-control" name="customer['name_cli']">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="">CNPJ / CPF</label>
                                            <input id="CpfCnpj" type="text"  class="form-control" name="customer['cpf_cnpj_cli']">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="">I.E</label>
                                            <input type="text"  class="form-control" name="customer['cpf_cnpj_cli']">
                                        </div>

                                        <div class="form-group col-md-2">
                                            <label for="">Cadastro</label>
                                            <input type="text" class="form-control" name="customer['created_cli']" disabled>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="">Modificado</label>
                                            <input type="text" class="form-control" name="customer['modified_cli']" disabled>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="">Endereço</label>
                                            <input type="text" class="form-control" name="customer['address_cli']">
                                        </div>

                                        <div class="form-group col-md-2">
                                            <label for="">Bairro</label>
                                            <input type="text" class="form-control" name="customer['hood_cli']">
                                        </div>

                                        <div class="form-group col-md-2">
                                            <label for="">CEP</label>
                                            <input type="text" class="form-control" name="customer['zip_code_cli']">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="">Município</label>
                                            <input type="text" class="form-control" name="customer['city_cli']">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="">Estado</label>
                                            <input type="text" class="form-control" name="customer['state_cli']">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-2">
                                            <label for="">Tel. Residencial</label>
                                            <div class="input-group mb-2 mr-sm-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fas fa-phone-volume"></i></div>
                                                </div>
                                                <input type="text" class="form-control" name="customer['phone_cli']" onkeypress="$(this).mask('(00) 0000-0000')">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="">Tel. Comercial</label>
                                            <div class="input-group mb-2 mr-sm-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fas fa-phone-volume"></i></div>
                                                </div>
                                                <input type="text" class="form-control" name="customer['workphone_cli']" onkeypress="$(this).mask('(00) 00000-0000')">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="">Tel. Celular</label>
                                            <div class="input-group mb-2 mr-sm-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fas fa-mobile-alt"></i></div>
                                                </div>
                                                <input type="text" class="form-control" name="customer['mobile_cli']" onkeypress="$(this).mask('(00) 00000-0000')">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="">E-mail</label>
                                            <div class="input-group mb-2 mr-sm-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">@</div>
                                                </div>
                                                <input type="text" class="form-control" id="inlineFormInputGroupUsername2" name="customer['email_cli']">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="">Dt. Nascimento</label>
                                            <div class="input-group mb-2 mr-sm-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="far fa-calendar"></i></div>
                                                </div>
                                                <input type="text" class="form-control" id="birthday" name="customer['birthdate_cli']">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-1">
                                            <label for="">País</label>
                                            <input id="birthday" type="text" class="form-control" name="customer['birthdate_cli']">
                                        </div>
                                    </div>
                                    <div class="line"></div>
                                    <div class="form-group row">
                                        <div class="col-sm-4 offset-sm-10">
                                            <a href="report_cli.php" style="font-family: 'Bai Jamjuree'; font-size: 1em" class="btn btn-secondary" role="button">Cancel</a>
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