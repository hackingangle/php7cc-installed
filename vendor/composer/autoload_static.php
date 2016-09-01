<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitde0c7e0d0eed271bc3a2754719921c22
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        'fe1bcd0336136e435eaf197895daf81a' => __DIR__ . '/..' . '/nikic/php-parser/lib/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\Finder\\' => 25,
            'Symfony\\Component\\Console\\' => 26,
            'Sstalle\\php7cc\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\Finder\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/finder',
        ),
        'Symfony\\Component\\Console\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/console',
        ),
        'Sstalle\\php7cc\\' => 
        array (
            0 => __DIR__ . '/..' . '/sstalle/php7cc/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Pimple' => 
            array (
                0 => __DIR__ . '/..' . '/pimple/pimple/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitde0c7e0d0eed271bc3a2754719921c22::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitde0c7e0d0eed271bc3a2754719921c22::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitde0c7e0d0eed271bc3a2754719921c22::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
