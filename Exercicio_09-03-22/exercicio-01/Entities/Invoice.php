<?php

class Invoice{

    /*
        * número do item faturado,
        * descrição do item
        * quantidade comprada do item
        * preço unitário do item

        * Sua classe deve ter um construtor que inicialize os quatro atributos. Se a quantidade não for positiva, ela deve ser configurada como 0. 
        Se o preço por item não for positivo ele deve ser configurado como 0.0. Forneça um método set e um método get para cada variável de instância. 
        Além disso, forneça um método chamado getInvoiceAmount que calcula o valor da fatura (isso é, multiplica a quantidade pelo preço por item) e depois retorna o valor.
    */
    private $Id = 0;
    private $Description ="";
    private $Quantity = 0;
    private $Price = 0.0;

    public function __construct($id, $description, $quantity, $price){
        $this->Id = $id;
        $this->Description = $description;
        $this->Quantity = $quantity;
        $this->Price = $price < 0 ? 0 : $price;
    }

    public function __get($value){
        return $this->$value;
    }

    public function __set($atributs, $value){
        $this->$atributs = $value;
    }

    public function getInvoiceAmount(){
        return $this-> Quantity *= $this->Price;
    }


}