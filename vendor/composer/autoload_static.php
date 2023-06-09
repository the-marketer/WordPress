<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticWpMktr
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WpMktr\\Tracker\\' => 15
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WpMktr\\Tracker\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Tracker',
        )
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticWpMktr::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticWpMktr::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticWpMktr::$classMap;

        }, null, ClassLoader::class);
    }
}
