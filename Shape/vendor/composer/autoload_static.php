<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9d691b2069e7e82ad9746767ef062d3c
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tugas\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tugas\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9d691b2069e7e82ad9746767ef062d3c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9d691b2069e7e82ad9746767ef062d3c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
