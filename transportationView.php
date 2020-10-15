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
    Оформление грузоперевозки
</div>

<br><br>

<form action="/logic.php" method="post">

    <div class="row">
        <div class="col-md-5 col-xs-12">
            <div class="img-frame">
                <img src="/views/static/img/transporting.png" alt="">
            </div>
        </div>
        <div class="col-md-1 col-xs-12"></div>
        <div class="col-md-6 col-xs-12">
            <div class="inputLabelText">
                Откуда:
            </div>

            <div class="customInput">
                <input type="text" name="currentAddress" required>
            </div>

            <br>

            <div class="inputLabelText">
                Куда:
            </div>
            <div class="customInput">
                <input type="text" name="newAddress" required>
            </div>

            <br>

            <div class="inputLabelText">
                Номер телефона:
            </div>
            <div class="customInput">
                <input type="text" name="phoneNumber" required>
            </div>

            <br>

            <div class="inputLabelText">
                Дата перевозки:
            </div>
            <div class="customInput">
                <input type="date" name="transportationDate" required>
            </div>
            <div class="img-label-text">
                <br>
                Оператор свяжется с вами в течении часа
            </div>
            <br>
        </div>
    </div>

    <br><br><hr>


    <div class="row">
        <div class="col-md-5 col-xs-12">
            <br><br>
            <div class="checkboxBlock" style="border: 2px solid #074e91; border-radius: 15px; background-color: white; padding: 5%; text-align: center; width: 100%;">
                Формула цены грузоперевозки: <br><br>
                2800тг + (55тг * кол-во минут) <br><br>
                Первые 10 минут бесплатно <br><br>
                <div class="img-label-text">
                    +50% к итоговой сумме за двух грузчиков
                </div>
            </div>
        </div>
        <div class="col-md-1 col-xs-12">

        </div>
        <div class="col-md-6 col-xs-12">
            <div class="img-frame">
                <img src="/views/static/img/truck.png" alt="">
            </div>
        </div>

    </div>

    <br><hr><br>

    <div class="row">

        <div class="col-md-4 col-xs-12">

        </div>

        <div class="col-md-5 col-xs-12">

        </div>

        <div class="col-md-3 col-xs-12">
            <div class="block">
                <div class="next-button">
                    <input type="text" name="transportationForm" value="1" hidden>
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