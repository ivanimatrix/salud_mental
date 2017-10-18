
var Login = {

  /**
   * validar ingreso de usuario
   */
  validarLogin : function(){

  },

  /**
   * solicitar nueva contraseña
   */
  solicitarPassword : function(){
    BootModal.open(url_base + 'Login/password', 'Solicitar nueva contraseña');
  },

  /**
   * generar solicitud de nueva password
   * @param form
   * @param btn
   */
  nuevaPassword : function(form, btn){
    var btnText = $(btn).prop('disabled', true).html();
    $(btn).html('Solicitando... <i class="fa fa-spin fa-spinner"></i>');
  }

}

