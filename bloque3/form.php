<?php
    $tagName = array(
        "Nombre"=>"firstName",
        "Apellido"=>"lastName",
        "Edad"=>"yearold",
        "Genero"=>"gender",
        "Nivel de estudios"=>"myLevel",
        "Usuario"=>"username",
        "Contraseña"=>"password0",
        "Correo"=>"email",
    );
    foreach ($tagName as $text => $tag) {
        if (isset($_POST[$tag])){
            echo $text.': '.$_POST[$tag].'<br><br>';
        }
    }
?>