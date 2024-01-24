<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1b720c111498993e710093d4fd2f1d3a
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

    public static $classMap = array (
        'App\\Admin\\Account' => __DIR__ . '/../..' . '/app/Admin/Account.php',
        'App\\Router' => __DIR__ . '/../..' . '/app/Router.php',
        'App\\Users\\Account' => __DIR__ . '/../..' . '/app/Users/Account.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1b720c111498993e710093d4fd2f1d3a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1b720c111498993e710093d4fd2f1d3a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1b720c111498993e710093d4fd2f1d3a::$classMap;

        }, null, ClassLoader::class);
    }
}
