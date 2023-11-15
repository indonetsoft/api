<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit5cc8a7b8710b59edca9d915b11b374ec
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit5cc8a7b8710b59edca9d915b11b374ec', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit5cc8a7b8710b59edca9d915b11b374ec', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        \Composer\Autoload\ComposerStaticInit5cc8a7b8710b59edca9d915b11b374ec::getInitializer($loader)();

        $loader->register(true);

        return $loader;
    }
}
