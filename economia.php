<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>24 Horas en la noticia</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        
    <link href="https://fonts.googleapis.com/css?family=Anton|Bree+Serif|Acme|Courgette" rel="stylesheet">
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
            <div class="col-lg-8 col-md-8" id="loader"> <img src="images/loader.gif">
                

            </div>
            <div class="col-lg-8 col-md-8 outer_div"></div><!-- Datos ajax Final -->
            <div class="publicidad col-lg-4 col-md-4">
                <div class="panel panel-primary">
                  <div class="panel-heading">Anuncie Aquí</div>
                  <div class="panel-body">
                    comuniquese al: 935784094
                  </div>
                </div>
                <?php
                include ('conexion_noticia.php');
                    $publicidad = $db->query("SELECT * FROM publicidad ORDER BY RAND() LIMIT 15");
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
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>


    <script>
    $(document).ready(function(){
        load(1);
    });

    function load(page){
        var parametros = {"action":"ajax","page":page};
        $("#loader").fadeIn('slow');
        $.ajax({
            url:'economia_ajax.php',
            data: parametros,
             beforeSend: function(objeto){
            $("#loader").html("<img src='images/loader.gif'>");
            },
            success:function(data){
                $(".outer_div").html(data).fadeIn('slow');
                $("#loader").html("");
            }
        })
    }
    </script>