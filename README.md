<<<<<<< HEAD
# Repositorio-Libros
Proyecto para la busqueda de libros admiin e invitado
=======
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Requisitos

- PHP >= 8.0
- Composer
- Laravel 10.x
- Base de datos MySQL o similar
-xampp

##poyecto
1. Instalar las dependencias del proyecto con Composer:
   Asegúrate de estar en el directorio raíz de tu proyecto Laravel y ejecutar:
   composer install

2. Configurar el archivo .env para las credenciales de la base de datos y otras configuraciones:
   Si el archivo .env no existe, puedes copiar el archivo de ejemplo (.env.example) a .env con el siguiente comando:
   cp .env.example .env
   Luego, abre el archivo .env y configura las credenciales de la base de datos (y otras configuraciones necesarias) de acuerdo con tu entorno. Los valores más importantes a revisar son los relacionados con la base de datos:
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=nombre_de_tu_base_de_datos
   DB_USERNAME=tu_usuario
   DB_PASSWORD=tu_contraseña

3. Crear la base de datos:
   Si estás usando phpMyAdmin, crea una nueva base de datos con el nombre que hayas puesto en el archivo .env 
   Si prefieres usar MySQL desde la terminal, ejecuta:
   mysql -u root -p
   CREATE DATABASE ;

4. Generar la clave de la aplicación:
   Ejecuta el siguiente comando para generar una nueva clave:
   php artisan key:generate
   Esto actualizará automáticamente la clave en el archivo .env.

5. Ejecutar las migraciones para crear las tablas en la base de datos:
   Una vez configurada la base de datos y generada la clave, ejecuta las migraciones con el siguiente comando:
   php artisan migrate
   

6. Iniciar el servidor de desarrollo:
   Para iniciar el servidor de desarrollo de Laravel, usa el siguiente comando:
   php artisan serve
   Esto iniciará un servidor en http://127.0.0.1:8000, o en otro puerto si ese está ocupado.

7. Acceder a la aplicación:
   Ahora puedes acceder a tu aplicación a través de tu navegador con las siguientes credenciales de usuario:
   *para admin en la tabla usuarios inserta un usuario:
-user_name: cualquier nombre que quieras
-user_pass: la contraseña
-user_tipo: 0 para admin , 1 para invitado.

8.Para acceder al proyecto.
....0.1:8000/login


Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
>>>>>>> 1bf1873 (Primer Comit)
