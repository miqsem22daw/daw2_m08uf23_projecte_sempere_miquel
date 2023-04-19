<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit991bce4b0b5a6cba7bde28a7f7a01864
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Laminas\\Ldap\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Laminas\\Ldap\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-ldap/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit991bce4b0b5a6cba7bde28a7f7a01864::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit991bce4b0b5a6cba7bde28a7f7a01864::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
