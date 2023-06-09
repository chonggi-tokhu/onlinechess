<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf7c0e120d4822fd07b7bb5f1a579c2c8
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Ryanhs\\Chess\\' => 13,
        ),
        'H' => 
        array (
            'Hehehe\\Hehehe\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ryanhs\\Chess\\' => 
        array (
            0 => __DIR__ . '/..' . '/ryanhs/chess.php/src',
        ),
        'Hehehe\\Hehehe\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf7c0e120d4822fd07b7bb5f1a579c2c8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf7c0e120d4822fd07b7bb5f1a579c2c8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf7c0e120d4822fd07b7bb5f1a579c2c8::$classMap;

        }, null, ClassLoader::class);
    }
}
