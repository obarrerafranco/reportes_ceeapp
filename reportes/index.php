<?php 
require '../registros/db.php';
$clies = $_POST["client"];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <input type="hidden" name="id_cli" value="<?php echo $clies; ?>" id="id_cli">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="obarrerafranco">
    <link rel="shortcut icon" href="../img/plataforma/favicon.jpeg">
    <meta name="robots" content="noindex">

    <title>Listado de Clientes</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/ceeapp.css" rel="stylesheet">


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

    <script src="../js/device.min.js"></script>
    <script src="../js/modernizr.custom.js"></script>

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
            <div class="navbar-header page-scroll2">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar" ></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="nav navbar-brand page-scroll2" href="#page-top"><img class="monitor" src="../img/plataforma/logo.png"></a>
            </div>
            <!-- /.navbar-collapse -->
             <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <div class="navbar-nav navbar-left">
              <select class="form-control input-md" id="id_sem" name="id_sem" >
                <option id="blanco"></option>
                <?php 
                   $seman = 'SELECT wk.id as id, wk.semana as semana, wk.year as year, cp.id_cliente as id_cliente FROM semanas wk
                    INNER JOIN reportes_clientes rp ON rp.id_semana = wk.id 
                    INNER JOIN campanas cp ON cp.id = rp.id_campana
                    WHERE wk.estatus = 1 AND cp.id_cliente =';
                    $seman .= $clies;
                    $seman .= ' GROUP BY wk.id ORDER BY wk.id DESC';
                    foreach ($PDO->query($seman) as $wee1) {

                        echo '<option value="'.$wee1['id'].'">'.$wee1['semana'].'-'.$wee1['year'].'</option>';

                    }
                    ?>
              </select>
            </div>
                <ul class="nav navbar-nav navbar-right" id="meniindi">
                   <!--Contenido del menu-->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header style="background-image: url('../img/headers/hd_jcdecaux.jpg');">
        <div class="container">
            <div class="intro-text">
                <div class="shadow intro-lead-in text-right">Bienvenidos a<br /> Los reportes<br />Semanales</div>
                <div class="shadow intro-heading text-right">Campañas Cee APP</div>
            </div>
        </div>
        <div class="opacity"></div>
    </header>
    <!-- SECCION RESUMEN DINAMICO INICIO-->

    <div id="secciones" >
        <section class="section-heading">
          <div class="container" id="bienvenida">
            <h2 style="text-align:center">Campañas<br /> Selecciona una Semana para iniciar</h2>
            <img class="img-responsive" src="../img/plataforma/ceeapp.png">
          </div>
      </section>
    </div>
    <!-- SECCION RESUMEN DINAMICO FIN-->
  

    <!-- FOOTER INICIAL -->
    <footer class="footter">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
               <img alt="JCdecaux" title="JCdecaux" src="../img/plataforma/jcdecaux_footer.png">
               <a href="http://www.ceeplatform.com" target="_blank"><img alt="CEE APP" title="CEE APP"  src="../img/plataforma/ceelogo_footer.png"></a>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </footer>
    <!-- FOOTER FINAL -->

    <!-- jQuery Version 1.11.0 -->
    <script src="../js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../js/classie.js"></script>
    <script src="../js/cbpAnimatedHeader.js"></script>


    <!-- Custom Theme JavaScript -->
    <script src="../js/agency.js"></script>


    <script src="../js/jquery.easing.1.3.js"></script>
    <!-- IE -->
    <script src="../js/modernizr.custom.js"></script>

    <!-- JS responsible for hover in touch devices -->
    <script src="../js/jquery.hoverIntent.js"></script>

    <!-- Detects when a element is on wiewport -->
    <script src="../js/jquery.appear.js"></script>

    <!-- Count to plugin -->
    <script src="../js/jquery.countTo.js"></script>

    <script type="text/javascript">
      $(document).ready(inicio);

      function inicio(){
        $("#id_sem").change(mostrarSem);
        }
      function mostrarSem (){
        var id_wks = $("#id_sem").val();
        var id_cl= $("#id_cli").val();

       $.ajax({
            url: "http://localhost:8081/cee_report/ajax/plantilla_j.php",
            method: "POST",
            data: {id_sem:id_wks,id_cli:id_cl} ,
            success: function(logos) {
              $('#secciones').html("");
              $('#secciones').html(logos);
              $('#blanco').hide();
            },
            error: function(logos) {
              console.log(logos);
            }
          });
     }
     function enviar (id){
        $("#a"+id).submit();
      }
      
    </script>


<!-- end scripts -->
</body>

</html>
