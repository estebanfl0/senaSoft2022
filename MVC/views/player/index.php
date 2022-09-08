<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Extensiones bootstrap y css -->
    <link rel="stylesheet" href="<?=base_url?>public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url?>public/css/player.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- Icono de la pagina -->
    <link rel="icon" href="<?=base_url?>public/images/icon.png">
    <title>Index</title>
</head>
<!-- Barra de navegación de la cabecera -->
<nav class="navbar navbar-expand-lg bg-dark ">
    <div class="container-fluid">
      <div class="col">
        <a class="navbar-brand text-success" href="#">Super Stars Battle Card</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      </div>
      <div class="col collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-success" aria-current="page" href="#">Lobby || Game</a>
          </li>
         
        </ul>
        <form class="d-flex" role="search">
          <button class="btn btn-outline-success" type="submit">Start Game</button>
        </form>
      </div>
    </div>
  </nav>
  <!-- cuerpo de la pagina con el formulario para ingresar jugadores y numero de jugadores -->
<body>
    <div class="container-sm border border-dark my-5 rounded" style="background-color: rgba(255, 255, 255, 0.651);">
        <h1 class="text-center" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Lobby</h1>
        <div class="row">
            <h3 class="text-center"  style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Choose the number of players</h3>
            
        </div>
        <div class="row text-center ">
            <form action="<?=base_url?>?controller=player&action=placeGame" method="post" > 
              <!-- elegir cantidad de jugadores -->
                <select  name="number" id="number" style="width: 25%;" onchange="ShowSelected();">
                    <option value=""></option>
                    <option value="2">  Two</option>
                    <option value="3">  Three</option>
                    <option value="4">  Four</option>
                    <option value="5">  Five</option>
                    <option value="6">  Six</option>
                    <option value="7">  Seven</option>
                </select>
                <br>
                <hr style="width: 100%;">
            </form>
            <form action="<?=base_url?>?controller=player&action=templateCard" method="post">
              <input type="submit" class="btn btn-dark" value="Cards">
              <hr style="width: 100%;">
            </form>
            <!-- espacio para insertar la cantidad de inputs -->
            <div class="row" id="names">
              
            </div>
        </div>
        
    </div>
    
</body>
<script src="../../public/js/bootstrap.min.js"></script>
<script>
  var vari 
  // función para imprimir los espacios de nombre-jugador
    function ShowSelected(){
    /* Para obtener el valor */
    vari = false
    if (vari == false) {
      var cod = document.getElementById("number").value;
      console.log(cod)
      const div = document.getElementById("names")
      /* Para obtener el texto */
      var combo = document.getElementById("number");
      for (let index = 0; index < cod; index++) {
          div.innerHTML += `<h4>Player ${index+1}</h4>`
          div.innerHTML +=`<input class="text my-2" type="text" name=player${index} placeholder="Name"  style="width: 25%; " required> </input>`
          div.innerHTML += "<hr>"
          if (index == (cod-1)) {
            div.innerHTML += `<form action="<?=base_url?>index.php/?controller=player&action=placeGame" method="post" style="margin-bottom: 10px;">
                  <input type="submit" class="btn btn-success by-4">
                </form>`
            div.innerHTML += `
                  <input type="hidden" name="numPlayers" value="${cod}">
                `
                document.getElementById('number').disabled = true;
        }
    }
    vari = true
    } else {
      div.innerHTML =""
    }
    console.log(cod)
}

</script>
</html>