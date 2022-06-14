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

$purina = new Cibo("Cat Chow", 41.30, "Per gatti");
$purina -> peso_netto = 10;
$purina -> gusto = "salmone";
$purina -> descrizione = "Cat Chow Adult è un alimento secco per gatti adulti che contiene tutti i nutrienti essenziali di cui il tuo gatto ha bisogno per un'età adulta attiva e un benessere generale.";
echo $purina -> prezzoPerKilo();

var_dump($purina);
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