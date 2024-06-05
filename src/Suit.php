<?php declare(strict_types=1);

namespace Alex\PhpEnum;

enum Suit: string
{
    case  Hearts = 'H';
    case Diamonds = 'D';
    case Clubs = 'C';
    case Spades = 'S';
    
    public static function values(): array
    {
        return array_column(self::cases(), column_key:'value');
    }

}