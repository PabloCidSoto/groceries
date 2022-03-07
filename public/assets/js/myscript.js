$(document).ready(function(){
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
    $('#btnLoad').click(function(){
       
        $('#tblProducts').DataTable( {
            "ajax": "http://127.0.0.1:8000/products_list_datatable",
            "columns": [
                { "data": "id_product" },
                { "data": "name" },
                { "data": "description" },
                { "data": "price" },
                { "data": "id_category" }
            ]
        } );
    });

    $('#tblProductsDataTable').DataTable( {
        "ajax": "http://127.0.0.1:8000/products_list_datatable",
        "columns": [
            { "data": "id_product" },
            { "data": "name" },
            { "data": "description" },
            { "data": "price" },
            { "data": "id_category" }
        ]
    } );
});


