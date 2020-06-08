<?php
    $pri = $_POST['providerId'];
    $prn = $_POST['providerName'];
        
    $connection = mysqli_connect("localhost", "root", "") or die("<script>alert('Error de conexión.'); window.history.back();</script>");
    mysqli_select_db($connection, "bloque5") or die("<script>alert('Error en la base de datos.'); window.history.back();</script>");
    if(($pri || $prn) != ""){
        $sql = "INSERT INTO providers(provider_id, provider_name) VALUES('$pri', '$prn')";
        mysqli_query($connection, $sql) or die("<script>alert('Error en los datos.'); window.history.back();</script>");
        mysqli_close($connection);
        echo("<script>alert('Datos registrados correctamente.'); window.history.back();</script>");
    } else {
        echo "<script>alert('Campo(s) en blanco'); window.history.back();</script>";
    }
    
?>

