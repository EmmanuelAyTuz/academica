<?php
    $a = $_POST['ma1'];
    $b = $_POST['ma2'];
    $c = $_POST['ma3'];

    $pmd= ($a + $b + $c) / 3;

    if ($pmd > -1 && $pmd < 70){
        msg ('Reprobaste');
    }
    
    if ($pmd > 69 && $pmd < 80){
        msg ('Suficiente');
    }

    if ($pmd > 79 && $pmd < 90){
        msg ('Bien');
    }

    if ($pmd > 89 && $pmd < 100){
        msg ('Muy bien');
    }

    if ($pmd == 100){
        msg ('Excelente');
    }

    function msg ($txt){
        echo
       '<script>
            alert("Mensaje: '. $txt. '");
            window.history.back();
        </script>';
    }
?>