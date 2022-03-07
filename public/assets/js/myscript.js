$(document).ready(function(){
    $('#btnLoad').click(function(){
        $.get("http://127.0.0.1:8000/json_products").done(function (data){
            $.each(data, function(key, product){
                $('#tblProducts tr:last').after(
                    '<tr>' +
                    '<td>' + product.id_product + '</td>' +
                    '<td>' + product.name + '</td>' +
                    '<td>' + product.description + '</td>' +
                    '<td>' + product.price + '</td>' +
                    '<td>' + product.id_category + '</td>' +
                    '</tr>'
                    );
            });
        });
    });
});