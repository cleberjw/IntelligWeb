$(document).ready(function() {
    var $form = $("#frmAddCustomer");
    
    // Mascara de Birthday
    var BirthDayMaskBehavior = function (val) {
        return val.replace(/\D/g, '').length = '00/00/0000';
    },
    birthdayOptions = {
        onKeyPress: function(val, e, field, options) {
            field.mask(BirthDayMaskBehavior.apply({}, arguments), options);
        }
    };

    // Mascara de CPF e CNPJ
    var CpfCnpjMaskBehavior = function (val) {
        return val.replace(/\D/g, '').length <= 11 ? '000.000.000-009' : '00.000.000/0000-00';
    },
    cpfCnpjpOptions = {
        onKeyPress: function(val, e, field, options) {
            field.mask(CpfCnpjMaskBehavior.apply({}, arguments), options);
        }
    };

    $(':input[id=birthday]')
        .mask(BirthDayMaskBehavior, birthdayOptions)
        .datepicker();
    $(':input[id=CpfCnpj]').mask(CpfCnpjMaskBehavior, cpfCnpjpOptions);

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


    $form.validate({
        rules: {
            "customer['name_customer']": "required",
            "customer['cpf_cnpj_customer']": {
                required: true,
                minlength: 14
            }
        },
        messages: {
            "customer['name_customer']": "Digite a razao social.",
            "customer['cpf_cnpj_customer']": {
                required: "Digite o CPF/CPNJ.",
                minlength: "O CPF/CNPJ deve ter no minimo 11 digitos."
            }
        }
    });
});