<?php
/* Smarty version 3.1.36, created on 2020-09-04 22:03:40
  from 'E:\OSPanel\OSPanel\domains\bimoving\Views\movingRegistrationView.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f528f8c4553a9_61836336',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c58c210815ea6b135d8388c05e69fcbea780a47' => 
    array (
      0 => 'E:\\OSPanel\\OSPanel\\domains\\bimoving\\Views\\movingRegistrationView.php',
      1 => 1599246219,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.php' => 1,
    'file:footer.php' => 1,
  ),
),false)) {
function content_5f528f8c4553a9_61836336 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 src="jquery-1.7.1.min.js" type="text/javascript"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">

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

<?php echo '</script'; ?>
>

<div class="important-text">
    Оформление переезда
</div>

<br><br>

<form action="">

<div class="row">
    <div class="col-md-6 col-xs-12">
        <div class="block">
            <div class="img">
                <img src="/views/static/img/research.png" alt="">
            </div>
            <div class="text">
                1. Заполняете все нужные данные о переезде.
            </div>
        </div>

        <br>

        <div class="block">
            <div class="img">
                <img src="/views/static/img/man.png" alt="">
            </div>
            <div class="text">
                2. За 3 дня до переезда менеджер посещает дом и выставяет итоговый счет.
            </div>
        </div>

        <br>

        <div class="block">
            <div class="img">
                <img src="/views/static/img/smile.png" alt="">
            </div>
            <div class="text">
                3. Ждете день переезда. Приедет команда рабочих и менеджер.
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xs-12">
        <div class="inputLabelText">
            Ваш текущий адрес:
        </div>

        <div class="customInput">
            <input type="text" name="currentAddress">
        </div>

        <br><br>

        <div class="inputLabelText">
            Куда будете переезжать:
        </div>
        <div class="customInput">
            <input type="text" name="movingAddress">
        </div>

        <br><br>

        <div class="inputLabelText">
            Выберите точную дату:
        </div>
        <div class="customInput">
            <input type="date" name="movingDate">
        </div>

        <br><br><br>
    </div>
</div>

<br><br><hr>


    <div class="row">
        <div class="col-md-3 col-xs-12">
            <br><br><br>
            <div class="checkboxBlock">
                <input type="radio" name="time" checked> 1 час - 8990 тг <br><br>
                <input type="radio" name="time"> 2 часа - 17990 тг <br><br>
                <input type="radio" name="time"> 3 часа - 25990 тг
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
                <img src="/views/static/img/truck-transparent.png" alt="">
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

<div class="important-text">
    Дополнительные услуги
</div>

<br>

<div class="row">
    <div class="col-md-9">
        <br><br>
        <div class="checkboxBlock">
            <input type="checkbox" id="known" name="volumeCheckBox"> Влажная уборка заселяемой квартиры: 220 тг/кв. м
            <br><br>
            <input type="checkbox" id="unknown" name="volumeCheckBox" value="known"> Влажная уборка квартиры, с которой вы переезжаете: 220 тг/кв. м
        </div>
    </div>
    <div class="col-md-3 col-xs-12">
        <div class="img-frame">
            <img src="/views/static/img/cleaning.jpg" alt="">
        </div>
    </div>
</div>

<br><br><hr><br>

<div class="row">
    <div class="col-md-7 col-xs-12">
        <div class="checkboxBlock">
            <div class="important-text">
                Отправить заявку
            </div>

            <br><br>

            <div class="inputLabelText">
                Имя:
            </div>

            <div class="customInput">
                <input type="text" name="currentAddress">
            </div>

            <br>

            <div class="inputLabelText">
                Фамилия:
            </div>
            <div class="customInput">
                <input type="text" name="movingAddress">
            </div>

            <br>

            <div class="inputLabelText">
                Телефон:
            </div>
            <div class="customInput">
                <input type="text" name="movingAddress">
            </div>

            <br>

            В какое время суток вам будет удобнее разговаривать?<br><br>
            <input type="checkbox"> 8 АМ - 12 PМ<br>
            <input type="checkbox"> 12 PМ - 18 PМ<br>
            <input type="checkbox"> 18 PМ - 22 PM<br>
        </div>
    </div>

    <div class="col-md-2 col-xs-12"></div>

    <div class="col-md-3 col-xs-12">
        <br><br><br><br><br><br>
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
            <a href="/move/payment/" class="right">
                <div class="next-button">
                    Далее
                </div>
            </a>
        </div>
    </div>

</div>

</form>

<?php echo '<script'; ?>
 src="/views/static/js/moving.js"><?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:footer.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
