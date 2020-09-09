<?php
include("header.php");
?>

<script src="jquery-1.7.1.min.js" type="text/javascript"></script>

<script type="text/javascript">

$(document).ready(function () {
    $("a").click(function () {
        var elementClick = $(this).attr("href");
        var destination = $(elementClick).offset().top;
        if ($.browser.safari) {
            $('body').animate({ scrollTop: destination }, 1100);
        } else {
            $('html').animate({ scrollTop: destination }, 1100);
        }
        return false; 
    });
});

</script>

<div id="top-button" class="anchor">
    <a href="#header-block" >
        <div id="top-button-inner">
            ↑
        </div>
    </a>
</div>

<div id="back-button" class="anchor">
    <a href="/" >
        <div id="back-button-inner" onclick="history.back()">
            ← назад
        </div>
    </a>
</div>

<div class="important-text">
    Оформление переезда
</div>

<br><br>

<form action="/logic.php" method="post">
    <div class="row">
        <div class="col-md-6 col-xs-12">
            <div class="block">
                <div class="img">
                    <img src="/views/static/img/desktop-computer.png" alt="">
                </div>
                <div class="text">
                    1. Заполняете все нужные данные о переезде.
                </div>
            </div>

            <br>

            <div class="block">
                <div class="img">
                    <img src="/views/static/img/female-worker.png" alt="">
                </div>
                <div class="text">
                    2. За 3 дня до переезда менеджер посещает дом, и обсуждает с вами все детали заказа.
                </div>
            </div>

            <br>

            <div class="block">
                <div class="img">
                    <img src="/views/static/img/smile-emoji.png" alt="">
                </div>
                <div class="text">
                    3. Ждете день переезда. <br>
                    Приедет команда рабочих и менеджер.
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xs-12">
            <div class="inputLabelText">
                Ваш текущий адрес:
            </div>

            <div class="customInput">
                <input type="text" name="currentAddress" required>
            </div>

            <br>

            <div class="inputLabelText">
                Куда будете переезжать:
            </div>
            <div class="customInput">
                <input type="text" name="movingAddress" required>
            </div>

            <br>

            <div class="inputLabelText">
                Выберите точную дату:
            </div>
            <div class="customInput">
                <input type="date" name="movingDate" required>
            </div>

            <br>

            <div class="inputLabelText">
                Укажите площадь квартиры:
            </div>
            <div class="customInput">
                <input type="number" name="flatArea" style="padding-right: 20px" required>
            </div>

            <br><br><br>
        </div>
    </div>

    <br><br><hr>


        <div class="row">
            <div class="col-md-3 col-xs-12">
                <br><br><br>
                <div class="checkboxBlock">
                    <input type="radio" name="movingDuration" value="1" checked> 1 час - 8990 тг <br><br>
                    <input type="radio" name="movingDuration" value="2"> 2 часа - 17990 тг <br><br>
                    <input type="radio" name="movingDuration" value="3"> 3 часа - 25990 тг <br><br>
                </div>
                <div class="img-label-text">
                    +8990 тг за дополнительный час.
                </div>
            </div>
            <div class="col-md-3 col-xs-12">
                <br><br>
                <div class="img-frame">
                    <img src="/views/static/img/schedule.png" alt="">
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="img-frame">
                    <img src="/views/static/img/truck.png" alt="">
                </div>
            </div>
            <div class="col-12">
                <br>
                <div class="regular-text align-center">
                    Время отсчитывается с начала упаковки до выгрузки вещей в новой квартире<br>
                    Время на распаковку не считается
                </div>
            </div>
        </div>

    <br><hr><br>



    <div class="row">
        <div class="col-md-9">
            <div class="important-text">
                Дополнительные услуги
            </div>
            <br><br>
            <div class="checkboxBlock">
                <input type="checkbox" id="known" name="newFlatCleaning"> Влажная уборка заселяемой квартиры.
                <br><br>
                <input type="checkbox" id="unknown" name="oldFlatCleaning"> Влажная уборка квартиры, с которой вы переезжаете.
            </div>
        </div>
        <div class="col-md-3 col-xs-12">
            <div class="img-frame">
                <img src="/views/static/img/cleaning.jpg" alt="">
            </div>
        </div>
    </div>

    <br><hr><br>

    <div class="row">
        <div class="col-md-7 col-xs-12">
            <div class="checkboxBlock">
                <div class="important-text">
                    Отправить заявку
                </div>

                <br>

                <div class="inputLabelText">
                    Имя:
                </div>

                <div class="customInput">
                    <input type="text" name="clientName" required>
                </div>

                <br>

                <div class="inputLabelText">
                    Фамилия:
                </div>
                <div class="customInput">
                    <input type="text" name="clientSurname" required>
                </div>

                <br>

                <div class="inputLabelText">
                    Телефон:
                </div>
                <div class="customInput">
                    <input type="text" name="clientPhoneNumber" required>
                </div>

                <br>

                В какое время суток вам будет удобнее разговаривать?<br><br>
                <input type="radio" name="timeToCall" value="8 AM - 12 PM" checked> 8 АМ - 12 PМ<br>
                <input type="radio" name="timeToCall" value="12 PМ - 18 PМ"> 12 PМ - 18 PМ<br>
                <input type="radio" name="timeToCall" value="18 PМ - 22 PM"> 18 PМ - 22 PM<br>
            </div>
        </div>

        <div class="col-md-2 col-xs-12"></div>

        <div class="col-md-3 col-xs-12">
            <br><br><br><br>
            <div class="img-frame">
                <img src="/views/static/img/banner-vertical.jpg" width="98%" alt="">
            </div>

        </div>
    </div>

        <br><br><hr><br>

    <div class="row">

        <div class="col-md-4 col-xs-12">

        </div>

        <div class="col-md-5 col-xs-12">

        </div>

        <div class="col-md-3 col-xs-12">
            <div class="block">
                <div class="next-button">
                    <input type="text" name="movingForm" value="1" hidden>
                    <input type="submit" value="Оформить заявку">
                </div>
            </div>
        </div>

    </div>

</form>

<script src="/views/static/js/moving.js"></script>

<?php
include("footer.php");
?>