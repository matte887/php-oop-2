<?php
require_once __DIR__ . "/Prodotto.php";
class Cura extends Prodotto {
    public $quantità;
    public $specie_animale;

    function __construct($_nome, $_prezzo, $_quantità, $_specie_animale) {
        parent::__construct($_nome, $_prezzo);
        $this -> quantità = $_quantità;
        $this -> specie_animale = $_specie_animale;
    }
}