# Groupement Autonome de Basket - GAB website

GAB website is developed on Laravel-5.5 with Docker containers

## Requirements

- Git
- Docker
- Docker-compose

## Install project

Get project from Github repository :

`git clone git@github.com:PimsJay01/gab.git`

Launch Docker containers :

`$ docker-compose up &`

Once containers started, run initialization scirpt :

`$ ./init.sh`

Go to [localhost:8080](http://localhost:8080) to visualize GAB website.

You can stop Docker containers by running following command :

`$ docker-compose down`

## Development

All you need to know to develop on this project

### Run Laravel commands

You have to connect inside the app container to run commands :

`$ ./connect.sh`

#### Composer

Usual commands :

```
$ composer update
$ Composer dump-autoload
```

#### Artisan

Usual commands :

```
$ php artisan migrate --seed
$ php artisan make:controller [Controller]
```

#### Create entity

First create migration file

```
$ composer dump-autoload
$ php artisan migrate
$ php artisan backpack:crud [entity]
```

Then manually add this to admin.php file :

**CRUD::resource('entity', 'EntityCrudController');**

Note: if you want the item to appear in the top admin menu, it’s as easy as including it in the *views/vendor/backpack/base/inc/sidebar.php* file:

`<li><a href="{{ url('admin/tag') }}"><i class="fa fa-tag"></i> <span>Manage Tags</span></a></li>`

### About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb combination of simplicity, elegance, and innovation give you tools you need to build any application with which you are tasked.

### Learning Laravel

Laravel has the most extensive and thorough documentation and video tutorial library of any modern web application framework. The [Laravel documentation](https://laravel.com/docs) is thorough, complete, and makes it a breeze to get started learning the framework.

If you're not in the mood to read, [Laracasts](https://laracasts.com) contains over 900 video tutorials on a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library.
