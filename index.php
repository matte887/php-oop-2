<?php
/*Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.
BONUS:
Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto).*/
require_once __DIR__ . "/Prodotto.php";
require_once __DIR__ . "/Cibo.php";
require_once __DIR__ . "/Giochi.php";
require_once __DIR__ . "/Cura.php";
require_once __DIR__ . "/Utente.php";

$crocchette = new Cibo("Cat Chow", 41, "gatti");
$crocchette -> peso_netto = 10;
$crocchette -> gusto = "salmone";
$crocchette -> descrizione = "Cat Chow Adult è un alimento secco per gatti adulti che contiene tutti i nutrienti essenziali di cui il tuo gatto ha bisogno per un'età adulta attiva e un benessere generale.";
// echo $crocchette -> prezzoPerKilo();
var_dump($crocchette);

$antipulci = new Cura("Derbe", 8, 0.3, "cani");
$antipulci -> descrizione = "Sapone Detergente Naturale per Cani è stato realizzato con una base totalmente vegetale di olio di palma e olio di cocco ed è stata arricchito con olio di ricino, olio di germe di grano, argilla verde e zolfo per igienizzare il manto e renderlo pulito, morbido, lucido e profumato, senza compromettere la struttura del pelo.";
// var_dump($antipulci);

$gioco_gatti = new Gioco();

$tizio = new Utente("tizio@gmail.com", true, 2025);
$tizio -> aggiungiAlCarrello($crocchette);
$tizio -> aggiungiAlCarrello($antipulci);
$tizio -> ottieniTotale();
$tizio -> validaPagamento();
// var_dump($tizio);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Negozio prodotti per animali</h1>
    <h2>Prodotti</h2>
    <div>
        <?php $crocchette -> stampaCaratt() ?>
    </div>
    <div>
        <?php $antipulci -> stampaCaratt() ?>
    </div>
    <h2>Pannello utente</h2>
</body>
</html>