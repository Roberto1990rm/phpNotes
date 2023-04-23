<?php

//Variables: siempre empiezan con $_ "$_var" o $+letra "$varUno". 
$varUno = 6;
$varDos = $varUno + 3;
$varString = "hola -> $varDos";

//tipos de datos simples
$number = 123;
$numberDecimales = 123.45;
$varString = "hola";
$varBooleano = 1; //0 //true or false.

//tipos de datos complejos son los simples agrupados. En php pueden ser del mismo tipo o no.

$array = [1,2,3,4,"hola"]; //se usa este actualmente.
//$otroArray = array (); //poco uso, versiones pasadas.

//print_r ($array);// print_r es como eco o var_dump pero para objetos sencillos.Devuelve posicion de cada valor más el valor.
//var_dump($array);// devuelve tipo de dato (string, int... y valor).

//la diferencia entre var_dump y prinr_r es que con var_dump no puedo asignar el valor; ejmplo, $a = var_dump($array), daría un error. Pero con print_r se podría imprimir e incluso concatenar. Por ejmplo;
//$a = "el valor de print r es -> " . print_r ($array, true);//no es muy utilizado. Se necesita añadir true.
//echo $a;
//Concatenación con Var_dump
$array = [1, 2, 3, 4, "hola"];
//echo "El valor de var_dump es: " . var_dump($array); //averiguar porque devuelve primero array y depsues "el valor de ..."

//Tenemos tb las CONTANTES y van siempre en mayúsculas. No pueden volver a utilizarse.

const VALOR = 123;
define ('OTRA_CONSTANTE', 567);
//echo OTRA_CONSTANTE;
//echo ("el valor es " . VALOR . "\n");

//ARRAYS bidimensionales: no pueden hacerse con php.

//ARRAYS  asociativo.  conjunto de claves y valor. Por ejemplo, coches.
$arrayAsociativo = [
    "Marca" => 'Renault',
    "Modelo" => 'Megane',
    "Combustible" => 'Diesel',
    "Año" => '1990'
];
//$arrayAsociativo["Combustible"] = 'Gasolina';
//var_dump($arrayAsociativo);


//operaciones. Modulo: modulo y resto es lo mismo. Por ejemplo:
$vasModulo = ($varUno % 5);
//echo $vasModulo;

//operaciones. Exponente de: //poco uso//

$vasPotencia = ($varUno ** 3);
//echo $vasPotencia;


//operaciones. Raíz cuadrada. Ejemplo:  //poco uso//

$varRaizCuadrada = ($varUno ** (1/2) );
$varRaizCubica = (27 ** (1/3));
//echo "la raíz cuadrada de 6 es " . $varRaizCuadrada . "\n";
//echo "la raíz cúbica de 27 es " . $varRaizCubica . "\n";
//operadores lógicos y comparación. Lo explica después de IF.

if ($varUno == $varDos) {
    //echo "el valor de varUno es igual al valor de varDos ";
} else 
{
    //echo "el valor de varUno es diferente al valor de varDos ";
}

//Operadores

$var1 = 1;
$var2 = "1";

if ($var1 === $var2){
    //echo "var1 es igual que var2\n";
}
else {
    //echo "var1 es distinto a var2\n";
} 
//devolverá que los dos son iguales aunque uno es int y otro string. Para comparar tipo de dato y no solo el valor ===.

//operacion compleja:
if (!($var1 === $var2)| ($var1 == 1)){
    //echo "Operacion compleja OR\n";
}
else {
    //echo "var1 es distinto a var2\n";
}  
// | es como el or. | con este se cumple una de las condiciones.
// & es como and y tiene que cumplir las dos condiciones el if para echo.
// abreviados. son || y &&, son igual pero cuando obtienen un resultado verdadero no continua evaluando.

//concatenar en PHP.
$nombre = "Juan";
$edad = 25;
$saludo = " Hola $nombre, tienes $edad años.";
//echo $saludo;

$nombre1 = "Juan";
$edad1 = 25;
$saludo1 = "Hola " . $nombre . ", tienes " . $edad . " años.";
//echo $saludo1;


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

//while ($edad <= 21) {
    //echo "vas por el número " . $edad++ . "\n";
//};

//Tenemos también el do while. Diferencia, el while comprueba primero y do while al final. Se utiliza poco.

//do {
    # code...
//} //while ($a <= 10);

//ciclo For muy utilizado igual que en JS.
//$i = 0;
//for ($i=0; $i <= 3 ; $i++) {
    //echo "el número " . $i . " es menor que 3 ";
//} 

//FOR CON COUNT/ sizeof (los dos son iguales).


$arrayDos = ['iphone','samsung','lg','otros'];

//for ($i = 0; $i < count($arrayDos); $i++){
    echo "en la posición $i está el valor " . $arrayDos[$i] . "\n";
//}










?>