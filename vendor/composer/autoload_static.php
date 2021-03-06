<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit806e29b44fe94ff5bf7d9d7109b0fbeb
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'Omerfdmrl\\Lang\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Omerfdmrl\\Lang\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit806e29b44fe94ff5bf7d9d7109b0fbeb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit806e29b44fe94ff5bf7d9d7109b0fbeb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit806e29b44fe94ff5bf7d9d7109b0fbeb::$classMap;

        }, null, ClassLoader::class);
    }
}
