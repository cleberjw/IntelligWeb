<?php require_once 'config.php'; ?>
<?php require_once 'inc/database.php'; ?>
<?php require_once DBAPI; ?>
<?php include(HEADER_TEMPLATE); ?>

<div class="content-inner">
    <!-- Page Header-->
    <header class="page-header">
        <div class="container-fluid">
            <img id='logo' src="img/logo.png" alt="" width="12%" />
            <!-- <img id='logoRight' style="display:block; margin-left: auto; margin-right: auto; float: right"
                            src="img/logo-monaco.png" width="14%" class="rounded" alt=""> -->
            <div class="container-fluid">
                <h2 id='logo' style="font-family: 'Bai Jamjuree'" class="no-margin-bottom">Orçamentos</h2>
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
                        <form method="POST" action="" enctype="multipart/form-data"
                            accept-charset="utf-8">
                            <div class="card-header d-flex align-items-center">
                                <h3 class="h4" style="font-family: 'Bai Jamjuree'">
                                    <ion-icon size="large" name="calculator"></ion-icon> CADASTRAR
                                </h3>
                            </div>
                            <div class="card-body">
                                                <div class="row">
                                                    <div class="form-group col-md-2">
                                                        <label for="name" style="font-family: 'Bai Jamjuree'">N. Orçamento</label>
                                                        <input type="text" style="font-family: 'Bai Jamjuree'" class="form-control" name="customer['id_cli']" placeholder="000<?php echo last() + 1 ?>" disabled>
                                                    </div>
                                                    <div  class="form-group col-md-10">
                                                        <div id="total" class="card-body" style="text-align:center;float:right">
                                                            <a style="font-size:2.2em;border-radius:7px" href="#" class="btn btn-primary"><ion-icon size="large" name="calculator"></ion-icon> 0.000,00</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-md-7">
                                                      <label for="name">Cliente</label>
                                                        <select id="client" required name="client" class="form-control">
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
                                                      <input type="text" class="form-control" name="customer['email_cli']" value="">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                      <label for="campo3">Data do Orçamento</label>
                                                      <input style="text-align:center;" type="text" class="form-control" name="customer['created_cli']" value="<?php echo date('d/M/Y'); ?>" disabled>
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
                                                            <th>CATEGORIA</th>
                                                            <th>QTD.</th>
                                                            <th>VALOR</th>
                                                            <th>EDITAR</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <?php if ($customers) : ?>
                                                            <?php foreach ($customers as $customer) : ?>
                                                                <tr>
                                                                    <th style="vertical-align: middle" scope="row">000<?php //echo $customer['id_cli']; ?></th>
                                                                    <td style="vertical-align: middle"><?php //echo $customer['name_cli']; ?></td>
                                                                    <td style="vertical-align: middle"><?php //echo $customer['address_cli']; ?></td>
                                                                    <td style="vertical-align: middle"><?php //echo $customer['hood_cli']; ?></td>
                                                                    <td style="vertical-align: middle"><?php //echo $customer['city_cli']; ?></td>
                                                                    
                                                                    <td style="vertical-align: middle" class="action">
                                                                        <div>
                                                                            <a style="font-family: 'Bai Jamjuree'" id="btn-edit" href="edit_cli.php?id_orc=<?php echo $customer['id_cli']; ?>" class="btn btn-warning btn-sm"><i class="material-icons md-18">cached</i></a>
                                                                            <a style="font-family: 'Bai Jamjuree'" id="btn-trash" href="#" data-toggle="modal" data-target="#delete-modal" data-customer="<?php echo $customer['id_cli']; ?>" class="btn btn-danger btn-sm tooltiptext" value="disable" alt="Disable" ><i class="material-icons md-18">delete_outline</i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>

                                                            <?php endforeach; ?>
                                                        <?php else : ?>
                                                            <tr>
                                                                <td colspan="12">Nenhum registro encontrado.</td>
                                                            </tr>
                                                        <?php endif; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-3 offset-sm-1">
                                                        <a href="" class="btn btn-secondary" role="button">Cancel</a>
                                                        <a class="btn btn-default" data-toggle="modal" data-target="#add-modal">Adicionar Produto</a>
                                                    </div>
                                                </div>
                                                <div class="line"></div>
                                                <div class="form-group row">
                                                    <div class="col-sm-4 offset-sm-9">
                                                        <a href="" style="font-family: 'Bai Jamjuree'" class="btn btn-secondary" role="button">Cancel</a>
                                                        <a href="" style="font-family: 'Bai Jamjuree'" class="btn btn-warning" role="button">Orçamento</a>
                                                        <a href="" style="font-family: 'Bai Jamjuree'" class="btn btn-success" role="button">Venda</a>
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