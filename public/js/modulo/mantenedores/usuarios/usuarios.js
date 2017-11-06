

var Usuarios = {


	cargarGrillaUsuarios : function(){
		$.ajax({
			url : url_base + '/MantenedorUsuarios/listado',
			dataType : 'html',
			type : 'get',
			success : function(response){
				$("#contenedor-grilla-usuarios").html(response);
				Dtables.initTable('grilla-usuarios');
			}
		});
	},


	formUsuario : function(usuario){
		var id = usuario;
		if(id === undefined){
			id = 0;
		}

		BootModal.open(url_base + '/MantenedorUsuarios/formUsuario/'+id,'Formulario de usuario');
	}


}