<?php
class Utente {
    public $nome;
    public $cognome;
    public $email;
    public $scadenza_carta;
    public $carrello = [];
    public $registrato = false;

    function __construct($_email, $_registrato, $_scadenza_carta) {
        $this -> email = $_email;
        $this -> registrato = $_registrato;
        $this -> scadenza_carta = $_scadenza_carta;
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
        echo "Totale " . $_totale  . " €";
    }

    public function validaPagamento() {
        if ($this -> scadenza_carta > 2022) {
            echo "Pagamento effettuato!";
        } else {
            echo "La tua carta di credito è scaduta, prova con un'altra.";
        }
    }
}