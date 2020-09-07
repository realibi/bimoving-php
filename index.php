<?php
    include("header.php");
?>

<div class="slider wow fadeInRightBig">
    <input type="radio" name="switch" id="btn1" checked>
    <input type="radio" name="switch" id="btn2">
    <input type="radio" name="switch" id="btn3">
    <input type="radio" name="switch" id="btn4">

    <div class="switch">
        <label for="btn1"></label>
        <label for="btn2"></label>
        <label for="btn3"></label>
        <label for="btn4"></label>
    </div>

    <div class="slider-inner">
        <div class="slides">
            <div class="slide-item anchor">
                <a href="#bimoving-block">
                    <img src="/views/static/img/slider/slide1.png" />
                </a>
            </div>
            <div class="slide-item anchor">
                <a href="#transport-block">
                    <img src="/views/static/img/slider/slide2.png" />
                </a>
            </div>
            <div class="slide-item anchor">
                <a href="#additional-block">
                    <img src="/views/static/img/slider/slide3.jpg" />
                </a>
            </div>
            <div class="slide-item anchor">
                <a href="#vacancy-block">
                    <img src="/views/static/img/slider/slide4.jpg" />
                </a>
            </div>
        </div>
    </div>
</div>

<script>
    var slideBtn1 = document.getElementById("btn1");
    var slideBtn2 = document.getElementById("btn2");
    var slideBtn3 = document.getElementById("btn3");
    var slideBtn4 = document.getElementById("btn4");

    function switchSlide(){
        console.log("hello");
        if(slideBtn1.checked){
            slideBtn2.checked = true;
        }
        else if(slideBtn2.checked){
            slideBtn3.checked = true;
        }
        else if(slideBtn3.checked){
            slideBtn4.checked = true;
        }
        else if(slideBtn4.checked){
            slideBtn1.checked = true;
        }
    }

    setInterval(switchSlide, 5000);
</script>


<div id="top-button" class="anchor">
    <a href="#header-block" >
        <div id="top-button-inner">
            ↑
        </div>
    </a>
</div>

<br><br><br>
<hr><br>

<div class="row wow fadeInLeftBig">
    <div class="col-md-5 col-xs-12">
        <br><br>
        <div class="img-frame">
            <img src="/views/static/img/transporting.png" alt="">
        </div>
    </div>

    <div class="col-md-7 col-xs-12">
        <br><br><br><br><br>
        <div class="button-section">
            <br>
            <a href="movingRegistrationView.php">
                <div class="main-button shadow-20">
                    <div class="main-button-text">
                        Оформить переезд
                    </div>
                </div>
            </a>
            <br>
            <a href="transportationView.php">
                <div class="main-button shadow-20">
                    <div class="main-button-text">
                        Грузоперевозки
                    </div>
                </div>
            </a>
            <br>
            <a href="https://bi.group/ru/">
                <div class="main-button shadow-20">
                    <div class="main-button-text">
                        Перейти на сайт BI Group
                    </div>
                </div>
            </a>

        </div>
    </div>
</div>

<br><br>
<div id="bimoving-block"></div>
<hr><br>

<div class="row wow fadeInRightBig">
    <div class="col-12 bold-text align-center">
        Индивидуальный подход к каждому клиенту.
        <br><br>
    </div>
    
    <div class="col-12">
        <div class="img-frame">
            <img src="/views/static/img/banner-horizontal.png" alt="">
        </div>
        <br><br>
    </div>
    
    <div class="col-md-6 col-xs-12">
        <div class="regular-text align-center">
            1) Мы единственная компания в Казахстане,
            которая обеспечивает полный спектр услуг
            по перевозке.
            <br>
            Упаковка -> Перевозка -> Распаковка.
        </div>
    </div>

    <div class="col-md-6 col-xs-12">
        <div class="regular-text align-center">
            2) Мы гарантируем полную сохранность
            ваших вещей. От специальных коробок
            для посуды, до ремней и мягкой упаковки
            для тяжелой мебели
        </div>
    </div>
    <div class="col-12"><br><br></div>
    <div class="col-md-3 col-xs-12">
        <div class="img-frame shadow-20">
            <img src="/views/static/img/box1.png" alt="">
        </div>
        <br>
        <div class="img-label-text align-center">
            Коробка для посуды
        </div>
    </div>
    <div class="col-md-3 col-xs-12">
        <div class="img-frame shadow-20">
            <img src="/views/static/img/box2.png" alt="">
        </div>
        <br>
        <div class="img-label-text align-center">
            Разложенная коробка для посуды
        </div>
    </div>
    <div class="col-md-3 col-xs-12">
        <div class="img-frame shadow-20">
            <img src="/views/static/img/box3.png" alt="">
        </div>
        <br>
        <div class="img-label-text align-center">
            Универсальная коробка
        </div>
    </div>
    <div class="col-md-3 col-xs-12">
        <div class="img-frame shadow-20">
            <img src="/views/static/img/box4.png" alt="">
        </div>
        <br>
        <div class="img-label-text align-center">
            Коробка для одежды и обуви
        </div>
    </div>
</div>

<br><br>
<hr>

<div class="row">
    <div class="col-md-6 col-xs-12">
        <br><br>
        <div class="col-12 bold-text">
            Мы постоянно развиваемся.
        </div>
        <br><br>
        <div class="regular-text">
            После каждого выполненного заказа клиентам предоставляется небольшая анкета для оценки проделанной работы.
            По оценкам складывается рейтинг каждой команды.
            Рейтинг определяет многие бонусы и преимущества для команды что создает мотивацию делать работу качественно.
        </div>
    </div>
    <div class="col-md-6 col-xs-12">
        <br><br>
        <div class="img-frame shadow-20">
            <img src="/views/static/img/review.png" alt="">
        </div>
    </div>
</div>

<br><br>
<div id="additional-block"></div>
<hr><br>

<div class="row">
    <div class="col-12 bold-text align-center">
        Дополнительные услуги
        <br><br>
    </div>

    <div class="col-md-6 col-xs-12 wow fadeInLeftBig">
        <div class="img-frame shadow-20">
            <img src="/views/static/img/cleaning.jpg" alt="">
        </div>
        <br>
        <div class="regular-text align-center">
            Влажная уборка квартиры:<br>
            с которой вы переезжаете, в которую вы заезжаете
        </div>
    </div>
    <div class="col-md-6 col-xs-12 wow fadeInRightBig">
        <div class="img-frame shadow-20">
            <img src="/views/static/img/purchases.png" alt="">
        </div>
        <br>
        <div class="regular-text align-center">
            Покупка мебели и техники прямо с сайта<br>
            Бесплатная доставка, бесплатная установка.
        </div>
    </div>
</div>

<br><br><br>

<div class="row">
    <div class="col-md-8 col-xs-12">
        <div class="img-frame shadow-20">
            <img src="/views/static/img/illustration.jpg" alt="" width="100%">
        </div>
    </div>
    <div class="col-md-4 col-xs-12">
        <div class="col-12 bold-text align-center">
            Так же...
        </div>
        <br>
        <div class="description-text align-left">
            При желании вы можете приобрести коробки после переезда. <br>
            Коробка для посуды: <b><em>6990тг</em></b><br>
            Коробка для одежды и обуви: <b><em>7990тг</em></b><br>
            Коробка универсальная: <b><em>3990тг</em></b><br>
            Пузырчатая пленка: <b><em>200 тг/м</em></b><br>
            Чехол для мебели: <b><em>500тг/кв.м</em></b> <br>
        </div>
        <br>
        <div class="img-frame shadow-20">
            <img src="/views/static/img/materials.jpg" alt="" width="80%">
        </div>
    </div>
</div>

<br><br>
<div id="transport-block"></div>
<hr><br><br>

<div class="row">
    <div class="col-md-4 col-xs-12">
        <div class="col-12 bold-text align-center">
            Транспорт
        </div>
        <br>
        <div class="title-text">
            Газель Евротент
        </div>
        <br>
        <div class="regular-text">
            Характеристики автомобиля: <br>
            Длина: 4 м <br>
            Ширина: 2 м <br>
            Высота: 2 м <br>
            Объем: 16 м3 <br>
            Грузоподъемность: 1,5 т <br>
        </div>
        <br>
        <div class="title-text">
            От 8990 тг/час
        </div>
    </div>
    <div class="col-md-1 col-xs-12"></div>
    <div class="col-md-7 col-xs-12">
        <br>
        <div class="img-frame">
            <img src="/views/static/img/truck.png" width="100%">
        </div>
    </div>
</div>

<br><br>
<div id="vacancy-block"></div>
<hr><br>

<div class="row">
    <div class="col-12">
        <div class="col-12 bold-text align-center">
            Вакансии
        </div>
        <br><br>
    </div>

    <div class="row">
        <div class="col-md-6 col-xs-12">
            <div class="vacancy-div shadow-20">
                <div class="col-12">
                    <div class="bold-text align-center">
                        Водитель:
                        <br><br>
                    </div>
                </div>

                <div class="description-text">
                    <b>Обязанности: </b>
                    Перевозка малотоннажных грузов;<br>
                    Экспедирование.
                    <br><br>
                    <b>Требования: </b>
                    Наличие грузового транспорта
                    <br><br>
                    <b>Условия: </b>
                    Зарплата 200 000 тг + бонусы
                    <br>
                    Работа с 9:00 до 21:00
                    5 дней в неделю 2 дня отдых (кроме выходных)
                    <br>
                    Страховка машины.
                    Бесплатное брендирование.
                    Бонусы.
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xs-12">
            <div class="vacancy-div shadow-20">
                <div class="bold-text align-center">
                    Грузчик:
                    <br><br>
                </div>

                <div class="description-text">
                    <b>Обязанности: </b>
                    Выполнение погрузочно-разгрузочных работ.
                    Ответственность за сохранность загруженного товара.
                    <br><br>
                    <b>Требования: </b>
                    Компетентность. Знание правил укладки грузов.
                    <br><br>
                    <b>Условия: </b>
                    Зарплата 110 000 тг + бонусы.
                    <br>
                    Работа с 9:00 до 21:00.
                    6 дней работы, 1 день отдых.
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="description-text align-center">
                <br><br>
                Ждем заявки по эл. адресу: Work@bimoving.kz
            </div>
        </div>
    </div>
</div>

<script src="/views/static/js/wow.min.js"></script>
<script>
    new WOW().init();
</script>


<?php
include("footer.php");
?>