<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6fe05a45f7fd50ced1ed59615949e8b0
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Facebook\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Facebook\\' => 
        array (
            0 => __DIR__ . '/..' . '/facebook/php-sdk-v4/src/Facebook',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6fe05a45f7fd50ced1ed59615949e8b0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6fe05a45f7fd50ced1ed59615949e8b0::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
