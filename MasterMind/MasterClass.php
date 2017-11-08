<?php

class MasterMind {

    public $intentos = 7;
    public $longitud = 4;
    public $tamañoAdivina = 5;
    public $adivina = [];
    public $jugadas = [];
    //variables estaticas de errores
    static $errores = [
        "0" => "juegada OK",
        "1" => "juagada repetida",
        "2" => "numeros repetidos en la jugada",
        "3" => "longitud incorrecta de numero"
    ];

    function __construct() {
        
    }

    public function empezarJuego() {
        $this->generarJug();
    }

    public function compJugada($jugada) {
        $jugada = str_split($jugada);
        $heridos = 0;
        $muertos = 0;
        $valida = true;
        //comprobar si la jugada es valida
        $respuesta = $this->validarJugada($valida, $jugada);
        switch ($respuesta) {
            case 0: {
                    foreach ($this->adivina as $codigoA => $valorA) {
                        foreach ($jugada as $codigoJ => $valorJ) {
                            if ($valorA == $valorJ) {
                                if ($codigoA == $codigoJ) {
                                    $muertos++;
                                } else {
                                    $heridos++;
                                }
                            }
                        }
                    }

                    $this->jugadas[implode($jugada)] = ['muertos' => $muertos, 'heridos' => $heridos];
                    break;
                }
        }
        return $respuesta;
    }

    public function generarJug() {
        $this->adivina = range(1, $this->tamañoAdivina);
        shuffle($this->adivina);
        $this->adivina = array_slice($this->adivina, 0, $this->longitud);
    }

    public function validarJugada($valida, $jugada) {

        if (isset($this->jugadas[implode($jugada)])) {
            return 1;
        } elseif ((count($jugada)) != (count(array_unique($jugada)))) {
            return 2;
        } elseif((count($jugada))!=$this->longitud) {
            return 3;
        }else{
            return 0;
            
        }
    }

}
?>

