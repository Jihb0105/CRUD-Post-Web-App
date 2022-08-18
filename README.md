<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# A CRUD Post Web Application 

This Application utilises laravel framework to produce a CRUD operation application that can create, read, update, and delete data from the Post model of https://gorest.co.in/public/v2/posts. 


## Installation

1. Install latest version of XAMPP. Download link at [XAMPP Download Link](https://www.apachefriends.org/download.html).
2. Download Composer([Composer Download Link](https://getcomposer.org/download/). 
4. Install Laravel 9. [Laravel Documentation](https://laravel.com/docs/9.x/installation).
    - Windows installation instruction at [Install Laravel on Windows| Xampp & Composer | 2022](https://www.youtube.com/watch?v=9yLLH1gClTA&t=7s). 
    - Ubuntu installation instruction at [How to install Laravel 9 on Ubuntu 20.04 | Linux | create and deploy Laravel project via Composer](https://www.youtube.com/watch?v=8vODYn4xFOw)
5. Rather than creating new Laravel project, git clone the project repository. Link: https://github.com/Jihb0105/CRUD-Post-Web-App
6. With terminal cd into the application folder.
7. Run composer install 
8. Copy .env.example file to .env on the root folder. You can type copy .env.example .env if using command prompt Windows or cp .env.example .env if using terminal, Ubuntu
9. Run php artisan key:generate
10. Run php artisan serve
11. Go to http://localhost:8000/ in your browser.

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