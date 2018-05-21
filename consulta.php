<?php

require_once 'conexion_noticia.php';

$tabla="";
$query="SELECT * FROM noticia
        ORDER BY noticia.fecha";

///////// LO QUE OCURRE AL TECLEAR SOBRE EL INPUT DE BUSQUEDA ////////////
if(isset($_POST['cliente']))
{
	$q=$db->real_escape_string($_POST['cliente']);
	$query="SELECT * FROM noticia WHERE 
		noticia.fecha LIKE '%".$q."%'";
}

$buscarCliente=$db->query($query);
if ($buscarCliente->num_rows > 0)
{
	$tabla.= 
	'<table class="table table-striped col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 20px; max-width:100%;">
        <tr>
            <th>ID</th>
            <th>fecha</th>
            <th>encabezado</th>
            <th>tipo</th>
            <th class="text-center">Añadir Fotos</th>
            <th class="text-center">Editar</th>
        </tr>';
	while($filaCliente= $buscarCliente->fetch_assoc())
	    
            {
                $tabla.=
                '<tr>
                    <td>'.$filaCliente['idNoticia'].'</td>
                    <td>'.$filaCliente['fecha'].'</td>
                    <td>'.$filaCliente['encabezado'].'</td>
                    <td>'.$filaCliente['tipo'].'</td>
                    <td><button type="button" class="btn btn-xs btn-success center-block" data-toggle="modal" data-target="#addFoto'.$filaCliente['idNoticia'].'"><span class="glyphicon glyphicon-plus" aria-hidden="true" style="font-size:10px"></span></button></td>
                    <td><button type="button" class="btn btn-xs btn-primary center-block" data-toggle="modal" data-target="#editNoticia'.$filaCliente['idNoticia'].'"><span class="glyphicon glyphicon-pencil" aria-hidden="true" style="font-size:10px"></span></button></td>
                </tr>
                ';
                echo '<!-- Modal -->
                <div class="modal fade" id="editNoticia'.$filaCliente['idNoticia'].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h2 class="modal-title text-center" id="exampleModalLabe2">Editar Noticias</h2>
                        </div>
                        <div class="modal-body">
                            <form class="formulario" action="noticiaNew.php" method="post">
                                <div class="form-group col-lg-10 col-lg-offset-1 col-md-10">
                                    
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-top: 8px">
                                        <label for="fecha">Fecha:</label>
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar"></span></span>
                                            <input type="date" class="form-control" name="fecha" value="'.$filaCliente['fecha'].'">
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
                                            
                                            <textarea type="text" class="form-control" name="encabezado" value="">'.$filaCliente['encabezado'].'</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 8px">
                                        <label for="muestra">Texto de Muestra:</label>
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-list-alt"></span></span>
                                            <textarea type="text" class="form-control" name="muestra" value="">'.$filaCliente['textoA'].'</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 8px">
                                        <label for="noticia">Noticia:</label>
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-list-alt"></span></span>
                                            <textarea type="text" class="form-control" name="noticia" value="">'.$filaCliente['textoB'].'</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-top: 8px">
                                        <label for="link">Link:</label>
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-list-alt"></span></span>
                                            <input type="text" class="form-control" name="link" value="'.$filaCliente['enlace'].'">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-top: 8px">
                                        <label for="link">ID Noticia:</label>
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-list-alt"></span></span>
                                            <input type="idNoticia" class="form-control" name="idNoticia" value="'.$filaCliente['idNoticia'].'">
                                        </div>
                                    </div>
                                    
                                </div>
                                    
                                <button type="submit" class="btn btn-primary col-lg-offset-9" style="margin-bottom: 5px"><span class="glyphicon glyphicon-log-in"></span> Editar</button>                   
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn center-block btn-danger" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                  </div>
                </div>
                <!-- Fin Modal-->';
                echo '<!-- Modal -->
                <div class="modal fade" id="addFoto'.$filaCliente['idNoticia'].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h2 class="modal-title text-center" id="exampleModalLabe2">Añadir Imagenes</h2>
                        </div>
                        <div class="modal-body">
                            <form class="formulario" name="enviar_archivo_frm" action="newImage.php" method="post" enctype="multipart/form-data">
                                <div class="form-group col-lg-10 col-lg-offset-1 col-md-10">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-top: 8px">
                                        <label for="link">Link:</label>
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-list-alt"></span></span>
                                            <input type="text" class="form-control" name="nombre" placeholder="Ingrese un Nombre">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-top: 8px">
                                        <label for="link">Link:</label>
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-folder-open"></span></span>
                                            <input type="file" class="form-control" name="archivo_fls" placeholder="Ingrese Link">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-top: 8px">
                                        <label for="link">ID Noticia:</label>
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-list-alt"></span></span>
                                            <input type="text" class="form-control" name="idNoticia" value="'.$filaCliente['idNoticia'].'">
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
                <!-- Fin Modal-->';
            }

	$tabla.='</table>';
} else
	{
		$tabla="No se encontraron coincidencias con sus criterios de búsqueda.";
	}


echo $tabla;
?>