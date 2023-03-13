$(document).ready(function(){
    $('.table-1').DataTable();

    OSREC.CurrencyFormatter.formatAll({
        selector: '.money',
        currency: 'IDR'
    });
})