<h1>Exercice 7</h1>
<p>
    Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :
    Poussin : entre 6 et 7 ans
    Pupille : entre 8 et 9 ans
    Minime : entre 10 et 11 ans
    Cadet : à partir de 12 ans
    Si la catégorie n’est pas gérée, merci de le préciser.
</p>
<h2>Résultat</h2>
<?php
function categorie(int $age){
    if($age < 6){
        return "<p>Il n'y a pas de catégorie pour cet age</p>";
    }else if($age >= 6 && $age <= 7){
        return "<p>Catégorie Poussin</p>";
    }else if($age >= 8 && $age <= 9){
        return "<p>Catégorie Pupille</p>";
    }else if($age >= 10 && $age <= 11){
        return "<p>Catégorie Minime</p>";
    }else{
        return "<p>Catégorie Cadet</p>";
    }
}
?>