<?php
    require './lib/autoload.php';

    $smarty = new Template();
    Rotas::get_pagina();



   // Valores para o template
$smarty -> assign('NOME' , 'JONATHAN');

$smarty -> display('index.html');
?>