<?php
?>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Internet Shop</title>
    <link href="frontend/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="frontend/css/styles.css">
</head>
<body>
<div id="wrapper">
    <!--    /*HEADER START*/-->
    <?php
    include 'inc/header.inc.php';
    ?>
    <!--    /*HEADER END*/-->

    <div class="main-content">
        <div class="container">
            <div class="row">
                <div class="sidebar-btn visible-xs-block">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="sidebar col-md-4 col-sm-3">

                    <!--MENU-->
                    <?php
                    require 'inc/product-menu.inc.php';
                    ?>
                    <!--MENU-->

                    <div class="news hidden-xs">
                        <div class="discount sb-news">
                            <p class="date">12.10.2011</p>
                            <p class="title"><a href="#">Много скидок!</a></p>
                            <p class="simple-text">Скоро ноябрь, а это значит, что скоро вас ждет большое количество
                                скидок в связи с нашим юбелеем.</p>
                        </div>
                        <div class="exchange sb-news hidden-xs">
                            <p class="date">12.10.2011</p>
                            <p class="title"><a href="#">Обменяй старое на новое!</a></p>
                            <p class="simple-text">Скоро ноябрь, а это значит, что скоро вас ждет большое количество
                                скидок в связи с нашим юбелеем.</p>
                        </div>
                        <div class="updates sb-news hidden-xs">
                            <p class="date">12.10.2011</p>
                            <p class="title"><a href="#">Обновление в каталогах!</a></p>
                            <p class="simple-text">Скоро ноябрь, а это значит, что скоро вас ждет большое количество
                                скидок в связи с нашим юбелеем.</p>
                        </div>
                    </div>
                    <button class="hidden-xs">Написать нам <i class="ic ic-pencil"></i></button>
                    <div class="empty-block hidden-xs"></div>
                    <div class="empty-block hidden-xs"></div>
                </div>
                <div class="content col-md-8 col-sm-9 col-xs-12 col-xxs-12">
                    <div class="row">
                        <div class="products-slider col-md-12 col-sm-12 col-xs-12 col-xxs-12">
                            <img src="frontend/img/left-arrow-empty.png" alt="" class="chevron chevron-empty-left">
                            <img src="frontend/img/left-arrow.png" alt="" class="chevron chevron-left">
                            <img src="frontend/img/right-arrow.png" alt="" class="chevron chevron-right">
                            <img src="frontend/img/right-arrow-empty.png" class="chevron chevron-empty-right" alt="">
                            <div class="slide">
                                <div class="info col-md-6 col-sm-6 col-xs-6 col-xxs-12">
                                    <div class="title">
                                        <h3>Электрический мини-вертолет Beacon</h3>
                                    </div>
                                    <div class="about col-md-12 col-sm-12 col-xs-12 col-xxs-12">
                                        <ul class="info-list col-md-6 col-sm-6 col-xs-6 col-xxs-6">
                                            <li>Тип:</li>
                                            <li>Шасси:</li>
                                            <li>Электродвигатели:</li>
                                            <li>Время полета:</li>
                                        </ul>
                                        <ul class="info-list col-md-6 col-sm-6 col-xs-6 col-xxs-6">
                                            <li>мини вертолет</li>
                                            <li>алюминий</li>
                                            <li>200 размера (2 шт.)</li>
                                            <li>15 - 20 минут</li>
                                        </ul>
                                    </div>
                                    <div class="price col-md-12 col-sm-12 col-xs-12 col-xxs-12">
                                        <span class="name">Цена:</span> <span class="quantity">9 260</span>
                                        <span class="currency">рублей</span>
                                        <div class="button">В корзину <i class="ic ic-right"></i></div>
                                    </div>
                                </div>
                                <div class="picture col-md-6 col-sm-6 col-xs-6 col-xxs-12">
                                    <img src="frontend/img/slide-pic-1.png" alt="">
                                </div>
                            </div>
                            <div class="slide">
                                <div class="info col-md-6 col-sm-6 col-xs-6 col-xxs-12">
                                    <div class="title">
                                        <h3>Электрический мини-вертолет Falcon</h3>
                                    </div>
                                    <div class="about col-md-12 col-sm-12 col-xs-12 col-xxs-12">
                                        <ul class="info-list col-md-6 col-sm-6 col-xs-6 col-xxs-6">
                                            <li>Тип:</li>
                                            <li>Шасси:</li>
                                            <li>Электродвигатели:</li>
                                            <li>Время полета:</li>
                                        </ul>
                                        <ul class="info-list col-md-6 col-sm-6 col-xs-6 col-xxs-6">
                                            <li>мини вертолет</li>
                                            <li>пластик</li>
                                            <li>180 размера (2 шт.)</li>
                                            <li>10 - 12 минут</li>
                                        </ul>
                                    </div>
                                    <div class="price col-md-12 col-sm-12 col-xs-12 col-xxs-12">
                                        <span class="name">Цена:</span> <span class="quantity">6 960</span>
                                        <span class="currency">рублей</span>
                                        <div class="button">В корзину <i class="ic ic-right"></i></div>
                                    </div>
                                </div>
                                <div class="picture col-md-6 col-sm-6 col-xs-6 col-xxs-12">
                                    <img src="frontend/img/slide-pic-1.png" alt="">
                                </div>
                            </div>
                            <div class="slide">
                                <div class="info col-md-6 col-sm-6 col-xs-6 col-xxs-12">
                                    <div class="title">
                                        <h3>Электрический мини-вертолет Intro</h3>
                                    </div>
                                    <div class="about col-md-12 col-sm-12 col-xs-12 col-xxs-12">
                                        <ul class="info-list col-md-6 col-sm-6 col-xs-6 col-xxs-6">
                                            <li>Тип:</li>
                                            <li>Шасси:</li>
                                            <li>Электродвигатели:</li>
                                            <li>Время полета:</li>
                                        </ul>
                                        <ul class="info-list col-md-6 col-sm-6 col-xs-6 col-xxs-6">
                                            <li>мини вертолет</li>
                                            <li>пластик</li>
                                            <li>150 размера (3 шт.)</li>
                                            <li>12 - 15 минут</li>
                                        </ul>
                                    </div>
                                    <div class="price col-md-12 col-sm-12 col-xs-12 col-xxs-12">
                                        <span class="name">Цена:</span> <span class="quantity">8 500</span>
                                        <span class="currency">рублей</span>
                                        <div class="button">В корзину <i class="ic ic-right"></i></div>
                                    </div>
                                </div>
                                <div class="picture col-md-6 col-sm-6 col-xs-6 col-xxs-12">
                                    <img src="frontend/img/slide-pic-1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="sale col-md-12">
                            <div class="row">
                                <div class="title col-md-12">
                                    <a href="#">Распродажа</a>
                                </div>
                            </div>
                            <div class="row">

                                <div class="product col-md-4 col-sm-4 col-xs-6 col-xxs-12">
                                    <div class="pic">
                                        <img src="frontend/img/sale-pic-1.png" alt="">
                                        <div class="price">18 480 р.</div>
                                    </div>
                                    <a href="#" class="upper-link">Cyclone d4 world championship edition kit</a>
                                </div>
                                <div class="product col-md-4 col-sm-4 col-xs-6 col-xxs-12">
                                    <div class="pic">
                                        <img src="frontend/img/sale-pic-2.png" alt="">
                                        <div class="price">5 712 р.</div>
                                    </div>
                                    <a href="#">Кордовая модель-копия PT-19 Profile
                                        Control Line 36 ARF</a>
                                </div>
                                <div class="product col-md-4 col-sm-4 col-xs-6 col-xxs-12">
                                    <div class="pic">
                                        <img src="frontend/img/sale-pic-3.png" alt="">
                                        <div class="price">18 240 р.</div>
                                    </div>
                                    <a href="#">Электрический
                                        мини-вертолет HM 60#B</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="bestseller col-md-12">
                            <div class="row">
                                <div class="title col-md-12">
                                    <a href="#">Хиты продаж</a>
                                </div>
                            </div>
                            <div class="row hidden-xs">
                                <div class="product col-md-4 col-sm-4">
                                    <div class="pic">
                                        <img src="frontend/img/sale-pic-1.png" alt="">
                                        <div class="price">18 480 р.</div>
                                    </div>
                                    <a href="#" class="upper-link">Cyclone d4 world championship edition kit</a>
                                </div>
                                <div class="product col-md-4 col-sm-4">
                                    <div class="pic">
                                        <img src="frontend/img/sale-pic-3.png" alt="">
                                        <div class="price">18 240 р.</div>
                                    </div>
                                    <a href="#">Электрический
                                        мини-вертолет HM 60#B</a>
                                </div>
                                <div class="product col-md-4 col-sm-4">
                                    <div class="pic">
                                        <img src="frontend/img/sale-pic-2.png" alt="">
                                        <div class="price">5 712 р.</div>
                                    </div>
                                    <a href="#">Кордовая модель-копия PT-19 Profile
                                        Control Line 36 ARF</a>
                                </div>
                                <div class="product col-md-4 col-sm-4">
                                    <div class="pic">
                                        <img src="frontend/img/sale-pic-3.png" alt="">
                                        <div class="price">18 240 р.</div>
                                    </div>
                                    <a href="#">Электрический
                                        мини-вертолет HM 60#B</a>
                                </div>
                                <div class="product col-md-4 col-sm-4">
                                    <div class="pic">
                                        <img src="frontend/img/sale-pic-2.png" alt="">
                                        <div class="price">5 712 р.</div>
                                    </div>
                                    <a href="#">Кордовая модель-копия PT-19 Profile
                                        Control Line 36 ARF</a>
                                </div>
                                <div class="product col-md-4 col-sm-4">
                                    <div class="pic">
                                        <img src="frontend/img/sale-pic-1.png" alt="">
                                        <div class="price">18 480 р.</div>
                                    </div>
                                    <a href="#" class="upper-link">Cyclone d4 world championship edition kit</a>
                                </div>
                            </div>
                            <div class="row hidden-lg hidden-sm">
                                <div class="col-xs-12 col-xxs-12">
                                    <div class="row">
                                        <div class="product col-xs-6 col-xxs-12">
                                            <div class="pic">
                                                <img src="frontend/img/sale-pic-1.png" alt="">
                                                <div class="price">18 480 р.</div>
                                            </div>
                                            <a href="#" class="upper-link">Cyclone d4 world championship edition kit</a>
                                        </div>
                                        <div class="product col-xs-6 col-xxs-12">
                                            <div class="pic">
                                                <img src="frontend/img/sale-pic-3.png" alt="">
                                                <div class="price">18 240 р.</div>
                                            </div>
                                            <a href="#">Электрический
                                                мини-вертолет HM 60#B</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-xxs-12">
                                    <div class="row">
                                        <div class="product col-xs-6 col-xxs-12">
                                            <div class="pic">
                                                <img src="frontend/img/sale-pic-2.png" alt="">
                                                <div class="price">5 712 р.</div>
                                            </div>
                                            <a href="#">Кордовая модель-копия PT-19 Profile
                                                Control Line 36 ARF</a>
                                        </div>
                                        <div class="product col-xs-6 col-xxs-12">
                                            <div class="pic">
                                                <img src="frontend/img/sale-pic-3.png" alt="">
                                                <div class="price">18 240 р.</div>
                                            </div>
                                            <a href="#">Электрический
                                                мини-вертолет HM 60#B</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-xxs-12">
                                    <div class="row">
                                        <div class="product col-xs-6 col-xxs-12">
                                            <div class="pic">
                                                <img src="frontend/img/sale-pic-2.png" alt="">
                                                <div class="price">5 712 р.</div>
                                            </div>
                                            <a href="#">Кордовая модель-копия PT-19 Profile
                                                Control Line 36 ARF</a>
                                        </div>
                                        <div class="product col-xs-6 col-xxs-12">
                                            <div class="pic">
                                                <img src="frontend/img/sale-pic-1.png" alt="">
                                                <div class="price">18 480 р.</div>
                                            </div>
                                            <a href="#" class="upper-link">Cyclone d4 world championship edition kit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="reviews col-md-12">
                            <h3>Последние обзоры</h3>
                        </div>
                        <div class="reviews-info col-md-12 clearfix">
                            <div class="rev-pic pull-left">
                                <img src="frontend/img/review-pic.jpg" alt="">
                            </div>
                            <a href="#" class="simple-link">Наша компания организовала тест на прочность и
                                выносливость эктрическому мини-вертолету HM60#B</a>
                            <p class="simple-text">Было приглашено около 30 человек, но зрителей собралось
                                в разы больше. Место проведения теста - площадь.
                                Зрители смотрели как на шоу, маневры и падения вертолета сопровождались
                                возгласами, вот вот и ходила бы волна по зрителям.</p>
                        </div>
                        <div class="between-line col-md-12"></div>
                        <div class="reviews-info col-md-12 clearfix">
                            <div class="rev-pic pull-left">
                                <img src="frontend/img/review-pic.jpg" alt="">
                            </div>
                            <a href="#" class="simple-link">Наша компания организовала тест на прочность и
                                выносливость эктрическому мини-вертолету HM60#B</a>
                            <p class="simple-text">Было приглашено около 30 человек, но зрителей собралось
                                в разы больше. Место проведения теста - площадь.
                                Зрители смотрели как на шоу, маневры и падения вертолета сопровождались
                                возгласами, вот вот и ходила бы волна по зрителям.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="about-company col-md-12">
                            <h3>О компании</h3>
                            <p class="simple-text">
                                История компании elwau.ru – один из примеров сочетания творческого подхода с
                                чрезвычайной практичностью. Знаменитая идея братьев Венинг – оснастить различные
                                виды транспорта мобильными холодильниками – в 70-х годах прошлого века
                                перешагнула стандарты инженерного мышления.
                                Что же до применения этой и множества других разработок – автохолодильники
                                автокондиционеры, автопылесосы, автокофеварки elwau.ru – то здесь
                                братья-изобретатели блестяще продемонстрировали свои организаторские таланты.
                                <a href="#" class="simple-link"> читать дальше</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--    /*FOOTER START*/-->

    <footer class="footer">

        <?php
        include 'inc/footer.inc.php';
        ?>
    </footer>
    <!--            /*FOOTER END*/-->

</div>
<script src="frontend/js/jquery.js"></script>
<script src="frontend/js/main.js"></script>
</body>
</html>