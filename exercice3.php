<?php
  function number($numberOne, $numberTwo){ // function avec 2 paramètres
      $text= '';
        if ($numberOne < $numberTwo){// condition "si" numberOne plus petit que numberTwo
            $text = 'Le premier nombre est plus petit';
        }
        elseif ($numberOne > $numberTwo){// condition "Sinon si" numberOne plus grand que numberTwo 
            $text = 'Le premier nombre est plus grand';
        }
        else{// condition "sinon" les 2 sont identiques
            $text = 'Les deux nombres sont identiques';
        }
        return $text;// texte du "return"
    }
    $result = number(11,11);// appel de la function number avec deux paramètres et le return inclus
 
include 'header.php';//inclusion de l'header(navbar)
?>

    <p class="text-center h2">
        <?= $result ; ?><!--affichage du resultat de la function number -->
    </p>

<?php include 'footer.php';//inclusion du footer