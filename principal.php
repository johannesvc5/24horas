<?php
    session_start();
    if(isset($_SESSION['u_usuario'])){
?>
<!DOCTYPE html>
<html lang="es" xmlns="http://www.w3.org/1999/html">
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <title>Edición | 24 Horas</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script src="js/main.js"></script>
    <script src="peticion.js"></script>
</head>
<body>
    <header style="background-color: rgb(50, 140, 198)">
        <nav class="nav navbar-static-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-fm">
                        <span class="sr-only">Desplegar / Ocultar Menu</span>
                        <span class="icon-bar">></span>
                        <span class="icon-bar">></span>
                        <span class="icon-bar">></span>
                    </button>
                    <a href="principal.php" class="navbar-brand" style="color: #fff">24 Horas</a>
                </div>
                <!--INICIA MENU -->
                <div class="collapse navbar-collapse navbar-right" id="navegacion-fm" style="margin-top: 5px">
                    <?php echo '
                        <div class="input-group container-fluid">
                            <p style="margin-left: -30px; color: #fff; font-family: Arial; margin-top: 10px; font-size: 15px">¡Hola '.$_SESSION['u_alias'].'!</p>    
                        </div>
                    '; ?>   
                </div>
            </div>
        </nav>
    </header>
    <nav class="nav nav-stacked col-lg-3 col-md-3 col-sm-3 col-sm-12" style="color: rgba(255, 255, 255, 1)">
        <li role="presentation" style="background-color: #328cc6;color: rgba(255, 255, 255, 1)"><a href="principal.php" style="color: #ffffff"><span class="glyphicon glyphicon-home"></span> Principal</a></li>
        <li role="presentation" style="background-color: #328cc6;color: rgba(255, 255, 255, 1)"><a onclick="ver_noticia()" style="color: #ffffff" ><span class="glyphicon glyphicon-book"></span> Noticia</a></li>

        <li role="presentation" style="background-color: #328cc6;color: rgba(255, 255, 255, 1)"><a onclick="ver_imagen()" style="color: #ffffff" ><span class="glyphicon glyphicon-book"></span> Imagenes</a></li> 

        <li role="presentation" style="background-color: #328cc6;color: rgba(255, 255, 255, 1)"><a onclick="ver_publicidad()" style="color: #ffffff" ><span class="glyphicon glyphicon-book"></span> Publicidad</a></li>
        <?php
        echo '<li role="presentation" style="background-color: #C63131;color: rgba(255, 255, 255, 1)"><a href="logout.php" style="color: #ffffff"><span class="glyphicon glyphicon-off"></span> Salir</a></li>'
        ?>
    </nav>

    <!-- Primera caja Noticia-->
    <div class="col-lg-9 col-md-9 col-sm-9 col-sm-12" id="box_noticia" style="display: none;">
        <p class="col-lg-12 col-md-12 col-sm-12 col-sm-12 text-center" style="font-size: 30px; margin-top: 10px; color: #00568D;"><u>Modulo de Noticias</u></p>
        <div class="row text-center" style="margin-top: 10px">
            <form class="form-inline">
              <div class="form-group">
                <label for="busqueda">Datos a Buscar</label>
                <input type="text" class="form-control" id="busqueda" name="busqueda" placeholder="Ingrese datos a Buscar">
              </div>

              <button type="button" class="btn btn-primary
              " data-toggle="modal" data-target="#borregoAdd"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>  Añadir</button>
            </form>
            
            <!-- Modal -->
        <div class="modal fade" id="borregoAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h2 class="modal-title text-center" id="exampleModalLabe2">Añadir Datos de la Noticia</h2>
                </div>
                <div class="modal-body">
                    <form class="formulario" action="noticiaNew.php" method="post">
                        <div class="form-group col-lg-10 col-lg-offset-1 col-md-10">
                            
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-top: 8px">
                                <label for="fecha">Fecha:</label>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar"></span></span>
                                    <input type="date" class="form-control" name="fecha" placeholder="Ingrese Fecha">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-top: 8px">
                                <label for="tupo">Tipo:</label>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-heart"></span></span>
                                    <select  class="form-control" name="tipo" id="tipo" required  >
                                        <option value="politica">Politica</option>
                                        <option value="economia">Economia</option>
                                        <option value="deporte">Deportes</option>
                                        <option value="nacional">Nacional</option>
                                        <option value="mundo">Mundo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 8px">
                                <label for="encabezado">Encabezado:</label>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-list-alt"></span></span>
                                    
                                    <textarea type="text" class="form-control" name="encabezado" placeholder="Ingrese Encabezado"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 8px">
                                <label for="muestra">Texto de Muestra:</label>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-list-alt"></span></span>
                                    <textarea type="text" class="form-control" name="muestra" placeholder="Ingrese Muestra"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 8px">
                                <label for="noticia">Noticia:</label>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-list-alt"></span></span>
                                    <textarea type="text" class="form-control" name="noticia" placeholder="Ingrese Noticia"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-top: 8px">
                                <label for="link">Link:</label>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-list-alt"></span></span>
                                    <input type="text" class="form-control" name="link" placeholder="Ingrese Link">
                                </div>
                            </div>
                            
                        </div>
                            
                        <button type="submit" class="btn btn-primary col-lg-offset-9" style="margin-bottom: 5px"><span class="glyphicon glyphicon-log-in"></span> Añadir</button>                   
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn center-block btn-danger" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
          </div>
        </div>
        <!-- Fin Modal-->

        </div>  

        <div class="container col-lg-12 col-md-12 col-sm-12 col-sm-12">
            <div class="row" id="tabla_resultado">
                
            </div>
        </div>
    </div>

    <!-- Primera caja Noticia-->
    <div class="col-lg-9 col-md-9 col-sm-9 col-sm-12" id="box_publicidad" style="display: none;">
        <p class="col-lg-12 col-md-12 col-sm-12 col-sm-12 text-center" style="font-size: 30px; margin-top: 10px; color: #00568D;"><u>Modulo de Publicidad</u></p>
        <div class="row text-center" style="margin-top: 10px">
            <form class="form-inline">
              <div class="form-group">
                <label for="busqueda">Datos a Buscar</label>
                <input type="text" class="form-control" id="busqueda" name="busqueda" placeholder="Ingrese datos a Buscar">
              </div>

              <button type="button" class="btn btn-primary
              " data-toggle="modal" data-target="#publiAdd"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>  Añadir</button>
            </form>
            
            <!-- Modal -->
        <div class="modal fade" id="publiAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h2 class="modal-title text-center" id="exampleModalLabe2">Añadir Datos de la Publicidad</h2>
                </div>
                <div class="modal-body">
                    <form class="formulario" name="enviar_archivo_frm" action="newPublicidad.php" method="post" enctype="multipart/form-data">
                        <div class="form-group col-lg-10 col-lg-offset-1 col-md-10">
                            
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-top: 8px">
                                <label for="fechaInicial">Fecha Inicial:</label>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar"></span></span>
                                    <input type="date" class="form-control" name="fechaInicial" placeholder="Ingrese Fecha">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-top: 8px">
                                <label for="fechaFinal">Fecha Final:</label>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar"></span></span>
                                    <input type="date" class="form-control" name="fechaFinal" placeholder="Ingrese Fecha">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-top: 8px">
                                <label for="tupo">Tipo:</label>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-heart"></span></span>
                                    <select  class="form-control" name="tipo" id="tipo" required  >
                                        <option value="todo">Todos</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-top: 8px">
                                <label for="link">Link:</label>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-folder-open"></span></span>
                                    <input type="file" class="form-control" name="archivo_fls" placeholder="Ingrese Link">
                                </div>
                            </div>
                        </div>
                            
                        <button type="submit" class="btn btn-primary col-lg-offset-9" style="margin-bottom: 5px"><span class="glyphicon glyphicon-log-in"></span> Añadir</button>                   
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn center-block btn-danger" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
          </div>
        </div>
        <!-- Fin Modal-->

        </div>  

        <div class="container col-lg-12 col-md-12 col-sm-12 col-sm-12">
            <div class="row" id="tabla_resultado">
                
            </div>
        </div>
    </div>
    
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php    }else{
    header("location:login.php");
}
?>