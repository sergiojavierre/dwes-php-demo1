<!DOCTYPE html>
<html lang="en">

<?
include 'templates/head.php';
?>

<body>
    <?
    include 'templates/header.php';
    ?>

    <?
    include 'clases/Coche.php';

    $coche1 = new Coche('1234ABC', 'Seat', 'Ibiza', 100000);
    $coche2 = new Coche('5678DEF', 'Renault', 'Clio', 200000);
    $coche3 = new Coche('9876GHI', 'Ford', 'Focus', 300000);
    $coches = [$coche1, $coche2, $coche3];

    $matricula = $_GET['matricula'];
    $cocheRecibido = new Coche($_POST['matricula'], $_POST['marca'], $_POST['modelo'], $_POST['kilometros']);
    if ($cocheRecibido->getMatricula() != null && $cocheRecibido->getMarca() != null && $cocheRecibido->getModelo() != null && $cocheRecibido->getKm() != null) {
        array_push($coches, $cocheRecibido);
    }

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