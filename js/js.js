var tienda =$('#rtienda');
	$(tienda).submit(function(enviar){
		enviar.preventDefault();
		var fromData =$(tienda).serialize();

		$.ajax({
			type: 'POST',
			url: "../../controller/create/registroTienda.php",
			data: fromData
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

			alert('error al realizar el registro');

		});
});//cierra funcion enviar 


var registroUser =$('#formUser');
	$(registroUser).submit(function(enviar){
		enviar.preventDefault();
		var fromData =$(registroUser).serialize();

		$.ajax({
			type: 'POST',
			url: "../controller/create/registroUser.php",
			data: fromData
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

			alert('error al realizar el registro');

		});
});//cierra funcion enviar 


    $.ajax({
      type: 'POST',
      url: '../controller/departamento.php' //me toco especificar la ruta a als malas
    })
    .done(function(listas_rep){
      $('.departaments').html(listas_rep)
     
    })
    .fail(function(){
  
      alert('Hubo un errror al cargar los departamentos')
    })
  
  
    $('.departaments').on('change', function(){
      var id = $('.departaments').val()
      $.ajax({
        type: 'POST',
        url: '../controller/municipio.php',
        data: {'id': id}
      })
      .done(function(listas_rep){
        $('.municipality').html(listas_rep)
      })
      .fail(function(){
        alert('Hubo un errror al cargar los municipios')
      });
    });

  
    $.ajax({
      type: 'POST',
      url: '../controller/nitTienda.php' //me toco especificar la ruta a als malas
    })
    .done(function(listas_rep){
      $('#nitTienda').html(listas_rep)
     
    })
    .fail(function(){
  
      alert('Hubo un errror al cargar las Tiendas')
    })
 