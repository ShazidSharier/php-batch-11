<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3742a49d1011c7e96ac52226c1415953
{
    public static $files = array (
        'f5bfea5c6b496029f5211c5bb9385ea1' => __DIR__ . '/../..' . '/app/helpers/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3742a49d1011c7e96ac52226c1415953::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3742a49d1011c7e96ac52226c1415953::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3742a49d1011c7e96ac52226c1415953::$classMap;

        }, null, ClassLoader::class);
    }
}
