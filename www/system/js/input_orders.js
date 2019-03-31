$(document).ready(function() {
   $("#outbound_date").datepicker();

    var arrOrders = [];
    $('#btn_addOrder').on('click', (e) => {
        e.preventDefault();
        var invoice_number = $("#invoice_number").val();
        var provider_name = $("#provider_name").val();
        var inbound_date = $("#inbound_date").val();
        var outbound_date = $("#outbound_date").val();
        var deadline = $("#deadline").val();
        var duty = $("#duty").val();
        var freight = $("#freight").val();
        var total = $("#total").val();
        var notes = $("#notes").val();

        arrOrders.push({
            invoice_number: invoice_number,
            provider_name:provider_name,
            inbound_date: inbound_date,
            outbound_date: outbound_date,
            deadline: deadline,
            duty: duty,
            freight: freight,
            total: total,
            notes: notes
        })

        console.log(arrOrders);
   })
} );