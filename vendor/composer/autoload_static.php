<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdbe92287dcd3bafef494d4c26af54e6c
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alex\\PhpEnum\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alex\\PhpEnum\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdbe92287dcd3bafef494d4c26af54e6c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdbe92287dcd3bafef494d4c26af54e6c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdbe92287dcd3bafef494d4c26af54e6c::$classMap;

        }, null, ClassLoader::class);
    }
}
