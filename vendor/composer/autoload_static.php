<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit213647a8d880e1166f66fa4921d31b97
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'A' => 
        array (
            'Admin\\Portefolio\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Admin\\Portefolio\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit213647a8d880e1166f66fa4921d31b97::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit213647a8d880e1166f66fa4921d31b97::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit213647a8d880e1166f66fa4921d31b97::$classMap;

        }, null, ClassLoader::class);
    }
}
