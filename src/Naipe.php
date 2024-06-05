<?php

namespace Alex\PhpEnum;

enum Naipe: string implements ColoridoInterface
// quando tipifica a enum ela deixa de ser um no-backed e passa a ser uma backed... ou seja poderá atribuir valores aos cases. 
// Suporta valores string e int e não permite union types ou seja string|int
{   
    use Retangulo;
    case Copas = 'C'; // Esse 'C' é o backed
    case Ouros = 'O'; // as enums backed adicionam além do name mais uma propriedade a value que serve para pegar o valor da case.
    case Paus = 'P';
    case Espadas = 'E';

    public function cor(): string
    {
        return match ($this){
            Naipe::Copas, Naipe::Ouros => 'Vermelho',
            Naipe::Paus, Naipe::Espadas => 'Preto',
        };
    }
    
}
