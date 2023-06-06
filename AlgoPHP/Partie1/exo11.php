<h1>Exercice 11</h1>
<p>
Initialiser  un  tableau  de  x  marques  de  voitures.
Ecrire  un  algorithme permettant  de  parcourir  ce tableau et d’en afficher le contenu (une marque de voiture par ligne). 
Il est également demandé d’afficher le nombre de marques de voitures présentes dans le tableau.Exemple: tableau ➔«Peugeot», «Renault», «BMW», «Mercedes»Affichage
(attention à utiliser une liste à puces) Il y a 4 marques de voitures dans le tableau:Peugeot Renault BMW Mercedes
</p>
<h2>Résultat</h2>
<?php
$marque = ["Peugeot", "Renault", "BMW", "Mercedes"];
foreach ($marque as $value) {
    echo "$value <br/>";
}
echo "Nombre de marques présentes dans le tableau: ";
echo count($marque);
?>