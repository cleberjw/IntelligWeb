$(document).ready(function() {
    /**
     * Passa os dados do cliente para o Modal, e atualiza o link para exclusão
     */
    $('#delete-modal-cli').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var id = button.data('customer');

            var modal = $(this);
            modal.find('.modal-title').text(' Registro 000' + id);
            modal.find('#confirm').attr('href', 'delete.php?id_customer=' + id);
    });


});