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
            <li class="breadcrumb-item active">Financeiro - Cadastro </li>
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
                        <form method="POST" action="edit_fin.php?id_exp=<?php echo $expense['id_exp']; ?>" enctype="multipart/form-data" accept-charset="utf-8">

                            <div class="card-header d-flex align-items-center">
                                <h3 class="h4" style="font-family: 'Oswald', sans-serif; letter-spacing: 0.1em; font-size: 1em"><i style="font-size: 2em" class="icon-check"></i></h3>
                            </div>
                            <div class="card-body">
                                <form class="form-horizontal">
                                    <div class="row">
                                        <div class="form-group col-md-1">
                                            <label for="">ID Despesa</label>
                                            <input type="text" class="form-control" name="expense['id_exp']" placeholder="00000<?php echo $expense['id_exp']; ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-5">
                                            <label for="">Fornecedor</label>
                                            <div class="input-group mb-2 mr-sm-2">
                                                <select style="font-size: 1em;" id="fornecedores" required name="expense['supplier_exp']" class="form-control" required>
                                                    <option value="<?php echo $expense['supplier_exp']; ?>" selected><?php echo $expense['supplier_exp']; ?></option>
                                                    <?php $conn = open_database();
                                                    mysqli_set_charset($conn, "utf8");
                                                    $sql_for = mysqli_query($conn, "select distinct * from tbl_providers"); ?>
                                                    <?php while ($consult = mysqli_fetch_array($sql_for)) : ?>
                                                        <option><?php echo $consult[1]?></option>
                                                    <?php endwhile; ?>
                                                </select></br>
                                                <div style="border-radius: 0" class="btn btn-primary" data-toggle="modal" data-target="#add-modal-for"><i class="fas fa-plus-square"></i></div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="">Plano de Contas</label>
                                            <div class="input-group mb-2 mr-sm-2">
                                                <select style="font-size: 1em;" id="categorias" required name="expense['cat_exp']" class="form-control" required>
                                                    <option value="<?php echo $expense['cat_exp'];?>" selected><?php echo $expense['cat_exp']; ?></option>
                                                    <?php $conn = open_database();
                                                    mysqli_set_charset($conn, "utf8");
                                                    $sql_cat = mysqli_query($conn, "select distinct * from tbl_categories"); ?>
                                                    <?php while ($consult = mysqli_fetch_array($sql_cat)) : ?>
                                                        <option><?php echo $consult[1]?></option>
                                                    <?php endwhile; ?>
                                                </select></br>
                                                <div style="border-radius: 0" class="btn btn-primary" data-toggle="modal" data-target="#add-modal-cat"><i class="fas fa-plus-square"></i></div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="">Vencimento</label>
                                            <div class="input-group mb-2 mr-sm-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fas fa-calendar-minus"></i></div>
                                                </div>
                                                <input type="text" class="form-control" id="birthday" name="expense['date_exp']" value="<?php echo $expense['date_exp']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="">Emissão</label>
                                            <div class="input-group mb-2 mr-sm-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="far fa-calendar-check"></i></div>
                                                </div>
                                                <input type="text" class="form-control" id="birthday" name="expense['issue_exp']" value="<?php echo $expense['issue_exp']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-2">
                                            <label for="">Valor</label>
                                            <div class="input-group mb-2 mr-sm-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fas fa-dollar-sign"></i></div>
                                                </div>
                                                <input type="text" class="form-control" name="expense['value_exp']" value="<?php echo $expense['value_exp']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-1">
                                            <label for="">Repetir</label>
                                            <div class="input-group mb-2 mr-sm-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fas fa-times"></i></div>
                                                </div>
                                                <input type="text" class="form-control" name="">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="">Código de Barras</label>
                                            <div class="input-group mb-2 mr-sm-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fas fa-barcode"></i></div>
                                                </div>
                                                <input type="text" class="form-control" name="expense['codebar_exp']" value="<?php echo $expense['codebar_exp']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="">Pagamento</label>
                                            <div class="input-group mb-2 mr-sm-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fas fa-calendar-minus"></i></div>
                                                </div>
                                                <input type="text" class="form-control" id="birthday" name="expense['date_pay_exp']" value="<?php echo $expense['date_pay_exp']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <input type="file" name="file" id="file" class="input-file">
                                            <label for="file" class="btn btn-tertiary js-labelFile">
                                                <i class="icon fa fa-check"></i>
                                                <span class="js-fileName"> Comprovante</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="line"></div>
                                    <div class="form-group row">
                                        <div class="col-sm-4 offset-sm-10">
                                            <a href="report_fin.php" style="font-family: 'Bai Jamjuree'" class="btn btn-secondary" role="button">Cancel</a>
                                            <button id="save" type="submit" class="btn btn-primary" ><span
                                                        id="button"> Cadastrar</span></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>
<?php include(FOOTER_TEMPLATE); ?>