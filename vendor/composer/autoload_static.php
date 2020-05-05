<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbb8f5960a32089a1e65cad5f306d33eb
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'GPH\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'GPH\\' => 
        array (
            0 => __DIR__ . '/..' . '/giphy/giphy-php-client/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbb8f5960a32089a1e65cad5f306d33eb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbb8f5960a32089a1e65cad5f306d33eb::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}