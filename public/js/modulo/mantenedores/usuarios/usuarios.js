

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
	}


}