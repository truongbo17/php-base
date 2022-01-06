<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8c120612e84df301eebc4ec464d14cfc
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Truongbo\\Autoload\\' => 18,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Truongbo\\Autoload\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8c120612e84df301eebc4ec464d14cfc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8c120612e84df301eebc4ec464d14cfc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8c120612e84df301eebc4ec464d14cfc::$classMap;

        }, null, ClassLoader::class);
    }
}