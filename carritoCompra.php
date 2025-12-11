<?php
session_start();

if (!isset($_SESSION["total"])) {
    $_SESSION["total"] = 0;
}

if (isset($_POST["precio"])) {
    $precio = ($_POST["precio"]);
    $_SESSION["total"] += $precio;
}

if (isset($_POST["limpiar"])) {
    $_SESSION["total"] = 0;
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Carrito</title>
</head>

<body>

    <p><strong>Total acumulado: <?php echo $_SESSION["total"]; ?> euros.</strong></p>
    
    <h3>Lista de articulos</h3>

    <ul>
        <li>
            <form method="post">
                <button name="precio" value="97">Zapatillas Nike (97€)</button>
            </form>
        </li>
        <li>
            <form method="post">
                <button name="precio" value="45">Sudadera Puma (45€)</button>
            </form>
        </li>
        <li>
            <form method="post">
                <button name="precio" value="199">Pala de padel Siux Diablo Revolution (199€)</button>
            </form>
        </li>
        <li>
            <form method="post">
                <button name="precio" value="20">Forro polar (20€)</button>
            </form>
        </li>
    </ul>

    <form method="post">
        <button name="limpiar" value="1">Vaciar carrito</button>
    </form>

</body>

</html>