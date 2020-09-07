<?php
/* Smarty version 3.1.36, created on 2020-09-06 21:23:39
  from 'E:\OSPanel\OSPanel\domains\bimoving\Views\success.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f55292b7de312_48706703',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef42897e0c0430aa1c6517a9b367be5ce90b8eda' => 
    array (
      0 => 'E:\\OSPanel\\OSPanel\\domains\\bimoving\\Views\\success.php',
      1 => 1598779809,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.php' => 1,
    'file:footer.php' => 1,
  ),
),false)) {
function content_5f55292b7de312_48706703 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="important-text">
    Отправить заявку
</div>

<br><br>

<div class="row">
    <div class="col-md-6 col-xs-12">
        <div class="checkboxBlock">
            <input type="checkbox"> Я хочу приобрести пакет "Всё включено"
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
    <div class="col-md-6 col-xs-12">


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
