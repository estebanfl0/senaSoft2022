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
        <div class="control text-center">
                <input class="form-control" type="number" class="count-down" placeholder="Time In Seconds" min="0">
                <br>
                <button class="btn-count btn btn-light">Start Time</button>
            </div>
         
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
    const count_down = document.querySelector('.count-down')
    const btn_count = document.querySelector('.btn-count')

    btn_count.addEventListener('click', (e) => {
            if (count_down.value.length > 0) {
                let count = count_down.value
                let s_int = setInterval(function() {
                    count--
                    if (count < 0) {
                        clearInterval(s_int)
                        alert('Time is over')
                    } else {
                        count_down.value = count
                    }
                    
                },1000)
                
            }else{
                alert('Plase, enter time in seconds')
            }
        })

</script>
</html>