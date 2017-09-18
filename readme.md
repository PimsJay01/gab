# Groupement Autonome de Basket - GAB website

GAB website is developed on Laravel-5.5 with Docker containers

## Requirements

- Git
- Docker
- Docker-compose

## Install project

Get project from Github repository :

`git clone git@github.com:PimsJay01/gab.git`

go into project folder and install project dependancies :

`$ docker run --rm -v $(pwd):/app composer/composer install`

Change permission of following folders :

```
chmod -R o+w storage
chmod -R o+w bootstrap/cache
```

Launch Docker containers :

`$ docker-compose up &`

Generate your project keys :

```
$ docker-compose exec app php artisan key:generate
$ docker-compose exec app php artisan optimize
```

Go to [localhost:8080](http://localhost:8080) to visualize GAB website.

You can stop Docker containers by running following command :

`$ docker-compose down`

## Run project

To update & launch project by running following script :

`$ ./update-project.sh`

Once Docker containers launched, go to [localhost:8080](http://localhost:8080) to visualize GAB website.

You can stop Docker containers by running following command :

`$ docker-compose down`

## Development

All you need to know to develop on this project

### Composer

To install new dependancies through Composer in Docker container :

`$ ./composer.sh ...`

### Artisan

To run Artisan command in Docker container :

`$ ./artisan.sh ...`

Usual commands :

```
$ ./artisan.sh migrate --seed
$ ./artisan.sh make:controller MyCtrl
```

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
