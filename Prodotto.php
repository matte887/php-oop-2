<?php
class Prodotto {
    public $nome;
    public $descrizione;
    public $prezzo;

    function __construct($_nome, $_prezzo) {
        $this -> nome = $_nome;
        $this -> prezzo = $_prezzo;
    }

    public function prezzoPerKilo() {
        $prezzoKilo= $this -> prezzo / $this -> peso_netto;
        return "$prezzoKilo €/kg";
    }
}