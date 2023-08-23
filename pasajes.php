<?php
include 'pasajes.html';

//variables
$saldo = 0;
$usuario =null;


//logica
  if(isset($_POST['validar'])){
    $usuario = $_POST['usuario'];
    $saldo = $_POST['saldo'];
  
    switch ($usuario) {
        case 'normal':
        if($saldo>=2950){
        $nuevo_saldo =$saldo-2950;
        echo"Usted es un usuario normal y su nuevo saldo es: $nuevo_saldo";
        }else{
          echo"Saldo insuficiente: $saldo";
        }
            break;
        case 'sisben':
        if($saldo>=2500){
            $nuevo_saldo = $saldo-2500;
            echo"Usted es un usuario sisben y su nuevo saldo es: $nuevo_saldo";
        }else{
          echo"Saldo insuficiente: $saldo";
        }
            break;
        
        case 'adulto_mayor':
        if($saldo>=2250){
          $nuevo_saldo = $saldo- 2250;
          echo"Usted es un usuario adulto mayor y su nuevo saldo es: $nuevo_saldo";
        } else{
          echo"Saldo insuficiente: $saldo";
        } 
          break;
        default:
          echo"Tarjeta invalida";    
    }
  }

?>