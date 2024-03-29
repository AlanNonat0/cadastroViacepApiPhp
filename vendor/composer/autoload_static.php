<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2891e5b5d23bda269db06dcbb1699cc6
{
    public static $files = array (
        '81a58e858e14e0d2b01de20c54cba6a0' => __DIR__ . '/../..' . '/config/config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Data\\' => 5,
        ),
        'C' => 
        array (
            'CoffeeCode\\Router\\' => 18,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Data\\' => 
        array (
            0 => __DIR__ . '/../..' . '/data',
        ),
        'CoffeeCode\\Router\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffeecode/router/src',
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2891e5b5d23bda269db06dcbb1699cc6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2891e5b5d23bda269db06dcbb1699cc6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2891e5b5d23bda269db06dcbb1699cc6::$classMap;

        }, null, ClassLoader::class);
    }
}
