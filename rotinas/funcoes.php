<?php
//Informar o local do projeto
echo date_default_timezone_get();
echo "<br>";
date_default_timezone_set("America/Sao_Paulo");
echo date_default_timezone_get();
echo "<br>";

function escreva_texto(){
echo "<h4 style='text-align: center;'>Minha primeira função em PHP</h4>";
}

function escreva_texto2($qualquer_coisa){
echo "<h4 style='text-align: center;'>$qualquer_coisa</h4>";
}

function hoje(){
$agora = date('d/m/Y H:i');
echo "<h4 style='text-align: center;'>$agora</h4>";
}

function pulaLinha($numero){
    // if($numero < 1){
    //     echo "-<br>";
    // } else {
    //    for($i=1; $i <= $numero; $i++){
    //     echo ".<br>";
    //    }
    // }
        do{
            echo "<br>";
            $numero--;
        }while($numero >= 1);

}

function soma($num1, $num2){
    $total = $num1 + $num2;
    echo "<h4 style='text-align: center;'>A soma de $num1 + $num2 = $total </h4>";
    pulaLinha(0);
}

function soma2(){
    $valores = func_get_args();
    $qtd1 = count($valores);
    $qtd2 = func_num_args();
    $total = 0;
    for($i =0; $i < $qtd1; $i++){
    $total += $valores[$i];
    echo $valores[$i].( $i == $qtd1 -1 ? " = " :  " + "); 
    }
    echo "$total";
}

function divisao($a, $b){
    if($b == 0){        
    echo "ERRO";    
    } else{
        $total = $a / $b;
    echo "Total da divisão entre $a e $b é: ". $total;
    }
}
function multi($a, $b){
    $total = $a * $b;
    echo "A multiplicação de $a por $b é: ". $total;
    
}
function subtracao($a, $b){
    $total = $a-$b;
    echo "$total";

}
