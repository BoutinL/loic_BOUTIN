<h1>Exercice 12</h1>
<p>
A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée (tableau  contenant  clé  et  valeur),  
dire  bonjour  aux  différentes  personnes  dans  leur  langue respective (français ➔«Salut», anglais ➔«Hello», espagnol ➔«Hola»)
Exemple: tableau ➔Mickaël -> FRA, Virgile -> ESP, Marie-Claire -> ENGAffichage:Salut MickaëlHola VirgileHello Marie-Claire
Variante: trier d’abord le tableau par ordre alphabétique du prénomAffichage:Hello Marie-ClaireSalut MickaëlHola Virgile
</p>
<h2>Résultat</h2>
<?php
$tourist = [
    "Mickaêl" => "FRA",
    "Virgile" => "ESP",
    "Marie-Claire" => "ENG",
];
foreach($tourist as $prenom => $langue) {
    if($langue == "FRA") {
        echo "Bonjour $prenom <br/>";
    } elseif($langue == "ENG"){
        echo "Hello $prenom <br/>";
    } else {
        echo "Hola $prenom <br/>";
    }
}
?>