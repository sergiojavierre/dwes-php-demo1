<?

include 'CochesRepository.php';
include __DIR__ . '/../../clases/Coche.php';

class CochesRepositoryRAM implements CochesRepository
{
    private $coches = [];

    public function __construct()
    {
        $coche1 = new Coche('1234ABC', 'Seat', 'Ibiza', 100000);
        $coche2 = new Coche('5678DEF', 'Renault', 'Clio', 200000);
        $coche3 = new Coche('9876GHI', 'Ford', 'Focus', 300000);
        $this->coches = [$coche1, $coche2, $coche3];
    }

    function getCoches()
    {
        return $this->coches;
    }

    function saveCoche($coche)
    {
        if ($coche instanceof Coche) {
            array_push($this->coches, $coche);
        }
    }
}
