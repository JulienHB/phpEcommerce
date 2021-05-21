<?php

function TVA($prix,$taux){
    if (empty($taux)):
        $taux=1.2;
    endif;
    return round(($prix*$taux),2);
}

function PrixTotal($prix,$taux,$qte){
        return round(($prix*$taux*$qte),2);
}

function addBasket($array,$id,$qte){
    global $basket;
    array_push($basket,array('id'=>$id,'designation'=>$array[$id]['designation'],'prixTTC'=>TVA($array[$id]['prixHT'],$array[$id]['TVA']),'qty'=>$qte));
    return $basket;  
}

function AjoutCat($array,$nom,$description,$image){
    array_push($array,array('nom'=>$nom,'Description'=>$description,'image'=>$image)); 
    foreach ($array as $key => $value) {
        $array[$key]['id']="id$key";
    }
    return $array;
}
