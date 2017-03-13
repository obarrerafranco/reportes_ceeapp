<?php 
    require '../../registros/db.php';
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

    <title>JC Decaux Bogotá / Reporte Semana 04</title>

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
            <!-- /.navbar-collapse -->
             <!-- Collect the nav links, forms, and other content for toggling -->
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
                        <a class="page-scroll" href="#mapa_ciudad">Mapa</a>
                    </li>
                     <li>
                        <a class="page-scroll" href="../../reportes/jcdecaux/index.php">Nacional</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header style="background-image: url(../../img/headers/hd_jcdecaux.jpg);">
        <div class="container">
            <div class="intro-text">
                <div class="shadow intro-lead-in text-right">Reporte<br /> semana 04</div>
                <div class="shadow intro-heading text-right">JC Decaux  <br>
                    <span class="ciudad">(Bogotá)</span></div>
            </div>
        </div>
        <div class="opacity"></div>
    </header>

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
                    <h1 class="text-center">22.402</h1>

                    <p class="text-center">Total Semana</p>
                  </div>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-sm-4">
                <!-- small box -->
                <div class="small-box bg-views">
                  <div class="inner caja">
                    <h1 class="text-center">3.200</h1>

                    <p class="text-center">Promedio Diario</p>
                  </div>
                </div>
              </div>
               <!-- ./col -->
              <div class="col-sm-4">
                <!-- small box -->
                <div class="small-box bg-descargas">
                  <div class="inner caja">
                    <h1 class="text-center">122.293</h1>

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
                  <h1 class="text-center">16.403</h1>

                  <p class="text-center">Total Semana</p>
                </div>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-sm-4">
              <!-- small box -->
              <div class="small-box bg-views">
                <div class="inner caja">
                  <h1 class="text-center">2.343</h1>

                  <p class="text-center">Promedio Diario</p>
                </div>
              </div>
            </div>
             <!-- ./col -->
            <div class="col-sm-4">
              <!-- small box -->
              <div class="small-box bg-descargas">
                <div class="inner caja">
                  <h1 class="text-center">62.690</h1>

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

   <section id="resumen_descargas" >
       
       <div class="container">
       <div><h2 class="section-heading">DESCARGAS DE LA APLICACIÓN EN COLOMBIA</h2></div><br />
        <div class="col-sm-2 col-sm-offset-2">
          <!-- small box -->
          <div class="small-box bg-android">
            <div class="inner caja">
              <h1 class="text-center">43.877</h1>

              <p class="text-center">Android</p>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-sm-2">
          <!-- small box -->
          <div class="small-box bg-ios">
            <div class="inner caja">
              <h1 class="text-center">42.011</h1>

              <p class="text-center">IOS</p>
            </div>
          </div>
        </div>

        <div class="col-sm-2">
          <!-- small box -->
          <div class="small-box bg-windows">
            <div class="inner caja">
              <h1 class="text-center">2.540</h1>

              <p class="text-center">Windows</p>
            </div>
          </div>
        </div>
         <!-- ./col -->
        <div class="col-sm-2">
          <!-- small box -->
          <div class="small-box bg-descargas">
            <div class="inner caja">
              <h1 class="text-center">88.428</h1>

              <p class="text-center">Total</p>
            </div>
          </div>
        </div>
        <!-- ./col -->
      </div>
   </section>
   <!-- FIN DESCARGAS -->

   <!-- SECCION REPORTES 1-->
    <section id="reportes1" class="bg-light-gray">
        <div class="container">
            <div class="row">
               <div class="scans col-md-6 col-lg-6">
         
                                         <div class="text-center">
                        <h4 class="section-heading">EVOLUCIÓN SEMANAL DE SCANS Y VIEWS <span class="ciudad">(Bogotá)</span></h4>
                    </div>
                    <div>
                        <canvas id="semana"></canvas>
                    </div>

                </div>
                <div class="views col-md-6 col-lg-6">
                    <div class="text-center">
                        <h4 class="section-heading">INFORMACIÓN GENERAL <span class="ciudad">(Bogotá)</span></h4>
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
    <section id="historial" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">HISTÓRICO <span class="ciudad">(Bogotá)</span></h2>
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
                WHERE historial.estatus = 1 and id_ciudad = 2 and id_cliente = 2 ORDER BY historial.id DESC';

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

     <!--  MAPA CIUDAD -->
    <section id="mapa_ciudad">
      <div class="row">
        <div class="map-img row">
          <h2 class="section-heading">MAPA BOGOTÁ</h2>
          <img style="margin:0 auto" class="img-responsive" src="../../img/mapas/bogota_sem7_2017.jpg">
        </div>
      </div>
    </section>
    <!-- FIN MAPA CIUDAD -->

  </div>
  </div>
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

<script>
    $(document).ready(function() {
 
  $("#owl-example").owlCarousel({
      items : 6
 });
});
</script>

<script>
"use strict";

        /* Semana linea Inicio */
      var semanaLoaded = false;
            $(document).on('scroll', function(){      
                var scrollTop = $(window).scrollTop();
                if(scrollTop > 250 && !semanaLoaded){
                    var ctxsemana = document.getElementById("semana");



                    var dataSemana = {
                                labels: ["Semana 1", "Semana 2", "Semana 3", "Semana 4", "Semana 5", "Semana 6", "Semana 7"],
                                datasets: [
                                     {
                                        label: "Numero de views",
                                        fill: true,
                                        lineTension: 0.1,
                                        backgroundColor: "#0c2756",
                                        borderColor: "#0c2756",
                                        borderCapStyle: 'butt',
                                        borderDash: [],
                                        borderDashOffset: 0.0,
                                        borderJoinStyle: 'miter',
                                        pointBorderColor: "#0c2756",
                                        pointBackgroundColor: "#fff",
                                        pointBorderWidth: 1,
                                        pointHoverRadius: 5,
                                        pointHoverBackgroundColor: "rgba(75,192,192,1)",
                                        pointHoverBorderColor: "rgba(220,220,220,1)",
                                        pointHoverBorderWidth: 2,
                                        pointRadius: 3,
                                        pointColor: "rgba(148, 193, 31,1)",
                                        pointHitRadius: 10,
                                        data: [8404, 7821, 8062, 8403, 8403, 8403, 8403],
                                        spanGaps: false,
                                    },
                                      {
                                        label: "Numero de scans",
                                        fill: true,
                                        lineTension: 0.1,
                                        backgroundColor: "#94C11F",
                                        borderColor: "#94C11F",
                                        borderCapStyle: 'butt',
                                        borderDash: [],
                                        borderDashOffset: 0.0,
                                        borderJoinStyle: 'miter',
                                        pointBorderColor: "#94C11F",
                                        pointBackgroundColor: "#fff",
                                        pointBorderWidth: 1,
                                        pointHoverRadius: 5,
                                        pointHoverBackgroundColor: "rgba(75,192,192,1)",
                                        pointHoverBorderColor: "rgba(220,220,220,1)",
                                        pointHoverBorderWidth: 2,
                                        pointRadius: 3,
                                        pointColor: "rgba(148, 193, 31,1)",
                                        pointHitRadius: 10,
                                         data: [15404, 14821, 16062, 16403, 17626, 19575, 22402],
                                        spanGaps: false,
                                    }
                                ]
                        };

                    var optionsSemana = {
                            responsive: true,
                        };

                    var genero = new Chart(ctxsemana, {
                        type: 'line',
                        data: dataSemana,
                        options: optionsSemana
                    });  

                     semanaLoaded = true;
                    }
                    else{
                    return;
                    }
                 });
        /* Semana Linea Fin */

          /* General bar Inicio */
      var generalLoaded = false;
            $(document).on('scroll', function(){      
                var scrollTop = $(window).scrollTop();
                if(scrollTop > 250 && !generalLoaded){
                    var ctxgral = document.getElementById("infogral");

                    var dataGeneral = {
                           labels: ["8 Febrero", "9 Febrero", "10 Febrero", "11 Febrero", "12 Febrero", "13 Febrero", "14 Febrero"],
                    datasets: [
                        {
                            label: "Scans generales",
                            fillColor: "rgba(148, 193, 31,1)",
                            strokeColor: "rgba(148, 193, 31,1)",
                            pointColor: "rgba(148, 193, 31,1)",
                            pointStrokeColor: "#fff",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(220,220,220,1)",
                             data: [1647, 1726, 1168, 785, 634, 1702, 1192],
                            backgroundColor: [
                                    '#0c2756',
                                    '#0c2756',
                                    '#0c2756',
                                    '#0c2756',
                                    '#0c2756',
                                    '#0c2756',
                                    '#0c2756'
                                ],
                        },
                        
                    ]
                        };

                    var optionsGeneral = {
                            responsive: true,
                        };

                    var edad = new Chart(ctxgral, {
                        type: 'bar',
                        data: dataGeneral,
                        options: optionsGeneral
                    });  

                     generalLoaded = true;
                    }
                    else{
                    return;
                    }
                 });
        /* General Bar Fin */

        /* Dona de Genero Inicio */
      var generoLoaded = false;
            $(document).on('scroll', function(){      
                var scrollTop = $(window).scrollTop();
                if(scrollTop > 580 && !generoLoaded){
                    var ctxgenero = document.getElementById("genero");

                    var dataGenero = {
                            labels: ["Masculino", "Femenino"],
                            datasets: [{
                                label: 'Genero',
                                data: [15593, 6809],
                                backgroundColor: [
                                    '#1f5bbd',
                                    '#ff777c',
                                ],
                                borderColor: [
                                    'rgba(200,200,200,1)',
                                    'rgba(200,200,200,1)',
                                    'rgba(200,200,200,1)',
                                    'rgba(200,200,200,1)',
                                ],
                                borderWidth: 1
                            },
                            ]
                        };

                    var optionsGenero = {
                            responsive: true,
                        };

                    var genero = new Chart(ctxgenero, {
                        type: 'doughnut',
                        data: dataGenero,
                        options: optionsGenero
                    });  

                     generoLoaded = true;
                    }
                    else{
                    return;
                    }
                 });
        /* Dona de Genero Fin */

         /* Dona de Edad Inicio */
      var edadLoaded = false;
            $(document).on('scroll', function(){      
                var scrollTop = $(window).scrollTop();
                if(scrollTop > 580 && !edadLoaded){
                    var ctxedad = document.getElementById("edad");

                    var dataEdad = {
                            labels: ["10-19 años", "20-29 años", "30-39 años", "40-60 años"],
                            datasets: [{
                                label: 'Edad',
                                data: [0, 15587, 6816, 0],
                                backgroundColor: [
                                    '#ff6b61',
                                    '#f0a150',
                                    '#b5d36f',
                                    '#143b80',
                                ],
                                borderColor: [
                                    'rgba(200,200,200,1)',
                                    'rgba(200,200,200,1)',
                                    'rgba(200,200,200,1)',
                                    'rgba(200,200,200,1)',
                                ],
                                borderWidth: 1
                            },
                            ]
                        };

                    var optionsEdad = {
                            responsive: true,
                        };

                    var edad = new Chart(ctxedad, {
                        type: 'pie',
                        data: dataEdad,
                        options: optionsEdad
                    });  

                     edadLoaded = true;
                    }
                    else{
                    return;
                    }
                 });
        /* Dona de Edad Fin */

      /* Dona de dispositiv Inicio */
      var disposiLoaded = false;
            $(document).on('scroll', function(){      
                var scrollTop = $(window).scrollTop();
                if(scrollTop > 580 && !disposiLoaded){
                    var ctxdisp = document.getElementById("dispositiv");

                    var dataDispo = {
                            labels: ["Android", "IOS", "Windows"],
                            datasets: [{
                                label: 'Edad',
                                data: [12321, 10081, 0],
                                backgroundColor: [
                                   '#8dbe00',
                                    '#909090',
                                    '#0191f2',
                                ],
                                borderColor: [
                                    'rgba(200,200,200,1)',
                                    'rgba(200,200,200,1)',
                                    'rgba(200,200,200,1)',
                                ],
                                borderWidth: 1
                            },
                            ]
                        };

                    var optionsDispo= {
                            responsive: true,
                        };

                    var disposi = new Chart(ctxdisp, {
                        type: 'pie',
                        data: dataDispo,
                        options: optionsDispo
                    });  

                     disposiLoaded = true;
                    }
                    else{
                    return;
                    }
                 });
        /* Dona de dispositiv Fin */
       
</script>
<!-- end scripts -->
</body>

</html>
