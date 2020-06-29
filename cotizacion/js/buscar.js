$(obtener_registros());
$(obtener_registros_productos());

function obtener_registros(clientes) {
    $.ajax({
        url: 'busqueda.php',
        type: 'POST',
        dataType: 'html',
        data: { clientes: clientes },
    })
    .done(function(resultado){
        $("#tabla_resultados").html(resultado);
    })
}

function obtener_registros_productos(productos) {
    $.ajax({
        url: 'busqueda-productos.php',
        type: 'POST',
        dataType: 'html',
        data: { productos: productos },
    })
    .done(function(resultado_productos){
        $("#resultados_productos").html(resultado_productos)
    })
}

$(document).on('keyup', '#buscar_cliente', function(){
    var valorBusqueda = $(this).val();
    if (valorBusqueda != "") {
        obtener_registros(valorBusqueda);
    } else {
        obtener_registros();
    }
});

$(document).on('keyup', '#buscar_producto', function(){
    var valorProducto = $(this).val();
    if (valorProducto != "") {
        obtener_registros_productos(valorProducto);
    } else {
        obtener_registros_productos();
    }
});

/*$(document).ready(function () {
    var i = 1;

    var id_producto = $('#id_producto').val();
    var cantidad_solicitada = $('#cantidad_solicitada').val();
    var descripcion = $('#descripcion').val();
    var precio = $('#precio').val();

    var linea = $('#linea').val();
    var marca = $('#marca').val();
    var fabricante = $('#fabricante').val();
    var impuestos = $('#impuestos').val();
    var unidad = $('#unidad').val();
    var costo = $('#costo').val();
    var costo_dolares = $('#costo_dolares').val();
    var precio_dolares = $('#precio_dolares').val();
    var cambio_peso_dolar = $('#cambio_peso_dolar').val();
    var fecha_contratacion = $('#fecha_contratacion').val();
    var fecha_caducidad = $('#fecha_caducidad').val();

    var total_producto = cantidad_solicitada * precio;

    $('#btn-agregar-producto').click(function () {
        i++;
        $('#productos_agregados_detalles').append(
            '<tr id="row' + i + '">' +
            '<td><input type="text" name="" class="form-control" value="' + id_producto + '"></td>' +
            '<td><input type="text" name="" class="form-control" value="' + descripcion + '"></td>' +
            '<td><input type="text" name="" class="form-control" value="' + cantidad_solicitada + '"></td>' +
            '<td><input type="text" name="" class="form-control" value="' + unidad + '"></td>' +
            '<td><input type="text" name="" class="form-control" value="' + costo + '"></td>' +
            '<td><input type="text" name="" class="form-control" value="' + precio + '"></td>' +
            '<td><input type="text" name="" class="form-control" value="' + costo_dolares + '"></td>' +
            '<td><input type="text" name="" class="form-control" value="' + impuestos + '"></td>' +
            '<td><input type="text" name="" class="form-control" value="' + total_producto + '"></td>' +
            '<td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button></td>' +
            '</tr>'
        );
    });

    $(document).on('click', '.btn_remove', function () {
        var id = $(this).attr('id');
        alert(id);
    });
});*/

/*$(document).on('click', '#btn-agregar-producto', function(){
    var id_producto = $('#id_producto').val();
    var cantidad_solicitada = $('#cantidad_solicitada').val();
    var descripcion = $('#descripcion').val();
    var precio = $('#precio').val();

    var linea = $('#linea').val();
    var marca = $('#marca').val();
    var fabricante = $('#fabricante').val();
    var impuestos = $('#impuestos').val();
    var unidad = $('#unidad').val();
    var costo = $('#costo').val();
    var costo_dolares = $('#costo_dolares').val();
    var precio_dolares = $('#precio_dolares').val();
    var cambio_peso_dolar = $('#cambio_peso_dolar').val();
    var fecha_contratacion = $('#fecha_contratacion').val();
    var fecha_caducidad = $('#fecha_caducidad').val();

    var total_producto = cantidad_solicitada * precio;

    alert("Producto agregado\n" +
          "ID: "+ id_producto + 
          "\nCantidad: " + cantidad_solicitada + 
          "\nDescripción: " + descripcion + 
          "\nPrecio: $" + precio +
          "\nTotal del producto: $" + total_producto +
          "\nLinea: " + linea + 
          "\nMarca: " + marca +
          "\nFabricante: " + fabricante +
          "\nImpuestos: " + impuestos + 
          "\nUnidad: " + unidad +
          "\nCosto: " + costo +
          "\nCosto dólares:" + costo_dolares +
          "\nPrecio dólares: " + precio_dolares +
          "\nCambio peso dólar: " + cambio_peso_dolar +
          "\nFecha contratacion: " + fecha_contratacion +
          "\nFecha caducidad: " + fecha_contratacion);

});*/