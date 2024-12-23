<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd9c0725c50871c3e836cfd15e94f5f91
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Dragonzap\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Dragonzap\\' => 
        array (
            0 => __DIR__ . '/..' . '/dragonzap/neuralnetwork/src/Dragonzap',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd9c0725c50871c3e836cfd15e94f5f91::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd9c0725c50871c3e836cfd15e94f5f91::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd9c0725c50871c3e836cfd15e94f5f91::$classMap;

        }, null, ClassLoader::class);
    }
}
