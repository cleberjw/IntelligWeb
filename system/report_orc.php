<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>
<?php include(HEADER_TEMPLATE); ?>
                <div class="content-inner">
                    <!-- Page Header-->
                    <header class="page-header">
                        <div class="container-fluid">
                            <img id='logo' src="img/logo.png" alt="" width="12%" />
                            <!-- <img id='logoRight' style="display:block; margin-left: auto; margin-right: auto; float: right" src="img/logo-monaco.png" width="14%" class="rounded" alt=""> -->
                            <div class="container-fluid">
                                <h2 id='logo' style="font-family: 'Bai Jamjuree'" class="no-margin-bottom">Orçamentos</h2>
                            </div>
                        </div>
                    </header>
                    <!-- Breadcrumb-->
                    <div class="breadcrumb-holder container-fluid">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Orçamentos - Relatório</li>
                        </ul>
                    </div>
                    <section class="tables">   
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-close">
                                            <div class="dropdown">
                                                <button type="button" id="closeCard3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                                <div aria-labelledby="closeCard3" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                                            </div>
                                        </div>
                                        <div class="card-header d-flex align-items-center">
                                            <h3 class="h4" style="font-family: 'Bai Jamjuree'"><ion-icon size="large" name="ios-create"></ion-icon> RELATÓRIO</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">                       
                                                <table class="table table-striped table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th><ion-icon size="large" name="menu"></ion-icon></th>
                                                            <th>N. ORÇAMENTO</th>
                                                            <th>CLIENTE</th>
                                                            <th>VALOR</th>
                                                            <th>DATA</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php //if ($customers_orc) : ?>
                                                            <?php //foreach ($customers_orc as $customer_orc) : ?>
                                                                <tr>
                                                                <?php //if ($customer_orc['dtpay_exp'] == "") {
                                                                    //$color = 'rgba(255,0,0,0.8);';
                                                                //} else {
                                                                    //$color = 'black';
                                                                //} ?>
                                                                    <th style="vertical-align: middle" scope="row">000<?php //echo $customer_orc['id_orc']; ?></th>
                                                                    <td style="vertical-align: middle"><?php ?></td>
                                                                    <td style="vertical-align: middle; text-align: center;"><?php //echo $customer_orc['type_orc']; ?></td>
                                                                    <td style="vertical-align: middle"><?php //echo $customer_orc['value_orc']; ?></td>
                                                                    <td style="vertical-align: middle" class="actions text-right">
                                                                        <div>
                                                                            <a id="btn-edit" href="edit_orc.php?id_orc=<?php //echo $customer_orc['id_orc']; ?>" class="btn btn-warning btn-sm"><i class="material-icons md-18">insert_comment</i></a>
                                                                            <a id="btn-trash" href="#" class="btn btn-danger btn-sm"><i class="material-icons md-18">delete_sweep</i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            <?php //endforeach; ?>
                                                        <?php //else : ?>
                                                            <tr>
                                                                <td colspan="6">Nenhum registro encontrado.</td>
                                                            </tr>
                                                        <?php //endif; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
<?php include(FOOTER_TEMPLATE); ?>