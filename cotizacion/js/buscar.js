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