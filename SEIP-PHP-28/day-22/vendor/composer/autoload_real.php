<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitfa4fd8e4bc74c85aa0d4f78d3fc2f11e
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

        spl_autoload_register(array('ComposerAutoloaderInitfa4fd8e4bc74c85aa0d4f78d3fc2f11e', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitfa4fd8e4bc74c85aa0d4f78d3fc2f11e', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitfa4fd8e4bc74c85aa0d4f78d3fc2f11e::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
