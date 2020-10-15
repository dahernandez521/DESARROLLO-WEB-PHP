function sucursal(esto){
    var id=esto.id;
    $.ajax({
        type: 'POST',
        url: "../../controller/delete/sucursal.php",
        data: {'id': id}
    })
    .done(function(response) {

        var res = response.split('_')[0];
        var resp = response.split('_')[1];
        
        alert(res);
        if(resp.length>0){
            location.href=resp;
        }
        

    })
    .fail(function(data) {

        alert('error al eliminar sucursal');

    });
}

function tienda(esto){
    var id=esto.id;
 
    $.ajax({
        type: 'POST',
        url: "../../controller/delete/tienda.php",
        data: {'id': id}
    })
    .done(function(response) {

        var res = response.split('_')[0];
        var resp = response.split('_')[1];
        
        alert(res);
        if(resp.length>0){
            location.href=resp;
        }
        

    })
    .fail(function(data) {

        alert('error al eliminar sucursal');

    });
}