<!-- Archivo que procesa nuestro formulario de ingreso -->
<?php

$usuario = $_POST["login"];
$clave = $_POST["clave"];

if (($usuario != null) && ($clave != null)){
    if(($usuario == 'admin') && ($clave == '1234')){
        echo "<p>¡Perfecto! tus datos son correctos</p>";
    } else {
        echo "<p>Te equivocaste, tus datos son incorrectos</p>";
    }
    //echo "<p>Ingresaste un valor</p>"; // En caso de que ingresa un valor
} else {
    echo "<p>Debes colocar un valor</p>";
}

?>