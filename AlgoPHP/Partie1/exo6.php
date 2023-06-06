<h1>Exercice 6</h1>
<p>
    Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité
    d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)
</p>
<h2>Résultat</h2>
<?php
$prixunitaire = 9.99;
$quantite = 5;
$tva = 0.2;
$totalht = $prixunitaire*$quantite;
echo "Le montant de la facture à régler HT est de: $totalht € <br/>";
$totalttc = $quantite * $prixunitaire * (1 + $tva);
echo "Le montant de la facture à régler TTC est de: $totalttc €";
?>