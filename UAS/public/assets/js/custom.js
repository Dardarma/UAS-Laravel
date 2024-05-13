$(document).ready(function() {
    $('#plus').click(function(event) {
        event.preventDefault();
        var nilai = parseInt($('#jumlah').val());
        var penjumlahan = nilai + 1;
        $('#jumlah').val(penjumlahan);
        var harga = parseInt($('#harga').val());
        var subtotal = penjumlahan * harga;
        $('#total').val(subtotal).trigger('change'); // memicu event change
        if (penjumlahan > 0) {
            $('#minus').prop("disabled", false);
        }
    });

    $('#minus').click(function(event) {
        event.preventDefault();
        var nilai = parseInt($('#jumlah').val());
        var pengurangan = nilai - 1;
        $('#jumlah').val(pengurangan);
        var harga = parseInt($('#harga').val());
        var subtotal = pengurangan * harga;
        $('#total').val(subtotal).trigger('change'); // memicu event change
        if (pengurangan == 0) {
            $('#minus').prop("disabled", true);
        }
    });

    $('#jumlah').change(function() {
        var nilai = parseInt($(this).val());
        if (nilai <= 0) {
            $(this).val(1);
            $('#minus').prop("disabled", true);
        } else {
            $('#minus').prop("disabled", false);
        }
        var harga = parseInt($('#harga').val());
        var subtotal = nilai * harga;
        $('#total').val(subtotal);
    });
});
