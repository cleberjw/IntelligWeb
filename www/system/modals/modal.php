<!-- Modal de Delete de Cliente-->
<div class="modal fade" id="delete-modal-cli" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
    <div class="modal-dialog" role="document">
        <div style="border-radius: 8px" class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true"></span></button>
                <h4 class="modal-title" id="modalLabel">Excluir Item</h4>
            </div>
            <div class="modal-body">
                Deseja realmente excluir este item?
            </div>
            <div class="modal-footer">
                <a id="confirm" class="btn btn-primary" href="#">Sim</a>
                <a id="cancel" class="btn btn-default" data-dismiss="modal">N&atilde;o</a>
            </div>
        </div>
    </div>
</div> <!-- /.modal -->


<!-- Modal de Delete de Despesas-->
<div class="modal fade" id="delete-modal-exp" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
    <div class="modal-dialog" role="document">
        <div  style="border-radius: 8px" class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true"></span></button>
                <h4 class="modal-title" id="modalLabel">Excluir Item</h4>
            </div>
            <div class="modal-body">
                Deseja realmente excluir esta conta?
            </div>
            <div class="modal-footer">
                <a id="confirm" class="btn btn-primary" href="#">Sim</a>
                <a id="cancel" class="btn btn-default" data-dismiss="modal">N&atilde;o</a>
            </div>
        </div>
    </div>
</div> <!-- /.modal -->


<!-- Modal Mostrar Imagem-->
<div class="modal fade" id="image-modal-prd" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
    <div class="modal-dialog" role="document">
        <div  style="border-radius: 8px" class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true"></span></button>
                <h4 style="font-size: 1em" class="modal-title" id="modalLabel">Excluir Item</h4>
            </div>
            <div class="modal-body">
                <img class="rounded mx-auto d-block" id="imgModal">
            </div>
            <div class="modal-footer">
                <a id="btFechar" class="btn btn-default" data-dismiss="modal">Fechar</a>
            </div>
        </div>
    </div>
</div>


<!-- Modal de Incluir Item Orçamento-->
<div class="modal fade" id="add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div style="border-radius: 8px" class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="font-family: 'Bai Jamjuree'" id="exampleModalLabel"><i style="font-size: 1.2em" class="fas fa-cart-plus"></i> Adicionar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data">
                    <div class=row>
                        <div class="form-group col-md-9">
                            <label for="name" class="col-form-label">Produto</label>
                            <select id="descprod" style="border-radius: 5px;font-size: 0.9em" required name="descproduct" class="form-control" required>
                                <option value="" selected>Selecionar Produto</option>
                                <?php $conn = open_database();
                                mysqli_set_charset($conn, "utf8");
                                $sql_client = mysqli_query($conn, "select distinct * from tbl_products"); ?>
                                <?php while ($consult = mysqli_fetch_array($sql_client)) : ?>
                                    <option value="<?php echo $consult['desc_prd']?>" cod="<?php echo $consult['id_prd']?>" valor="<?php echo $consult['value_prd']?>"><?php echo $consult['desc_prd']?></option>
                                <?php endwhile; ?>
                            </select></br>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="recipient-name" class="col-form-label">Qtd.</label>
                            <input id="qtdprod" name="qtdprod" style="border-radius: 5px" type="text" class="form-control" required>
                        </div>
                    </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button id="inclui" type="button" class="btn btn-primary">Adicionar</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div> <!-- /.modal -->

<!-- Modal de Incluir Categoria-->
<div class="modal fade" style="font-family: 'Roboto', sans-serif; font-size: 0.9em; text-align: center" id="add-modal-cat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div style="border-radius: 8px" class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span style="font-size: 0.6em" aria-hidden="true">Fechar</span>
                </button>
            </div>
            <div class="modal-body">
                <form name="formulario" method="POST" enctype="multipart/form-data">
                    <div class=row>
                        <div class="form-group col-md-3">
                            <label for="name" class="col-form-label">ID.</label>
                            <input name="category['id_cat']" style="border-radius: 5px; text-align: center" type="text" class="form-control" placeholder="000<?php echo last_cat() + 1?>" disabled>
                        </div>
                        <div class="form-group col-md-8">
                            <label for="recipient-name" class="col-form-label">Categoria</label>
                            <input name="category['desc_cat']" style="border-radius: 5px" type="text" class="form-control" required>
                        </div>
                    </div>
                    <br/>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button id="inclui-cat" type="submit" class="btn btn-primary">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> <!-- /.modal -->

<!-- Modal de Incluir Fornecedor-->
<div class="modal fade" style="font-family: 'Roboto', sans-serif; font-size: 0.9em; text-align: center" id="add-modal-for" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div style="border-radius: 8px" class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span style="font-size: 0.6em" aria-hidden="true">Fechar</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="input_for.php" enctype="multipart/form-data"
                      accept-charset="utf-8">
                    <div class="card-header d-flex align-items-center">
                        <h3 class="h4" style="font-family: 'Oswald', sans-serif; letter-spacing: 0.1em; font-size: 2em"><i style="color: darkgray" class="fas fa-kaaba"></i></h3>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal">
                            <div class="row">
                                <div class="form-group col-md-2">
                                    <label for="">ID Fornecedor</label>
                                    <input type="text" class="form-control" name="provider['id_pvd']" placeholder="000<?php echo last() + 1?>" disabled>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="">Razão Social</label>
                                    <input type="text" class="form-control" name="provider['razaosocial_pvd']">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">Nome</label>
                                    <input type="text" class="form-control" name="provider['name_pvd']">
                                </div>

                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="">CNPJ </label>
                                    <input id="CpfCnpj" type="text" id="cpfCnpj" class="form-control" name="provider['cpf_cnpj_pvd']">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">E-mail</label>
                                    <div class="input-group mb-2 mr-sm-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">@</div>
                                        </div>
                                        <input type="text" class="form-control" name="provider['email_pvd']">
                                    </div>
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="form-group row">
                                <div class="col-sm-4 offset-sm-8">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button id="save" type="submit" class="btn btn-primary" ><span
                                                id="button"> Cadastrar</span></button>
                                </div>
                            </div>
                        </form>
            </div>
        </div>
    </div>
</div> <!-- /.modal -->





