<?php

    $erros = array();
    $login = mysqli_scape_string($connect, $_POST['login']);

    if(empty($login):
        $erros[] = "<li> O campo login/senha precisa ser preenchido </li>";
    else:
        $sql = "SELECT login FROM usuarios WHERE login = '$login'";
        $resultado = mysqli_query($connect, $sql);
        if(mysqli_num_rows($resultado) > 0):
        
        else:
            $erros[] = "<li>Usuário inexistente</li>";
        endif;
    endif;

?>