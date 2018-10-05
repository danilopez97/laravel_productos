<!DOCTYPE html>
<html>
<head>
	<title>Sistema Productos</title>
	<link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.css') }}">
	<script type="text/javascript" src="{{ url('js/jquery-3.2.1.js') }}" ></script>
	<script type="text/javascript" src="{{ url('js/bootstrap.js') }}" ></script>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{url ('/home')}}">Sistema Productos</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        

      <li><a href="{{url ('/producto/create')}}">Agregar Producto</a></li>
      <li><a href="{{url ('/tipo/create')}}">Agregar Tipo de Producto</a></li>
       <li><a href="{{url ('/mostrartipo')}}">Listado Tipo de productos</a></li>
     
       
   
    </div>
  </div>
</nav>