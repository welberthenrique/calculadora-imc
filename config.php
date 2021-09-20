<?php
    /**
     * Programador: Welbert Araujo
     * Objetivo: Programa feito em php para Calculo de IMC
     * Magreza, quando o resultado é menor que 18,5 kg/m2;
     * Normal, quando o resultado está entre 18,5 e 24,9 kg/m2;
     * Sobrepeso, quando o resultado está entre 24,9 e 30 kg/m2;
     * Obesidade, quando o resultado é maior que 30 kg/m2.

     */

    $nome = isset($_POST["nome"]) ? $_POST["nome"] : "Erro: dado não Informado!";
    $altura = isset($_POST["altura"]) ? $_POST["altura"]: "Erro: dado não Informado!";
    $peso = isset($_POST["peso"]) ? $_POST["peso"]: "Erro: dado não Informado!";
    $sexo = isset($_POST["sexo"]) ? $_POST["sexo"]: "Erro: dado não Informado!";
   

    function calcImc($peso, $altura){
       
            $imc = ($peso /($altura * $altura));
            return $imc;
        
    }

    function verificaEstadoImc($imc){


        if ($imc < 18.5){
            $estado = "Você está em estado de Magreza!";
        }else if($imc >=18.5 && $imc < 24.9){
            $estado = "Você está no peso ideal!";
        }else if($imc >=24.9 && $imc <=30){
            $estado = "Você está Sobrepeso!";
        }else if($imc >30){
            $estado = "Você está em estado de Obesidade!";
        }else{
            $estado = "Erro: dado não Informado!";
        }

    return $estado;

    }

    function exibeResultado($peso, $altura, $nome, $sexo){

        $imc = calcImc($peso, $altura);
        $estado = verificaEstadoImc($imc);

        echo "Nome: $nome <br/>";
        echo "Altura: $altura <br/>";
        echo "Peso: $peso <br/>";
        echo "Sexo: $sexo <br/>";
        echo "IMC: " . number_format($imc, 2, '.', '.') . "<br/>";
        echo "Estado: $estado ";

        
    }     

    echo $resultado = exibeResultado($peso, $altura, $nome, $sexo);
    
    
    
    
?>
