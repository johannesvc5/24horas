<?php
   # conectare la base de datos
    include ('conexion_noticia.php');

	$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
	if($action == 'ajax'){
		include ('pagination.php'); //incluir el archivo de paginación
		//las variables de paginación
		$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
		$per_page = 15; //la cantidad de registros que desea mostrar
		$adjacents  = 4; //brecha entre páginas después de varios adyacentes
		$offset = ($page - 1) * $per_page;

		//Cuenta el número total de filas de la tabla*/
		$count_query   = mysqli_query($db,"SELECT count(*) AS numrows FROM noticia ");

		if ($row= mysqli_fetch_array($count_query)){$numrows = $row['numrows'];}
		$total_pages = ceil($numrows/$per_page);
		$reload = 'index.php';

		//consulta principal para recuperar los datos
		$query = mysqli_query($db,"SELECT * FROM noticia order by date_format(fecha,'%d/%m/%y') DESC LIMIT $offset,$per_page");
		

		if ($numrows>0){
			?>

			<?php
			while($row = mysqli_fetch_array($query)){
				$imagen = mysqli_query($db,"SELECT * FROM imagen WHERE idNoticia = $row[idNoticia]");
			while($rowImage = mysqli_fetch_array($imagen)){
				#$imageCont =  mysqli_query($db,"SELECT count(*) AS numrows FROM imagen WHERE idNoticia = $rowImage[idNoticia]");
				#$contador = 0;
				#if ($contador < 1) {			
				?>
					<article class="post clearfix">
	                 	<div class="col-lg-4">
	                     	<?php echo '<img class="img-thumbnail" src="archivos/'.$rowImage['link'].'">';?>
	                 	</div>
	                	<div class="col-lg-8">
	                     	<h2 class="post-title text-center">
	                         	<?php echo $row['encabezado'];?>
	                     	</h2>
	                     	<p class="detalles">
	                         	Relato: <strong>Beto Boticario.</strong>
	                         	<br>Fecha: <strong><?php echo $row['fecha'];?></strong>
	                         	<br>Categoría: <strong><?php echo $row['tipo'];?></strong>
	                     	</p>
	                     	<p class="post-contenido text-justify">
	                         	<td><?php echo $row['textoA'];?></td>
	                     	</p>
	                     	<a href="noticia.php?noticia=<?php echo $row['idNoticia'];?>" class="btn btn-success navbar-right">Leer Más</a>
	                 	</div>
	             	</article>
				<?php
				break 1;
				}
			}
			?>
			</tbody>
		</table>

		<div class="table-pagination pull-right">
			<?php echo paginate($reload, $page, $total_pages, $adjacents);?>
		</div>
		
			<?php
			
		} else {
			?>
			<div class="alert alert-warning alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4>Aviso!!!</h4> No hay datos para mostrar
            </div>
			<?php
		}
	}
?>