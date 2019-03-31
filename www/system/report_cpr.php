<?php require_once 'config.php'; ?>
<?php include(HEADER_TEMPLATE); ?>
    <div class="content-inner">
    <!-- Page Header-->
    <header class="page-header">
        <div class="container-fluid">
            <img id='logo' src="img/logo.png" alt="" width="10%"/>
            <!-- <img id='logoRight' style="display:block; margin-left: auto; margin-right: auto; float: right" src="img/logo-monaco.png" width="14%" class="rounded" alt=""> -->
            <div class="container-fluid">
                <h2 id='logo' style="font-family: 'Oswald', sans-serif; letter-spacing: 0.1em; font-size: 0.8em" class="no-margin-bottom"></h2>
            </div>
        </div>
    </header>
    <!-- Breadcrumb-->
    <div class="breadcrumb-holder container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Financeiro - Relatório</li>
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
                            <h3 class="h4" style="font-family: 'Bai Jamjuree'"><i style="font-size: 1.2em" class="fas fa-pen-square"></i> RELATÓRIO</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <div style="width:98%">
                                    <table id="report_cpr" style="width: 100%;" class="table">
                                        <thead>
                                        <tr>
                                            <th><ion-icon size="large" name="menu"></ion-icon></th>
                                            <th>NF-E</th>
                                            <th style="text-align: center;">FORNECEDOR</th>
                                            <th>VALOR</th>
                                            <th>DATA</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php //if ($providers) : ?>
                                            <?php //foreach ($providers as $provider) : ?>
                                                <tr>
                                                    <th style="vertical-align: middle" scope="row">000</th>
                                                    <td style="vertical-align: middle"></td>
                                                    <td style="vertical-align: middle"></td>
                                                    <td style="vertical-align: middle"></td>
                                                    <td style="vertical-align: middle"></td>
                                                    <td style="vertical-align: middle" class="action">
                                                        <div>
                                                            <a id="btn-edit" href="edit_for.php?id_pvd=<?php //echo $provider['id_pvd']; ?>" class="btn btn-warning btn-sm"><i class="material-icons md-18">insert_comment</i></a>
                                                            <a id="btn-trash" href="#" data-toggle="modal" data-target="#delete-modal-cli" data-customer="<?php //echo $provider['id_pvd']; ?>" class="btn btn-danger btn-sm tooltiptext" value="disable" alt="Disable" ><i class="material-icons md-18">person_add_disabled</i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php //endforeach; ?>
                                        <?php //else : ?>
                                            <tr>
                                                <td colspan="12">Nenhum registro encontrado.</td>
                                            </tr>
                                        <?php //endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div><br/>
                            <div class="form-group row">
                                <div class="col-sm-1 offset-sm-11">
                                    <!-- <a href="" style="font-family: 'Bai Jamjuree'" class="btn btn-secondary" role="button"><ion-icon size="large" name="print"></ion-icon></a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include('modals/modal.php'); ?>
<?php include(FOOTER_TEMPLATE); ?>