<?php
$cep = $_POST['c'];



    $cep = substr($cep,5,8);


echo "Últimos três números: $cep";
?>