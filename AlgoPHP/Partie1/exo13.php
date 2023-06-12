<h1>Exercice 13</h1>
<p>
Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de coefficient).
Elle devra être affichée avec 2 décimales.
Affichage:
    Les notes obtenues par l’élève sont: 10 12 8 19 3 16 11 13 9
    Sa moyenne générale est donc de: 11.22
</p>
<h2>Résultat</h2>
<?php
$notes = ["10", "12", "8", "19","3", "16", "11", "13", "9"];
;
echo round(array_sum($notes)/9,2);
?>