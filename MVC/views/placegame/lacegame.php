<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Extensiones bootstrap y css -->
    <link rel="stylesheet" href="<?=base_url?>public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url?>public/css/place-game.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- Icono de la pagina -->
    <link rel="icon" href="<?=base_url?>public/images/icon.png">
    <title>Place-Game</title>
</head>
<!-- Barra de navegación de la cabecera -->
<nav class="navbar navbar-expand-lg bg-dark border border-light">
    <div class="container-fluid">
      <div class="col">
        <a class="navbar-brand  text-success  rounded" href="#"><button class="btn btn-success">Super Stars Battle Card    </button> </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      </div>
      <div class="col collapse navbar-collapse mx-5" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="tempo nav-link active text-light border border-light rounded my-2 " id="temporizador"aria-current="page" href="#">1800000</a>
          </li>
         
        </ul>
        <form class="d-flex" role="search">
          <button class="btn btn-outline-danger" type="submit">Log Out</button>
        </form>
      </div>
    </div>
  </nav>
  <!-- cuerpo de la pagina con el formulario para ingresar jugadores y numero de jugadores -->
  <div class="container-fluid">
    <div class="row ">
        <div class="col-1">
            <div class="column1 ">
                <div class="player 1"><button class="py1"></button></div>
                <div class="player 3"><button class="py3"></button></div>
                <div class="player 5"><button class="py5"></button></div>
            </div>
        </div>
        <div class="col-10">
            <div class="">
                <div><h1 class="text-light text-center border border-light my-2 mx-5 rounded" style="width: 90%; height: 400px;"></h1></div>
                <div class="column2 player 6 text-center"><button class="py6"></button></div>
            </div>
        </div>
        <div class="column3 col-1 my-5">
            <div class="column3 text-end">
                <div class="player 2"><button class="py2"></button></div>
                <div class="player 4"><button class="py4"></button></div>
                <div class="player 7"><button class="py7"></button></div>
            </div>
        </div>
      </div>
  </div>
<body>
    
</body>
<script src="../../public/js/bootstrap.min.js"></script>
<script>
    function temporizador(id, start, end){
        this.id = id
        this.start = start
        this.end = end
        this.contador = this.start


        this.conteoSegundos = function(){
            if (this.contador == this.end) {
                this.conteoSegundos = null
                return;
            }

            document.getElementById(this.id).innerHTML = this.contador--
            setTimeout(this.conteoSegundos.bind(this), 1000)
        }

    }
    let temporizador = new temporizador('temporizador', 10, 0)
    temporizador.conteoSegundos()

</script>
</html>