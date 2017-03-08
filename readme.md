# Доставка

## Установка

$ git clone https://github.com/Gorchel/delivery.git
$ composer update
$ composer install

##Настройка

config/database

DB_DATABASE=delivery_db


Локальный сервер

php artisan serve
http://localhost:8000/


Админка

http://localhost:8000/admin/


##Рекомендации по работе

Основный шаблон /layouts/main
В него добавлять только общие для всех страниц js и css файлы (jQuery, Bootstrap и т д)

Для добавления локальных скриптов и css создаем доп. папки в соответствующих каталогах 

Пример:
HomeController

/css/home/foo.css
/css/js/foo.js


Каждый шаблон должен содержать основной каркас:

@extends('layouts.main')

@section('css')
    @parent
    
    <!-- Добавлять css тут -->
@overwrite

@section('js')
    @parent
    
    <!-- Добавлять js тут -->
@overwrite

@section("content")
	<!-- Тут добавляем контент -->
@overwrite
