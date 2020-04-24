<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcf9ac14b38723ee049c10865788f9e41
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'shaab\\sms\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'shaab\\sms\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcf9ac14b38723ee049c10865788f9e41::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcf9ac14b38723ee049c10865788f9e41::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
