<?php
require_once __DIR__ . "/Prodotto.php";
class Cibo extends Prodotto {
    public $specie_animale;
    public $peso_netto;
    public $gusto;

    function __construct($_nome, $_prezzo, $_specie_animale) {
        parent:: __construct($_nome, $_prezzo);
        $this -> specie_animale = $_specie_animale;
    }
}