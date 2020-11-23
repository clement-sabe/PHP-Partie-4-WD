<?php
 function congrats(){
        return 'Bravo !';
    }
    $congratulation = congrats();
include 'header.php';
?>
<h1>essai</h1>
    <p class="text-center h2">
        <?= $congratulation ; ?>
    </p>
<?php include 'footer.php';