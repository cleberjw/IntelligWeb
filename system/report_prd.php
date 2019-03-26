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
            <li class="breadcrumb-item active">Produtos - Relatório</li>
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
                            <h3 class="h4" style="font-family: 'Oswald', sans-serif; letter-spacing: 0.1em; font-size: 1em"><i style="font-size: 1.2em" class="fas fa-pen-square"></i> RELATÓRIO</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive" >
                                <div style="width:98%">
                                    <table id="report_prd" style="width: 100%;" class="table">
                                        <thead >
                                        <tr>
                                            <th><ion-icon size="large" name="menu"></ion-icon></th>
                                            <th>DESCRIÇÃO</th>
                                            <th style="text-align: center">CATEGORIA</th>
                                            <th style="text-align: center">FABRICANTE</th>
                                            <th style="text-align: center">ESTOQUE</th>
                                            <th style="text-align: center">CUSTO</th>
                                            <th style="text-align: center">STATUS</th>
                                            <th style="text-align: center">ETAPA</th>
                                            <th style="text-align: center">LOCAL</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php if ($products) : ?>
                                            <?php foreach ($products as $product) : ?>
                                                <tr>
                                                    <th style="vertical-align: middle" scope="row">000<?php echo $product['id_prd']; ?></th>
                                                    <td style="vertical-align: middle"><?php echo $product['desc_prd']; ?></td>
                                                    <td style="vertical-align: middle; text-align:center"><?php echo $product['cat_prd'] ?></td>
                                                    <td style="vertical-align: middle; text-align:center"><?php echo $product['brand_prd'] ?></td>
                                                    <td style="vertical-align: middle; text-align:center"><?php echo $product['estat_prd'] ?></td>
                                                    <td style="vertical-align: middle; text-align:right"><?php echo $product['value_prd'] ?></td>
                                                    <td style="vertical-align: middle; text-align:center"><?php echo $product['status_prd'] ?></td>
                                                    <td style="vertical-align: middle; text-align:center"><?php echo $product['stage_prd'] ?></td>
                                                    <td style="vertical-align: middle; text-align:center"><?php echo $product['local_prd'] ?></td>
                                                    <td style="vertical-align: middle" class="action">
                                                        <div>
                                                            <a id="btn-edit" href="edit_prd.php?id_prd=<?php echo $product['id_prd']; ?>" class="btn btn-warning btn-sm"><i class="material-icons md-18">insert_comment</i></a>
                                                            <a id="btn-trash" href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#image-modal-prd" data-products="<?php echo $product['id_prd']; ?>" value="disable" alt="Disable"><i class="material-icons md-18">image_search</i></a>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php require('modals/modal.php') ?>
<?php include(FOOTER_TEMPLATE); ?>