<?php 
   if(!isset($_POST['client'])){

    echo "<div>No tienes acceso para ver esta página</div>";

   }else{


    require '../../registros/db.php';

          $week = $_POST['wekks'];//5;
          $client = $_POST['client']; //43;
          $city = $_POST['citias']; 
          $sql = "SELECT rc.id as id_rep, 
          rc.id_campana, 
          rc.id_ciudad, 
          rc.id_semana, 
          text_semana,
          rc.porcen_total as porcen_total,
          no_scans, 
          no_views, 
          scans_total,
          descarga_total, 
          best_hour,
          CONCAT_WS('/',semanas.semana,semanas.year) as semana,
          cy.nombre_ciudad as city,
          cp.nombre_campana,
          cp.id_cliente,
          cp.img_header as mupi,
          cl.nombre_cliente as cliente
          FROM reportes_clientes rc
          INNER JOIN semanas 
               ON rc.id_semana = semanas.id
          INNER JOIN ciudades cy 
               ON rc.id_ciudad  = cy.id
          INNER JOIN campanas cp 
               ON rc.id_campana  = cp.id
          INNER JOIN clientes cl 
               ON cp.id_cliente  = cl.id
          WHERE
          cp.status = 1 AND 
          rc.id_semana = ? AND 
          cp.id_cliente = ? AND 
          rc.id_ciudad = ?";

          $stmt = $PDO->prepare($sql);
          $stmt->execute(array($week,$client,$city));
          $data = $stmt->fetch(PDO::FETCH_ASSOC);

          //$id_reporte =  $data['id_rep'];
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

    <title><?php echo $data['cliente']." ( ".$data['city'] ." ) / Reporte Semana ".$data['semana'] ?></title>

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
                <a class="navbar-brand page-scroll" href="#page-top"><img class="monitor" src="../../img/plataforma/logo.png"><h4 class="logo-txt">CEE APP</h4></a>
            </div>

            <?php if($city == 1){
  ?>
            <!-- /.navbar-collapse -->
             <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#resumen">Resumen</a>
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
            <!-- /.navbar-collapse -->
            <?php }else { ?>
              <!-- /.navbar-collapse -->
               <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">
                      <li class="hidden">
                          <a href="#page-top"></a>
                      </li>
                      <li>
                          <a class="page-scroll" href="#resumen">Resumen</a>
                      </li>
                      <li>
                          <a class="page-scroll" href="#reportes1">Reportes</a>
                      </li>
                      <li>
                          <a class="page-scroll" href="#historial">Historico</a>
                      </li>
                      <li style="padding: 15px 10px 10px 10px">
                        <form method="post" id="nacional" action="index.php">
                        <a class="page-scroll" href="#" onclick="document.forms['nacional'].submit(); return false;">Nacional</a>
                         <?php echo '<input type="hidden" name="wekks" value="'.$week.'">
                        <input type="hidden" name="client" value="'.$client.'">
                        <input type="hidden" name="citias" value="1">'; ?>
                        </form> 
                      </li>

                  </ul>
              </div>
              <!-- /.navbar-collapse -->

            <?php } ?>
        </div>
        <!-- /.container-fluid -->
    </nav>
    <!-- Header -->
    <?php echo '<header style="background-image: url(../../img/headers/'.$data['mupi'].');">'; ?>
        <div class="container">
            <div class="intro-text">
                <div class="shadow intro-lead-in text-right">Reporte <br /> semana <?php echo $data['semana']; ?></div>
                <div class="shadow intro-heading text-right"><?php echo $data['cliente']; ?> <br>
                    <span class="camap"><?php echo $data['nombre_campana']; ?></span> <br />
                    <span class="ciudad">(<?php echo $data['city']; ?>)</span> </div>
            </div>
        </div>
        <div class="opacity"></div>
    </header>

    <?php echo '<input type="hidden" name="id_ob" id="id_ob" value="'.$data['id_rep'].'">'; ?>
    <?php echo '<input type="text" name="id_wkkk" id="id_wkkk" value="'.$week.'">'; ?>

    <!-- SECCION RESUMEN-->

   <section id="resumen">  
       <div class="container">
       <div><h2 class="section-heading">Resumen</h2></div><br />
        <div class="col-sm-2 col-sm-offset-1">
          <!-- small box -->
          <div class="small-box bg-scans">
            <div class="inner caja">
              <h1 class="text-center"><?php echo $data['no_scans']; ?></h1>

              <p class="text-center">Número de Scans</p>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-sm-2">
          <!-- small box -->
          <div class="small-box bg-views">
            <div class="inner caja">
              <h1 class="text-center"><?php echo $data['no_views']; ?></h1>

              <p class="text-center">Número de Views</p>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-sm-2">
          <!-- small box -->
          <div class="small-box bg-hora">
            <div class="inner caja">
             <h4 class="text-center"><?php echo $data['best_hour']; ?> SCANS<p>&nbsp;</p></h4>

              <p class="text-center">Mejor Hora</p>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-sm-2">
          <!-- small box -->
          <div class="small-box bg-scan-total">
            <div class="inner caja">
              <h1 class="text-center"><?php echo $data['scans_total']; ?></h1>

              <p class="text-center"><?php echo '<a href="#" data-toggle="tooltip" title="'. $data['porcen_total'].' del total">Scans Total</a></p>'; ?>
            </div>
          </div>
        </div>
         <!-- ./col -->
        <div class="col-sm-2">
          <!-- small box -->
          <div class="small-box bg-descargas">
            <div class="inner caja">
              <h1 class="text-center"><?php echo $data['descarga_total']; ?></h1>

              <p class="text-center">Descargas Totales</p>
            </div>
          </div>
        </div>
        <!-- ./col -->
      </div>
   </section>
   <!-- SECCION REPORTES 1-->
    <section id="reportes1" class="bg-light-gray">
        <div class="container">
            <div class="row">
               <div class="scans col-md-6 col-lg-6">
         
                                         <div class="text-center">
                        <h4 class="section-heading">SEMANA <?php echo $data['semana']; ?> <span class="ciudad">(<?php echo $data['city']; ?>)</span></h4>
                        <h5 class="section-subheading text-muted">Estos son los datos recogidos de scans realizados en la semana 04, que abarca del <?php echo $data['text_semana']; ?>:</h5>
                    </div>
                    <div>
                        <canvas id="semana"></canvas>
                    </div>

                </div>
                <div class="views col-md-6 col-lg-6">
                    <div class="text-center">
                        <h4 class="section-heading">INFORMACIÓN GENERAL <span class="ciudad">(<?php echo $data['city']; ?>)</span></h4>
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
    <section id="reportes2">
        <div class="container">
            <div class="row">
               <div class="scans col-md-6 col-lg-6">
                    <div class="text-center">
                        <h4 class="section-heading">Género</h4>
                    </div>
                    <div>
                        <canvas id="genero"></canvas>
                    </div>

                </div>
                <div class="views col-md-6 col-lg-6">
               <div class="text-center">
                        <h4 class="section-heading">Edad</h4>
                    </div>
                    <div>
                        <canvas id="edad"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </section>


<!-- SECCION HISTORICO -->
    <section id="historial" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">HISTÓRICO <span class="ciudad">(<?php echo $data['city']; ?>)</span></h2>
                    <h3 class="section-subheading text-muted">El histórico incluye los datos registrados en semanas anteriores para esta campaña:</h3>
                </div>
            </div>
            <div class="row text-center">
                <div id="owl-example" class="owl-carousel">

                
                <?php 
                $sqlhist = "SELECT historial.id, 
                semanas.semana as lasemana,  
                semanas.color as color, 
                id_cliente, id_ciudad, id_semana, 
                historial.estatus, imagen 
                FROM historial 
                INNER JOIN semanas 
                ON historial.id_semana= semanas.id
                WHERE historial.estatus = 1 and id_ciudad = ".$city." and id_cliente = ".$client." ORDER BY historial.id DESC";

                foreach ($PDO->query($sqlhist) as $row1) {

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
<?php if($city == 1){
  ?>

     <!--  CIUDADES -->
    <section id="ciudades">
      <div class="row">
              <div class="col-md-6 ciudades-txt">
                  <div>
                      <hr class="separador"/>
                      <h1 class="mapa">CONOCE<br />LOS REPORTES <br />DE CADA CIUDAD</h1>
                      <hr class="separador"/>
                      <div >
                        <form method="post" id="bogot" action="index.php">
                          <a class="btn-ciudad" alt="Bogotá" title="Bogotá" href="#" onclick="document.forms['bogot'].submit(); return false;">BOGOTÁ</a>
                          <?php echo '<input type="hidden" name="wekks" value="'.$week.'">
                          <input type="hidden" name="client" value="'.$client.'">
                          <input type="hidden" name="citias" value="2">'; ?>
                        </form>-<form method="post" id="cal" action="index.php">
                          <a class="btn-ciudad" alt="Cali" title="Cali" href="#" onclick="document.forms['cal'].submit(); return false;" >CALI</a>
                         <?php echo '<input type="hidden" name="wekks" value="'.$week.'">
                          <input type="hidden" name="client" value="'.$client.'">
                          <input type="hidden" name="citias" value="3">'; ?>
                        </form>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 ciudades-map" usemap="#image-maps-colombia">
                <div class="mapita">
                  <img id="Image-Maps-Com-image-maps-2017-02-03-182337" src="../../img/plataforma/colombia.png" border="0" width="239" height="300" orgWidth="239" orgHeight="300" usemap="#image-maps-2017-02-03-182337" alt="" />
                  <map name="image-maps-2017-02-03-182337" id="ImageMapsCom-image-maps-2017-02-03-182337">
                    <form method="post" id="bogot" action="index.php">
                      <area id="1" alt="Bogotá" title="Bogotá" href="#" onclick="document.forms['bogot'].submit(); return false;" shape="rect" coords="78,128,108,161" style="outline:none;" target="_self"     />
                     <?php echo '<input type="hidden" name="wekks" value="'.$week.'">
                      <input type="hidden" name="client" value="'.$client.'">
                      <input type="hidden" name="citias" value="2">'; ?>
                  </form>
                  <form method="post" id="cal" action="index.php">
                      <area id="1" alt="Cali" title="Cali" href="#" onclick="document.forms['cal'].submit(); return false;" shape="rect" coords="27,138,64,176" style="outline:none;" target="_self"     />
                     <?php echo '<input type="hidden" name="wekks" value="'.$week.'">
                      <input type="hidden" name="client" value="'.$client.'">
                      <input type="hidden" name="citias" value="3">'; ?>
                  </form>
                    <area shape="rect" coords="237,298,239,300" alt="Image Map" style="outline:none;" title="Image Map" href="http://www.image-maps.com/index.php?aff=mapped_users_0" />
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
    <!-- FIN IMG FINAL -->

 <!-- INICIO MODAL HISTORICO -->
    <?php 

    foreach ($PDO->query($sqlhist)as $row2) {


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
    <script type="text/javascript" src="../../ajax/genero.js"></script>
    <script type="text/javascript" src="../../ajax/edad.js"></script>
    <script type="text/javascript" src="../../ajax/semana.js"></script>

<script>
    $(document).ready(function() {
    
    function enviar (id){
        $("#a"+id).submit();
      }
 
  $("#owl-example").owlCarousel({
      items : 6
 });
});
</script>

<!-- end scripts -->
</body>

</html>
