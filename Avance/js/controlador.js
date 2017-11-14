$(document).ready(function(){
  $("#btn-conexion").click(function(){
      var parametros = "inputEmail=" +$("#inputEmail").val() + 
            "&inputPassword="+$("#inputPassword").val();
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
            alert("Si tiene acceso, sera redireccionado");
            if(respuesta.Codigo_TipoUsuario==2)
              window.location = "noticiasPortada.html"; //Redireccionar a la pagina de cajero
            else if(respuesta.Codigo_TipoUsuario==1)
              window.location = "agregar-articulo.html";//Redireccionar a la pagina de administrador
          }
        },
        error:function(){

        }
    });
  }); 
});

$("#btn-guardar").click(function(){
  var parametros= "inputText="+$("#inputText").val()+"&"+
          "inputEmail="+$("#inputEmail").val()+"&"+
          "inputPassword="+$("#inputPassword").val();

  alert(parametros);
  $.ajax({
    url:"ajax/gestion-usuarios.php?accion=guardar",
    data:parametros,
    method:"POST",
    success:function(respuesta){
      window.location = "noticiasPortada.html";


    },
    error:function(err){
      alert("Error: " + err);
    }
  });
});

$("#btn-guardar-noticia").click(function(){
  var categorias = "";
  //categorias[]=1&lista[]=2&lista[]=3&

  $("input[name='chk-categorias[]']:checked").map(function(){
    categorias += "chk-categorias[]="+$(this).val()+"&";
  });
  //alert(categorias);

  var parametros= categorias + "txt-titulo="+$("#txt-titulo").val()+"&"+
          "txt-contenido="+$("#txt-contenido").val()+"&"+
          "file-img="+$("#file-img").val()+"&"+
          "date="+$("#date").val();


  alert(parametros);
  $.ajax({
    url:"ajax/gestion-usuarios.php?accion=guardar-noticia",
    data:parametros,
    method:"POST",
    success:function(respuesta){
     // $("#div-resultado-insert").html(respuesta);
      //cargarListaAplicaciones();
      alert("hola");
    },
    error:function(err){
      alert("Error: " + err);
    }
  });
});