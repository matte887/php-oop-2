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

$purina = new Cibo("Cat Chow", 41, "Per gatti");
$purina -> peso_netto = 10;
$purina -> gusto = "salmone";
$purina -> descrizione = "Cat Chow Adult è un alimento secco per gatti adulti che contiene tutti i nutrienti essenziali di cui il tuo gatto ha bisogno per un'età adulta attiva e un benessere generale.";
echo $purina -> prezzoPerKilo();
// var_dump($purina);

$antipulci = new Cura("Seresto Collare Antipulci", 27, 1, "per cani");
$antipulci -> descrizione = "Seresto Collare Antipulci per Cani è l'antiparassitario esterno a base di imidaclopris e flumentrina, che vi consentirà di proteggere il cane da pulci e zecche e dalle malattie che questi parassiti possono trasmettere.";
// var_dump($antipulci);

$tizio = new Utente("tizio@gmail.com", true);
$tizio -> aggiungiAlCarrello($purina);
$tizio -> aggiungiAlCarrello($antipulci);
$tizio -> ottieniTotale();
var_dump($tizio);
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
    <!-- <?php echo $purina -> prezzoPerKilo(); ?> -->
</body>
</html>