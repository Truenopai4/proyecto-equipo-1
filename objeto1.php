<?php

// Declaración de la clase Tsuru
class Tsuru {
    // Propiedades que representan las características del automóvil Tsuru
    public $marca; // Marca del automóvil
    public $modelo; // Modelo del automóvil
    public $ano; // Año de fabricación del automóvil
    public $color; // Color del automóvil
    public $transmision; // Tipo de transmisión (manual, automática, etc.)
    public $motor; // Tipo y tamaño del motor
    public $cilindros; // Cantidad de cilindros del motor
    public $potencia; // Potencia del motor
    public $combustible; // Tipo de combustible que utiliza el automóvil
    public $asientos; // Cantidad de asientos del automóvil
    public $puertas; // Cantidad de puertas del automóvil
    public $traccion; // Tipo de tracción (delantera, trasera, 4x4, etc.)
    public $tipo; // Tipo de carrocería (sedán, hatchback, etc.)
    public $consumo; // Consumo de combustible del automóvil
    public $capacidadTanque; // Capacidad del tanque de combustible
    public $velocidadMaxima; // Velocidad máxima del automóvil
    public $aceleracion; // Aceleración de 0 a 100 km/h
    public $precio; // Precio de venta del automóvil
    public $seguridad; // Nivel de seguridad del automóvil
    public $tecnologia; // Tecnología integrada en el automóvil

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
$tsuru = new Tsuru("Nissan", "Tsuru", 2005, "Blanco", "Manual", "1.6L", 4, "110 HP", "Gasolina", 5, 4, "Trasera", "Sedán", "10 km/l", "40 litros", "160 km/h", "12 segundos", "$100,000", "Básica", "Básica");

// Acceder a las propiedades del objeto e imprimir su valor
echo "Marca: " . $tsuru->marca . "\n";
echo "Modelo: " . $tsuru->modelo . "\n";
echo "Año: " . $tsuru->ano . "\n";
echo "Color: " . $tsuru->color . "\n";
// y así sucesivamente para todas las propiedades del objeto
?>
