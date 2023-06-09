<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit7a20103dd60ad1605e819e6c2c7b2116
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit7a20103dd60ad1605e819e6c2c7b2116', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit7a20103dd60ad1605e819e6c2c7b2116', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit7a20103dd60ad1605e819e6c2c7b2116::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
