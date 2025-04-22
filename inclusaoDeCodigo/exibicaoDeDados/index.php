<?php
    include "arquivo.php";
?>

<?php  if ($userName == "thiago") {?>
    <h1><?= $titulo . ", " . $userName; ?></h1>
<?php } else { ?> 
    <h1><?= "Usuário(a) " . $userName . " não registrado"; ?></h1>
<?php } ?>
