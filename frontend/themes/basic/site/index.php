﻿<?php

/* @var $this yii\web\View */
use frontend\assets\LandingAsset;
LandingAsset::register($this);

$this->title = 'Resume builder - главная';
?>
<div class="landing-content">
    <div class="main-block row">
        <div class="category-block col-lg-6">
            <img width="15%" src="css/landing_images/notepad.png">
            <h2>Создать резюме</h2>
            <p>Создать профессиональное резюме, всего в несколько этапов с граммотной подачей ваших данных</p>
            <a class="btn btn-default">ПЕРЕЙТИ К СОЗДАНИЮ</a>
        </div>
        <div class="category-block col-lg-6">
            <img width="15%" src="css/landing_images/magnifying-glass.png">
            <h2>О сервисе</h2>
            <p>Узнайте о всех возможностях сервиса ResumeBuilder, чтобы использовать его на все 100%</p>
            <a class="btn btn-default">СПРАВКА</a>
        </div>
    </div>
    <div class="body-content container">
        <div class="row">
           <div class=" col-lg-2">
                <h2 class="left-text">Что такое ResumeBuilder</h1>
                <h4>от создания до управления</h3>
           </div>
           <p class="col-lg-9 col-lg-offset-1"> 
           Resume Builder – современный, удобный в использовании конструктор резюме. 
           Простой, но также одновременно многофункциональный и отвечающий всем требованиям, 
           сервис позволит Вам выделиться среди прочих соискателей. От работы Вашей мечты Вас 
           отделяют лишь несколько минут, которые Вы потратите на заполнение необходимых форм. 
           Структурируйте Ваше образование, поделитесь опытом работы – и работодатель сам предоставит 
           Вам возможность заниматься любимым делом. Помните, работа по призванию, не мечта, а реальность!
           </p>
        </div>
        <div class="row advant">
            <div class="col-lg-3">
                <img>
                <h4>УДОБНЫЙ ИНТЕРФЕЙС</h4>
                <p>Приятное и интуитивно понятное оформление сервиса позволит без труда составить резюме.
                 Заполните необходимые поля – и результат не заставит себя долго ждать.</p>
            </div>
            <div class="col-lg-3">
                <img>
                <h4>СИСТЕМА ЛИЧНОГО УЧЕТА</h4>
                <p>Следите за всеми изменениями Вашего резюме, просматривайте статистику – всё это вам 
                предоставит сервис Resume Builder.</p>
            </div>
            <div class="col-lg-3">
                <img>
                <h4>БОЛЬШОЙ ВЫБОР ШАБЛОНОВ</h4>
                <p>Выделяйтесь из серой массы. Благодаря широкому ассортименту готовых шаблонов, 
                Ваша креативность и нетривиальный подход несомненно будет оценён работодателем.</p>
            </div>
            <div class="col-lg-3">
                <img>
                <h4>ПЕЧАТЬ ПО СТАНДАРТАМ</h4>
                <p>Получите готовое к печати резюме в PDF-формате или DOC и не беспокойтесь, все выдержано
                 согласно стандартам современной документации</p>
            </div>
        </div>
        <div class="row">
            <div class="left-text col-lg-2">
                <h2 class="left-text">Отзывы пользователей</h2>
                <h4>те, кто вышел на новый уровень</h4>
                <p>Множество людей, желающих получить новое место работы, с радостью делятся впечатлениями
                 о нашем сервисе.</p>
                <a class="btn btn-default">СОЗДАТЬ РЕЗЮМЕ</a>
            </div>
            <div class="col-lg-9 col-lg-offset-1"> 
                <div>
                    <p>Я – педагог по образованию. Благодаря сервису Resume Builder я смогла перейти на новый
                     уровень в моей карьере. Спустя несколько дней после формирования резюме, я получила приглашения от престижной гимназии нашего города.</p>
                    <div>
                        <div>
                            <h4>Иванова Анна Петровна</h4>
                            <p>педагог,45 лет</p>
                        </div>
                        <img>
                    </div>
                </div>
                <div>
                    <p>Я – педагог по образованию. Благодаря сервису Resume Builder я смогла перейти на новый
                     уровень в моей карьере. Спустя несколько дней после формирования резюме, я получила приглашения от престижной гимназии нашего города.</p>
                    <div>
                        <div>
                            <h4>Иванова Анна Петровна</h4>
                            <p>педагог,45 лет</p>
                        </div>
                        <img>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <h2>Начни свою карьеру с создания первоклассного резюме</h2>
            <p>Не сомневайтесь, наш сервис поможет выйти на новый профессиональный уровень. От простого желания до конкретного воплощения цели – один лишь шаг. 
            И мы поможем Вам его совершить.</p>
            <a class="btn btn-default">CОЗДАТЬ РЕЗЮМЕ</a>
        </div>
    </div>
</div>
