<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

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

## Prosees Done for the project Completed


//------------------------------------------


## Git Command 
global user.name "Md Fazlul Kader"
git config --global user.email "kadeurmi@gmail.com"
git init
git add READM
git branch -M main
git remote add origin https://github.com/kaderurmi/inventorySale.git
git push -u origin main

…or push an existing repository from the command line

git remote add origin https://github.com/kaderurmi/inventorySale.git
git branch -M main
git push -u origin main
git add .
git commit -m "first commit"

PHP ARTISAN VIEW:CLEAR
php artisan cache:clear
php artisan config:clear
php artisan route:cache
php artisan make:controller HomeController // create HomeController
composer require barryvdh/laravel-dompdf //this is for PDF file support
composer update firebase/php-jwt // Some Error come 
php artisan make:controller ReportController  //for Controller create
php artisan serve
php artisan migrate //database Update
php artisan optimize //Front end Update
php artisan make:migration create_invoice_products // To create database table
php artisan make:model Invoice // to Create model
php artisan make:model Product -m // To create Product model and Database table
php artisan route:list // to see Route List
composer require firebase/php-jwt //to jwt firebase
php artisan make:middleware TokenVerificationMiddleware // to create Middleware
php artisan make:mail OTPMail // this is for mail folder and OTP SMTP
php artisan migrate:fresh // To refresh database
composer install // to composser Install
php artisan make:controller Admin/CarController // Create controller inside Admin Folder
composer require laravel/breeze --dev //to install breeze
php artisan make:seeder UsersTableSeeder // To create a seeder file
php artisan key:generate // for key generate
php artisan migrate:fresh --seed  // to refresh database and seed
php artisan migrate:refresh --seed
php artisan db:seed  // To insert seed data to database
php artisan storage:link // to ok link
php artisan make:controller Admin/CustomerController --resource // Controller with resource
git config --list //
php artisan cache:table
php artisan make:view components layouts //