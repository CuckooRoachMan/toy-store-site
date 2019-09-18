<?php
  $hide=true;
 ?>


<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>DesignerToys</title>

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500&display=swap" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  </head>
<!-- Navigation -->


<body>
  <nav class="navbar navbar-expand-lg navbar-dark  fixed-top">
    <div class="container">
      <a class="navbar-brand" href="/"><h4>DesignerToys</h4></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="/">
              <i class="material-icons">
                storefront
              </i>
              Tienda
            </a>
          </li>
          <li class="nav-item">
            <a href="/login" class="nav-link" href="#">
              <i class="material-icons">
                account_circle
              </i>
              Administrador
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="row">
    <div class="col-2 text-center" id="sidebar">
      <h3>Catalogo</h3>
      <hr><br>
      <form class="form-inline md-form form-sm mt-0">
        <i class="material-icons">search</i>
        <input class="form-control form-control-sm ml-1 w-75" type="text" placeholder="Search"
        aria-label="Search">
      </form>
      <h5>Juguetes</h5>
      <h5>Peluches</h5>
      <h5>Libros</h5>
      <br>
        <form class="" action="/addproduct/" method="get">
          <button class="btn btn-outline-light" type="submit" name="button" id="btnAgregar">
            <i class="material-icons">
              add_circle_outline
            </i>
            Agregar Producto
          </button>
        </form>





    </div>
    <div class="col-10">
      @yield('content')
    </div>

  </div>

<script type="text/javascript" src="{{ asset('js/app.js') }}">
        document.getElementById("btnAgregar").style.display = "none";
</script>
</body>
</html>
