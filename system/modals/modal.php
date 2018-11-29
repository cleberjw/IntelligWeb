<!-- Modal de Delete de Cliente-->
<div class="modal fade" id="delete-modal-cli" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
  <div class="modal-dialog" role="document">
    <div  style="border-radius: 8px" class="modal-content">
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


<!-- Modal de Incluir Item Orçamento-->
<div  class="modal fade" id="add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div style="border-radius: 8px" class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" style="font-family: 'Bai Jamjuree'" id="exampleModalLabel"><ion-icon size="large" name="ios-add-circle"></ion-icon>Adicionar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class=row>
              <div class="form-group col-md-9">
                  <label for="name" class="col-form-label">Produto</label>
                  <select style="border-radius: 5px" id="client" required name="client" class="form-control">
                      <option value="" selected>Selecionar Produto</option>
                      <?php $conn = open_database();
                            mysqli_set_charset($conn, "utf8");
                            $sql_client = mysqli_query($conn, "select distinct * from tbl_products"); ?>
                      <?php while ($consult = mysqli_fetch_array($sql_client)) : ?>
                      <option><?php echo $consult[1]?></option>
                      <?php endwhile; ?>
                  </select>
              </div>
              <div class="form-group col-md-2">
                <label for="recipient-name" class="col-form-label">Qtd.</label>
                <input style="border-radius: 5px" type="text" class="form-control" id="recipient-name">
              </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Adicionar</button>
      </div>
    </div>
  </div>
</div> <!-- /.modal -->



