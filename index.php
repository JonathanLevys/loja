<?php
    require './lib/autoload.php';

    $smarty = new Template();



   // Valores para o template
$smarty-> assign('NOME' , 'JONATHAN');

$smarty -> display('index.html');
?>