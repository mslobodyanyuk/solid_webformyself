<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit09c7135813add49bcf8b726bbe382dbe
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
            0 => __DIR__ . '/../..' . '/src/Classes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit09c7135813add49bcf8b726bbe382dbe::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit09c7135813add49bcf8b726bbe382dbe::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}