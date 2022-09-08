<?php
    require_once("../config/parameters.php");
    require_once("../views/layouts/header.php");
    require_once("../controllers/cardscontroller.php");
    $ctrcards = new cardscontroller();
    $cards= $ctrcards->getAllCards();
    $array = $cards[0];

    var_dump($array);
?>   
    <style>
       div.container{
        background: url('../public/images/cards/<?php $array[8]?>');
    }
    </style>
    <title>Cards</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="first col-4">
                <div class="atributtes row mx-1">
                    <div class="atributte 2">
                        <p  style="color: white;position: relative;right: 3px; top: -2px;;font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; font-size:15px;"><?php echo $cards[0]->strength ?></p>
                    </div>
                    <div class="atributte 3">
                        <p  style="color: white;position: relative;right: 3px; top: -2px;;font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; font-size:15px;">11</p>
                    </div>
                    <div class="atributte 4">
                        <p  style="color: white;position: relative;right: 3px; top: -2px;;font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; font-size:15px;">11</p>
                    </div>
                    <div class="atributte 5">
                        <p  style="color: white;position: relative;right: 3px; top: -2px;font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; font-size:15px;">11</p>
                    </div>
                </div>
            </div>
            <div class="second col-8">

            </div>
        </div>
        <div class="div row">
            <div class="col">
                <div class=" my-2" style="width: 100%; height: 30%; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-weight: 100;">
                  <button class="btn  dropdown-toggle my-2" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="position: relative;width: 95%; height: 27px; left: 3px; top: 5px;">
                    <h6>Description </h6>
                  </button>
                  <ul class="dropdown-menu">
                    <li><button class="dropdown-item" type="button">Action</button></li>
                    <li><button class="dropdown-item" type="button">Another action</button></li>
                    <li><button class="dropdown-item" type="button">Something else here</button></li>
                  </ul>
                </div>
            </div>
        </div>
    </div>    
</body>
<script src="../../public/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
</script>
</html>