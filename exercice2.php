<?php
 function congrats(){
        return 'BRAVO! ' . 'Tu as réussis ! :)';
    }
    $congratulation = congrats();
include 'header.php';
?>
    <p class="text-center h2">
        <?= $congratulation ; ?>
    </p>
<?php include 'footer.php';