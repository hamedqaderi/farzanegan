<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit78f15f9f027d102a2949c10fc4bcef25
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Farzanegan\\' => 11,
        ),
        'B' => 
        array (
            'Blog\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Farzanegan\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'Blog\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit78f15f9f027d102a2949c10fc4bcef25::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit78f15f9f027d102a2949c10fc4bcef25::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}