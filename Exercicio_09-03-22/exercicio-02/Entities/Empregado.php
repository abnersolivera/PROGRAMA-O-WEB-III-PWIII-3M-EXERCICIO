<?php

class Empregado{

    /*
        ## Exercício 02: A fim de representar empregados em uma firma, crie uma classe chamada Empregado que inclui as três informações a seguir como atributos:

        * um primeiro nome
        * um sobrenome
        * um salário mensal.
        * Sua classe deve ter um construtor que inicializa os três atributos. 
        Forneça um método set e get para cada atributo. Se o salário mensal não for positivo, configure-o como 0.0. 
        Crie um método que exibe o salário anual e um que dê 10% de aumento no salário.
    */
    private $Name = "";
    private $Sobrenome = "";
    private $Salario = 0.0;

    public function __construct($name, $sobrenome, $salario){
        $this->Name = $name;
        $this->Sobrenome = $sobrenome;
        $this->Salario = $salario < 0 ? 0 : $salario;
    }

    public function __get($value){
        return $this->$value;
    }

    public function __set($atributs, $value){
        $this->$atributs = $value;
    }

    public function getAumento(){
        return $this->Salario += $this->Salario * (0.10);
    }


}