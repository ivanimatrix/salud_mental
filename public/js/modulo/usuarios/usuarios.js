

var Usuarios = {

	guardarMisDatos : function(form, btn){
		var btnText = $(btn).prop('disabled', true).html();
		$(btn).html('Actualizando... <i class="fa fa-spin fa-spinner"></i>');

		var error = "";
		if(error !== ""){

		}else{
			$.ajax({
				url : url_base + '/Usuario/guardarMisDatos',
				data : $(form).serializeArray(),
				type : 'post',
				dataType : 'json',
				success : function(response){
					if(response.correcto){
						BootModal.success(response.mensaje);
					}else{
						BootModal.danger(response.mensaje);
					}
					$(btn).prop('disabled', false).html(btnText);
				},
				error : function(){
					BootModal.danger('Error interno. Intente nuevamente o cominíquese con Mesa de Ayuda', function(){
						$(btn).prop('disabled', false).html(btnText);
					});
				}
			});
		}
	},


	cambiarPassword : function(form, btn){
		var btnText = $(btn).prop('disabled', true).html();
		$(btn).html('Actualizando... <i class="fa fa-spin fa-spinner"></i>');

		var error = "";
		if(form.nueva_pass.value == ""){
			error += 'Su nueva contraseña no puede ser vacía <br/>';
		}
		if(form.nueva_pass.value !== form.repetir_pass.value){
			error += 'Las contraseñas no coinciden <br/>';
		}

		if(error !== ""){
			BootModal.danger(error, function(){
				$(btn).prop('disabled', false).html(btnText);
			});
		}else{
			$.ajax({
				url : url_base + '/Usuario/cambiarPassword',
				data : $(form).serializeArray(),
				type : 'post',
				dataType : 'json',
				success : function(response){
					if(response.estado){
						BootModal.success(response.mensaje);
					}else{
						BootModal.danger(response.mensaje);
					}
					$(btn).prop('disabled', false).html(btnText);
				},
				error : function(){
					BootModal.danger('Error interno. Intente nuevamente o comuníquese con Mesa de Ayuda', function(){
						$(btn).prop('disabled', false).html(btnText);
					});
				}
			})
		}
	}

}