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
                <input type="text" name="currentAddress">
            </div>

            <br>

            <div class="inputLabelText">
                Куда:
            </div>
            <div class="customInput">
                <input type="text" name="newAddress">
            </div>

            <br>

            <div class="inputLabelText">
                Номер телефона:
            </div>
            <div class="customInput">
                <input type="text" name="phoneNumber">
            </div>

            <br>

            <div class="inputLabelText">
                Дата перевозки:
            </div>
            <div class="customInput">
                <input type="date" name="transportationDate">
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
        <div class="col-md-4 col-xs-12">
            <br><br><br>
            <div class="checkboxBlock">
                <input type="radio" name="transportationDuration" value="1" checked> 1 час - 4990 тг <br><br>
                <input type="radio" name="transportationDuration" value="2"> 2 часа - 9990 тг <br><br>
                <input type="radio" name="transportationDuration" value="3"> 3 часа - 14990 тг <br><br>
            </div>
            <div class="img-label-text">
                +4990 тг за дополнительный час.
            </div>
        </div>
        <div class="col-md-2 col-xs-12">

        </div>
        <div class="col-md-6 col-xs-12">
            <div class="img-frame">
                <img src="/views/static/img/truck-transparent.png" alt="">
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