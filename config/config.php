<?php

define("KEY_TOKEN", "APR.wqc-454*");
define("CLIENT_ID", "AX7pQTEtAt2szadhq-OkMLLshcrRv6wifQsySGrjQ70gvj1iiZpGt75HRhmClSHT37MVbuN-OI75uyRm");

session_start();

$num_cart = 0;
if(isset($_SESSION['carrito']['productos'])){
    $num_cart = count($_SESSION['carrito']['productos']);
}

?>