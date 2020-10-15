$(document).ready(function(){
//DEPARTAMENTO
  $.ajax({
    type: 'POST',
    url: '../../controller/departamento.php' //me toco especificar la ruta a als malas
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
      url: '../../controller/municipio.php',
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
    url: '../../controller/supervisor.php' //me toco especificar la ruta a als malas
  })
  .done(function(listas_rep){
    $('.supervisor').html(listas_rep)
   
  })
  .fail(function(){

    alert('Hubo un errror al cargar los supervisor')
  })

  $.ajax({
    type: 'POST',
    url: '../../controller/bodega.php'
  })
  .done(function(listas_rep){
    $('.idBodega').html(listas_rep)
   
  })
  .fail(function(){

    alert('Hubo un errror al cargar las bodegas')
  })
});