<?php
/*
- Créer un script php qui permet de générer un nombre aléatoire compris entre x et y
- Coté front, créer un formulaire acceptant deux valeurs : x et y
- Envoyer le formulaire au script php et retourner le nombre aleatoire généré


- Pour générer un nombre aléatoire en PHP , vous pouvez utiliser la méthode mt_rand()

http://php.net/manual/fr/function.mt-rand.php
*/

?>

<form action="index.php" method="post" >
    <input name="number1" id="number1">
    <input name="number2" id="number2">

    <input type="submit" value="Envoyer">
</form>


<?php

if (isset($_POST['number1'])&&isset($_POST['number2'])){
    $number1 = (int)$_POST['number1'];
    $number2 = (int)$_POST['number2'];
//  echo "$number1 $number2";
    echo mt_rand($number1,$number2);
}


?>