<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit345948afce791d79b945d6d5f06d2ce2
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

        spl_autoload_register(array('ComposerAutoloaderInit345948afce791d79b945d6d5f06d2ce2', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit345948afce791d79b945d6d5f06d2ce2', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit345948afce791d79b945d6d5f06d2ce2::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
