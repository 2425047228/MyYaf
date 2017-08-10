<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3b7a88426ace13927fdd7ddcd5128773
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Medoo\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Medoo\\' => 
        array (
            0 => __DIR__ . '/..' . '/catfan/medoo/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3b7a88426ace13927fdd7ddcd5128773::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3b7a88426ace13927fdd7ddcd5128773::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}