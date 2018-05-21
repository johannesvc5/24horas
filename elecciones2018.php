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
            <div class="col-lg-12 col-md-12">
                <div class="btn-group btn-group-justified" role="group" aria-label="...">
                    <div class="btn-group" role="group">
                        <a onclick="ver_regional()" class="btn btn-success" >Ver Candidatos Regionales</a>
                    </div>
                    <div class="btn-group" role="group">
                        <a onclick="ver_provincial()" class="btn btn-success" >Ver Candidatos Provinciales</a>
                    </div>
                    <div class="btn-group" role="group">
                        <a onclick="ver_distrital()" class="btn btn-success" >Ver Candidatos Distritales</a>
                    </div>
                </div>
                <!--box distrital -->
                <div id="box_distrital" class="col-lg-6">
                      <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="200mm" height="160mm" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                      viewBox="0 0 30000 18000"
                       xmlns:xlink="http://www.w3.org/1999/xlink">
                         <g id="Capa_x0020_1">
                          <metadata id="CorelCorpID_0Corel-Layer"/>
                          <path  class="fil0 str0" onclick="msgPalcazu()" d="M16296 5071c-168,93 -296,98 -388,23 -572,10 -920,39 -548,354l-68 217 -183 91 -194 -68c-75,9 -130,74 -160,205l-81 -12 -79 229 183 171c-4,221 -82,402 -11,662 -16,253 -199,408 -294,609l18 282c-136,59 -205,204 -189,460l179 282c-236,201 -277,370 -57,495l68 141c-69,35 -82,102 -45,197 -162,164 190,282 285,422l46 240 137 114 127 1 33 108 172 34c0,154 105,248 319,280l57 228c-10,86 -65,178 -29,259l134 70 84 75 -29 110 194 79 17 149 170 -8 18 76 63 -85 92 36 62 -99 331 0 25 -101 78 -82 -39 -59 193 -66 51 34 103 -126 411 -57 445 -274 217 160 0 160 194 57 148 320 248 214c337,-66 32,-344 300,-465 -332,-174 -27,-307 -11,-511 -133,-228 -164,-474 -246,-711 2,-262 -124,-693 6,-787l-224 -299c-10,-184 -96,-302 -137,-453l-265 -300c-195,-198 -297,-546 -521,-741 22,-271 -37,-554 -223,-856l0 -382 -218 -176 -115 -180 -260 -266c-122,12 -183,-22 -172,-168 -66,-71 -232,-100 -198,-213l-224 -99z"/>
                          <path class="fil0 str0" onclick="msgPBermudez()" d="M18804 11678c347,-109 22,-329 300,-465l0 0c-346,-159 -7,-341 -11,-511 -118,-187 -173,-455 -246,-711 10,-297 -135,-675 6,-787l-224 -299c0,-165 -79,-273 -118,-409 -59,-174 -220,-216 -284,-344 -234,-232 -254,-495 -521,-741 -6,-287 -18,-546 -223,-856l0 -382 -218 -176c-96,-212 -250,-298 -375,-446 -134,6 -216,-36 -183,-183 -66,-71 -234,-56 -197,-213l-214 -84 165 -174 -173 -337 -106 -379 429 39c151,24 315,92 344,193l539 369 486 44c129,10 258,-72 387,-108l115 -121 565 189 226 -358c193,-46 181,-218 271,-327l158 -85c288,-269 522,-236 704,-63 161,0 671,-50 381,-529 63,-97 216,-37 248,-344l155 -239 -44 -143 116 -47 21 -227 189 -47c-413,-892 399,-1117 536,-1410l22 208c294,12 608,118 932,267 -2,151 -44,244 -139,259l128 206 -65 45c170,91 66,238 99,357l346 132c144,83 287,82 431,28 -44,248 -24,589 69,1035l130 256c162,66 141,281 212,421l-25 911 148 28 154 245 21 328 59 196c-99,43 -144,159 -152,324 173,78 61,259 91,388l330 550 207 221c297,-151 461,-88 490,443l178 47c457,81 606,112 485,451 105,329 90,573 -64,720 -136,44 -177,130 -39,296l-111 182 -197 195 34 481 217 341 288 -49 374 300c-75,219 487,1042 394,1160 -100,129 99,417 -6,529 -118,-167 -955,-489 -850,-125 -195,-19 -304,128 -282,278l-215 -61 -302 468c-497,45 -103,422 -520,285 -315,125 134,171 -143,534 -333,30 -537,-64 -739,216l-145 -42c-131,102 -91,388 -325,462 -338,5 -449,131 -520,291 -246,-3 -442,-82 -566,-268l-130 -153 -285 64 -46 106c-211,68 -223,-475 -719,-571l-286 46 -58 -84c-40,87 -173,-97 -412,-589 -58,-204 -194,-379 -374,-537l-37 97c57,151 195,280 172,454l-130 48c-120,40 -198,42 -302,-165 -27,167 -168,15 -252,23l-131 -115 -279 137c-47,-50 -2,-100 -3,-150 -104,-38 -105,-145 -157,-218 91,-163 -91,-211 -137,-317l-184 44c-40,-198 -195,-191 -292,-286l28 -256 143 -7 -47 -238 280 -161z"/>
                          <path class="fil0 str0" onclick="msgVRica()" d="M16182 11646l39 221 74 52 -17 68 92 103 -103 320 -171 125 -269 257 63 126 92 45 74 171 -52 194 -91 86 -108 -57 -234 6 -80 108 51 97 11 109 -91 102 6 97 -46 137 -103 120 -102 0 -29 206 97 -109 69 -17 62 109 80 -63c86,-110 164,-117 234,17 82,78 164,83 246,-6l137 34 91 -51 126 -165 62 11 109 -97 91 -23 29 -183c99,-20 138,-152 131,-371l400 -11 -103 -177 177 -165 0 -177 656 160 354 -423 126 -34 38 -258 28 -256 143 -7 -47 -238 280 -161 -248 -214 -148 -320 -194 -57 0 -160 -217 -160 -445 274 -411 57 -103 126 -51 -34 -193 66 39 59 -78 82 -25 101 -331 0 -62 99 -92 -36 -63 85z"/>
                          <path class="fil0 str0" onclick="msgPozuzo()" d="M14778 6281l-486 -190 -382 23 -97 -114 -297 -177 -12 137 -34 57 40 92 -6 125 -136 297 -332 17 -194 166 -101 52 -4 132 -89 21c118,143 -180,308 -40,428l-74 40c-11,114 -137,240 -34,342l23 109 -17 120 23 165 -80 109 0 80 -69 -12 -131 166 -114 -20c-73,61 -122,42 -183,63 -189,161 -341,155 -485,42 -54,53 -183,59 -237,111l-54 169 -34 160c-86,133 -179,192 -280,188l-97 109 -257 211c-140,140 -216,263 -143,342l35 143 28 103 -154 165c-94,144 -190,424 -371,525 -95,151 126,160 126,160l114 0 23 -171c51,26 137,-78 154,80 95,86 128,191 85,319l189 -80c-41,-162 -34,-277 62,-302l-17 -91 57 -6c-47,-183 80,-171 80,-171 147,53 255,14 326,-114l194 5 85 -28 57 85c54,153 84,8 126,12l57 -109 86 -34 91 46 80 -17 34 -52 131 12 109 5 97 -34 108 51 63 -34 63 -148 85 -40 86 -17 86 -171c24,-73 123,-19 74,-217l108 -29 17 -143 166 -62 -17 -126c114,6 218,-27 302,-143l6 -291 51 -80 183 -177 -6 -74 23 -137 -68 -5 -35 -86 12 -131c-51,-179 -6,-261 125,-257l40 -103c382,-36 387,282 581,422 -15,-223 38,-386 189,-460l-18 -282c94,-221 330,-396 281,-663 -61,-157 16,-405 24,-608z"/>
                          <path class="fil0 str0" onclick="msgHuancabamba()" d="M10594 11085c138,-135 241,-65 319,149l75 205 256 -142 206 251 125 74 160 -46 80 114 120 -22 108 125 103 0 -28 80 108 29 63 -23 234 28 200 -23 57 -85 91 17 74 -120 120 40 74 23 97 -109 86 -39 205 -109 75 -137 79 -63 457 86 80 34c37,138 129,185 257,171 30,-45 28,-133 137,-97l97 69c134,-26 214,11 257,91 138,105 141,-15 51,-291l131 -51 137 -29 143 34 166 -224 29 -259 -57 -228c-211,-19 -317,-112 -319,-280l-172 -34 -33 -108 -127 -1 -137 -114 -46 -240c-95,-140 -401,-253 -285,-422 15,-65 -73,-127 45,-197l-68 -141c-252,-117 -147,-298 57,-495l-179 -282c-194,-140 -216,-447 -581,-422l-40 103c-133,0 -185,76 -125,257l-12 131 35 86 68 5 -17 211 -183 177 -51 80 -6 291c-92,101 -192,156 -302,143l17 126 -166 62 -17 143 -108 29c-25,72 99,116 -74,217l-86 171 -171 57 -63 148 -63 34 -108 -51 -97 34 -240 -17 -34 52 -80 17 -91 -46 -86 34 -57 109 -79 58 -104 -155 -85 28 -194 -5 -68 86c-98,65 -188,71 -271,28 -53,25 -119,63 -67,171l-57 6 17 91c-96,49 -114,152 -62,302z"/>
                          <path class="fil0 str0" onclick="msgOxapampa()" d="M15986 12970l74 171 -52 194 -95 79 -108 -57 -234 6 -78 103 49 102 11 109 -91 102 6 97 -46 137 -101 115 -104 5 -25 212 -9 79 -45 155 -149 -132 -103 74 -57 137 -62 -5 -75 5 -5 -119 -75 -35 29 -97 -68 -68 -23 -154 57 -40 11 -126 -68 -91c5,-109 28,-160 102,-120l6 -80c-2,-70 65,-95 97,-143 52,-81 -80,-128 -85,-74l11 -108 46 -34 -17 -97 159 5 35 -74 85 -63 -17 -91 97 -114 17 -143 29 -97 57 -86 -12 -182 92 -126 23 -74 39 -91 -51 -69 12 -63 -29 -108 0 -194 -6 -80 -68 -86 -29 -74 -122 -90 131 -52 137 -28 143 34 166 -225 218 146 -29 109 194 80 17 148 170 -7 18 76 39 221 74 51 -17 69 92 102 -103 320 -440 382 63 126 92 46z"/>
                          <path class="fil0 str0" onclick="msgChontabamba()" d="M12723 11884l25 91 91 34 63 86 177 29 34 -58 109 6 34 57 102 46 6 137 86 97 -6 80 74 0 57 0 63 91 63 6 -69 148 -5 263 148 57 46 91 51 69 69 0 40 -46 108 17 74 109 97 22 46 -51 28 131 40 -85 69 -12 40 80 68 34 -11 109 130 -11 11 -108 46 -34 -17 -97 159 5 35 -74 85 -63 -17 -91 97 -114 103 -326 -12 -182 92 -126 62 -165 -51 -69 12 -63 -29 -108 -6 -274 -97 -160 -122 -90c78,311 48,380 -55,284 -44,-84 -126,-119 -257,-91 -100,-115 -181,-121 -234,28 -142,21 -225,-40 -257,-171l-537 -120c-54,21 -105,90 -154,200l-291 148 -97 109 -194 -63 -74 120 -91 -17 -57 85z"/>
                          <path class="fil0 str0" onclick="msgHuachon()" d="M10405 11165l-100 142 -120 29 -103 103 -108 68 -17 74 -80 -11 -177 160 -6 97 -80 17c14,57 -87,86 40,171l97 80 75 40 137 -11 68 108 0 114 46 103 -17 68 68 -34 86 -97 97 -28 -12 -234 149 -12 182 74c57,29 126,-51 172,86l62 -40 80 46 92 -46 114 -23 51 91 51 -39 126 0 40 62 68 -34 86 -23 183 12 80 91 137 86 11 85 86 0 119 109 86 45 80 23 91 74 120 40 52 92c105,52 168,98 279,22l126 63 148 0 12 -57 91 17 63 46 57 -34 63 23 171 -6 5 -263 69 -148 -63 -6 -63 -91 -131 0 6 -80 -86 -97 -6 -137 -102 -46 -34 -57 -109 -6 -34 58 -177 -29 -63 -86 -91 -34 -25 -91 -200 23 -234 -28 -63 23 -108 -29 28 -80 -103 0 -108 -125 -120 22 -80 -114 -160 46 -125 -74 -206 -251 -256 142 -75 -205c-52,-209 -160,-255 -319,-149l-189 80z"/>
                          <path class="fil0 str0" onclick="msgPaucartambo()" d="M13775 13054l-68 137 0 234 -23 120c-44,74 -53,205 -131,222 1,133 -77,50 -115,75l-40 114 -131 5 -211 6 -86 -34 -114 45 -114 103 -160 -17 63 -91 -57 -103 -137 6 -97 -69 -148 -11 -86 143 -103 0c-57,25 -99,83 -165,22l-149 -5 -97 91 -182 160 51 125 -46 86 -68 -11 -103 108 -114 -40 -17 -68 -109 -63 -45 108 -63 -80 -86 17 -222 -17c-42,42 -112,44 -126,126l-102 0 -63 6 0 -132 -189 -108 6 -74 -34 -46 -86 0 -63 -137 -85 0c-29,-30 -12,-101 -86,-91 10,-149 84,-225 200,-251 9,-46 -38,-115 29,-137 24,-73 -14,-174 74,-217l-35 -52 69 -34 51 -63 69 0 -17 -74 85 6 63 -34 80 -35 97 -40 -11 -57 74 6 28 -68 52 28 137 -80 -29 -63 0 -80 -28 -91 17 -114 63 -29 85 -68 17 -91 206 -69 51 91 51 -39 126 0 40 62 111 -45 226 0 80 91 137 86 11 85 86 0 119 109 166 68 91 74 120 40 52 92c89,64 182,69 279,22l126 63 148 0 12 -57 91 17 63 46 57 -34 63 23 171 -6 148 57z"/>
                          <path class="fil0 str0" onclick="msgNinacaca()" d="M9774 13916l-108 68 0 86 -88 74 -146 160 -69 0 -51 171 -137 6 -74 11 -69 86 -120 108 -91 177 0 52 -68 65 -46 111 -109 103 -11 -80 -68 12 -23 -63 -63 63 -51 -52 -52 35 -108 17 -29 -23 -102 74 -98 34 40 -85c-32,-73 23,-149 23,-149l-45 -102 -52 -97 40 -103 -34 -69 40 -137 -12 -148 75 -63 57 -131 -34 -131 -126 -309 91 -108 40 -114 -120 -149 109 -28 63 -143 68 17 -11 75 125 51 -5 68c79,-15 79,-87 119,-131l126 -34 91 6 189 11 68 -137 63 17 171 -319 200 -23c152,-117 281,-156 388,-120 187,4 316,-21 320,-109l154 -131 97 -28 -12 -234 149 -12 182 74 90 2 82 84 62 -40 80 46 -17 91 -148 97 -17 114 28 91 29 143 -137 80 -52 -28 -28 68 -74 -6 11 57 -240 109 -85 -6 17 74 -69 0 -51 63 -69 34 35 52 -61 97 -13 120c-32,25 -29,137 -29,137 -140,25 -206,110 -200,251z"/>
                          <path class="fil0 str0" onclick="msgTiclacayan()" d="M9903 10777l-169 51 -5 -80 -80 -57 34 -86 -80 -119 -86 91 -5 63 -63 -109 -171 -17 0 97 -109 -11 -114 -109 -120 0 -34 126 -46 120 -57 45 -188 149 -29 74 -80 34 -51 91 -80 -28 -79 -135 -92 -13 -40 -115 -103 -108 -80 86 69 74 6 165 28 120 0 314 63 40 -12 80 63 28 63 80 97 86 -11 165 97 0 68 40 -23 115 -194 182 -114 23 52 217 -98 57 23 200 63 85 12 137 -80 120 68 17 -11 75 125 51 -5 68 119 -131 126 -34 280 17 68 -137 63 17 171 -319 200 -23c124,-120 252,-172 388,-120 203,17 292,-29 320,-109 77,-65 -19,-114 -29,-171l0 -114 -68 -108 -137 11 -172 -120 -64 -71 23 -73 81 -44 6 -97 177 -160 80 11 17 -74 108 -68 103 -103 120 -29 100 -142c35,-124 6,-230 -85,-319 0,-130 -103,-54 -154,-80 -8,57 -67,108 -23,171 -80,-53 -336,46 -240,-160z"/>
                          <path class="fil0 str0" onclick="msgHuariaca()" d="M9055 10491l-23 -160 -108 -17 -92 -62 -11 68 -91 -23c0,0 -99,-57 -183,0l-6 -108 -114 -6 0 -91 -142 5 -155 23 -68 -34 -29 -86 -74 -74 -68 12c-90,-59 -151,-16 -166,45l6 74 -17 103 0 217 63 74 28 109 -40 62 74 -5 29 97 137 -17 51 34 103 108 40 115 92 13 79 135 80 28 51 -91 80 -34 29 -74 245 -194 80 -246 120 0z"/>
                          <path class="fil0 str0" onclick="msgYarushacan()" d="M7714 10377l-131 200 -6 91 -126 86 -40 97 -40 80 46 85 63 -17 28 97 35 80 -29 103 -86 91 -91 0 -120 131 -17 177 40 46 46 86 -12 97c-66,91 -72,198 -17,319l114 0 80 6 46 -40 51 46 46 -86 68 40 109 -23 91 -68c-120,-111 0,-73 0,-109l0 -131 -45 -68 57 -58 -46 -57 11 -85c0,0 -114,-23 -57,-12 57,12 -5,-74 -5,-74l45 -85 -40 -58 -11 -74 -46 -63c0,0 103,-50 57,-17 -45,33 6,-68 6,-68l69 17 22 -108 -11 54 86 8 28 52 97 11 -28 -120 -6 -165 -69 -74 80 -86 -51 -34 -137 17 -29 -97 -74 5 40 -62 -28 -109 -63 -74z"/>
                          <path class="fil0 str0" onclick="msgYanacancha()" d="M7257 12226l46 217 34 109 97 40 80 85 -6 92 80 11 80 34 -23 143 103 85 86 -11 34 103 80 51 28 131 109 -28 143 -263 -12 -137 -63 -85 -23 -200 98 -57 -52 -217 114 -23 194 -182 23 -115 -68 -40 -97 0 11 -165 -160 -166 -63 -28 12 -80 -63 -40 0 -314 -97 -11 -28 -52 -86 -8 -11 54 -69 -17 6 58 -69 27 46 63 11 74 40 58 -45 85 62 86 -11 85 46 57 -57 58 45 68 0 131c-120,35 0,73 0,109l-91 68 -109 23 -68 -40 -46 86 -51 -46 -46 40 -194 -6z"/>
                          <path class="fil0 str0" onclick="msgTinyahuarco()" d="M7645 12957l-286 61 -132 -17 -242 114c-75,-82 -90,-26 -66,120l-57 -11c-66,8 -17,97 -26,145l-25 163 128 145 106 6 5 57 137 26c72,-10 114,-41 117,-97l37 -200 209 223 63 -12 51 -120 66 32 71 -34 100 -18 64 147 91 -108 40 -114 -120 -149 -28 -131 -80 -51 -34 -103 -86 11 -103 -85z"/>
                          <path class="fil0 str0" onclick="msgVicco()" d="M7999 14675l-40 103 97 199 -23 149 -40 85 -90 -81 -38 -72 -95 -19 -4 -103c79,-104 36,-158 -61,-118l-87 -22 -34 34 -137 38 -236 -23c-14,33 -112,-128 -42,99l-15 61 -122 -8 -80 -38 -57 -45 61 -274 45 -423 65 42 72 -27 130 58 15 -168 18 -82 -37 -32 4 -91 -46 11 11 -65 -53 4 38 -53 -31 -48 154 -297 209 223 63 -12 51 -120 66 32 171 -52c74,196 203,399 224,587l-57 131 -75 63 12 148 -40 137 34 69z"/>
                          <path class="fil0 str0" onclick="msgPallanchacra()" d="M7451 10754l126 -86 6 -91 131 -200 0 -217 17 -103c-26,-48 -16,-95 45,-140l76 -124 -134 -5 -131 -57 80 137 -52 8 -102 17 -69 -42 -17 -49 -71 -34c-25,-30 -66,-43 -120,-43l-23 49 -49 57 12 65 -23 134 -51 97 -112 -17 -91 9 9 74 82 111 95 80 14 131 134 6c50,33 76,75 80,123l80 46 58 64z"/>
                          <path class="fil0 str0" onclick="msgTusi()" d="M6659 9220c84,79 117,162 117,248l-8 77c-40,44 -48,84 -12,120l6 86 57 40 9 65 25 129c2,69 23,110 55,133l0 75 177 191 14 131 134 6 80 123 138 110 -80 177 46 85 63 -17 63 177 -29 103 -86 91 -91 0 -120 131 -17 177 -118 8c-20,43 8,91 -69,196l-63 0 -45 -22 -6 -75 -77 -25 -174 17 -37 -97 -86 -26 -68 -3 34 -74 -11 -188 -183 -197 -117 -54 -66 -135 -3 -103c131,-96 108,-210 -25,-233l5 -129c5,-143 62,-241 157,-308l-114 -60 20 -114 -11 -103 -17 -177c62,-23 114,-72 154,-157 286,99 382,-79 379,-399z"/>
                          <path class="fil0 str0" onclick="msgChacayan()" d="M6659 9220l-105 197 -243 -26 -100 37 -97 43 -145 40c-54,22 -80,74 -80,157l14 140c-75,222 -146,333 -214,342l-108 109 22 282 58 166 -29 174 103 97 34 60 6 57 77 60 5 102 -28 143 103 63 94 151c-17,51 -76,81 -169,94l0 77 9 103 69 66 105 34 77 -71c138,-36 200,18 186,165l68 32c-5,-91 36,-78 54,-117l80 -83c-4,-123 95,-91 143,-137l-37 -97 -86 -26 -68 -3 34 -74 -11 -188 -183 -197 -117 -54 -66 -135 -43 40 -25 75 -131 -135 -92 -39 -23 -129 32 -48 -34 -63 22 -52 69 -45 -43 -29 -6 -40 103 -25 9 48 134 106c-22,-195 33,-340 162,-437l-114 -60 20 -114 -28 -280c67,-25 119,-76 154,-157 268,109 384,-43 379,-399z"/>
                          <path class="fil0 str0" onclick="msgGoyllarisquizga()" d="M6086 10667l-134 -106 -9 -48 -103 25 6 40 43 29 -69 45 -22 52 34 63 -32 48 23 129 92 39 131 135c2,-55 20,-97 68,-115l-3 -103c112,-104 121,-185 -25,-233z"/>
                          <path class="fil0 str0" onclick="msgChaupimarca()" d="M7337 12552l-38 98 -52 63 15 51 51 6 -3 86 -9 54 58 108 286 -61 23 -143 -80 -34 -80 -11 6 -92 -80 -85c0,0 -98,-39 -97,-40z"/>
                          <path class="fil0 str0" onclick="msgPaucar()" d="M5689 10150c90,-23 163,-132 214,-342 -34,-143 -21,-248 66,-297l342 -120 243 26 105 -197 62 -96 -57 -34 -12 -86c-30,-106 -95,-41 -142,-62l-80 114 -109 11 -63 -68 -97 11c-62,-45 -80,69 -119,103l-97 63 -120 34 -23 74c-67,-64 -133,-74 -200,-17l-51 -51 -132 17 -68 -69 -97 29 -114 -12 85 103c115,31 120,126 120,126l-34 120c-61,8 -112,-8 -91,176l57 35 11 57 131 63 58 68 74 -11 102 131 36 101z"/>
                          <polygon class="fil0 str0" onclick="msgTapuc()" points="5220,9706 5151,9712 5197,9786 5071,9878 5145,10066 5123,10174 5243,10266 5180,10568 5231,10614 5385,10603 5471,10642 5621,10591 5581,10259 5689,10150 5653,10049 5551,9918 5477,9929 5419,9861 5288,9798 5277,9741 "/>
                          <path class="fil0 str0" onclick="msgPillao()" d="M5197 9786l-297 69 -57 -69 0 109 -108 0 -120 -40 -97 80 -137 -149 -97 80c-83,-28 -109,51 -57,154 -118,-62 -99,35 -149,52 0,0 74,82 57,34 -16,-48 23,38 34,103 12,64 92,49 137,74l86 28 86 6c14,-50 41,-57 85,0l57 -28 149 34 97 91 17 137 91 34 206 -17 63 -302 -120 -92 22 -108 -74 -188 126 -92z"/>
                          <path class="fil0 str0" onclick="msgVilcabamba()" d="M5340 10606l39 168 -65 4c-2,106 -36,153 43,184l-72 23 -94 -17c-39,26 -74,62 -103,108l12 103 97 -6 34 92 74 85 103 92c-146,26 -151,213 -40,205l325 128 132 132 41 -19 -9 -180c68,6 124,-28 169,-94l-94 -151 -103 -63 28 -143 -5 -102 -77 -60c-6,-87 -54,-158 -143,-214l29 -174 -40 -116 -149 52 -87 -40 -45 3z"/>
                          <path class="fil0 str0" onclick="msgYanahuanca()" d="M4078 10072l-120 80 -108 17c-101,-38 -149,-27 -166,11l-108 23 0 148 -131 12 -194 34c-48,40 -51,73 0,97l-32 68 -123 18c-92,49 -110,120 -97,199l-51 49 -28 197 74 68 63 12 5 137 69 34 -23 108 63 172 5 222 97 63 69 -34 120 91 -23 126 -6 57c90,26 147,108 191,211l186 0 46 68 114 115 111 37 111 71 120 91 -4 87 88 29 2 84 228 -17 137 23 103 188 -12 63 149 108 154 -336 145 -177 -14 -52c52,-9 88,-47 80,-114 -45,-80 11,-197 103,-277l131 26c68,52 149,59 240,34 153,-87 241,-271 461,-261 -16,-333 -224,-130 -263,-94l-105 -34 -69 -66 -41 19 -132 -132 -325 -128c-127,-44 -95,-167 40,-205l-103 -92 -74 -85 -34 -92 -97 6c-27,-157 42,-215 185,-194l72 -23c-87,-33 -29,-123 -43,-184l65 -4 -39 -168 -109 8 -51 -46 -206 17 -91 -34 -17 -137 -97 -91 -149 -34 -57 28 -65 -36 -20 36 -129 -20c-97,-8 -162,-35 -180,-88 0,0 -10,-48 -35,-88 -17,-26 -53,-51 -56,-49z"/>
                          <path class="fil0 str0" onclick="msgSBolivar()" d="M3624 12292l-16 65 -42 68 22 54c-142,95 -149,159 6,186l68 182 18 132 17 85c123,62 227,106 351,69 55,61 78,140 65,240l92 -63 142 160 143 28 74 52 80 5 234 34 120 63 -63 114 103 69c-37,48 -90,50 -115,18l24 119 222 85 183 -45 46 -52 108 -11 40 -63 171 -11 63 85 108 -40 126 -11 120 74 137 29 91 6 154 -29 69 63 85 11c17,8 29,49 46,57l86 0 199 97 65 42 72 -27 130 58 33 -250 -37 -32 4 -91 -46 11 11 -65 -53 4 38 -53 -31 -48 -137 -26 -5 -57 -106 -6 -128 -145c8,-54 17,-109 25,-163 -27,-121 -13,-185 83,-134 -34,-156 -13,-198 66,-120l242 -114 132 17 -58 -108 12 -145 -51 -1 -14 -56 89 -156 -34 -109 -46 -217c-52,-113 -57,-221 17,-319l12 -97 -46 -86 -40 -46 -118 8 -25 118 -44 78 -63 0 -45 -22 -6 -75 -77 -25 -174 17c-110,31 -164,75 -143,137l-126 137 -8 63 -68 -32c-112,-22 -274,85 -461,261 -95,29 -175,18 -240,-34l-131 -26c-91,73 -150,156 -103,277 3,75 -23,113 -80,114l14 52 -145 177 -154 336 -149 -108 12 -63 -103 -188 -137 -23 -228 17 -2 -84 -88 -29 4 -87 -231 -162 -111 -37 -114 -115 -46 -68 -186 0z"/>
                          <path class="fil0 str0" onclick="msgHuayllay()" d="M7154 15005l-2 121 69 -5 45 85 -63 86 58 80 0 154 79 51 -22 86 5 74 97 34 -85 69 80 74 85 86 -5 137 -35 131c-99,272 -64,365 35,371l85 120 80 0 -16 87 71 31 15 94 -110 62 -51 -69 -109 -63 -74 80c-86,31 -167,-21 -245,-120l-132 23 0 -85 -137 34c-71,-121 -113,-247 -108,-383l-84 -84c-143,-106 -161,60 -224,107 -63,-32 -46,-104 -189,-97l-97 -51 12 -86c-101,-1 -106,-36 -126,52l-228 -6c-71,-71 -111,-56 -114,63l-131 -120 -97 114 -189 23 -131 51 -97 -108c-139,-28 -152,-164 -228,-246l-26 -74 -51 -85c-74,-20 -119,-52 -163,-109l-131 12 -12 -120c-123,98 -145,36 -85,-154l-63 -80 80 -109 97 -74 -58 -130 18 -190 -29 -142 -40 -103 -51 -97 0 -320 -69 -114 23 -91 -102 -143 -46 -80c-93,23 -170,25 -171,-74l-80 -148 -17 -114 47 -53c-33,-60 0,-141 -98,-182 -98,-58 -81,-150 -121,-224 121,62 243,89 355,69 60,78 90,158 65,240l92 -63 142 160 143 28 74 52 80 5 117 17 117 17 120 63 -63 114 103 69c-38,46 -76,49 -115,18l24 119 222 85 183 -45 46 -52 108 -11 40 -63 171 -11 63 85 108 -40 126 -11 120 74 228 35 154 -29 69 63 85 11 46 57 86 0 199 97 -45 423 -61 274c55,59 138,93 259,91z"/>
                         </g>
                      </svg>
                </div>
                <div id="info" class="col-lg-6">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h3 class="panel-title text-center" id="panel-title"></h3>
                    </div>
                    <div class="panel-body">
                        <p id="desc" class="text-center"></p>
                    </div>
                </div>
    </div>

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
