<?php declare(strict_types=1);

namespace Alex\PhpEnum;

enum Tamanho
{
    case Pequeno;
    case Medio;
    case Grande;

    public static function deComprimento(int $cm): static
    {
        return match(true){
            $cm < 50 => static::Pequeno,
            $cm < 100 => static::Medio,
            default => static::Grande 
        };
    }

    public static function Enorme()
    {
        return self::Grande;
    }

}
