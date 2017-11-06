<?php

class MasterMind {

    const JUGADAS = 7;
    const LONGITUD = 4;

    public $adivina = [];
    public $jugadas = [];
    //variables estaticas de errores
    static $errores = [
        "0" => "juegada OK",
        "1" => "juagada repetida",
        "2" => "numeros repetidos en la jugada",
        "3" => "numero introducido demasiado largo"
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
        $this->adivina = range(1, 6);
        shuffle($this->adivina);
        $this->adivina = array_slice($this->adivina, 0, 4);
    }

    public function validarJugada($valida, $jugada) {

        if (isset($this->jugadas[implode($jugada)])) {
            return 1;
        } elseif ((count($jugada)) != (count(array_unique($jugada)))) {
            return 2;
        } elseif((count($jugada))>MasterMind::LONGITUD) {
            return 3;
        }else{
            return 0;
            
        }
    }

}
?>

