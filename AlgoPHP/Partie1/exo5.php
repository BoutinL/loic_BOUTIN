<h1>Exercice 5</h1>
<p>
    Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.
    Attention, la valeur générée devra être arrondie à 2 décimales.
</p>
<h2>Résultat</h2>
<?php
$montantfrancs = 100;
$equivalentfreuro = 0.1524;
$conversion = $montantfrancs*$equivalentfreuro;
$arrondidecimal = round($conversion, 2);

echo "Montant en Francs: $montantfrancs <br/>";
echo "$montantfrancs francs = $arrondidecimal €"
?>