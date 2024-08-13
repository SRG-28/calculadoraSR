<?php
//  models/Calculadora.php
class Calculadora
{
    public function calcular($numero1, $numero2, $operacion)
    {
        $resultado = null;

        switch ($operacion) {
            case 'sumar':
                $resultado = $numero1 + $numero2;
                break;
            case 'restar':
                $resultado = $numero1 - $numero2;
                break;
            case 'multiplicar':
                $resultado = $numero1 * $numero2;
                break;
            case 'dividir':
                if ($numero2 != 0) {
                    $resultado = $numero1 / $numero2;
                } else {
                    $resultado = 'Error: División por cero';
                }
                break;
        }

        return $resultado;
    }
}
