<?php
    $pti = $_GET['productId'];
    $pri = $_GET['providerId'];
    $pn = $_GET['productName'];
    $pp = $_GET['productPrice'];
    $pd = $_GET['productDesc'];

    $connection = mysqli_connect("localhost", "root", "") or die("<script>alert('Error de conexión.'); window.history.back();</script>");
    mysqli_select_db($connection, "bloque5") or die("<script>alert('Error en la base de datos.'); window.history.back();</script>");
    if(($pti || $pri || $pn || $pp || $pd) != ""){
        $sql = "INSERT INTO products(product_id, provider_id, product_name, product_price, product_desc) VALUES('$pti', '$pri', '$pn', '$pp', '$pd')";
        mysqli_query($connection, $sql) or die("<script>alert('Error en los datos.'); window.history.back();</script>");
        mysqli_close($connection);
        echo("<script>alert('Datos registrados correctamente.'); window.history.back();</script>");
    }  else {
        echo "<script>alert('Campo(s) en blanco'); window.history.back();</script>";
    }
?>
