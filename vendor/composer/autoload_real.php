<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitb8ab0b38ceb3a051c49e2815dd8eecf6
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

        spl_autoload_register(array('ComposerAutoloaderInitb8ab0b38ceb3a051c49e2815dd8eecf6', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitb8ab0b38ceb3a051c49e2815dd8eecf6', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitb8ab0b38ceb3a051c49e2815dd8eecf6::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
