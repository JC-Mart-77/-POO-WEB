<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>FlipBoard</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="icon" href="img/logo2.png" sizes="16x16" type="image/jpg">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet"  href="estilos.css">

</head>
<body>
      <span class="ir-arriba icon-eject"></span>
      <div class="container">
        <div class="navbar-header">
          <nav class="navbar navbar-default navbar-fixed-top">
            <div class="navbar-header">
              <img src="imagenes/logo2.png" width="60" height="55">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"        aria-expanded="false" aria-controls="navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="#" data-toggle="modal" data-target=".bd-example-modal-sm"><b>ELIGE UN INTERES</b></a></li> 
                <li><a href="#"><center><b>Editando Articulo</b></center></a></li>              
              </ul> 
            </div><!--/.nav-collapse -->
          </nav>
        </div>
      </div>

      <div class="container">
    <div class="row" id="div-agregar-noticias">
      <div class="col-xs-12 col-sm-12 col-lg-6 col-md-6">
        <h3>Agregar un articulo</h3>
        <div id="agregar" class="well card">
          <form method="GET" action="#">
            <table class="table table-striped table-hover">
              <tr>
                <td><label>Codigo articulo: <input type="text" id="txt-cod-articulo" name="txt-cod-articulo" placeholder="codigo articulo" class="form-control"></label>
                </td>
              </tr>
              <tr>
                <td><label>Titulo del articulo: <input type="text" id="txt-titulo" name="txt-titulo" placeholder="titulo del articulo" class="form-control"></label></td>
              </tr>
              <tr>
                <td><b>Subir una imagen (Codigo): </b>
                  <select id="slc-imagen-articulo" name="slc-imagen-articulo" class="form-control">
                    <option>Seleccione codigo</option>
                    <option value="foto1">img 1</option>
                    <option value="foto1">img 1</option>
                    <option value="foto1">img 1</option>
                    <option value="foto1">img 1</option>
                    <option value="foto1">img 1</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td><b>Contenido:</b> <textarea class="form-control" name="txt-contenido" id="txt-contenido" cols="50" rows="10" placeholder="esta limitado se corrige en el final!!!"></textarea></td>
              </tr>
              <tr>
                <td><label>Fecha publicacion: <input type="date" id="date" name="txt-fecha-publicacion" class="form-control"></label></td>
              </tr>
                        <!--
                        <tr>
                          <td>
                            <b>Seleccionar categoria: </b>
                            <select id="slc-categorias-articulo" name="slc-categorias-articulo[]" class="form-control">
                              <option>Seleccione categorias</option>
                              <option value="categorias">img 1</option>
                              <option value="categorias">img 1</option>
                              <option value="categorias">img 1</option>
                              <option value="categorias">img 1</option>
                              <option value="categorias">img 1</option>
                            </select>
                          </td>
                        </tr>
                        -->
              <tr>
                <td><b>Categorias: </b></td>
                  <td>
                    <label><input type="checkbox" name="chk-categorias[]" value="1" align=""> categoria 1</label><br>

                    <label><input type="checkbox" name="chk-categorias[]" value="2" align=""> categoria 2</label><br>

                    <label><input type="checkbox" name="chk-categorias[]" value="3" align=""> categoria 3</label>

                  </td>
                </tr>
                <tr>
                  <td>
                    <b>Autor de articulo </b>
                    <select id="slc-autor-articulo" name="slc-autor-articulo" class="form-control">
                      <option>Seleccione editor</option>
                      <option value="autor1">img 1</option>
                      <option value="autor 1">img 1</option>
                      <option value="autor 2">img 1</option>
                      <option value="autor 3">img 1</option>
                        <option value="autor 4">img 1</option>
                    </select>
                  </td>
                </tr>
            </table>
          </form>   
        </div>
      </div>  
    </div>
  </div>

      <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"        aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
             <h4 class="modal-title">ELIGE UN INTERES</h4>
            </div>
            <div class="modal-body">
              <center><h4><a href="politica.html"><b>POLITICA</b></a></h4></center>
              <center><h4><a href="viajes.html"><b>VIAJES</b></a></h4></center>
              <center><h4><a href="negocios.html"><b>NEGOCIOS</b></a></h4></center>
              <center><h4><a href="fotografia.html"><b>FOTOGRAFIA</b></a></h4></center>
              <center><h4><a href="ciencia.html"><b>CIENCIA</b></a></h4></center>
              <center><h4><a href="hogar.html"><b>HOGAR</b></a></h4></center>
              <center><h4><a href="deportes.html"><b>DEPORTES</b></a></h4></center>
              <center><h4><a href="celebridades.html"><b>CELEBRIDADES</b></h4></center>
              <center><h4><a href="diseño.html"><b>DISEÑO</b></a></h4></center>
              <center><h4><a href="estilo.html"><b>ESTILO</b></a></h4></center>
              <center><h4><a href="automotriz.html"><b>AUTOMOTRIZ</b></a></h4></center>
              <center><h4><a href="gastronomia.html"><b>GASTRONOMIA</b></h4></center>      
            </div>
          </div>
        </div>
      </div>

	<!-- Latest compiled and minified JavaScript -->
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>