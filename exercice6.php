<?php
include 'header.php';
?>

<p class="text-center h2"><?php
for($i=1 ; $i <=100 ; $i++) //boucle for de 1 à 100, à chaque tour +1
{
    if($i%3 == 0 && $i%5 != 0){// À chaque tour si la division par 3 du nombre (i) = 0 
    //et la division par 5 est différent à 0 j'affiche fizz
    
      echo 'Fizz, ';  
    }
    elseif($i%5 == 0 && $i%3 != 0){// À chaque tour si la division par 5 du nombre (i) = 0 
        //et la division par 3 est différent à 0 j'affiche buzz
        echo 'Buzz, ';
    }
    elseif($i%3 == 0 && $i%5 == 0){//À chaque tour si la division par 3 du nombre (i) = 0 
        //et la division par 5 est égale à 0 j'affiche Fizzbuzz
        echo 'FizzBuzz, ';
    }
    else{// sinon j'affiche le nombre
        echo $i . ', ';
    }
}
?></p>
<?php include 'footer.php';