<!-- <?php
    require_once("../config/parameters.php");
    require_once("../views/layouts/header.php");
    require_once("../controllers/cardscontroller.php");
    $ctrcards = new cardscontroller();
    $cards= $ctrcards->getAllCards();
    var_dump($cards);
?>    -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Extensiones bootstrap y css -->
    <link rel="stylesheet" href="../public/css/cardsT.css">
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- Icono de la pagina -->
    <link rel="icon" href="../public/images/icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <style>
    </style>
    <title>Cards</title>
</head>

<body>
    <div class="container-sm border border-2 border-dark">
        <form action="#" id="countCards" method="get">
            <input type="number" value="<?php $_REQUEST['numPlayers']?>">

            <select name="selectCard" id="Select">
                
            </select>
        </form>
    </div>
</body>
<script src="../../public/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    const form = document.getElementById('countCards').value
    for (let index = 0; index < form; index++) {
          
          if (index == (cod-1)) {
           
        }
    }
</script>
</html>