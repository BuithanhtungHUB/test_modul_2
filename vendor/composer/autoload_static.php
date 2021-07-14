<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4eb45ee904e6329ecb7c69bc74a8a18a
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4eb45ee904e6329ecb7c69bc74a8a18a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4eb45ee904e6329ecb7c69bc74a8a18a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}