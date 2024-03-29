<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbeaf800066aaac9b74411d4d1830f5e1
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static $prefixesPsr0 = array (
        'j' => 
        array (
            'johnpbloch\\Composer\\' => 
            array (
                0 => __DIR__ . '/..' . '/johnpbloch/wordpress-core-installer/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbeaf800066aaac9b74411d4d1830f5e1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbeaf800066aaac9b74411d4d1830f5e1::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitbeaf800066aaac9b74411d4d1830f5e1::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitbeaf800066aaac9b74411d4d1830f5e1::$classMap;

        }, null, ClassLoader::class);
    }
}
