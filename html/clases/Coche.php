<?

class Coche
{

    private $matricula;
    private $marca;
    private $modelo;
    private $km;

    public function __construct($matricula, $marca, $modelo, $km)
    {
        $this->matricula = $matricula;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->km = $km;
    }

    public function getMatricula()
    {
        return $this->matricula;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function getKm()
    {
        return $this->km;
    }

    public function toString()
    {
        echo '<li>';
        echo 'Matrícula: ' . $this->matricula . '<br>';
        echo 'Marca: ' . $this->marca . '<br>';
        echo 'Modelo: ' . $this->modelo . '<br>';
        echo 'Kilómetros: ' . $this->km . '<br>';
        echo '</li>';
    }
}
