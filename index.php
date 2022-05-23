<?php

//declarou uma variavel = atribuiu a ela uma lista
$categorias = [];
// populamos a lista com os valores
$categorias [] = 'infantil';
$categorias [] = 'adolescente';
$categorias [] = 'adulto';
$categorias [] = 'idoso';

//echoamos essa lista
//print_r($categorias);


$nome = 'Eduardo';
$idade=8;

//var_dumpp ; mostra o tipo da variavel

//var_dump($nome);
//var_dump($idade);

if ($idade >=6 && $idade <= 12){
    for ($i = 0; $i <= count($categorias);$i++){
        if($categorias[$i] == 'infantil')
            echo "o nadador ".$nome." Compente na categoria infantil";
    }
    
}else if($idade >=13 && $idade < 18){
    echo "ADOLESCENTE";
}else{
    echo "ADULTO";
}