var producto = $('#rproductos');


	$(producto).submit(function(e) {
    // alert('a quie etsoy ');
		e.preventDefault();

		var formData = $(producto).serialize();
	

		$.ajax({
			type: 'POST',
			url: "../../controller/create/registroProducto.php",
			data: formData
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

			alert('error al ingresar');

		});
	});
//resgitro de Producto

$.ajax({
    type: 'POST',
    url: '../../controller/bodega.php'
  })

  .done(function(listas_rep){
    $('.idBodega').html(listas_rep)
   
  })
  .fail(function(){

    alert('Hubo un errror al cargar las bodegas')
  });

$.ajax({
    type: 'POST',
    url: '../../controller/nitTienda.php' //me toco especificar la ruta a als malas
 })
.done(function(listas_rep){
    $('#nitTienda').html(listas_rep)
   
})
.fail(function(){

    alert('Hubo un errror al cargar las Tiendas')
});