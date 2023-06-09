<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7a20103dd60ad1605e819e6c2c7b2116
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Benti\\Laravel\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Benti\\Laravel\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7a20103dd60ad1605e819e6c2c7b2116::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7a20103dd60ad1605e819e6c2c7b2116::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7a20103dd60ad1605e819e6c2c7b2116::$classMap;

        }, null, ClassLoader::class);
    }
}
