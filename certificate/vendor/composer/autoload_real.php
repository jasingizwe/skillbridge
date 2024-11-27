<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit7bdbac478d5303b7b89aa39d227ab713
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

        spl_autoload_register(array('ComposerAutoloaderInit7bdbac478d5303b7b89aa39d227ab713', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit7bdbac478d5303b7b89aa39d227ab713', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit7bdbac478d5303b7b89aa39d227ab713::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
