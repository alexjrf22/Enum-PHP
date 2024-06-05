<?php

declare(strict_types=1);

use Alex\PhpEnum\ColoridoInterface;
use Alex\PhpEnum\Colors;
use Alex\PhpEnum\Naipe;
use Alex\PhpEnum\Suit;
use Alex\PhpEnum\Tamanho;

require_once __DIR__ . '/vendor/autoload.php';

echo Naipe::Copas->forma();


/*
echo Tamanho::Enorme()->name;

print_r(Suit::values());

echo Tamanho::deComprimento(cm: 102)->name;

print_r(value: Naipe::cases()); // Cases mostra um array com todos os case da enum

function pintar(ColoridoInterface $colorido)
{
    echo "Pintando a cor {$colorido->cor()}" . PHP_EOL;
}

//misturarCores(Colors::Red);
pintar(colorido: Naipe::Ouros);
echo Naipe::Ouros->forma();




$status = Naipe::from('C');
$naipe = Naipe::tryFrom('Y') ?? 'Carta Não existe';
var_dump($naipe);

echo Naipe::Espadas->value;

function paintColors(Colors $colors)
{
    echo "Pintando de: {$colors->getColor()}" . PHP_EOL;
}

paintColors(Colors::Red);
paintColors(Colors::Blue);

enum são um tipo especial de objetos

function pegarUmaCarta(Naipe $naipe)
{
    echo 'funcionou';
}

echo Naipe::Espadas->name . PHP_EOL;
echo gettype(Naipe::Espadas->name); 


//$val = Naipe::Ouros;

//pegarUmaCarta($val);//

//$a= Naipe::Espadas;
//$b Naipe::Espadas;

//v_dump ($a instanceof $b);

*/