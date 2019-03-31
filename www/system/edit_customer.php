<?php
require_once('inc/functions.php');
ob_start();
edit_customer();

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
            <li class="breadcrumb-item active">Cliente - Editar </li>
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
                                            href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                            </div>
                        </div>
                        <form action="edit_customer.php?id_customer=<?php echo $customer['id_customer']; ?>" method="POST">
                            <div class="card-header d-flex align-items-center">
                                <h3 class="h4" style="font-family: 'Oswald', sans-serif; letter-spacing: 0.1em; font-size: 1em"><i style="font-size: 1.2em" class="fas fa-pen-square"></i> CLIENTES - MODO EDITAR</h3>
                            </div>
                            <div class="card-body">
                                <form method="POST" class="form-horizontal">
                                    <div class="row">
                                        <div class="form-group col-md-1">
                                            <label for="name">ID Cliente</label>
                                            <input type="text" class="form-control" name="customer['id_customer']" placeholder="000<?php echo $customer['id_customer'];?>" disabled>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="name">Nome / Razão Social</label>
                                            <input type="text" class="form-control" name="customer['name_customer']" value="<?php echo $customer['name_customer']; ?>">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="">CNPJ / CPF</label>
                                            <input id="cpfCnpj" type="text" class="form-control" name="customer['cpf_cnpj_customer']" value="<?php echo $customer['cpf_cnpj_customer']; ?>">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="">I.E</label>
                                            <input type="text" class="form-control" name="customer['birthdate_customer']" value="<?php echo $customer['birthdate_customer']; ?>" maxlength="10">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="">Cadastro</label>
                                            <input type="text" class="form-control" name="" value="<?php echo date('d-m-Y H:i:s', strtotime($customer['created_customer'])); ?>" disabled>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="campo3">Modificado</label>
                                            <input type="text" class="form-control" name="customer['modified_customer']" value="<?php echo date('d-m-Y H:i:s', strtotime($customer['modified_customer'])); ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="campo1">Endereço</label>
                                            <input type="text" class="form-control" name="customer['address_customer']" value="<?php echo $customer['address_customer']; ?>">
                                        </div>

                                        <div class="form-group col-md-2">
                                            <label for="campo2">Bairro</label>
                                            <input type="text" class="form-control" name="customer['hood_customer']" value="<?php echo $customer['hood_customer']; ?>">
                                        </div>

                                        <div class="form-group col-md-2">
                                            <label for="">CEP</label>
                                            <input type="text" class="form-control" name="customer['zip_code_customer']" value="<?php echo $customer['zip_code_customer']; ?>">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="">Município</label>
                                            <input type="text" class="form-control" name="customer['city_customer']" value="<?php echo $customer['city_customer']; ?>">
                                        </div>
                                        <div class="form-group col-md-1">
                                            <label for="">UF</label>
                                            <input type="text" class="form-control" name="customer['state_customer']" value="<?php echo $customer['state_customer']; ?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-2">
                                            <label for="">Tel. Residencial</label>
                                            <input type="text" class="form-control" name="customer['phone_customer']" value="<?php echo $customer['phone_customer']; ?>" onkeypress="$(this).mask('(00) 0000-0000')">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="">Tel. Comercial</label>
                                            <input type="text" class="form-control" name="customer['workphone_customer']" value="<?php echo $customer['workphone_customer']; ?>" onkeypress="$(this).mask('(00) 00000-0000')">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="">Tel. Celular</label>
                                            <input type="text" class="form-control" name="customer['mobile_customer']" value="<?php echo $customer['mobile_customer']; ?>" onkeypress="$(this).mask('(00) 00000-0000')">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="">E-mail</label>
                                            <input type="email" class="form-control" name="customer['email_customer']" value="<?php echo $customer['email_customer']; ?>">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="">Dt. Nascimento</label>
                                            <input type="text" class="form-control" name="customer['birthdate_customer']" value="<?php echo $customer['birthdate_customer']; ?>">
                                        </div>
                                        <div class="form-group col-md-1">
                                            <label for="">País</label>
                                            <input type="text" class="form-control" name="customer['country_customer']" maxlength="2" value="<?php echo $customer['country_customer']; ?>">
                                        </div>
                                    </div>
                                    <div class="line"></div>
                                    <div class="form-group row">
                                        <div class="col-sm-4 offset-sm-3">
                                            <a href="report_customer.php" class="btn btn-secondary" role="button">Cancel</a>
                                            <button id="save" type="submit" class="btn btn-secondary" ><span
                                                        id="button"> Atualizar</span></button>
                                        </div>
                                    </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include(FOOTER_TEMPLATE); ?>