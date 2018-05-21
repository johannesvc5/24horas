<?php

	$variable = $_GET['noticia'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <title>24 Horas en la noticia</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        
    <link href="https://fonts.googleapis.com/css?family=Anton|Bree+Serif|Acme|Courgette|Roboto+Condensed" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilos.css">
        
    <script type="text/javascript" src="js/jquery.js"></script>
    <script src="js/main.js"></script>
</head>
<body>
    <header>
        <div id="principal">
            <div id="cabecera">
                <div class="container">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="text-center">
                            <img src="images/logo.png" class="img-responsive img-center">    
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-primary" data-spy="affix" data-offset-top="200">
                    <div class="container">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand visible-xs" href="#">24 Horas en la noticia</a>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav nav-tabs nav-justified navbar-left">
                                    <li><a href="index.php">Lo Último</a></li> 
                                    <li><a href="politica.php">Politica<span class="sr-only">(current)</span></a></li>
                                    <li><a href="economia.php">Economía</a></li>
                                    <li><a href="deportes.php">Deportes</a></li> 
                                    <li><a href="nacional.php">Nacional</a></li>
                                    <li><a href="mundo.php">Mundo</a></li>
                                    <li><a href="elecciones2018.php" id="voto">Voto 2018</a></li>                         
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <section class="container-fluid">
        <div class="row">
            <div class="col-lg-9 col-md-9 center-block">
            	<?php
            	include ('conexion_noticia.php');
            	$dato = $_GET['noticia'];
            	$proceso = $db->query("SELECT * FROM noticia WHERE idNoticia = '$dato'");
            	$procesoimagen = $db->query("SELECT * FROM imagen WHERE idNoticia = '$dato'");
	            	if($resultado = mysqli_fetch_array($proceso) and $resultadoImagen = mysqli_fetch_array($procesoimagen)){
	            	echo '<h1 class="col-lg-10 col-lg-offset-1 post-title text-center">
		                '.$resultado['encabezado'].'
		            </h1>
		            <div class="col-lg-12">
		                <img class="img-thumbnail center-block" src="archivos/'.$resultadoImagen['link'].'">
		            </div>
	                <p class="col-lg-10 col-lg-offset-1 text-justify text-notice">
	                	 '.$resultado['textoB'].'
	                </p>';}
                ?>
				<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			    	<h1 class="text-center post-title">Últimas Noticias (Recomendadas)</h1>
			    	<?php
			    		$noticias = $db->query("SELECT * FROM noticia WHERE idNoticia <> '$variable' order by date_format(fecha,'%d/%m/%y') DESC LIMIT 8");
			    		while ($rowNoticias = mysqli_fetch_array($noticias)) { 
			    			echo'<div class="col-lg-3 col-md-3 col-sm-3 col-xs-4">
						    		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						    			<img class="img-thumbnail" src="archivos/Noticia-julio_guzman.jpg">
						    		</div>
						    		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						    			<p class="post-title text-center">'.$rowNoticias['encabezado'].'</p>
						    		</div>
						    	</div>';
						}
			    	?>
			    </section>
            </div>
            <div class="publicidad col-lg-3 col-md-3">
                <div class="panel panel-primary">
                  <div class="panel-heading">Anuncie Aquí</div>
                  <div class="panel-body">
                    comuniquese al: 935784094
                  </div>
                </div>
                <?php
                include ('conexion_noticia.php');
                    $publicidad = $db->query("SELECT * FROM publicidad ORDER BY RAND() LIMIT 5");
                    $date = date("Y"). '-'. date("m") .'-'. date("d") ;
                    while ($rowPublicidad = mysqli_fetch_array($publicidad)) { 
                        if($date >= $rowPublicidad['fFinal']){
                            echo '<div class="col-lg-12">
                                    <img class="img-thumbnail" src="images/publicidad/'.$rowPublicidad['archivo'].'">
                                </div>';
                        }
                    }
                ?>
            </div>
        </div>
    </section>

    <footer>
        <div class="principal">
            <div class="contend">
                 <div class="footer">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="container">
                            <div class="text-center col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <p>by: Johannes Vicente Cristobal
                                <br>&copy; 2018 www.24horasenlanoticia.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>