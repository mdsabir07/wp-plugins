<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1a9cbaf719f69b0aaa01b7de56c66fc6
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'CoDer\\Msiit\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'CoDer\\Msiit\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1a9cbaf719f69b0aaa01b7de56c66fc6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1a9cbaf719f69b0aaa01b7de56c66fc6::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
