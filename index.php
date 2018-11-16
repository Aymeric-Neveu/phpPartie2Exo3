<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
  </head>
  <body>
    <?php
    $gender="Homme";
    $age="15";
    if ($age <= 17 && $gender == "Homme"){
      echo " Vous etes un homme et vous êtes mineur";
    }
    elseif ($age >= 17 && $gender == "Homme"){
      echo " Vous êtes un homme et vous êtes majeur";
    }
    elseif ($age <= 17 && $gender == "Femme"){
      echo " Vous êtes une femme et vous êtes mineur";
    }
    else{
      echo " Vous êtes une femme et vous êtes majeur";
    }
    ?>
  </body>
