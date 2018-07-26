<?php
  $ageM = 22 ;
  $ageW = 15;
  $genderM = 'men' ;
  $genderW = 'women';

 ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>exercice3</title>
  </head>
  <body>
    <p><?php
    if ($ageM.$genderM >= 18 ) {
      echo 'Vous êtes un homme et vous êtes majeur';
    }
    else {
      echo 'Vous êtes un homme et vous êtes mineur';
    }
    ?>
    </p>
    <p><?php
    if ($ageW.$genderW >= 18 ) {
      echo 'Vous êtes une femme et vous êtes majeur';
    }
    else {
      echo 'Vous êtes une femme et vous êtes mineur';
    }
    ?>
    </p>
  </body>
</html>
