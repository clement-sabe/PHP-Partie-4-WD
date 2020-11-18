<?php
  function number(){
        $numberOne = 9;
        $numberTwo = 9;
        if ($numberOne < $numberTwo){
            return 'Le premier nombre est plus petit';
        }
        elseif ($numberOne > $numberTwo){
            return 'Le premier nombre est plus grand';
        }
        elseif ($numberOne == $numberTwo){
            return 'Les deux nombres sont identiques';
        }
    }
    $result = number();
 
include 'header.php';
?>

    <p class="text-center h2">
        <?= $result ; ?>
    </p>

<?php include 'footer.php';