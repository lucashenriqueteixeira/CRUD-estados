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
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Cadastro Usuarios</a></li>
      <li><a href="#">Cadastro Estados</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>
<!-- //MENU// -->
@yield("body")
</div>
</body>
</html>