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
        return "Totale " . $_totale  . " €";
    }

    public function validaPagamento() {
        if ($this -> scadenza_carta > 2022) {
            return "Pagamento effettuato!";
        } else {
            return "La tua carta di credito è scaduta, prova con un'altra.";
        }
    }

    public function ritornaCarrello() {
        foreach ($this->carrello as $item) { ?>
            <li><?php echo $item ->nome ?></li>
        <?php } 
    }

    public function isRegistered() {
        if($this->registrato) {
            echo "Sì";
        } else {
            echo "No";
        }
    }

    public function stampaUtente() { ?>
        <h4><?php echo $this -> nome; ?></h4>
        <ul>
            <li><?php echo $this -> email; ?></li>
            <li>Carrello:
                <ul>
                    <?php $this->ritornaCarrello(); ?>
                </ul>
            </li>
            <li>Registrato: <?php $this->isRegistered(); ?></li>
            <li><?php echo $this->ottieniTotale(); ?></li>
            <li><?php echo $this->validaPagamento(); ?></li>
        </ul>
    <?php }
}