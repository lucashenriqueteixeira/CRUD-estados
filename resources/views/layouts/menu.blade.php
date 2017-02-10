<!DOCTYPE html>
<html>
<head>
  @yield("head")

  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

  <script type="text/javascript" src="js/jquery3.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

  <title>@yield("title")</title>
</head>
<body>
<!-- MENU -->
<div class="container">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">CRUD</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home">Home</a></li>
      <li><a href="cadastro">Cadastro Estados</a></li>
    </ul>

    <ul class="nav navbar-nav navbar-right">
      @if(!Auth::check())
      <li><a href="{{ url('/login') }}"><span class="glyphicon glyphicon-user"></span>login</a></li>
      @endif
      <li><a>Usuario: {{  Auth::user()->name }}</a></li>
      <li><a href="{{ url('/registeruser') }}"><span class="glyphicon glyphicon-user"></span>cadastro</a></li>
      <li><a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span class="glyphicon glyphicon-log-in"></span>Sair</a></li>
    </ul>


<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
  {{ csrf_field() }}
</form>

  </div>
</nav>
<!-- //MENU// -->
@yield("body")
</div>
</body>
</html>