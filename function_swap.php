<?php

$la = $argv;
array_shift($la);
$lb = array();
$c;
$argc;
$res;

function sa($la){
    // échange les positions des 2 premiers éléments de LA
    // et rien ne se produit s’il n’y a pas assez d’éléments
    global $la;
    global $argc;
    if(count($la) >= 2){
        $c = $la[0];
        $la[0] = $la[1];
        $la[1] = $c;
    }
}
function sb($lb){
    global $lb;
    global $argc;
    if(count($lb) >= 2){
        $c = $lb[0];
        $lb[0] = $lb[1];
        $lb[1] = $c;
    }
}
function sc($la, $lb){
    //sa et sb en même temps
    global $la;
    global $lb;
    $la = sa($la);
    $lb = sb($lb);
}
function pa($la, $lb){
    // prend le premier élément de lb et le place à la première position de LA 
    // et rien ne se produit si lb est vide
    global $la;
    global $lb;
    if(!empty($lb)){
        $c = array_shift($lb);
        array_unshift($la, $c);
    }
}
function pb($la, $lb){
    global $la;
    global $lb;
    if(!empty($la)){
        $c = array_shift($la);
        array_unshift($lb, $c);
    }
}
function ra($la){
    // rotation : le premier élément de 'la' devient le dernier
    $c = array_shift($la);
    array_push($la, $c);
}
function rb($lb){
    $c = array_shift($lb);
    array_push($lb, $c);
    return $lb;
}
function rr($la, $lb){
    // ra et rb en même temps
    ra($la);
    rb($lb);
}
function rra($la){
    // rotation : le dernier élément de 'la' devient le premier
    $c = array_pop($la);
    array_unshift($la, $c);
}
function rrb($lb){
    $c = array_pop($lb);
    array_unshift($lb, $c);
}
function rrr($la, $lb){
    rra($la);
    rrb($lb);
}
?>