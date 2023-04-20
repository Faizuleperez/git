<?php
// conocer si una persona es mayor de edad o no
include 'edad.html';
 //variables y constantes
 $edad = null;

 //logica 

 if (isset($_POST['comparar'])){
    $edad = $_POST['edad'];
    if($edad >= 18){
        echo 'Es mayor de edad';
    }
    else{
        echo 'No es mayor de edad';
    }
   

 }
 ?>