<!DOCTYPE html>
<html lang="en">

<?
include 'templates/head.php';
?>

<body>
    <?
    include 'templates/header.php';
    include 'repositories/coches/CochesRepositoryRAM.php';

    $cochesRepository = new CochesRepositoryRAM();


    $matricula = $_GET['matricula'];
    $cocheRecibido = new Coche($_POST['matricula'], $_POST['marca'], $_POST['modelo'], $_POST['kilometros']);
    if ($cocheRecibido->getMatricula() != null && $cocheRecibido->getMarca() != null && $cocheRecibido->getModelo() != null && $cocheRecibido->getKm() != null) {
        $cochesRepository->saveCoche($cocheRecibido);
    }
    $coches = $cochesRepository->getCoches();

    if ($matricula) {
        echo '<ul>';
        foreach ($coches as $coche) {
            if ($coche->getMatricula() == $matricula) {
                $coche->toString();
            }
        }
        echo '</ul>';
    } else {
        echo '<ul>';
        foreach ($coches as $coche) {
            $coche->toString();
        }
        echo '</ul>';
    }


    ?>
</body>

</html>