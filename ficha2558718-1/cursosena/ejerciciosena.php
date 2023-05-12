<?php

//Ingreso de los datos

$estudiante = $_POST['estudiante'];
$curso = $_POST['curso'];
$sena = $_POST['sena'];
$adso = $_POST['adso'];
$edad = $_POST['edad']; 

//Valor de los cursos 

$python = 15000;
$php = 10000;
$csharp = 180000;
$java = 200000; 

//Funciones 

//Descuento 1 

function descuento1 ($valor1,$valor2,$valor3){
    if ($valor1 == 'si') {
        if ($valor2 == 'si'){
            $descuento = 50;
        }
        else {
            $descuento = 35;
        }
    } 
    else { 
        $descuento = 25;
    }
    return $descuento;
}

function descuento2 ($valor1,$valor2){
    if ($valor1 > 15 and $valor1 < 20) {
        $descuento = 10;
    }
    else if ($valor1 > 20 and $valor1 < 25){
        $descuento = 15;
    }
    else {
        $descuento = 0; 
    }
    return $descuento;
}

function resultado ($nombre,$curso, $valorcurso,$descuento1,$descuento2,$total){
    echo 'Nombre del estudiante: ' . $nombre . '<br>';
    echo 'Curso: ' . $curso . '<br>';
    echo 'Valor del curso: ' . $valorcurso . '<br>';
    echo 'Descuento 1: ' . $descuento1 . '%<br>';
    echo 'Descuento 2: ' . $descuento2 . '%<br>';
    echo 'Valor total: ' . $total; 
}

switch ($curso) {
    case 'python': 
        $descuento1 = descuento1($sena,$adso,$python);
        $descuento2 = descuento2($edad,$python);
        $valorcurso = $python - (($descuento1 + $descuento2) * $python / 100);
        resultado($estudiante, $curso, $python, $descuento1, $descuento2, $valorcurso);
        break;
    case 'php': 
        $descuento1 = descuento1($sena,$adso,$php);
        $descuento2 = descuento2($edad,$php);
        $valorcurso = $php - (($descuento1 + $descuento2) * $php / 100);
        resultado($estudiante, $curso, $php, $descuento1, $descuento2, $valorcurso);
        break;
    case 'csharp': 
        $descuento1 = descuento1($sena,$adso,$csharp);
        $descuento2 = descuento2($edad,$csharp);
        $valorcurso = $csharp - (($descuento1 + $descuento2) * $csharp / 100);
        resultado($estudiante, $curso, $csharp, $descuento1, $descuento2, $valorcurso);
        break;
    case 'java': 
        $descuento1 = descuento1($sena,$adso,$java);
        $descuento2 = descuento2($edad,$java);
        $valorcurso = $java - (($descuento1 + $descuento2) * $java / 100);
        resultado($estudiante, $curso, $java, $descuento1, $descuento2, $valorcurso);
        break;
}
