<!DOCTYPE html>
<html>
<head>
	<title>Inventario</title>
	<meta name="viewport" content="initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/3/paper/bootstrap.min.css">
</head>
<body style="
  background: radial-gradient(ellipse at bottom, #1b2735 0%, #090a0f 100%);
  height: 100vh;
">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">GESTION</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="<?= site_url() ?>Welcome">Inicio</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Inventario <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?= site_url() ?>Inventario_Controller/catalogo">Catalogo</a></li>
            <li><a href="<?= site_url() ?>Inventario_Controller/existencia">Existencia</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Salir</a></li>
      </ul>
    </div>
  </div>
</nav>