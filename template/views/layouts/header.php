<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php if(isset($r[0]['title'])) { echo $r[0]['title']; } ?></title>
    <meta name="description" content="<?php if(isset($r[0]['decsription'])) { echo $r[0]['decsription']; } ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/template/img/fa.png" />
    <link rel="apple-touch-icon" href="/template/img/fa.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="/template/css/normalize.css">
    <link rel="stylesheet" href="/template/css/main.css">
    <link rel="stylesheet" href="/template/css/fonts.css">
    <link rel="stylesheet" href="/template/css/responsive.css">
    <link rel="stylesheet" href="/template/libs/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="/template/libs/modal/jquery.modal.css">
    <link rel="stylesheet" type="text/css" href="/template/libs/tooltipster/css/tooltipster.bundle.min.css" />
    <link rel="stylesheet" type="text/css" href="/template/libs/tooltipster/css/plugins/tooltipster/sideTip/themes/tooltipster-sideTip-shadow.min.css" />
    <script src="/template/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Add your site or application content here -->
<div class="wrapper">
    <div class="mobilemenu r234">
        <div class="mobilemenuIcon r234"><a href="javascript:;" class="r234"><img class="r234" src="/template/img/mobile_menu.png" /></a></div>
        <div class="mobileContent r234">
            <div class="header__card r234">
                <a href="javascript:;" class="r234"><i class="r234 icon icon--card"></i>
                    <span class="r234">Активация карты</span></a>
            </div>
            <div class="r234 header__account">
                <a href="javascript:;" class="r234"><i class="r234 icon icon--user"></i>
                    <span class="r234">Личный кабинет</span></a>
            </div>

            <div class="r234 mobileDivider"></div>
            <ul class="r234 mobileMenuUl">
                <li class="r234"><a class="r234" href="/">Главная</a></li>
                <li class="r234"><a class="r234" href="/page/faq">FAQ</a></li>
                <li class="r234"><a class="r234" href="/page/shipping-details">Оплата и доставка</a></li>
                <li class="r234"><a class="r234" class="r234" href="/page/reviews">Отзывы</a></li>
                <li class="r234 last"><a class="r234" hclass="r234" href="/page/contacts">Контакты</a></li>
            </ul>
        </div>
    </div>
    <?php if (Storage::get('uri') == ''): ?>
    <header class="home">
        <div class="header__topBg">
            <div class="container cont">
                <div class="topbgText">
                    <span class="topbgTextSpan1">Гараж - программа</span>
                    <span class="topbgTextSpan2">экономии</span>
                    <span class="topbgTextSpan1">до <span class="topbgTextSpan3">60 000</span> грн в год</span>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <div class="container container-r">
            <div class="header__menu">

                <ul>
                    <li><a href="/">Главная</a></li>
                    <li><a href="/page/faq">FAQ</a></li>
                    <li><a href="/page/shipping-details">Оплата и доставка</a></li>
                    <li><a href="/reviews">Отзывы</a></li>
                    <li><a href="/page/contacts">Контакты</a></li>
                </ul>
                <div class="header__phone">
                    <div class="header__phoneSpan">0 800 754 888</div>
                    <div class="header__phoneText">по украине бесплатно</div>
                </div>
                <div class="header__buttons">
                    <div class="header__card">
                        <a href="#"><i class="icon icon--card"></i>
                            <span>Активация карты</span></a>
                    </div>
                    <div class="header__account">
                        <a href="#"><i class="icon icon--user"></i>
                            <span>Личный кабинет</span></a>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="header__cart header__cart--f">
            <a href="/cart/order" class="header__cartLink">
                <i class="icon icon--cart"></i>
                <span class="cartdivider"></span>
                <span class="cartcount"><?php if(isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {  echo  count($_SESSION['cart']); ?><?php } else { ?>0<?php } ?></span>
                <span class="hiddenText">Оформить заказ</span>
            </a>
        </div>


    </header>