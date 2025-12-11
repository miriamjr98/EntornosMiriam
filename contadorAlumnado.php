<?php
date_default_timezone_set('Europe/Madrid');

$fecha = date("d/m/Y H:i:s");

if (isset($_COOKIE["visita"])) {

    list($visitas, $fecha_anterior) = explode("|", $_COOKIE["visita"]);
    $visitas = intval($visitas) + 1;

    echo "<h2> Benvingut de nou! Aquesta és la visita número $visitas </h2>";
    echo "<p>La darrera visita va ser: <strong>$fecha_anterior</strong></p>";

    // Actualizar cookie 
    setcookie("visita", $visitas . "|" . $fecha);

} else {
    echo "<h2>Hola, aquesta és la primera vegada que entres en aquesta pàgina.</h2>";
    setcookie("visita", "1|" . $fecha);
}

?>
