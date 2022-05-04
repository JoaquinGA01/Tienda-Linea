<?php

if(isset($_POST['iD'])){
    $idProducto = $_POST['iD'];
    print($_SESSION['idProductosCarrito']);
    array_push($_SESSION['idProductosCarrito'],$idProducto);
    echo $_SESSION['idProductosCarrito'];
}   
?>