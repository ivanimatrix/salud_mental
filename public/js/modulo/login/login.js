
var Login = {

  /**
   * validar ingreso de usuario
   */
  validarLogin : function(form, btn){
    var btnText = $(btn).prop('disabled', true).html();
    $(btn).html('Validando... <i class="fa fa-spin fa-spinner"></i>');

    var error = "";
    if(form.rut.value == ""){
      error += "Debe ingresar rut válido<br/>";
    }
    if(form.pass.value == ""){
      error += "Debe ingresar su contraseña<br/>";
    }

    if(error !== ""){
      BootModal.danger(error, function(){
        $(btn).html(btnText).prop('disabled', false);
      });
    }else{
      $.ajax({
        url : url_base + 'Login/validar',
        data : $(form).serializeArray(),
        type : 'post',
        dataType : 'json',
        success : function(response){
          if(response.estado){
            window.location.href = response.redirect;
          }else{
            BootModal.danger(response.mensaje, function(){
              $(btn).html(btnText).prop('disabled', false);
            });
          }
        },
        error : function(){
          BootModal.danger("Error interno", function(){
            $(btn).html(btnText).prop('disabled', false);
          });
        }
      });
    }

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

