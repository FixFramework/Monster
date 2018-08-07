<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit620709ee802ca6dc14bdaed229e8f671
{
    public static $prefixLengthsPsr4 = array (
        'f' => 
        array (
            'fixframework\\' => 13,
        ),
        'F' => 
        array (
            'Fix\\' => 4,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'fixframework\\' => 
        array (
            0 => __DIR__ . '/../../..' . '/Fix/Packages',
        ),
        'Fix\\' => 
        array (
            0 => __DIR__ . '/../../..' . '/Fix',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Fix\\Exception\\Error' => __DIR__ . '/../../..' . '/Fix/Exception/Error.php',
        'Fix\\Kernel\\Filter' => __DIR__ . '/../../..' . '/Fix/Kernel/Filter.php',
        'Fix\\Kernel\\Kernel' => __DIR__ . '/../../..' . '/Fix/Kernel/Kernel.php',
        'Fix\\Kernel\\Url' => __DIR__ . '/../../..' . '/Fix/Kernel/Url.php',
        'Fix\\Middleware\\Middleware' => __DIR__ . '/../../..' . '/Fix/Middleware/Middleware.php',
        'Fix\\Mode\\Request' => __DIR__ . '/../../..' . '/Fix/Mode/Request.php',
        'Fix\\Packages\\Assets\\assets' => __DIR__ . '/../../..' . '/Fix/Packages/Assets/assets.php',
        'Fix\\Packages\\Console\\console' => __DIR__ . '/../../..' . '/Fix/Packages/Console/console.php',
        'Fix\\Packages\\Console\\map' => __DIR__ . '/../../..' . '/Fix/Packages/Console/map.php',
        'Fix\\Packages\\Console\\request' => __DIR__ . '/../../..' . '/Fix/Packages/Console/request.php',
        'Fix\\Packages\\Database\\database' => __DIR__ . '/../../..' . '/Fix/Packages/Database/database.php',
        'Fix\\Packages\\Model\\model' => __DIR__ . '/../../..' . '/Fix/Packages/Model/model.php',
        'Fix\\Router\\Router' => __DIR__ . '/../../..' . '/Fix/Router/Router.php',
        'Fix\\Settings\\App' => __DIR__ . '/../../..' . '/Fix/Settings/App.php',
        'Fix\\Settings\\Kernel' => __DIR__ . '/../../..' . '/Fix/Settings/Kernel.php',
        'Fix\\Support\\Header' => __DIR__ . '/../../..' . '/Fix/Support/Header.php',
        'Fix\\Support\\Json' => __DIR__ . '/../../..' . '/Fix/Support/Json.php',
        'Fix\\Support\\Support' => __DIR__ . '/../../..' . '/Fix/Support/Support.php',
        'Fix\\Support\\Translate' => __DIR__ . '/../../..' . '/Fix/Support/Translate.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit620709ee802ca6dc14bdaed229e8f671::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit620709ee802ca6dc14bdaed229e8f671::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit620709ee802ca6dc14bdaed229e8f671::$classMap;

        }, null, ClassLoader::class);
    }
}
