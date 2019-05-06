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
var arrProd = [];
$("#inclui").click(function(e) {
    e.preventDefault();

    var descprod = $('#descprod').val();
    if (descprod.trim() == "" ) {
        alert("É necessário informar o item para adicionar ao pedido!");
        callback();
    }

    var prodSelected = $('#descprod').find('option:selected');
    var codProduto = prodSelected.attr('cod');
    var valor = prodSelected.attr('valor');

    var qtdprod = $('#qtdprod').val();
    if (qtdprod == "" ) {
        alert("É necessário informar a quantidade do produto selecionado");
        callback();
    }
    if (_.findIndex(arrProd, {codProduto: codProduto} ) === -1){
        arrProd.push(
            {
                codProduto: codProduto,
                descProduto: descprod,
                quantidade: qtdprod,
                valor: valor
            }
        );
    }else{
        let idx = _.findIndex(arrProd, {codProduto: codProduto} );
        let qtdProduto = +arrProd[idx].quantidade;
        arrProd[idx].quantidade = qtdProduto + +qtdprod;
    }
    $("#campos").html("");
    _.forEach(arrProd, (prod) =>{
        var select =  '<tr>';
        select += '<th style="vertical-align: middle" scope="row">' + prod.codProduto + '</th>';
        select += '<th style="vertical-align: middle" scope="row">' + prod.descProduto + '</th>';
        select += '<th style="vertical-align: middle; text-align: center">' + prod.quantidade + '</th>';
        select += '<th style="vertical-align: middle; text-align: center">' + prod.valor + '</th>';
        select += '<th style="vertical-align: middle; text-align: center">' + prod.valor + '</th>';
        select += '<th>';
        select += '<a style="font-family: \'Bai Jamjuree\'" id="btn-edit" href="" class="btn btn-warning btn-sm"><i class="material-icons md-18">cached</i></a>';
        select += '<a style="font-family: \'Bai Jamjuree\'" id="btn-trash" href="#" data-toggle="modal" data-target="#delete-modal" data-customer="" class="btn btn-danger btn-sm tooltiptext" value="disable" alt="Disable" ><i class="material-icons md-18">delete_outline</i></a>';
        select += '</th>';
        select += '</tr>';

        $("#campos").append(select);
    });
});

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


function buscar(produto) {
    var page = "input_orc_cons.php";

    $.ajax({
        type: 'POST',
        dataType: 'html',
        url: page,
        beforeSend: function() {
            $("#campos").html("Carregando...");
        },
        data: {produto: produto},
        success : function(msg) {
            $("#campos").html(msg);
        }
    })
}