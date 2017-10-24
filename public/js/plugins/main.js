
$(document).ready(function(){

    /* setear para ajax token para csrf */
    $.ajaxSetup({
        headers:
          { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
    });

	/* cambiar perfil */
    $('#cargar_perfil').change(function(){
    	var perfil = $(this).val();
    	if(perfil !== ""){
    		$.ajax({
				url : url_base + '/Usuario/cambiarPerfil',
				data : {perfil : perfil},
				type : 'post',
				dataType : 'json',
				success : function(response){
					if(response.correcto){
						window.location.href = url_base + response.redirect;
					}else{
						BootModal.danger(response.mensaje);
					}
				},
				error : function(){
					BootModal.danger('Error interno. Intente nuevamente o comuníquese con Mesa de Ayuda');
				}
			})
		}
	});
});
