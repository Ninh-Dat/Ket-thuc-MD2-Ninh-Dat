<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf19e0d51556459bf7de93273608e8127
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf19e0d51556459bf7de93273608e8127::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf19e0d51556459bf7de93273608e8127::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf19e0d51556459bf7de93273608e8127::$classMap;

        }, null, ClassLoader::class);
    }
}
