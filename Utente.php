<?php
class Utente {
    public $nome;
    public $cognome;
    public $email;
    public $carrello = [];
    public $registrato = false;

    function __construct($_email, $_registrato) {
        $this -> email = $_email;
        $this -> registrato = $_registrato;        
    }

    public function aggiungiAlCarrello($_prodotto) {
        $this -> carrello[] = $_prodotto;
    }

    public function ottieniTotale() {
        $_totale = 0;
        
        foreach($this -> carrello as $prodotto) {
            $_totale += $prodotto -> prezzo;
        }

        if($this -> registrato) {
            $_totale = $_totale * 0.8;
        }
        echo $_totale;
    }
}