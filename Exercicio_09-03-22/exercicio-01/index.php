<?php

include("Entities/Invoice.php");

$venda = new Invoice(0,"",0,0.0);

/*
    public $Id;
    public $Description;
    public $Quantity = 0;
    public $Price = 0.0; 
*/


echo "Codigo da Fatura: " . $venda->Id = 1;
echo "<br>";
echo "Descrição: " . $venda->Description = "TV";
echo "<br>";
echo "Qauntidade: " . $venda->Quantity = 10;
echo "<br>";
echo "Valor Unitario: R$ " . $venda->Price = 100.50;
echo "<br>";
echo "Total Venda: " . $venda->getInvoiceAmount();


