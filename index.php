<?php
    require './lib/autoload.php';

    $smarty = new Smarty();

    $smarty-> setTemplateDir('view/');
    $smarty-> setCompileDir('view/compile/');
    $smarty-> setCacheDir('view/cache/');

    $smarty -> display('index.html');


// Valores para o template
$smarty-> assign('NOME' , 'JONATHAN');

?>