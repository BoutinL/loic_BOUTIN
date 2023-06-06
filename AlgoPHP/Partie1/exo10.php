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
    $rendre = $verse-$payer;
    echo "Montant à payer : $payer €<br/>";
    echo "Montant versé : $verse €<br/>";
    echo "Reste à payer : $rendre €<br/>";
    echo "********************************<br/>";
    $b10 = 0;
    $b5 = 0;
    $p2 = 0;
    $p1 = 0;
    switch (true){
        case $rendre >= 10:
            $rendre -10;
            $b10++;
        case $rendre <= 9 && $rendre >= 5:
            $rendre - 5;
            $b5++;
        case $rendre <= 4 && $rendre >= 2:
            $rendre -2;
            $p2++;
        case $rendre <= 1:
            $rendre -1;
            $p1++;
    }
    echo "Rendue de monnaie:<br/>";
    echo "$b10 billets de 10€ $b5 billets de 5€ $p2 pièce de 2€ $p1 pièce de 1€";
}
echo change(152,200)
?>