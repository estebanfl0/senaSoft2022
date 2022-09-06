<?php
$arrayCards = array();
$card1 = new card("A1","kratos","Dios de la guerra griego",70,50,45,45,"cardA1.png");
array_push($arrayCards,$card1);

foreach($arrayCards as $cards => $card) {
    $card->save();
}

