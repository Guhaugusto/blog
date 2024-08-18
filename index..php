
    <?php 
    require_once'sistema/configuracao.php';
    include_once'helpers.php';

    $texto = 'texto para resumir vindo de uma variavel';

    echo saudacao();
    echo '<hr>';
    echo resumirTexto($texto, 50);
    
    ?>
