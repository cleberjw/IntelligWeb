<?php 	  
    require_once('inc/functions.php');
    ob_start();
    edit_exp();	
    
?>

<?php include(HEADER_TEMPLATE); ?>
                <div class="content-inner">
                    <!-- Page Header-->
                    <header class="page-header">
                        <div class="container-fluid">
                            <img id='logo' src="img/logo.png" alt="" width="12%" />
                            <!-- <img id='logoRight' style="display:block; margin-left: auto; margin-right: auto; float: right" src="img/logo-monaco.png" width="14%" class="rounded" alt=""> -->
                            <div class="container-fluid">
                                <h2 id='logo' style="font-family: 'Bai Jamjuree'" class="no-margin-bottom">Financeiro</h2>
                            </div>
                        </div>
                    </header>
                    <!-- Breadcrumb-->
                    <div class="breadcrumb-holder container-fluid">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Financial - Editar </li>
                        </ul>
                    </div>
                    <!-- Forms Section-->
                    <section class="forms"> 
                        <div class="container-fluid">
                            <div class="row">
                                <!--Basic Form-->
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-close">
                                            <div class="dropdown">
                                                <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                                <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow">
                                                    <a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a>
                                                    <a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-header d-flex align-items-center">
                                            <h3 class="h4">DESPESAS - MODO EDIÇÃO</h3>
                                        </div>
                                        <div class="card-body">
                                            <form action="edit_fin.php?id_exp=<?php echo $expense['id_exp']; ?>" method="POST">
                                                <div class="form-group">
                                                    <label class="form-control-label">Vencimento</label>
                                                    <input type="date" placeholder="" class="form-control" name="expense['date_exp']" value="<?php echo $expense['date_exp']; ?>">
                                                </div>
                                                <div class="form-group">       
                                                    <label class="form-control-label">Pagamento</label>
                                                    <input type="date" placeholder="" class="form-control" name="expense['date_pay_exp']" value="<?php echo $expense['date_pay_exp']; ?>">
                                                </div>
                                                <div class="form-group">       
                                                    <label class="form-control-label">Fornecedor</label>
                                                    <input type="text" placeholder="" class="form-control" name="expense['supplier_exp']" value="<?php echo $expense['supplier_exp']; ?>">
                                                </div>
                                                <div class="form-group">       
                                                    <label class="form-control-label">Valor</label>
                                                    <input type="text" placeholder="" class="form-control" name="expense['value_exp']" value="<?php echo $expense['value_exp']; ?>">
                                                </div>
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">Cód.</div>
                                                    </div>
                                                        <input id="codebar" type="text" class="form-control" id="inlineFormInputGroup" name="codebar_exp" value="<?php echo $expense['codebar_exp']; ?>">
                                                        <button id="copy" class="btn btn-secondary btn-sm"><i class="material-icons md-18">file_copy</i></a>
                                                    </div>
                                                <div class="modal-footer">
                                                    <a href="report_fin.php" class="btn btn-secondary" role="button">Cancel</a>
                                                    <button id="save" type="submit" class="btn btn-secondary" ><span id="button"> Alterar</span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div><!--
                 Modal Form-->
                            </div>
                        </div>
                    </section>
                    </form>

 <?php include(FOOTER_TEMPLATE); ?>