<?php

$valor = $_GET['valor'];

echo $valor;

if($valor>=200){
    echo "<h2>Produto de alto custo!</h2>";
}else{
    echo "<h2>Produto de baixo custo!</h2>";
}

?>