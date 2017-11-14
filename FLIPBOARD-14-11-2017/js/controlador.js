$(document).ready(function(){
 
  $("#btn-conexion").click(function(){
      var parametros = "inputEmail=" +$("#inputEmail").val() + 
            "&inputPassword="+$("#inputPassword").val();

      var username = $("#inputEmail").val(), password = $("#inputPassword").val();
        if ((username === "") || (password === "")) {
            $("#resultado").html("<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>--Usuario o Contraseña no debe estar en blanco--</div>");
        } else {
        
      //alert(parametros);
      $.ajax({
        url:"ajax/acciones_login.php?accion=login",
        method: "POST",
        data: parametros,
        dataType: 'json ',
        success:function(respuesta){
          if (respuesta.status==0){
            $("#resultado").html(respuesta.mensaje);
          }
          else{
            //alert("Si tiene acceso, sera redireccionado");
            if(respuesta.codigo_tipo_usuario==1)
              window.location = "noticiasPortada.html"; //Redireccionar a la pagina de cajero
            else if(respuesta.codigo_tipo_usuario==2)
              window.location = "agregar-articulo.html";//Redireccionar a la pagina de administrador
          }
        },
        error:function(){

        }
    });}
  }); 


  $("#btn-registrar").click(function(){
      var parametros=
            "txt-nombre="+$("#txt-nombre").val()+"&"+
            "txt-correo="+$("#txt-correo").val()+"&"+
            "txt-contrasena="+$("#txt-contrasena").val()+"&";
            
      //alert("parametros a enviar " + parametros);
      $.ajax({
        url:"ajax/acciones-login.php?accion=1",
        data:parametros,
        method:"POST",
        dataType:"json",
        success:function(respuesta){
          
          if (respuesta.codigo_resultado==0)
            $("#resultado").html('<div class="bg-danger"> '+respuesta.mensaje+"</div>");
          if (respuesta.codigo_resultado==1)
            $("#resultado").html('<div class="bg-success"> '+respuesta.mensaje+"</div>");
          $("#btn-registrar").button("reset");
          
        }
      });
  });
});