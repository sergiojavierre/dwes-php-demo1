<!DOCTYPE html>
<html lang="en">

<?
include 'templates/head.php';
include 'templates/header.php';
?>

<body>
    <form action="index.php" method="POST">
        <label for="matricula">Matrícula</label>
        <input type="text" name="matricula" id="matricula" require>
        <label for="marca">Marca</label>
        <input type="text" name="marca" id="marca" require>
        <label for="modelo">Modelo</label>
        <input type="text" name="modelo" id="modelo" require>
        <label for="kilometros">Kilómetros</label>
        <input type="text" name="kilometros" id="kilometros" require>
        <input type="submit" value="Añadir">
    </form>
</body>

</html>