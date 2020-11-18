<?php

include 'header.php';
?>
<p class="text-center h4"><?php
//Boucle FOR qui se répète de 0 à 300 qui ajoute +1 a chaque passage(++)
for($i= 0; $i <= 300; $i++)
{
    if($i % 2 != 0)//nombre divisé par 2 est différent de 0
    {
     echo  $i . ', ';
    }
}
?></p>

<?php include 'footer.php';