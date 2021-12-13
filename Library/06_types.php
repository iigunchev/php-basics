<?php
    $a = false;

    $b = 1;

    $c = 0.95;

    $d = "This is a string";

    $e = array(1, 2, 3, 4, 5);

    $f = NULL;

    // Classes and objects

    class Fruit {
    // Properties
    public $name;
    public $color;
    
    // Methods
    function set_name($name) {
        $this->name = $name;
    }
    function get_name() {
        return $this->name;
    }
    }
    
    $apple = new Fruit();
    $banana = new Fruit();
    $apple->set_name('Apple');
    $banana->set_name('Banana');
    
    echo $apple->get_name();
    echo "<br>";
    echo $banana->get_name();
?>