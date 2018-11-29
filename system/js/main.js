/**
 * Passa os dados do cliente para o Modal, e atualiza o link para exclusão
 */
$('#delete-modal-cli').on('show.bs.modal', function (event) {
  
    var button = $(event.relatedTarget);
    var id = button.data('customer');
    
    var modal = $(this);
    modal.find('.modal-title').text(' Registro 000' + id);
    modal.find('#confirm').attr('href', 'delete.php?id_cli=' + id);
  })

  $('#delete-modal-exp').on('show.bs.modal', function (event) {
  
    var button = $(event.relatedTarget);
    var id = button.data('expense');
    
    var modal = $(this);
    modal.find('.modal-title').text(' Registro 000' + id);
    modal.find('#confirm').attr('href', 'delete.php?id_exp=' + id);
  })

//-- FUNCAO JAVASCRIPT EXECUTA QUANDO MUDA SELECT /
// $(document).ready(function(){
//   $("select").change(function(){
//     var varcliente=document.getElementById("client").value;
//     alert(varcliente);
//     this.form.submit();
//    });
// });