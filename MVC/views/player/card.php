<?php
    require_once("config/parameters.php");
    require_once("views/layouts/header.php");
    require_once("controllers/cardscontroller.php");
    $ctrcards = new cardscontroller();
    $cards= $ctrcards->getAllCards();
    $array = $cards[1];
    $image= $array->image;
// var_dump($array->image);
?>   
    <style>
       div.card{
        background: url('public/images/card/<?= $image?>') no-repeat ;
        width: 150px;
        height: 230px;
    }
    div.atributtes{
        margin-top: 50px;
        width: 100px;
    }
    </style>
    <title>Cards</title>
</head>

<body>
    <div class="text-start container card">
        <div class="row">
            <div class="first col-4">
                <div class="atributtes row mx-1" >
                    <div class="atributte 2">
                        <p class="text-primary" style="color: white;position: relative;right: 3px; top: -2px;;font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; font-size:8px;"><?php echo $array->strength ?></p>
                    </div>
                    <div class="atributte 3">
                        <p class="text-primary" style="color: white;position: relative;right: 3px; top: -2px;;font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; font-size:8px;"><?php echo $array->speed ?></p>
                    </div>
                    <divclass="atributte 4">
                        <p class="text-primary" style="color: white;position: relative;right: 3px; top: -2px;;font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; font-size:8px;"><?php echo $array->defense ?></p>
                    </divclass=>
                    <div class="atributte 5">
                        <p class="text-primary" style="color: white;position: relative;right: 3px; top: -2px;font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; font-size:8px;"><?php echo $array->brain ?></p>
                    </div>
                    <div class="atributte 5">
                        <p class="text-primary" style="color: white;position: relative;right: -90px; top: 5px;font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; font-size:8px;"><?php echo $array->maxPower ?></p>
                    </div>
                </div>
            </div>
            <div class="second col-8">

            </div>
        </div>
        <div class="div row">
            <div class="col">
                <div class="description border-none" style="width: 100%; height: 30%; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-weight: 100;">
                  <button class="btn  dropdown-toggle my-2" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="position: relative;width: 95%; height: 27px; left: 3px; top: -17px;">
                    <h6>Description </h6>
                  </button>
                  <ul class="dropdown-menu">
                    <li><?php echo $array->description ?></li>
                    
                  </ul>
                </div>
            </div>
        </div>
        <form action="<?=base_url?>?controller=player&action=index" class="mx-4" method="post">
              <input type="submit" class="btn btn-dark" value="Cards">
              <hr style="width: 100%;">
            </form>
    </div>    
</body>
<script src="public/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
</script>
</html>