<?php

$date_deb = new DateTime("01-01-2018");
$date_fin = new DateTime("01-01-2036");

while($date_deb <= $date_fin){
    if($date_deb->format("m-d")== "05-01"){
        if($date_deb->format("l")== "Monday" || $date_deb->format("l")== "Saturday"){
            echo  $date_deb->format("l-F-d-Y") . " Vous aurez un Week prolongé <br>"  ;
        }elseif($date_deb->format("l")== "Friday"){
            echo  $date_deb->format("l-F-d-Y") . " Vous aurez la channce d'aller a la mosqué <br>"  ;
        }else{
            echo  $date_deb->format("l-F-d-Y") . " Vous aurez un  seul jour de repos <br>"  ;
        }
    }
        $date_deb->modify("+ 1 day ") ;
}

