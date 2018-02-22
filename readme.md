<h1>Visión Digital Edumex</h1>

<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## instalación

Descargar el repositorio de github.
```s 
$ git clone git@github.com:theclusteragency/visiondigital.git
```

Entrar a la raiz del directorio
```s 
$ cd visiondigital
```

Instalar dependencias con Composer
```s 
$ composer install
```

Copiar archivo .env.example y cambiarle el nombre por .env y configurar opciones locales
```s 
$ cp .env.example .env
```


Generar "application key"
```s 
$ php artisan key:generate
```

Correr servidor local
```s 
$ php artisan serve
```

<p>Laravel se podrá ejecutar en la siguiente dirección <a href="http://127.0.0.1:8000" target="_blank">http://127.0.0.1:8000</a></p>
