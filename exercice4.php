<?php
function civility(){
        $name = 'Ly';
        $firstName = 'Ahmed';
        $age = 50;
        return 'Salut ' . $name . ' ' . $firstName . ' tu as ' . $age . ' ans ! ;)';
    }
    $result = civility();
include 'header.php';
?>
 

    <p class="text-center h2">
        <?= $result; ?>
    </p>

<?php include 'footer.php';