<?php
    echo "<pre>";
    print_r($_POST);
    echo "<pre>";

    //montagem do texto
    $titulo = str_replace( '#', '-' , $_POST['titulo']);
    $categoria = str_replace( '#', '-' , $_POST['categoria']);
    $descricao = str_replace( '#', '-' , $_POST['descricao']);

    //implode ('#' , $_POST);
    
    $text = $titulo . '#' .  $categoria . '#' . $descricao . PHP_EOL;//php end of line

    //abre o aquivo
    $arquivo = fopen('arquivo.txt' , 'a');
    //escrever no arquivo
    fwrite($arquivo , $text);
    //fechar o arquivo
    fclose($arquivo);

    header('Location: colocar_duvida.php');


    //echo $text;


?>