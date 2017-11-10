<?php

class MasterMind {

    public static $niveles = [
        '1' => ['intentos' => 2, 'longitud' => 4, 'tamañoAdivina' => 4],
        '2' => ['intentos' => 6, 'longitud' => 6, 'tamañoAdivina' => 6],
        '3' => ['intentos' => 5, 'longitud' => 7, 'tamañoAdivina' => 7]
    ];
    public $intentos = 0;
    public $longitud = 0;
    public $tamañoAdivina = 0;
    public $adivina = [];
    public $jugadas = [];
    //variables estaticas de errores
    static $errores = [
        "0" => "juegada OK",
        "1" => "juagada repetida",
        "2" => "numeros repetidos en la jugada",
        "3" => "longitud incorrecta de numero",
        "4" => "partida terminada",
        "5" => "has ganado"
    ];

    function __construct() {
        
    }

    function setnivel($nivel) {
        foreach (static::$niveles[$nivel] as $dato => $valor)
            $this->$dato = $valor;
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
        if ($respuesta === 0 && $this->intentosRestantes()!=0) {
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
        }
        if(($this->intentosRestantes()==0) &&($jugada != $this->adivina)){
            return 4;
        }elseif($jugada == $this->adivina){
            return 5;
        }else{
            return $respuesta;
            
        }
        
    }

    public function generarJug() {
        $this->adivina = range(1, $this->tamañoAdivina);
        shuffle($this->adivina);
        $this->adivina = array_slice($this->adivina, 0, $this->longitud);
    }

    public function intentosRestantes() {
        return $this->intentos - count($this->jugadas);
    }

    public function validarJugada($valida, $jugada) {

        if (isset($this->jugadas[implode($jugada)])) {
            return 1;
        } elseif ((count($jugada)) != (count(array_unique($jugada)))) {
            return 2;
        } elseif ((count($jugada)) != $this->longitud) {
            return 3;
        } elseif ($this->intentosRestantes()== 0) {
            return 4;
        } elseif ($jugada === $this->adivina) {
            return 5;
        } else {
            return 0;
        }
    }

}
?>

