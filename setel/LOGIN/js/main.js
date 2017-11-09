 jQuery(document).on('submit','#formlg', function(event){
	event.prevenDefault();
	jQuery.ajax({
		url:'LOGIN-MYSQLI/login.php',
		type:'POST',
		dataType:'json',
		data:$(this).serialize(),
		beforeSend: function(){
			$('.loguearse').val('Validando...');

		}
	})
	.done(function(respuesta){
		cosole.log(respuesta);
		if(!respuesta.error){
			if(respuesta.tipo ='Admin'){
				location.href='LOGIN-MYSQLI/Admin/';
			}else if(respuesta.tipo ='Usuario'){
				location.href='LOGIN-MYSQLI/Usuario/';
			}
		}else {
			$('.error').slideDown('slow');
			setTimeout(function(){
				$('.error').slideUp('slow');
			},3000);
			$('.loguearse').val('Iniciar Sesion');
		}	
	})
	.fail(function(resp){
		console.log(resp.responseText);
	})
	.always(function(){
		console.log("complete");
	});
});