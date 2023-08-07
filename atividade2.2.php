<?php

$vetor = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
foreach($vetor as &$item){
    $item++;
}
foreach ($vetor as $item){
    echo $item . " " ;
}