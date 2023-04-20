<?php
//Ejercicio uno asistencia
include 'asistencia.html';

//Variables y Constantes 

    $nota = null;
    $asis = null;
    const CLASES =30;

// Logica

    if (isset($_POST['operador'])) {
        $nota = $_POST['nota'];
        $asis = $_POST['asis'];

        if ($nota >= 1 && $asis >= (CLASES*0.8)) {
            echo 'Aprobo';
        }
        else {
            echo 'No Aprobo';
        }
    }
?>