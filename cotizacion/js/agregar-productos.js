$(document).ready(function () {
    var i = 0;
    $('#btn-agregar-producto').click(function () {

        i++;

        id_producto = $('#id_producto').val();
        cantidad_seleccionada = $('#cantidad').val();
        descripcion = $('#descripcion').val();
        precio = $('#precio').val();

        linea = $('#linea').val();
        marca = $('#marca').val();
        fabricante = $('#fabricante').val();
        impuestos = $('#impuestos').val();
        unidad = $('#unidad').val();
        costo = $('#costo').val();
        costo_dolares = $('#costo_dolares').val();
        precio_dolares = $('#precio_dolares').val();
        cambio_peso_dolar = $('#cambio_peso_dolar').val();
        fecha_contratacion = $('#fecha_contratacion').val();
        fecha_caducidad = $('#fecha_caducidad').val();

        var cantidad_total_producto = cantidad_seleccionada * precio;

        $('#productos_factura').append(
            '<tr id="producto_' + i + '">' +
                '<td><input type="text" class="form-control-plaintext text-center" name="id_producto" disabled value="' + id_producto + '"></td>' +
                '<td><input type="text" class="form-control-plaintext text-center" name="descripcion" disabled value="' + descripcion + '"></td>' +
                '<td><input type="text" class="form-control-plaintext text-center" name="cantidad_solicitada" id="cantidad_solicitada" disabled value="' + cantidad_seleccionada + '"></td>' +
                '<td><input type="text" class="form-control-plaintext text-center" name="unidad" disabled value="' + unidad + '"></td>' +
                '<td><input type="text" class="form-control-plaintext text-center" name="precio" disabled value="' + precio + '"></td>' +
                '<td><input type="text" class="form-control-plaintext text-center" name="importe" id="total_producto_' + i + '" disabled value="' + cantidad_total_producto + '"></td>' +
                '<td><input type="text" class="form-control-plaintext text-center" name="impuestos" disabled value="' + impuestos + '"></td>' +
                '<td id="columna_total"><input type="number" class="form-control-plaintext text-center" name="factura_cantidad_total_producto" disabled value="' + cantidad_total_producto + '"></td>' +
            '</tr>');
        
            var subtotal = 0;
        
            var count_row = ($("#productos_factura").find("tr").length);

            for (let i = 1; i <= count_row; i++) {

                var suma_productos = $("#total_producto_" + i).val();

                subtotal = parseFloat(subtotal) + parseFloat(suma_productos);
                iva = subtotal * 0.16;
                total = subtotal + iva;

                $("#subtotal_factura").attr("value", subtotal);
                $("#iva_factura").attr("value", iva);
                $("#total_factura").attr("value", total);
            }
    });

});