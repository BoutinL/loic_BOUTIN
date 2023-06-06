<h1>Exercice 8</h1>
<p>
    Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la forme :
        Affichage (pour la table de 8) :
        Table de 8 :
        1 x 8 = 8
        2 x 8 = 16
        3 x 8 = 24 …
    Remarque : proposer 2 solutions avec 2 types de boucles.
</p>
<h2>Résultat</h2>
<?php
function table1(int $chiffre){
    $i = 0;
    echo "table de $chiffre";
    while($i <= 10){
        echo $chiffre*$i;
        $i++;
    }
}

function table2(int $chiffre){
    $i = 0;
    echo "table de $chiffre";
    do{
        echo $chiffre*$i;
    } while($i <= 10);
}
?>