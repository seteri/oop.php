<?php

class Fruit{

    protected string $color;
    protected float $weight;

    public function __construct(string $color, float $weight){

        $this->color = $color;
        $this->weight = $weight;
    }

}
class Mango extends Fruit {

    function getArray(): array{

        return ['color'=>$this->color, 'weight'=>$this->weight];

    }


}
$mango = new Mango('red',5.3);
var_dump($mango->getArray());
//-----------------------------------------------------------
echo '------------------------------'. '<br>';

 class Car{
     private string $feri;

     function changeColor(string $feri){
         $this->feri = $feri;
     }

     function getColor(): string
     {
         return $this->feri;
     }
 }

 $manqana = new Car();
 $manqana->changeColor('yellow');
 echo $manqana->getColor();
