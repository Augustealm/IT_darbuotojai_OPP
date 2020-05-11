<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticIniteeace6855e757853f6607b374e540882
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MYAPP\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MYAPP\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticIniteeace6855e757853f6607b374e540882::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticIniteeace6855e757853f6607b374e540882::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
