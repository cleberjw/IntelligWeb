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

$('#image-modal-prd').on('show.bs.modal', function (event) {

    var button = $(event.relatedTarget);
    var id = button.data('products');
    var modalI=document.getElementById("imgModal")

    modalI.src="img/products/" + id +'.jpg';

    var modal = $(this);
    modal.find('.modal-title').text('Imagem ' + id);
})

// Mascara de CPF e CNPJ
var CpfCnpjMaskBehavior = function (val) {
        return val.replace(/\D/g, '').length <= 11 ? '000.000.000-009' : '00.000.000/0000-00';
    },
    cpfCnpjpOptions = {
        onKeyPress: function(val, e, field, options) {
            field.mask(CpfCnpjMaskBehavior.apply({}, arguments), options);
        }
    };

$(function() {
    $(':input[id=CpfCnpj]').mask(CpfCnpjMaskBehavior, cpfCnpjpOptions);
})

// Mascara de Birthday
var BirthDayMaskBehavior = function (val) {
        return val.replace(/\D/g, '').length = '00/00/0000';
    },
    birthdayOptions = {
        onKeyPress: function(val, e, field, options) {
            field.mask(BirthDayMaskBehavior.apply({}, arguments), options);
        }
    };

$(function() {
    $(':input[id=birthday]').mask(BirthDayMaskBehavior, birthdayOptions);
});


// Adicionando Produtos Tela de Orçamento

$("#inclui").click(function() {

    if (document.getElementById('descprod').value == "" ) {
        alert("É necessário informar o item para adicionar ao pedido!");
        callback();
        } else {
            var descprod = document.getElementById('descprod').value;
        }
    if (document.getElementById('qtdprod').value == "" ) {
        var qtdprod = document.getElementById('qtdprod').value;
        alert("É necessário informar a quantidade do produto selecionado");
        callback();
        } else {
            var qtdprod = document.getElementById('qtdprod').value;
        }

    buscar($("select[name='descproduct']").val(),
           $("input[name='qtdprod']").val()
    );

    event.preventDefault();

    return false;

});

function buscar(produto,qtd) {
    var page = "input_orc_cons.php";
    var dadosajax = {
        produto : produto,
        qtd : qtd
    }

    $.ajax({
        type: 'POST',
        dataType: 'html',
        url: page,
        beforeSend: function() {
            $("#campos").html("Carregando...");
        },
        data: dadosajax,
        success : function(msg) {
            $("#campos").html(msg);
        }
    })
}

//Botão inserir imagem
(function() {
    'use strict';
    $('.input-file').each(function() {
        var $input = $(this),
            $label = $input.next('.js-labelFile'),
            labelVal = $label.html();

        $input.on('change', function(element) {
            var fileName = '';
            if (element.target.value) fileName = element.target.value.split('\\').pop();
            fileName ? $label.addClass('has-file').find('.js-fileName').html(fileName) : $label.removeClass('has-file').html(labelVal);
        });
    });

})();


//DataTables - search in Tables
$(document).ready(function() {
    $('#report_cli').DataTable();
    $('#report_cpr').DataTable();
    $('#report_fin').DataTable();
    $('#report_for').DataTable();
    $('#report_orc').DataTable();
    $('#report_prd').DataTable();

} );


