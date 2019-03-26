<?php
require_once('inc/functions.php');
ob_start();
edit_pvd();

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
            <li class="breadcrumb-item active">Fornecedores - Cadastro </li>
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
                        <form method="POST" action="edit_for.php?id_pvd=<?php echo $provider['id_pvd']; ?>"" enctype="multipart/form-data"
                              accept-charset="utf-8">
                            <div class="card-header d-flex align-items-center">
                                <h3 class="h4" style="font-family: 'Oswald', sans-serif; letter-spacing: 0.1em; font-size: 1em"><i class="fas fa-dolly-flatbed"></i> FORNECEDORES</h3>
                            </div>
                            <div class="card-body">
                                <form class="form-horizontal">
                                    <div class="row">
                                        <div class="form-group col-md-2">
                                            <label for="">ID Fornecedor</label>
                                            <input type="text" class="form-control" name="provider['id_pvd']"  placeholder="000<?php echo $provider['id_pvd'];?>" disabled>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="">Nome Fornecedor</label>
                                            <input type="text" class="form-control" name="provider['name_pvd']"  placeholder="<?php echo $provider['name_pvd'];?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="">Nome / Razão Social</label>
                                            <input type="text" class="form-control" name="provider['razaosocial_pvd']" value="<?php echo $provider['razaosocial_pvd']; ?>">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="">CNPJ </label>
                                            <input id="CpfCnpj" type="text" id="cpfCnpj" class="form-control" name="provider['cpf_cnpj_pvd']" value="<?php echo $provider['cpf_cnpj_pvd']; ?>">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="">I.E</label>
                                            <input type="text" class="form-control" name="provider['ie_pvd']" value="<?php echo $provider['ie_pvd']; ?>">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="">Cadastro</label>
                                            <input type="text" class="form-control" name="provider['created_pvd']" disabled value="<?php echo date('d-m-Y H:i:s', strtotime($provider['created_pvd'])); ?>">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="">Modificado</label>
                                            <input type="text" class="form-control" name="provider['modified_pvd']" disabled value="<?php echo date('d-m-Y H:i:s', strtotime($provider['modified_pvd'])); ?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="">Endereço</label>
                                            <input type="text" class="form-control" name="provider['address_pvd']" value="<?php echo $provider['address_pvd']; ?>">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="">Bairro</label>
                                            <input type="text" class="form-control" name="provider['hood_pvd']" value="<?php echo $provider['hood_pvd']; ?>">
                                        </div>

                                        <div class="form-group col-md-2">
                                            <label for="">CEP</label>
                                            <input type="text" class="form-control" name="provider['zip_code_pvd']" value="<?php echo $provider['zip_code_pvd']; ?>">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="campo1">Município</label>
                                            <input type="text" class="form-control" name="provider['city_pvd']" value="<?php echo $provider['city_pvd']; ?>">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="">Estado</label>
                                            <input type="text" class="form-control" name="provider['state_pvd']" value="<?php echo $provider['state_pvd']; ?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-2">
                                            <label for="">Tel. Principal</label>
                                            <input type="text" class="form-control" name="provider['phone_pvd']" onkeypress="$(this).mask('(00) 0000-0000')" value="<?php echo $provider['phone_pvd']; ?>">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="">Tel. Comercial</label>
                                            <input type="text" class="form-control" name="" onkeypress="$(this).mask('(00) 00000-0000')" value="<?php echo $provider['phone_pvd']; ?>">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="">Tel. Celular</label>
                                            <input type="text" class="form-control" name="provider['mobile_pvd']" onkeypress="$(this).mask('(00) 00000-0000')" value="<?php echo $provider['mobile_pvd']; ?>">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="">E-mail</label>
                                            <input type="text" class="form-control" name="provider['email_pvd']" value="<?php echo $provider['email_pvd']; ?>">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="">Dt. Abertura</label>
                                            <input type="text" class="form-control" name="provider['dateopen_pvd']" value="<?php echo $provider['dateopen_pvd']; ?>">
                                        </div>
                                        <div class="form-group col-md-1">
                                            <label for="">País</label>
                                            <input type="text" class="form-control" name="provider['country_pvd']" value="<?php echo $provider['country_pvd']; ?>">
                                        </div>
                                    </div>
                                    <div class="line"></div>
                                    <div class="form-group row">
                                        <div class="col-sm-4 offset-sm-3">
                                            <a href="report_for.php" class="btn btn-secondary" role="button">Cancel</a>
                                            <button id="save" type="submit" class="btn btn-secondary" ><span
                                                        id="button"> Atualizar</span></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                    </div>
                </div>
            </div>
    </section>

<?php include(FOOTER_TEMPLATE); ?>