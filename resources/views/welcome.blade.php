<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Iñigo Perez">

  <title>Banco del tiempo</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/small-business.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="{{route('welcome')}}">Banco del tiempo</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
          <div id="Login">
            <form action="" method="">
                <label class="infoForm">Username:</label><br>
                <input class="datosLogin" type="text" name="username"><br>
                <label class="infoForm">Password:</label><br>
                <input class="datosLogin" type="password" name="password"><br><br>
                <input type="button" name="iniciarSesion" value="inicar sesion">
                <input type="button" name="registrarse" value="Registrarse">
            </form>
          </div>
          <div id="BotonLogin">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" >Login/Registro
                    <span class="sr-only">(current)</span>
                    </a>
                </li>
          </div>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <!-- Heading Row -->
    <div class="row align-items-center my-5">
      <div class="col-lg-7">
        <img id="imgGen" class="img-fluid rounded mb-4 mb-lg-0" src="img/imagen.png" alt="trueque">
      </div>
      <!-- /.col-lg-8 -->
      <div class="col-lg-5">
        <h1 class="font-weight-light">Banco del tiempo</h1>
        <p>Lo que estamos buscando con esta empresa es una comunidad sana donde la gente que participe en ella se dedique hacer truque de su tiempo a cambio del tiempo de otro usuario SIN necesidad de usar ningun tipo de DINERO.</p>
        <a class="btn btn-primary" href="#">Seguir leyendo!</a>
      </div>
      <!-- /.col-md-4 -->
    </div>
    <!-- /.row -->

    <!-- Call to Action Well -->
    <div class="card text-white bg-secondary my-5 py-4 text-center">
      <div class="card-body">
        <p id="importante" class="text-white m-0">En nuestra comunidad el usuario tendra tres servicios para interaccionar.</p>
      </div>
    </div>

    <!-- Content Row -->
    <div class="row">
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">Trabajador</h2>
            <p class="card-text">El usuario podrá ofrecer sus servicios para que otros usuarios se veneficien de ello, a cambio de tiempo.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary btn-sm">Leer más</a>
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">Cliente</h2>
            <p class="card-text">El usuario podrá contratar a un trabajador para obtener conocimientos o su servicio del trabajador.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary btn-sm">Leer más</a>
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">Blog</h2>
            <p class="card-text">En esta todos los usuarios podrán participar en un blog para itercambiar conocimientos sin necesidad de contratar a nadie.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary btn-sm">Leer más</a>
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
        <div id="contacta">
            <form action="{{route('insertarComentario')}}" method="post">
                @csrf
                <label class="infoForm">Nombre :</label>&nbsp;&nbsp;
                <input type="text" name="Nombre"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <label class="infoForm">Email :</label>&nbsp;&nbsp;
                <input type="email" name="Email"/><br><br>
                <label class="infoForm">Comentario :</label>
                <textarea name="Comentario" rows="5" cols="50">Escribe tu comentario</textarea>&nbsp;&nbsp;
                <input type="submit" value="Enviar"/><br>
            </form>
        </div>
      <p class="m-0 text-right text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript">
    function mostrar(){
        let divcontacto = document.getElementById("contacta").style.display;
        const oculto = none;
        if (divcontacto === oculto){
            document.getElementById("contacta").style.display = 'block';
        }
        else{
            document.getElementById("contacta").style.display = 'none';
        }
    }
  </script>

</body>

</html>
