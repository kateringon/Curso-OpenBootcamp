<?php

function factorial ($n){
    $fact = 1 ;

        if ($n<1){
            return $fact;
        } else {
            for ($i=1; $i <= $n; $i++){ 
                $fact *= $i;
            }
            return $fact;
        }
}

function potencia ($x,$y){
    $pot = 1; 

    if($y == 0){
        return $pot;
    }
    else {
        for ($i=1; $i <= $y; $i++) { 
            $pot *= $x;
        }
        return $pot;
    }
}

function euler (){
    $e = 0;
    $x = 1;

    for ($i = 0; $i <= 17  ; $i++) { 
        $e += potencia($x,$i) / factorial($i);
    }
    return $e; 
}

function registrarTiempo(){
    for ($i=0; $i < 23; $i++) {
        $arreglo[$i] = rand(45,70); 
        # code...
    }
    return $arreglo;
}

function mostrarTiempo () {
    for ($i=0; $i < 23 ; $i++) { 
        echo  'el arreglo' . $arreglo[$i] . ' | ';
        # code...
    }
}

function promedioTiempo ($arreglo1,$arreglo2){
    for ($i=0; $i < 23; $i++) {
        $arreglo[$i] = ($arreglo1[$i] + $arreglo2[$i]) /2; 
    }
    return $arreglo;
}

function vueltaIdeal ($arreglo1,$arreglo2,$v1d1,$v2d1,$v1d2,$v2d2){
    for ($i=0; $i < 23; $i++) { 
        # code...
        if($arreglo1[$i] < $arreglo2[$i]){
            if($v1d1[$i] < $v2d1[$i]){
                $vueltaIdeal[$i] = $v1d1[$i];
            } else {
                $vueltaIdeal[$i] = $v2d1;
            }
        }
    }
}


?>