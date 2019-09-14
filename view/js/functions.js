

function mostrarCategoria(Categoria_ID) {
    $(document).ready(function(){
        $("#item_"+Categoria_ID).click(function(){
            $('.test').load('index.php?accion=categoria&id=' + Categoria_ID)
        });
    });
}

function mostrarProducto(Producto_ID) {
    $(document).ready(function(){
        $("#item_"+Producto_ID).click(function(){
            $('.test').load('index.php?accion=producto&id=' + Producto_ID)
        });
    });
    console.log('index.php?accion=categoria&id=' + Producto_ID)
}

function validar_registro() {
    valor = document.getElementById("cp").value;
    if (valor.length != 5){
        alert("[ERROR] El Codigo Postal debe tener 5 dígitos.")
        return false;
    }
    else {
        alert("Te has registrado con éxito! :)");
        return true;
    }
}

function validar_cambio() {
    valor = document.getElementById("cp").value;
    if (valor.length != 5){
        alert("[ERROR] El Codigo Postal debe tener 5 dígitos.")
        return false;
    }
    else {
        alert("Tus datos se han cambiado con éxito! :)");
        return true;
    }
}

function validar_login(bool) {
    if (bool){
        alert("Te has logueado con exito")
        return true;
    }
    else {
        alert("Comprueba tus datos");
        return false;
    }
}

function actualizarCarrito() {
    var datos = {
        "productAdd" : $("#productAdd").val(),
        "productId" : $("#productId").val(),
        "priceAdd" : $("#priceAdd").val(),
        "quantityAdd" : $("#quantityAdd").val()
    };
    $.post("/?accion=add", datos, function(result, status) {
        //cambiar aqui
        $('.actCarrito').html(result);
    }).fail(function(msg) { alert(msg)});
    alert("Producto añadido al carrito");
}

$(document).ready(function() {

    $menu = $('.cuenta').find('li');

    $menu.hover(function() {
        $(this).children('ul').stop();
        $(this).children('ul').slideDown();
    }, function() {
        $(this).children('ul').stop();
        $(this).children('ul').slideUp();
    });
});