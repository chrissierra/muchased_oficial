<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd58fdbbb267031b57f48d3231e583f77
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'ctala\\transaccion\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ctala\\transaccion\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd58fdbbb267031b57f48d3231e583f77::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd58fdbbb267031b57f48d3231e583f77::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
