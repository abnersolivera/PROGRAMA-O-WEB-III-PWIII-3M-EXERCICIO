<?php

class Circulo{

    /*
        ## Exercício 03: Escreva uma classe que represente um circulo no plano cartesiano. Forneça os seguintes membros de classe:

        * Um contrutor que incialize o ponto em um local por parâmetros ou na origem do espaço;
        * Métodos getter e setter.
        * Métodos de inflar e desinflar que respectivamente aumenta e diminuem o tamanho do circulo.
        * Método para mover o circulo a partir de outro ponto ou para a origem do espaço.
        * Método que retorna a àrea do círculo. 
    */
    private $A;
    private $B;
    private $Radio;

    public function Circle($Radio,$a = 0, $b = 0 ) 
    {
        $this->A = $a;
        $this->B = $b;
    }

    public function __get($value)
    {
        return $this->$value;
    }

    public function __set($atributs, $value)
    {
        $this->$atributs = $value;
    }

    public function Area() 
    { 
        return pi() * ($this->Radio * 2); 
    }

    public function Mover($move) 
    {
        $this->A = $move;
        $this->B = $move;
    }

    public function Inflar($value) 
    { 
        $this->Radio += $value; 
    }

    public function Desinflar($value) 
    { 
        $this->Radio -= $value; 
    }

}