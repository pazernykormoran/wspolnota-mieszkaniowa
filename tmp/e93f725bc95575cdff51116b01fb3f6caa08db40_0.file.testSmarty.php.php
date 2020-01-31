<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-31 03:11:30
  from 'D:\xampp\htdocs\wspolnota-mieszkaniowa\templates\testSmarty.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e338cd29eb422_61839166',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e93f725bc95575cdff51116b01fb3f6caa08db40' => 
    array (
      0 => 'D:\\xampp\\htdocs\\wspolnota-mieszkaniowa\\templates\\testSmarty.php',
      1 => 1580436689,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e338cd29eb422_61839166 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['tytul']->value;?>


<ul>
<?php if ($_smarty_tpl->tpl_vars['catsData']->value) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['catsData']->value, 'cats');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cats']->value) {
?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cats']->value, 'c', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['c']->value) {
?>
            <li><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
: <?php echo $_smarty_tpl->tpl_vars['c']->value;?>
</li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
</ul>

<?php }
}
