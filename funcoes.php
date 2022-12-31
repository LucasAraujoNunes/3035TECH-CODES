<?php 

/* 
    1) Faça uma função que receba um array composto de [ 1, 2, 3, 4, 5, 6, 6 ], 
    você deverá retornar o segundo maior número deste array.
*/
function maiorNumero(array $array){
    sort($array);
    return $array[sizeof($array)-2];
}
/*
2   ) Faça uma função que receba uma string, você deverá retornar esta string ao contrário.
*/
function reverterStringNativo(string $str){
    return strrev($str);
}

// essa função retorna a string ao contrário e recebe valores com utf8
function reverterStringMinhaFuncao(string $str){
    $string = '';
    for ($i = mb_strlen($str); $i>=0; $i--) {
        $string .= mb_substr($str, $i, 1);
    }
    return $string;
}

function retornaApenasVogais($str){
    $alfabeto = array("b","c","d","f","g","h","j","k","l","m","n","p","q","r","s","t","v","w","x","y","z","B","C","D","F","G","H","J","K","L","M","N","P","Q","R","S","T","V","W","X","Y","Z");
    return str_replace($alfabeto, "", $str);
    
}

function diaDataEspecifica(string $str){

}

$string_teste = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc rhoncus magna viverra finibus ullamcorper.";
$arrayComposto = array(1, 2, 3, 4, 5, 20, -2131231 );
// echo maiorNumero($arrayComposto);
// echo reverterStringNativo($string_teste);
// echo reverterStringMinhaFuncao($string_teste); 
echo retornaApenasVogais($string_teste);

?>