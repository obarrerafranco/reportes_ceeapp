<?php 
    require '../../registros/db.php';

          $week = $_GET['wekks'];
          $city = $_GET['citias']; 
          $sql = "SELECT
          rpj.id as id_rep,
          rpj.id_ciudad,
          rpj.id_semana,
          rpj.scans_total_semana,
          rpj.scans_promedio_diario,
          rpj.views_total_semana,
          rpj.views_promedio_diario,
          rpj.views_total_year,
          rpj.download_android,
          rpj.download_ios,
          rpj.download_windows,
          rpj.mapa_ciudad as mapa,
          ct.nombre_ciudad,
          wk.id as id_semanas,
          ct.id as id_ciudads,
          wk.semana as semn,
          wk.year,
          CONCAT_WS('/',wk.semana,wk.year) as semana,
          wk.scans_total,
          wk.descarga_total,
          wk.text_semana
          FROM
          reportes_jcdecaux AS rpj 
          INNER JOIN ciudades ct ON ct.id = rpj.id_ciudad
          INNER JOIN semanas wk ON wk.id = rpj.id_semana 
          WHERE
          rpj.id_semana = ? AND
          rpj.id_ciudad = ?";

          $stmt = $PDO->prepare($sql);
          $stmt->execute(array($week,$city));
          $data = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="obarrerafranco">
    <link rel="shortcut icon" href="../../img/plataforma/favicon.jpeg">
    <meta name="robots" content="noindex">

    <title>JC Decaux Nacional: <?php echo $data['semana']; ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../css/ceeapp.css" rel="stylesheet">

      <!-- Default Theme -->
    <link rel="stylesheet" href="../../css/owl.theme.css">

    <!--Owl stylesheet -->
    <link rel="stylesheet" href="../../css/owl.carousel.css">
    <link rel="stylesheet" href="../../css/owl.custom.css">
    <link rel="stylesheet" href="../../css/AdminLTE.min.css">
    <link rel="stylesheet" href="../../css/ionicons.min.css">


    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="../../js/device.min.js"></script>
    <script src="../../js/modernizr.custom.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-67497646-1', 'auto');
  ga('send', 'pageview');

</script>
</head>

<body id="page-top" class="index withAnimation">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar" ></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"><img class="monitor" src="../../img/plataforma/logo.png"></a>
            </div>
            <!-- /.navbar-collapse -->

             <!-- Collect the nav links, forms, and other content for toggling -->
             <?php if($city == 1){
  ?>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <?php echo "<a class='page-scroll2' href='http://localhost:8081/cee_report/reportes/jcdecaux/index.php?wekks=".$week."&citias=1'>JCdecaux</a>"; ?>
                    </li>
                    <li>
                        <a class="page-scroll" href="#resumen_views">Resumen</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#resumen_descargas">Descargas</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#reportes1">Reportes</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#historial">Historico</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#ciudades">Ciudades</a>
                    </li>
                    
                </ul>
            </div>
<?php }else{
  ?>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#resumen_views">Resumen</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#resumen_descargas">Descargas</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#reportes1">Reportes</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#historial">Historico</a>
                    </li>
                    <li>
                       <?php echo "<a class='page-scroll2' href='http://localhost:8081/cee_report/reportes/jcdecaux/index.php?wekks=".$week."&citias=1'>Nacional</a>"; ?>
                    </li>
                    
                </ul>
            </div>

  <?php } ?>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header style="background-image: url(../../img/headers/hd_jcdecaux.jpg);">
        <div class="container">
            <div class="intro-text">
                <div class="shadow intro-lead-in text-right">Reporte<br /><?php echo $data['semana']; ?></div>
                <div class="shadow intro-heading text-right">JC Decaux  <br>
                    <span class="ciudad">(<?php echo $data['nombre_ciudad']; ?>)</span></div>
            </div>
        </div>
        <div class="opacity"></div>
    </header>
      <?php echo '<input type="hidden" name="id_ob" id="id_ob" value="'.$data['id_rep'].'">'; ?>
      <?php echo '<input type="hidden" name="id_wkkk" id="id_wkkk" value="'.$week.'">'; ?>
      
    <!-- SECCION RESUMEN VIEWS-->
   <section id="resumen_views">
       
       <div class="container">
        <div class="row">
          <div class="col-md-6" id="barra">
          <div><h2 class="section-heading">Resumen Scans</h2></div><br />
              <div class="col-sm-4">
                <!-- small box -->
                <div class="small-box bg-scans">
                  <div class="inner caja">
                    <h1 class="text-center"><?php echo $data['scans_total_semana']; ?></h1>

                    <p class="text-center">Total Semana</p>
                  </div>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-sm-4">
                <!-- small box -->
                <div class="small-box bg-views">
                  <div class="inner caja">
                    <h1 class="text-center"><?php echo $data['scans_promedio_diario']; ?></h1>

                    <p class="text-center">Promedio Diario</p>
                  </div>
                </div>
              </div>
               <!-- ./col -->
              <div class="col-sm-4">
                <!-- small box -->
                <div class="small-box bg-descargas">
                  <div class="inner caja">
                    <h1 class="text-center"><?php echo $data['scans_total']; ?></h1>

                    <p class="text-center">Total 2017</p>
                  </div>
                </div>
              </div>
              <!-- ./col -->  
          </div>
          <div class="col-md-6">
            <div><h2 class="section-heading">Resumen Views</h2></div><br />
            <div class="col-sm-4">
              <!-- small box -->
              <div class="small-box bg-scans">
                <div class="inner caja">
                  <h1 class="text-center"><?php echo $data['views_total_semana']; ?></h1>

                  <p class="text-center">Total Semana</p>
                </div>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-sm-4">
              <!-- small box -->
              <div class="small-box bg-views">
                <div class="inner caja">
                  <h1 class="text-center"><?php echo $data['views_promedio_diario']; ?></h1>

                  <p class="text-center">Promedio Diario</p>
                </div>
              </div>
            </div>
             <!-- ./col -->
            <div class="col-sm-4">
              <!-- small box -->
              <div class="small-box bg-descargas">
                <div class="inner caja">
                  <h1 class="text-center"><?php echo $data['views_total_year']; ?></h1>

                  <p class="text-center">Total 2017</p>
                </div>
              </div>
            </div>
            <!-- ./col -->
          </div>
        </div>
      </div>
   </section>
   <!-- FIN RESUMEN VIEWS -->

    <!-- SECCION DESCARGAS-->

   <section id="resumen_descargas" class="bg-light-gray">
       
       <div class="container">
       <div><h2 class="section-heading">DESCARGAS DE LA APLICACIÓN EN COLOMBIA</h2></div><br />
        <div class="col-sm-2 col-sm-offset-2">
          <!-- small box -->
          <div class="small-box bg-android">
            <div class="inner caja">
              <h1 class="text-center"><?php echo $data['download_android']; ?></h1>

              <p class="text-center">Android</p>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-sm-2">
          <!-- small box -->
          <div class="small-box bg-ios">
            <div class="inner caja">
              <h1 class="text-center"><?php echo $data['download_ios']; ?></h1>

              <p class="text-center">IOS</p>
            </div>
          </div>
        </div>

        <div class="col-sm-2">
          <!-- small box -->
          <div class="small-box bg-windows">
            <div class="inner caja">
              <h1 class="text-center"><?php echo $data['download_windows']; ?></h1>

              <p class="text-center">Windows</p>
            </div>
          </div>
        </div>
         <!-- ./col -->
        <div class="col-sm-2">
          <!-- small box -->
          <div class="small-box bg-descargas">
            <div class="inner caja">
              <h1 class="text-center"><?php echo $data['descarga_total']; ?></h1>

              <p class="text-center">Total</p>
            </div>
          </div>
        </div>
        <!-- ./col -->
      </div>
   </section>
   <!-- FIN DESCARGAS -->

   <!-- SECCION REPORTES 1-->
    <section id="reportes1" >
        <div class="container">
            <div class="row">
               <div class="scans col-md-6 col-lg-6">
         
                                         <div class="text-center">
                        <h4 class="section-heading">EVOLUCIÓN SEMANAL DE SCANS Y VIEWS <span class="ciudad">(<?php echo strtoupper($data['nombre_ciudad']); ?>)</span></h4>
                    </div>
                    <div>
                        <canvas id="semana"></canvas>
                    </div>

                </div>
                <div class="views col-md-6 col-lg-6">
                    <div class="text-center">
                        <h4 class="section-heading">INFORMACIÓN GENERAL <span class="ciudad">(<?php echo strtoupper($data['nombre_ciudad']); ?>)</span></h4>
                        <h5 class="section-subheading text-muted">En la gráfica se muestran todos los scans realizados en la última semana:</h5>
                    </div>
                    <div>
                        <canvas id="infogral"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCION REPORTES 2-->
    <section id="reportes2" class="bg-light-gray">
        <div class="container">
            <div class="row">
               <div class="scans col-md-4">
                    <div class="text-center">
                        <h4 class="section-heading">Género</h4>
                    </div>
                    <div>
                        <canvas id="genero"></canvas>
                    </div>

                </div>
                <div class="views col-md-4 col-lg-4">
               <div class="text-center">
                        <h4 class="section-heading">Edad</h4>
                    </div>
                    <div>
                        <canvas id="edad"></canvas>
                    </div>
                </div>
                 <div class="scans col-md-4">
                    <div class="text-center">
                        <h4 class="section-heading">Dispositivo</h4>
                    </div>
                    <div>
                        <canvas id="dispositiv"></canvas>
                    </div>

                </div>
            </div>
        </div>
    </section>

<!-- SECCION HISTORICO -->
    <section id="historial">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">HISTÓRICO <span class="ciudad">(<?php echo strtoupper($data['nombre_ciudad']); ?>)</span></h2>
                    <h3 class="section-subheading text-muted">El histórico incluye los datos registrados en semanas anteriores para esta campaña:</h3>
                </div>
            </div>
            <div class="row text-center">
                <div id="owl-example" class="owl-carousel">

               
                <?php 
                $sql = 'SELECT historial.id, semanas.semana as lasemana,  semanas.color as color, 
                id_cliente, id_ciudad, id_semana, 
                historial.estatus, imagen FROM historial 
                INNER JOIN semanas 
                ON historial.id_semana= semanas.id
                WHERE historial.estatus = 1 and id_ciudad = 1 and id_cliente = 2 ORDER BY historial.id DESC';

                foreach ($PDO->query($sql) as $row1) {

                                echo '<a href="#sem'.$row1['lasemana'].'" class="portfolio-link" data-toggle="modal"> '; 
                                 echo  '<div class="item '.$row1['color'].' transition"> ';  ?>
                                        <h3>SEMANA</h3>
                                        <h2><?php echo $row1['lasemana']; ?></h2>
                                    </div>
                                </a>
                <?php
                        }
                ?>
              </div>
            </div>
        </div>
    </section>
<!--- FIN HISTORICO-->
<?php if($city != 1){
  ?>
     <!--  MAPA CIUDAD -->
    <section id="mapa_ciudad">
      <div class="row">
        <div class="map-img row">
          <h2 class="section-heading">MAPA <?php echo $data['nombre_ciudad']; ?></h2>
          <?php echo '<img class="img-responsive" style="margin:0 auto" src="../../img/mapas/'.$data['mapa'].'">';?>
        </div>
      </div>
    </section>
    <!-- FIN MAPA CIUDAD -->
<?php } ?>
<?php if($city == 1){
  ?>
     <!--  CIUDADES -->
    <section id="ciudades" class="bg-light-gray">
      <div class="row">
              <div class="col-md-6 ciudades-txt">
                  <div>
                      <hr class="separador"/>
                      <h1 class="mapa">CONOCE<br />LOS REPORTES <br />DE CADA CIUDAD</h1>
                      <hr class="separador"/>
                      <div >
                        <form method="post" id="bogot" action="index.php?wekks=<?php echo $week; ?>&citias=2">
                          <a class="btn-ciudad" alt="Bogotá" title="Bogotá" href="#" onclick="document.forms['bogot'].submit(); return false;">BOGOTÁ</a>
                          <?php echo '<input type="hidden" name="wekks" value="'.$week.'">
                          <input type="hidden" name="citias" value="2">'; ?>
                        </form>-<form method="post" id="cal" action="index.php?wekks=<?php echo $week; ?>&citias=3">
                          <a class="btn-ciudad" alt="Cali" title="Cali" href="#" onclick="document.forms['cal'].submit(); return false;" >CALI</a>
                         <?php echo '<input type="hidden" name="wekks" value="'.$week.'">
                          <input type="hidden" name="citias" value="3">'; ?>
                        </form>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 ciudades-map" usemap="#image-maps-colombia">
                <div class="mapita">
                  <img id="Image-Maps-Com-image-maps-2017-02-03-182337" src="../../img/plataforma/colombia.png" border="0" width="239" height="300" orgWidth="239" orgHeight="300" usemap="#image-maps-2017-02-03-182337" alt="" />
                  <map name="image-maps-2017-02-03-182337" id="ImageMapsCom-image-maps-2017-02-03-182337">
                  <form method="post" id="bogot" action="index.php?wekks=<?php echo $week; ?>&citias=2">
                      <area id="1" alt="Bogotá" title="Bogotá" href="#" onclick="document.forms['bogot'].submit(); return false;" shape="rect" coords="78,128,108,161" style="outline:none;" target="_self"     />
                     <?php echo '<input type="hidden" name="wekks" value="'.$week.'">
                      <input type="hidden" name="citias" value="2">'; ?>
                  </form>
                  <form method="post" id="cal" action="index.php?wekks=<?php echo $week; ?>&citias=3">
                      <area id="2" alt="Cali" title="Cali" href="#" onclick="document.forms['cal'].submit(); return false;" shape="rect" coords="27,138,64,176" style="outline:none;" target="_self"     />
                     <?php echo '<input type="hidden" name="wekks" value="'.$week.'">
                      <input type="hidden" name="citias" value="3">'; ?>
                  </form>
                  </map>
                </div>
              </div>
          </div>
    </section>
    <!-- FIN CIUDADES -->
<?php } ?>
    <!-- FOOTER INICIAL -->
    <footer class="footter">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
               <img alt="JCdecaux" title="JCdecaux" src="../../img/plataforma/jcdecaux_footer.png">
               <a href="http://www.ceeplatform.com" target="_blank"><img alt="CEE APP" title="CEE APP"  src="../../img/plataforma/ceelogo_footer.png"></a>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </footer>
    <!-- FOOTER FINAL -->

    <!-- INICIO MODAL HISTORICO -->
    <?php 

    foreach ($PDO->query($sql)as $row2) {


        echo '<div class="portfolio-modal modal fade" id="sem'.$row2['lasemana'].'" tabindex="-1" role="dialog" aria-hidden="true">'; ?>
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <?php echo '<img class="img-responsive" src="../../img/historico/'.$row2['imagen'].'">';?>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     <?php 
       }
    ?>
        
    <!-- FIN MODAL HISTORICO -->

    <!-- jQuery Version 1.11.0 -->
    <script src="../../js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../../js/classie.js"></script>
    <script src="../../js/cbpAnimatedHeader.js"></script>


    <!-- Custom Theme JavaScript -->
    <script src="../../js/agency.js"></script>


    <script src="../../js/jquery.easing.1.3.js"></script>
    <!-- IE -->
    <script src="../../js/modernizr.custom.js"></script>

    <!-- JS responsible for hover in touch devices -->
    <script src="../../js/jquery.hoverIntent.js"></script>

    <!-- Detects when a element is on wiewport -->
    <script src="../../js/jquery.appear.js"></script>

    <!-- Count to plugin -->
    <script src="../../js/jquery.countTo.js"></script>

    <!-- Charts -->
    <script src="../../js/Chart.min.js"></script>

    <!-- our main JS file -->
    <!--script src="js/main.js"></script-->

    <!-- Owl Carousel -->
    <script src="../../js/owl.carousel.js"></script>
    <script type="text/javascript" src="../../ajax/info_genral.js"></script>
    <script type="text/javascript" src="../../ajax/genero_jcd.js"></script>
    <script type="text/javascript" src="../../ajax/edad_jcd.js"></script>
    <script type="text/javascript" src="../../ajax/semana_jcd.js"></script>
    <script type="text/javascript" src="../../ajax/dispositivos_jcd.js"></script>

<script>
    $(document).ready(function() {
 
  $("#owl-example").owlCarousel({
      items : 6
 });
});
</script>
<!-- end scripts -->
</body>

</html>
