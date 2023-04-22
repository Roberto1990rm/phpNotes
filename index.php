<?php

//Variables: siempre empiezan con $_ "$_var" o $+letra "$varUno". 
$varUno = 2;
$varDos = $varUno + 3;
$varString = "hola -> $varDos";

//tipos de datos simples
$number = 123;
$numberDecimales = 123.45;
$varString = "hola";
$varBooleano = 1; //0 //true or false.

//tipos de datos complejos son los simples agrupados. En php pueden ser del mismo tipo o no.

$array = [1,2,3,4, "hola"]; //se usa este actualmente.
$otroArray = array ();

print_r ($array);// print_r es como eco o var_dump pero para objetos sencillos.Devuelve posicion de cada valor más el valor.
var_dump($array);// devuelve tipo de dato (string, int... y valor).





//var_dump($varString);
//echo "$varDos \n";
//var_dump ($varDos);devuelve int(5)
//var_dump($varString); devuelve string(6) del string "hola\n\n". cuenta los espacios. Si usas "" interpreta con '' devuelve lo escrito dentro.


//$varUno = 50;
//$varDos = 5;
//*Condition: "if"
//if ($varUno == $varDos)
//echo "VarUno es igual que var 
//dos\n";
//else
//echo "VarDos y VarUno son 
//diferentes\n";//


//*Condition: "if elseif elseif"
//if ($varUno == 0){
//    echo "cero";
//}
//elseif ($varUno == 1){
//   echo "Uno";
//}
//elseif ($varUno == 2){
//   echo "dos";
//}
//else {
    //echo "all number is welcome";
//}


//condition: "switch"  
//switch ($varUno) {
    //case $varUno == 0:
        //echo "cero\n";
        //break;
    //case $varUno == 1:
        //echo "uno\n";
        //break;
        //default: 
        //echo "otro número \n";
//}

//*if abreviado  MUY UTILIZADO.
$numero = 5;
//echo ($numero > 0) ? "El número es positivo." : "El número es negativo o cero.";

//*abreviado if, elseif, else MUY UTILIZADO.
$edad = 18;
//echo ($edad < 12) ? "Eres un niño." : 
     //(($edad < 18) ? "Eres adolescente." : "Eres adulto.");




















?>