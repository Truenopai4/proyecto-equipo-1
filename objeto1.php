
<?php

// Declaración de la clase Tsuru
class Tsuru {
    // Propiedades que representan las características del automóvil Tsuru
    public $marca; // string
    public $modelo; // string
    public $ano; // int (año de fabricación)
    public $color; // string
    public $transmision; // string
    public $motor; // string
    public $cilindros; // int
    public $potencia; // double
    public $combustible; // string
    public $asientos; // int
    public $puertas; // int
    public $traccion; // string
    public $tipo; // string
    public $consumo; // double
    public $capacidadTanque; // string
    public $velocidadMaxima; // double
    public $aceleracion; // double
    public $precio; // string
    public $seguridad; // string
    public $tecnologia; // string

    // Constructor de la clase Tsuru que inicializa las propiedades con valores específicos
    public function __construct($marca, $modelo, $ano, $color, $transmision, $motor, $cilindros, $potencia, $combustible, $asientos, $puertas, $traccion, $tipo, $consumo, $capacidadTanque, $velocidadMaxima, $aceleracion, $precio, $seguridad, $tecnologia) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->color = $color;
        $this->transmision = $transmision;
        $this->motor = $motor;
        $this->cilindros = $cilindros;
        $this->potencia = $potencia;
        $this->combustible = $combustible;
        $this->asientos = $asientos;
        $this->puertas = $puertas;
        $this->traccion = $traccion;
        $this->tipo = $tipo;
        $this->consumo = $consumo;
        $this->capacidadTanque = $capacidadTanque;
        $this->velocidadMaxima = $velocidadMaxima;
        $this->aceleracion = $aceleracion;
        $this->precio = $precio;
        $this->seguridad = $seguridad;
        $this->tecnologia = $tecnologia;
    }
}

// Crear un objeto Tsuru con valores específicos para sus propiedades
$tsuru = new Tsuru("Nissan", "Tsuru", 2005, "Blanco", "Manual", "1.6L", 4, 110.5, "Gasolina", 5, 4, "Trasera", "Sedán", 10.2, "40 litros", 160.7, 12.5, "$100,000", "Básica", "Básica");

// Acceder a las propiedades del objeto e imprimir su valor
echo "Marca: " . $tsuru->marca . "\n";
echo "Modelo: " . $tsuru->modelo . "\n";
echo "Año: " . $tsuru->ano . "\n";
echo "Color: " . $tsuru->color . "\n";
// y así sucesivamente para todas las propiedades del objeto
?>
