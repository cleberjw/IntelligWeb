<?php
require_once('inc/functions.php');
ob_start();
edit_prd();

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
            <li class="breadcrumb-item active">Produto - Editar </li>
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
                        <form action="edit_prd.php?id_prd=<?php echo $product['id_prd']; ?>" method="POST" accept-charset="utf-8" enctype="multipart/form-data">

                            <div class="card-header d-flex align-items-center">
                                <h3 class="h4" style="font-family: 'Oswald', sans-serif; letter-spacing: 0.1em; font-size: 1em"><i style="font-size: 1.2em" class="fas fa-list-alt"></i> PRODUTOS</h3>
                            </div>
                            <div class="card-body">
                                <form class="form-horizontal">
                                        <div class="row">
                                        <div class="form-group col-md-1">
                                            <label for="">ID Produto</label>
                                            <input type="text" class="form-control" name="product['id_prd']" placeholder="000<?php echo last_prd() + 1?>" disabled>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="">Descrição</label>
                                            <input type="text" class="form-control" name="product['desc_prd']" value="<?php echo $product['desc_prd']; ?>">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="">English Description</label>
                                            <input type="text" class="form-control" name="" value="<?php  ?>">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="">Cadastrado</label>
                                            <input type="text" class="form-control" name="" value="<?php echo date('d-m-Y H:i:s', strtotime($product['created_prd'])); ?>" disabled>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="">Modificado</label>
                                            <input type="text" class="form-control" name="product['update_prd']" value="<?php echo date('d-m-Y H:i:s', strtotime($product['update_prd'])); ?>" disabled>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-2">
                                            <label for="">Fabricante</label>
                                            <input type="text" class="form-control" name="product['brand_prd']" value="<?php echo $product['brand_prd']; ?>">
                                        </div>

                                        <div class="form-group col-md-2">
                                            <label for="">Categoria</label>
                                            <input type="text" class="form-control" name="product['cat_prd']" value="<?php echo $product['cat_prd']; ?>">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="">Fornecedor 1</label>
                                            <select style="font-size: 1em" id="product" name="product['for1_prd']" class="form-control">
                                                <option value="<?php echo $product['for1_prd']; ?>" selected><?php echo $product['for1_prd']; ?></option>
                                                <?php foreach ($providers as $provider) : ?>
                                                    <option data-divider="true" disabled></option>
                                                    <option><?php echo $provider['name_pvd']?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="">Fornecedor 2</label>
                                            <select style="font-size: 1em" id="product" name="product['for2_prd']" class="form-control">
                                                <option value="" selected>Selecionar</option>
                                                <?php foreach ($providers as $provider) : ?>
                                                    <option data-divider="true" disabled></option>
                                                    <option><?php echo $provider['name_pvd']?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="">Fornecedor 3</label>
                                            <select style="font-size: 1em" id="product" name="product['for3_prd']" class="form-control">
                                                <option value="" selected>Selecionar</option>
                                                <?php foreach ($providers as $provider) : ?>
                                                    <option data-divider="true" disabled></option>
                                                    <option><?php echo $provider['name_pvd']?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="">Código de Barra</label>
                                            <input type="text" class="form-control" name="product['codebar_prd']" value="<?php echo $product['codebar_prd']; ?>">
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-1">
                                            <label for="">Mínimo</label>
                                            <input type="text"  style="text-align: center" class="form-control" name="product['estid_prd']" value="<?php echo $product['estid_prd']; ?>">
                                        </div>
                                        <div class="form-group col-md-1">
                                            <label for="">Atual</label>
                                            <input id="text" type="text" style="text-align: center" class="form-control" name="product['estat_prd']" value="<?php echo $product['estat_prd']; ?>">
                                        </div>
                                        <div class="form-group col-md-1">
                                            <label for="">Disponível</label>
                                            <input type="text" class="form-control" name="product['estds_prd']"  value="<?php echo $product['estds_prd']; ?>">
                                        </div>
                                        <div class="form-group col-md-1">
                                            <label for="">Local</label>
                                            <input type="text" class="form-control" name="product[local_prd']"  value="<?php echo $product['local_prd']; ?>">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="">Custo</label>
                                            <input type="text" class="form-control" name="product['value_prd']"  value="<?php echo $product['value_prd']; ?>">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="">Status</label>
                                            <select id="product" name="product['status_prd']" class="form-control" >
                                                <option value="<?php echo $product['status_prd']?>" selected><?php echo $product['status_prd']?></option>
                                                <option value="Ativo"><?php echo $product['status_prd'] == 'Ativo' ? '' : 'Ativo'; ?></option>
                                                <option value="Inativo"><?php echo $product['status_prd'] == 'Inativo' ? '' : 'Inativo'; ?></option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="">Etapa</label>
                                            <select id="product" name="product['stage_prd']" class="form-control">
                                                <option value="<?php echo $product['stage_prd']?>" selected><?php echo $product['stage_prd']?> </option>
                                                <option data-divider="true" disabled></option>
                                                <option value="Etapa 1">Etapa 1</option>
                                                <option value="Etapa 2">Etapa 2</option>
                                                <option value="Etapa 3">Etapa 3</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <input type="file" name="file" id="file" class="input-file">
                                            <label for="file" class="btn btn-tertiary js-labelFile">
                                                <i class="icon fa fa-check"></i>
                                                <span class="js-fileName">Imagem</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="line"></div>
                                    <div class="form-group row">
                                        <div class="col-sm-4 offset-sm-3">
                                            <a href="report_prd.php" class="btn btn-secondary" role="button">Cancel</a>
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