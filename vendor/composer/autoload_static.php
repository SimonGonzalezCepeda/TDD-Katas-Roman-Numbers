<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit553cec41e8168915850e51b28bb883e8
{
    public static $fallbackDirsPsr0 = array (
        0 => __DIR__ . '/../..' . '/src',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr0 = ComposerStaticInit553cec41e8168915850e51b28bb883e8::$fallbackDirsPsr0;

        }, null, ClassLoader::class);
    }
}
