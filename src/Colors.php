<?php

declare(strict_types=1);
namespace Alex\PhpEnum;

enum Colors 
{
    case Red;
    case Blue;
    case Green;
 
    public function getColor(): string
    {
        return $this->name; //propriedade name já vem incluso e irá mostrar o nome da case ou seja -> echo case Collors::Red->name; imprime 'Red'.
    }

    public function mixColor(): string 
    {
        return match($this){
            Colors::Red, Colors::Green => 'Amarelo',
            Colors::Red, Colors::Blue => 'Magenta',
            Colors::Green, Colors::Blue => 'Ciano'
        };
    }



}