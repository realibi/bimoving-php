<?php
/* Smarty version 3.1.36, created on 2020-08-29 12:59:32
  from 'E:\OSPanel\OSPanel\domains\bimoving\Views\moveDetails.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f4a270439dbe8_19528325',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03c06265dfd2af984457ac8bdec0837cbc16904b' => 
    array (
      0 => 'E:\\OSPanel\\OSPanel\\domains\\bimoving\\Views\\moveDetails.tpl',
      1 => 1598695096,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.php' => 1,
    'file:footer.php' => 1,
  ),
),false)) {
function content_5f4a270439dbe8_19528325 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="important-text">
    Оформление переезда
</div>

<br><br>

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

        <div class="block">
            <a href="/move/" class="right">
                <div class="next-button">
                    Далее
                </div>
            </a>
        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
