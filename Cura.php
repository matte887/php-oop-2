<?php
require_once __DIR__ . "/Prodotto.php";
class Giochi extends Prodotto {
    public $quantità;
    public $specie_animale;
    public $tipo_di_cura;

    function __construct($_nome, $_prezzo, $_quantità, $_specie_animale, $_tipo_di_cura) {
        parent::__construct($_nome, $_prezzo);
        $this -> quantità = $_quantità;
        $this -> specie_animale = $_specie_animale;
        $this -> tipo_di_cura = $_tipo_di_cura;
    }
}