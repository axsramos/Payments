<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0ece7a4b22dd2ae72ab986a9ee35ba9a
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mpdf\\QrCode\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mpdf\\QrCode\\' => 
        array (
            0 => __DIR__ . '/..' . '/mpdf/qrcode/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0ece7a4b22dd2ae72ab986a9ee35ba9a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0ece7a4b22dd2ae72ab986a9ee35ba9a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0ece7a4b22dd2ae72ab986a9ee35ba9a::$classMap;

        }, null, ClassLoader::class);
    }
}
