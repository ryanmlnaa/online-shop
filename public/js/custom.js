$(document).ready(function () {
    $("#plus").click(function () {
        var nilai = $("#qty").val();
        var penjumlahan = parseInt(nilai) + parseInt(1);
        var hasil = $("#qty").val(penjumlahan);

       
    });
});