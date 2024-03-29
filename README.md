<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

<hr>

## DOCUMENTATION



## Installation 

- Goto laravel doc https://laravel.com/docs/5.8
- Install composer https://getcomposer.org/
- install laravel using <i>composer global require laravel/installer</i> in CMD
- run <i>laravel new blog</i> to create a fresh laravel installation in a directory you specify
- install Xampp from the official website https://www.apachefriends.org/download.html
- download and install node.js https://nodejs.org/en/download/ for Vue.js integration 
- run <i>npm install</i> to install all the dependencies.
- run npm <i>install vue vuetify</i> to install into the node_modules folder of the project

## Setup

- Create database (mailerDb) in php my admin
- Change database name in your .env file to mailerDb
- Run <i>php artisan config:clear</i> in your project directory, to clear config cache 
- Run <i>php artisan migrate</i> in your project directory, to migrate database 
- Run <i>php artisan db:seed --class=SubscribersTableSeeder</i> in your project directory, to create demo data <a href='https://laravel.com/docs/master/seeding'>Full documentation</a> using seeder and factory <a href='https://laravel-news.com/learn-to-use-model-factories-in-laravel-5-1'>Full documentation</a>
- Run <i>php artisan serve</i> in your project directory, to start development on localhost:8000

## Backend

<p>Framework</p>

- Laravel. https://laravel.com/docs

<p>Controller</p>

- Subscribers 

- Fields 

<p>Resouces</p>

- Subscriber resource

- Fields resource

<p>API testing tools</p>

- Postman. https://www.getpostman.com/downloads/

- PHP Unit. using the command <i>./vendor/bin/phpunit</i> in the project directory

<p>
PS C:\xampp\htdocs\MailerChallenge> ./vendor/bin/phpunit
PHPUnit 8.5.1 by Sebastian Bergmann and contributors.
<br>
.......                                                             7 / 7 (100%)
<br>
Time: 1.48 seconds, Memory: 26.00 MB
</br>
OK (7 tests, 23 assertions)
PS C:\xampp\htdocs\MailerChallenge>
</p>

## Frontend

<p>Vue Js</p>
<p>Packages:</p>

- vuetify. https://vuetifyjs.com/

- Vue-router. https://router.vuejs.org/

- Axios. https://github.com/axios/axios

- vue-meta. https://github.com/nuxt/vue-meta 

- Bootstrap vue. https://bootstrap-vue.js.org/docs/

- Vee validate. https://www.npmjs.com/package/vee-validate

<hr>


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

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.


## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
