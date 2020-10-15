function insertar(esto){
    var id=esto.id;
    var cantidad=$('#producto'+id).val();

    var infos =
    "id=" +
    id +
    "&cantidad=" +
    cantidad;

    $.ajax({
        type: 'POST',
        url:"../../controller/create/vendedor.php",
        data: infos
    })
    .done(function(response) {

        alert(response);
    })

     .fail(function(data) {

        alert('error al realizar el registro');

    })
}
