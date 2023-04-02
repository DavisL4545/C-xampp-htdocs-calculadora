<?php

class Suma{
    public $n1;
    public $n2;

    public function __construct($n1,$n2)
    {
        $this->n1 = $n1;
        $this->n2 = $n2;

    }


    public function sumar()
    {
        echo "numero 1 es: ".$_POST['numero1'];
        echo "numero 2 es: ".$_POST['numero2'];
    }

}

$total = new Suma();

?>