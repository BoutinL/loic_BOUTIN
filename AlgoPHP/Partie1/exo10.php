<h1>Exercice 1</h1>
<p>
    A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 1€.
    Affichage:
        Montant à payer : 152 €
        Montant versé : 200 €
        Reste à payer : 48 €
        ***************************************************
        Rendue de monnaie : 
        4 billets de 10 € -1 billet de 5 € -1 pièce de 2 € -1 pièce de 1 €
</p>
<h2>Résultat</h2>
<?php
function change ($payer, $verse){
    $nbrb10 = 0;
    $nbrb5 = 0;
    $nbrp2 = 0;
    $nbrp1 = 0;
    $b10vlr = 10;
    $b5vlr = 5;
    $p2vlr = 2;
    $p1vlr = 1;
    $rendre = $verse-$payer;
    echo "Montant à payer : $payer €<br/>";
    echo "Montant versé : $verse €<br/>";
    echo "Reste à payer : $rendre €<br/>";
    echo "********************************<br/>";
    $nbrb10 = intdiv($rendre, $b10vlr);
    $resterendre1 = $rendre - $b10vlr * $nbrb10;
    $nbrb5 = intdiv($resterendre1, $b5vlr);
    $resterendre2 = $resterendre1 - $b5vlr * $nbrb5;
    $nbrp2 = intdiv($resterendre2, $p2vlr);
    $resterendre3 = $resterendre2 - $p2vlr * $nbrp2;
    $nbrp1 = intdiv($resterendre3, $p1vlr);
    $resterendre4 = $resterendre3 - $p1vlr * $nbrp1;
    echo "Rendue de monnaie:<br/>";
    echo "$nbrb10 billets de 10€ $nbrb5 billets de 5€ $nbrp2 pièce de 2€ $nbrp1 pièce de 1€";
}
echo change(152,200)
?>