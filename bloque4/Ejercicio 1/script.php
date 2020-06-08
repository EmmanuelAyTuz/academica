<?php
    $p = $_POST['password'];
    if ($p == 'hola'){
        echo '<h1>Bienvenido</h1>';
        echo '<a href="index.html">Regresar</a>';
    } else {
        if ($p == ''){
            sendmsg('No haz enviado nada...');
        } else {
            sendmsg('Contraseña incorrecta...');
        }
        //header("location:index.html");
    }

    function sendmsg($sms){
        echo '<script>
                alert("' , $sms , '"); window.history.back();
              </script>';
    }
?>