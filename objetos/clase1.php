<?php
class Person {
    public $name;

    public function hablar () {
        echo "Hola, estoy hablando\n";
        return "método hablar";
    }
}
$yo = new Person ();
$yo -> name = 'David';

$tu = new Person ();
$tu-> name = 'Roberto';

echo "yo soy " . $yo -> name . "\n"; $yo->hablar();

//echo "tu " . $tu -> name . "\n";



?>