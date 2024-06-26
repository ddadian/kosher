<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit324a8daf281f86e89292c1621cb9b5ff
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

        spl_autoload_register(array('ComposerAutoloaderInit324a8daf281f86e89292c1621cb9b5ff', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit324a8daf281f86e89292c1621cb9b5ff', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit324a8daf281f86e89292c1621cb9b5ff::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
