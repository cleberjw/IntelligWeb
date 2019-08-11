<?php require_once 'config.php'; ?>
<?php require_once 'inc/database.php'; ?>
<?php require_once DBAPI; ?>
<?php include(HEADER_TEMPLATE); ?>
<?php add_ord();?>


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
            <li class="breadcrumb-item active">Orçamento - Cadastrar </li>
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
                        <form method="POST" action="input_orc.php" enctype="multipart/form-data"
                              accept-charset="utf-8">
                            <div class="card-header d-flex align-items-center">
                                <h3 class="h4" style="font-family: 'Oswald', sans-serif; letter-spacing: 0.1em; font-size: 1em">
                                    <i style="font-size: 2em" class="icon-padnote"></i>
                                </h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-2">
                                        <label for="name" style="font-family: 'Bai Jamjuree'">N. Orçamento</label>
                                        <input type="text" style="font-family: 'Bai Jamjuree'" class="form-control" name="budget['id_bud']" placeholder="000<?php echo last() + 1 ?>" disabled>
                                    </div>
                                    <div  class="form-group col-md-10">
                                        <div id="total" class="card-body" style="text-align:center;float:right">
                                            <a style="font-size:2.2em;border-radius:7px" href="#" class="btn btn-primary"><ion-icon size="large" name="calculator"></ion-icon> 0.000,00</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="name">Cliente</label>
                                        <select id="client" style="font-size: 1em" name="order['name_cli_ord']" class="form-control" required >
                                            <option value="" selected>Selecionar Cliente</option>
                                            <?php $conn = open_database();
                                            mysqli_set_charset($conn, "utf8");
                                            $sql_client = mysqli_query($conn, "select distinct * from tbl_customers"); ?>
                                            <?php while ($consult = mysqli_fetch_array($sql_client)) : ?>
                                                <option>
                                                    <?php echo $consult[1] ?>
                                                </option>
                                            <?php endwhile; ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="campo2">E-mail</label>
                                        <input type="text" class="form-control" name="" value="">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="campo2">Status</label>
                                        <select style="font-size: 1em" name="order['status_ord']" class="form-control">
                                            <option value="EM ABERTO">Orçamento</option>
                                            <option value="FECHADO">Venda</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="campo3">Data do Orçamento</label>
                                        <input style="text-align:center;" type="text" class="form-control" name="order['created_ord']" value="<?php echo date('d/M/Y'); ?>" disabled>
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
                                                <th style="text-align: center">VALOR</th>
                                                <th style="text-align: center">TOTAL</th>
                                                <th>EDITAR</th>
                                            </tr>
                                            </thead>
                                            <tbody id="campos">
<!--                                            --><?php //$codprod = $_POST['produto']; echo find_prd($codprod)?>
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
                                <div class="form-group row">
                                    <div class="col-sm-4 offset-sm-9">
                                        <a href="" style="font-family: 'Bai Jamjuree'; font-size: 1em" class="btn btn-secondary" role="button">Cancel</a>
                                        <a href="" style="font-family: 'Bai Jamjuree'; font-size: 1em" class="btn btn-warning" role="button">Orçamento</a>
                                        <button id="save" type="submit" style="font-family: 'Bai Jamjuree'; font-size: 1em" class="btn btn-success" role="button">Venda</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php require_once 'modals/modal.php'; ?>
<?php include(FOOTER_TEMPLATE); ?>