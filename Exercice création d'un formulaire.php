<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire assurance</title>
</head>
<body>


<form action="" method="get" class="form-example">

  <div class="form-example">
    <label for="age">Renseigner votre âge: </label>
    <input type="number" name="age" id="age" min="0" required>
  </div>


  <div class="form-example">
    <label for="ancien_permis">Renseigner l'ancienneté du permis: </label>
    <input type="number" name="ancien_permis" id="ancien_permis" min="0" required>
  </div>

  <div class="form-example">
    <label for="nbre_acc">Renseigner le nombre d'accidents: </label>
    <input type="number" name="nbre_acc" id="nbre_acc" min="0" required>
  </div>

  <div class="form-example">
    <label for="ancien_ass">Renseigner l'ancienneté de l'assurance: </label>
    <input type="number" name="ancien_ass" id="ancien_ass" min="0" required>
  </div>

 </br>

  <div class="form-example">
    <input type="submit" value="Valider">
  </div>
</br>

</form>

<?php

$point = 1;
$palier;

$point = ($_GET["nbre_acc"]) * (-1) + 1;

if ($_GET['ancien_permis'] > 2){
    $point = $point + 1;
} 

if ($_GET['age'] > 25){
    $point = $point + 1;
}

if ($point > 0 && $_GET['ancien_ass'] > 5){
    $point = $point + 1;
}

if ($_GET['age'] < 18){
    $point = 0;
}

if ($point < 1){
    $palier = "Pas assurable";
}else if ($point = 1) {
    $palier = "rouge";
    }else if ($point = 2) {
        $palier = "orange";
         }else if ($point = 3) {
             $palier = "vert";
             }else if ($point > 3){
                 $palier = "bleu";
}

echo 'Vous avez droit au tarif '.$palier.".";


?>
    
</body>
</html>