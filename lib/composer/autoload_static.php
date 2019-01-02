<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6d65a38c484dd7407fdf4b9ff8aae415
{
    public static $files = array (
        'f084d01b0a599f67676cffef638aa95b' => __DIR__ . '/..' . '/smarty/smarty/libs/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Categorias' => __DIR__ . '/../..' . '/model/Categorias.class.php',
        'Conexao' => __DIR__ . '/../..' . '/model/Conexao.class.php',
        'Config' => __DIR__ . '/../..' . '/model/Config.class.php',
        'Produtos' => __DIR__ . '/../..' . '/model/Produtos.class.php',
        'Rotas' => __DIR__ . '/../..' . '/model/Rotas.class.php',
        'Template' => __DIR__ . '/../..' . '/model/Template.class.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6d65a38c484dd7407fdf4b9ff8aae415::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6d65a38c484dd7407fdf4b9ff8aae415::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6d65a38c484dd7407fdf4b9ff8aae415::$classMap;

        }, null, ClassLoader::class);
    }
}
