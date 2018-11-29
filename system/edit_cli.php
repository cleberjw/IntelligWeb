<?php 	  
    require_once('inc/functions.php');
    ob_start();
    edit_cli();	
     
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
                            <h2 id='logo' style="font-family: 'Bai Jamjuree'" class="no-margin-bottom">Financeiro</h2>
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
                                    <form action="edit_cli.php?id_cli=<?php echo $customer['id_cli']; ?>" method="POST">
                                        <div class="card-header d-flex align-items-center">
                                            <h3 class="h4">Clientes - Modo editar</h3>
                                        </div>
                                        <div class="card-body">
                                            <form method="POST" class="form-horizontal">
                                                <div class="row">
                                                    <div class="form-group col-md-1">
                                                        <label for="name">ID Cliente</label>
                                                        <input type="text" class="form-control" name="customer['id_cli']" placeholder="000<?php echo $customer['id_cli'];?>" disabled>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-7">
                                                      <label for="name">Nome / Razão Social</label>
                                                      <input type="text" class="form-control" name="customer['name_cli']" value="<?php echo $customer['name_cli']; ?>">
                                                    </div>
                                                
                                                    <div class="form-group col-md-3">
                                                      <label for="campo2">CNPJ / CPF</label>
                                                      <input type="text" class="form-control" name="customer['cpf_cnpj_cli']" value="<?php echo $customer['cpf_cnpj_cli']; ?>">
                                                    </div>
                                                
                                                    <div class="form-group col-md-2">
                                                      <label for="campo3">Data de Nascimento</label>
                                                      <input type="text" class="form-control" name="customer['birthdate_cli']" value="<?php echo $customer['birthdate_cli']; ?>">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-5">
                                                      <label for="campo1">Endereço</label>
                                                      <input type="text" class="form-control" name="customer['address_cli']" value="<?php echo $customer['address_cli']; ?>">
                                                    </div>
                                                
                                                    <div class="form-group col-md-3">
                                                      <label for="campo2">Bairro</label>
                                                      <input type="text" class="form-control" name="customer['hood_cli']" value="<?php echo $customer['hood_cli']; ?>">
                                                    </div>
                                                    
                                                    <div class="form-group col-md-2">
                                                      <label for="campo3">CEP</label>
                                                      <input type="text" class="form-control" name="customer['zip_code_cli']" value="<?php echo $customer['zip_code_cli']; ?>">
                                                    </div>
                                                    
                                                    <div class="form-group col-md-2">
                                                      <label for="campo3">Data de Cadastro</label>
                                                      <input type="text" class="form-control" name="customer['created_cli']" disabled value="<?php echo $customer['created_cli']; ?>">
                                                    </div>
                                                  </div>
                                                  <div class="row">
                                                    <div class="form-group col-md-3">
                                                      <label for="campo1">Município</label>
                                                      <input type="text" class="form-control" name="customer['city_cli']" value="<?php echo $customer['city_cli']; ?>">
                                                    </div>
                                                    
                                                    <div class="form-group col-md-2">
                                                      <label for="campo2">Telefone</label>
                                                      <input type="text" class="form-control" name="customer['phone_cli']" value="<?php echo $customer['phone_cli']; ?>">
                                                    </div>
                                                    
                                                    <div class="form-group col-md-2">
                                                      <label for="campo3">Celular</label>
                                                      <input type="text" class="form-control" name="customer['mobile_cli']" value="<?php echo $customer['mobile_cli']; ?>">
                                                    </div>
                                                    
                                                    <div class="form-group col-md-1">
                                                      <label for="campo3">UF</label>
                                                      <input type="text" class="form-control" name="customer['state_cli']" value="<?php echo $customer['state_cli']; ?>">
                                                    </div>
                                                    
                                                    <div class="form-group col-md-2">
                                                      <label for="campo3">Inscrição Estadual</label>
                                                      <input type="text" class="form-control" name="customer['ie_cli']" value="<?php echo $customer['ie_cli']; ?>">
                                                    </div>
                                                    
                                                    <div class="form-group col-md-2">
                                                      <label for="campo3">Modificado</label>
                                                      <input type="text" class="form-control" name="customer['modified_cli']" value="<?php echo $customer['modified_cli']; ?>" disabled>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                      <label for="campo3">E-mail</label>
                                                      <input type="text" class="form-control" name="customer['email_cli']" value="<?php echo $customer['email_cli']; ?>">
                                                    </div>
                                                  </div>
                                            <div class="line"></div>
                                            <div class="form-group row">
                                                <div class="col-sm-4 offset-sm-3">
                                                    <a href="report_cli.php" class="btn btn-secondary" role="button">Cancel</a>
                                                    <button id="save" type="submit" class="btn btn-secondary" ><span
                                                            id="button"> Alterar</span></button>
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