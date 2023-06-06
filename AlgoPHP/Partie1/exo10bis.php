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
    $tableaurendre = array(0, 0, 0, 0);
    $rendre = $verse-$payer;
    echo "Montant à payer : $payer €<br/>";
    echo "Montant versé : $verse €<br/>";
    echo "Reste à payer : $rendre €<br/>";
    echo "********************************<br/>";
    while($rendre <= 0){
        switch ($rendre){
            case $rendre >= 10:
                $rendre - 10;
                $tableaurendre[0]++;
            case $rendre <= 9 && $rendre >= 5:
                $rendre - 5;
                $tableaurendre[1]++;
            case $rendre <= 4 && $rendre >= 2:
                $rendre - 2;
                $tableaurendre[2]++;
            case $rendre <= 1:
                $rendre - 1;
                $tableaurendre[3]++;
        }
    }
    echo "Rendue de monnaie:<br/>";
    echo "$tableaurendre[0] billets de 10€ $tableaurendre[1] billets de 5€ $tableaurendre[2] pièce de 2€ $tableaurendre[3] pièce de 1€";
}
echo change(152,200)
?>