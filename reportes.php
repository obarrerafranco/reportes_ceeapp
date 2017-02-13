<?php require "login/loginheader.php"; ?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="obarrerafranco">
    <link rel="shortcut icon" href="img/plataforma/favicon.jpeg">
    <meta name="robots" content="noindex">

    <title>Listado de Clientes</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/ceeapp.css" rel="stylesheet">


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

    <script src="js/device.min.js"></script>
    <script src="js/modernizr.custom.js"></script>

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
                <a class="navbar-brand page-scroll2" href="#page-top"><img class="monitor" src="img/plataforma/logo.png"><h4 class="logo-txt">CEE APP</h4></a>
            </div>
            <!-- /.navbar-collapse -->
             <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll2" href="#a">A</a>
                    </li>
                    <li>
                        <a class="page-scroll2" href="#b">B</a>
                    </li>
                    <li>
                        <a class="page-scroll2" href="#c">C</a>
                    </li>
                    <li>
                        <a class="page-scroll2" href="#d">D</a>
                    </li>
                    <li>
                        <a class="page-scroll2" href="#e">E</a>
                    </li>
                      <li>
                        <a class="page-scroll2" href="#f">F</a>
                    </li>
                      <li>
                        <a class="page-scroll2" href="#g">G</a>
                    </li>
                      <li>
                        <a class="page-scroll2" href="#h">H</a>
                    </li>
                      <li>
                        <a class="page-scroll2" href="#i">I</a>
                    </li>
                      <li>
                        <a class="page-scroll2" href="#j">J</a>
                    </li>
                      <li>
                        <a class="page-scroll2" href="#k">K</a>
                    </li>
                      <li>
                        <a class="page-scroll2" href="#l">L</a>
                    </li>
                      <li>
                        <a class="page-scroll2" href="#m">M</a>
                    </li>
                      <li>
                        <a class="page-scroll2" href="#n">N</a>
                    </li>
                      <li>
                        <a class="page-scroll2" href="#o">O</a>
                    </li>
                      <li>
                        <a class="page-scroll2" href="#p">P</a>
                    </li>
                      <li>
                        <a class="page-scroll2" href="#q">Q</a>
                    </li>
                      <li>
                        <a class="page-scroll2" href="#r">R</a>
                    </li>
                      <li>
                        <a class="page-scroll2" href="#s">S</a>
                    </li>
                      <li>
                        <a class="page-scroll2" href="#t">T</a>
                    </li>
                      <li>
                        <a class="page-scroll2" href="#u">E</a>
                    </li>
                      <li>
                        <a class="page-scroll2" href="#v">V</a>
                    </li>
                      <li>
                        <a class="page-scroll2" href="#w">W</a>
                    </li>
                      <li>
                        <a class="page-scroll2" href="#x">X</a>
                    </li>
                      <li>
                        <a class="page-scroll2" href="#y">Y</a>
                    </li>
                      <li>
                        <a class="page-scroll2" href="#z">Z</a>
                    </li>
                    <li>
                        <a class="page-scroll2" href="login/logout.php">Salir</a>
                    </li>  
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header style="background-image: url(img/headers/imagen-min.png);">
        <div class="container">
            <div class="intro-text">
                <div class="shadow intro-lead-in text-right">Bienvenidos a<br /> Los reportes<br />Semanales</div>
                <div class="shadow intro-heading text-right">Cee APP</div>
            </div>
        </div>
        <div class="opacity"></div>
    </header>

    <!-- SECCION RESUMEN-->

   <section id="a">      
       <div class="container">
          <div><h2 class="section-heading">A</h2></div><br /> 
          <div class="row">
            <div class="col-6 col-sm-3">
              <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
            <div class="col-6 col-sm-3">
             <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
             <div class="col-6 col-sm-3">
              <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
              </div>
               <div class="col-6 col-sm-3">
                <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
          </div>
      </div>
   </section>
   <hr />
   <section id="b">      
       <div class="container">
          <div><h2 class="section-heading">B</h2></div><br /> 
          <div class="row">
            <div class="col-6 col-sm-3">
              <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
            <div class="col-6 col-sm-3">
             <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
             <div class="col-6 col-sm-3">
              <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
              </div>
               <div class="col-6 col-sm-3">
                <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
          </div>
      </div>
   </section>
   <hr />
   <section id="c">      
       <div class="container">
          <div><h2 class="section-heading">C</h2></div><br /> 
          <div class="row">
            <div class="col-6 col-sm-3">
              <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
            <div class="col-6 col-sm-3">
             <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
             <div class="col-6 col-sm-3">
              <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
              </div>
               <div class="col-6 col-sm-3">
                <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
          </div>
      </div>
   </section>
   <hr />
   <section id="d">      
       <div class="container">
          <div><h2 class="section-heading">D</h2></div><br /> 
          <div class="row">
            <div class="col-6 col-sm-3">
              <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
            <div class="col-6 col-sm-3">
             <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
             <div class="col-6 col-sm-3">
              <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
              </div>
               <div class="col-6 col-sm-3">
                <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
          </div>
      </div>
   </section>
   <hr />
   <section id="e">      
       <div class="container">
          <div><h2 class="section-heading">E</h2></div><br /> 
          <div class="row">
            <div class="col-6 col-sm-3">
              <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
            <div class="col-6 col-sm-3">
             <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
             <div class="col-6 col-sm-3">
              <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
              </div>
               <div class="col-6 col-sm-3">
                <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
          </div>
      </div>
   </section>
   <hr />
   <section id="f">      
       <div class="container">
          <div><h2 class="section-heading">F</h2></div><br /> 
          <div class="row">
            <div class="col-6 col-sm-3">
              <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
            <div class="col-6 col-sm-3">
             <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
             <div class="col-6 col-sm-3">
              <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
              </div>
               <div class="col-6 col-sm-3">
                <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
          </div>
      </div>
   </section>
   <hr />
   <section id="g">      
       <div class="container">
          <div><h2 class="section-heading">G</h2></div><br /> 
          <div class="row">
            <div class="col-6 col-sm-3">
              <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
            <div class="col-6 col-sm-3">
             <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
             <div class="col-6 col-sm-3">
              <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
              </div>
               <div class="col-6 col-sm-3">
                <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
          </div>
      </div>
   </section>
   <hr />
   <section id="h">      
       <div class="container">
          <div><h2 class="section-heading">H</h2></div><br /> 
          <div class="row">
            <div class="col-6 col-sm-3">
              <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
            <div class="col-6 col-sm-3">
             <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
             <div class="col-6 col-sm-3">
              <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
              </div>
               <div class="col-6 col-sm-3">
                <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
          </div>
      </div>
   </section>
   <hr />
   <section id="i">      
       <div class="container">
          <div><h2 class="section-heading">I</h2></div><br /> 
          <div class="row">
            <div class="col-6 col-sm-3">
              <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
            <div class="col-6 col-sm-3">
             <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
             <div class="col-6 col-sm-3">
              <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
              </div>
               <div class="col-6 col-sm-3">
                <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
          </div>
      </div>
   </section>
   <hr />
   <section id="j">      
       <div class="container">
          <div><h2 class="section-heading">J</h2></div><br /> 
          <div class="row">
            <div class="col-6 col-sm-3">
              <div class="text-center">
                <a href="reportes/jcdecaux/"><img src="img/logos/jcdecaux.jpg"></a>
                <h2 class="text-center"><a href="reportes/jcdecaux/">JcDecaux</a></h2>
              </div>
            </div>
            <div class="col-6 col-sm-3">
             <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
             <div class="col-6 col-sm-3">
              <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
            </div>
            </div>
               <div class="col-6 col-sm-3">
                <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
          </div>
      </div>
   </section>
   <hr />
   <section id="k">      
       <div class="container">
          <div><h2 class="section-heading">K</h2></div><br /> 
          <div class="row">
            <div class="col-6 col-sm-3">
              <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
            <div class="col-6 col-sm-3">
             <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
             <div class="col-6 col-sm-3">
              <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
            </div>
            </div>
             <div class="col-6 col-sm-3">
              <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
          </div>
      </div>
   </section>
   <hr />
   <section id="l">      
       <div class="container">
          <div><h2 class="section-heading">L</h2></div><br /> 
          <div class="row">
            <div class="col-6 col-sm-3">
              <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
            <div class="col-6 col-sm-3">
             <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
             <div class="col-6 col-sm-3">
              <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
              </div>
               <div class="col-6 col-sm-3">
                <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
          </div>
      </div>
   </section>
   <hr />
   <section id="m">      
       <div class="container">
          <div><h2 class="section-heading">M</h2></div><br /> 
          <div class="row">
            <div class="col-6 col-sm-3">
              <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
            <div class="col-6 col-sm-3">
             <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
             <div class="col-6 col-sm-3">
              <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
              </div>
               <div class="col-6 col-sm-3">
                <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
          </div>
      </div>
   </section>
   <hr />
   <section id="n">      
       <div class="container">
          <div><h2 class="section-heading">N</h2></div><br /> 
          <div class="row">
            <div class="col-6 col-sm-3">
              <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
            <div class="col-6 col-sm-3">
             <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
             <div class="col-6 col-sm-3">
              <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
            </div>
            </div>
             <div class="col-6 col-sm-3">
              <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
          </div>
      </div>
   </section>
   <hr />
   <section id="o">      
       <div class="container">
          <div><h2 class="section-heading">O</h2></div><br /> 
          <div class="row">
            <div class="col-6 col-sm-3">
              <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
            <div class="col-6 col-sm-3">
             <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
             <div class="col-6 col-sm-3">
              <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
              </div>
               <div class="col-6 col-sm-3">
                <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
          </div>
      </div>
   </section>
   <hr />
   <section id="p">      
       <div class="container">
          <div><h2 class="section-heading">P</h2></div><br /> 
          <div class="row">
            <div class="col-6 col-sm-3">
              <div class="text-center">
                <a href="reportes/pegastic/"><img src="img/logos/pegastic.jpg"></a>
                <h2 class="text-center"><a href="reportes/pegastic/">Pega Stic</a></h2>
              </div>
            </div>
            <div class="col-6 col-sm-3">
             <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
             <div class="col-6 col-sm-3">
              <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
              </div>
               <div class="col-6 col-sm-3">
                <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
          </div>
      </div>
   </section>
   <hr />
   <section id="q">      
       <div class="container">
          <div><h2 class="section-heading">Q</h2></div><br /> 
          <div class="row">
            <div class="col-6 col-sm-3">
              <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
            <div class="col-6 col-sm-3">
             <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
             <div class="col-6 col-sm-3">
              <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
              </div>
             <div class="col-6 col-sm-3">
              <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
          </div>
      </div>
   </section>
   <hr />
   <section id="r">      
       <div class="container">
          <div><h2 class="section-heading">R</h2></div><br /> 
          <div class="row">
            <div class="col-6 col-sm-3">
              <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
            <div class="col-6 col-sm-3">
             <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
             <div class="col-6 col-sm-3">
              <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
              </div>
               <div class="col-6 col-sm-3">
                <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
          </div>
      </div>
   </section>
   <hr />
   <section id="s">      
       <div class="container">
          <div><h2 class="section-heading">S</h2></div><br /> 
          <div class="row">
            <div class="col-6 col-sm-3">
              <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
            <div class="col-6 col-sm-3">
             <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
             <div class="col-6 col-sm-3">
              <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
              </div>
               <div class="col-6 col-sm-3">
                <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
          </div>
      </div>
   </section>
   <hr />
   <section id="t">      
       <div class="container">
          <div><h2 class="section-heading">T</h2></div><br /> 
          <div class="row">
            <div class="col-6 col-sm-3">
              <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
            <div class="col-6 col-sm-3">
             <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
             <div class="col-6 col-sm-3">
              <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
              </div>
             <div class="col-6 col-sm-3">
              <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
          </div>
      </div>
   </section>
   <hr />
   <section id="u">      
       <div class="container">
          <div><h2 class="section-heading">U</h2></div><br /> 
          <div class="row">
            <div class="col-6 col-sm-3">
              <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
            <div class="col-6 col-sm-3">
             <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
             <div class="col-6 col-sm-3">
              <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
              </div>
               <div class="col-6 col-sm-3">
                <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
          </div>
      </div>
   </section>
   <hr />
   <section id="v">      
       <div class="container">
          <div><h2 class="section-heading">V</h2></div><br /> 
          <div class="row">
            <div class="col-6 col-sm-3">
              <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
            <div class="col-6 col-sm-3">
             <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
             <div class="col-6 col-sm-3">
              <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
              </div>
               <div class="col-6 col-sm-3">
                <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
          </div>
      </div>
   </section>
   <hr />
   <section id="w">      
       <div class="container">
          <div><h2 class="section-heading">W</h2></div><br /> 
          <div class="row">
            <div class="col-6 col-sm-3">
              <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
            <div class="col-6 col-sm-3">
             <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
             <div class="col-6 col-sm-3">
              <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
              </div>
               <div class="col-6 col-sm-3">
                <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
          </div>
      </div>
   </section>
   <hr />
   <section id="x">      
       <div class="container">
          <div><h2 class="section-heading">X</h2></div><br /> 
          <div class="row">
            <div class="col-6 col-sm-3">
              <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
            <div class="col-6 col-sm-3">
             <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
             <div class="col-6 col-sm-3">
              <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
              </div>
               <div class="col-6 col-sm-3">
                <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
          </div>
      </div>
   </section>
   <hr />
   <section id="y">      
       <div class="container">
          <div><h2 class="section-heading">Y</h2></div><br /> 
          <div class="row">
            <div class="col-6 col-sm-3">
              <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
            <div class="col-6 col-sm-3">
             <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
             <div class="col-6 col-sm-3">
              <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
              </div>
             <div class="col-6 col-sm-3">
              <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
          </div>
      </div>
   </section>
   <hr />
   <section id="z">      
       <div class="container">
          <div><h2 class="section-heading">Z</h2></div><br /> 
          <div class="row">
            <div class="col-6 col-sm-3">
              <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
            <div class="col-6 col-sm-3">
             <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
             <div class="col-6 col-sm-3">
              <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
              </div>
               <div class="col-6 col-sm-3">
                <div class="text-center">
                <a href="#"><img src="img/logos/olx.jpg"></a>
                <h2 class="text-center"><a href="#">OLX</a></h2>
              </div>
            </div>
          </div>
      </div>
   </section>
  
    <!-- IMG FINAL -->
    <footer class="footter">
        <div class="row">
            <div class="col-sm-3"><img alt="JCdecaux" title="JCdecaux" src="img/plataforma/jcdecaux_footer.png"></div>
            <div class="col-sm-6"></div>
            <div class="col-sm-3">
              <div class="row">
                <div class="col-md-3 push-md-9"><a href="http://www.ceeplatform.com" target="_blank"><img alt="CEE APP" title="CEE APP"  src="img/plataforma/ceelogo_footer.png"></a></div>
                <div class="col-md-9 pull-md-3 copyr">Tel: +57-357.6575 / Cel: +57-301.653.1567 <br />  +57-313.888.3160</div>
              </div>
            </div>
        </div>
    </footer>
    <!-- FIN IMG FINAL -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>


    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>


    <script src="js/jquery.easing.1.3.js"></script>
    <!-- IE -->
    <script src="js/modernizr.custom.js"></script>

    <!-- JS responsible for hover in touch devices -->
    <script src="js/jquery.hoverIntent.js"></script>

    <!-- Detects when a element is on wiewport -->
    <script src="js/jquery.appear.js"></script>

    <!-- Count to plugin -->
    <script src="js/jquery.countTo.js"></script>


<!-- end scripts -->
</body>

</html>