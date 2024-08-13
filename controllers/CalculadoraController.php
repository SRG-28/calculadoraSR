<?php
// controllers/CalculadoraController.php
require_once 'models/Calculadora.php';

class CalculadoraController
{
    public function index()
    {
        $resultado = null;

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $numero1 = $_POST['numero1'];
            $numero2 = $_POST['numero2'];
            $operacion = $_POST['operacion'];

            $calculadora = new Calculadora();
            $resultado = $calculadora->calcular($numero1, $numero2, $operacion);
        }

        require 'views/calculadora.php';
    }
}
