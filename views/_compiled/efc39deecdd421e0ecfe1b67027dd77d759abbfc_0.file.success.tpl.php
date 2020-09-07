<?php
/* Smarty version 3.1.36, created on 2020-09-07 00:30:11
  from 'E:\OSPanel\OSPanel\domains\bimoving\Views\success.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f5554e38ce2e6_32826403',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'efc39deecdd421e0ecfe1b67027dd77d759abbfc' => 
    array (
      0 => 'E:\\OSPanel\\OSPanel\\domains\\bimoving\\Views\\success.php',
      1 => 1599427775,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.php' => 1,
    'file:footer.php' => 1,
  ),
),false)) {
function content_5f5554e38ce2e6_32826403 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="back-button" class="anchor">
    <a href="/" >
        <div id="back-button-inner" onclick="history.back()">
            ← назад
        </div>
    </a>
</div>

<br><br>

<div class="center-block align-center">
    Ваша заявка успешно оформлена!<br>
    Ожидайте звонка оператора!<br><br>

    <a href="/">На главную</a>

</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
