<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-01 12:15:06
  from 'D:\xampp\htdocs\wspolnota-mieszkaniowa\templates\testSmarty.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e355dba61be45_29309774',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e93f725bc95575cdff51116b01fb3f6caa08db40' => 
    array (
      0 => 'D:\\xampp\\htdocs\\wspolnota-mieszkaniowa\\templates\\testSmarty.php',
      1 => 1580555704,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e355dba61be45_29309774 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- <?php echo $_smarty_tpl->tpl_vars['tytul']->value;?>


<ul>
<?php if ($_smarty_tpl->tpl_vars['catsData']->value) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['catsData']->value, 'cats');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cats']->value) {
?>
        <li>    
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cats']->value, 'c', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['c']->value) {
?>
            <?php echo $_smarty_tpl->tpl_vars['k']->value;?>
: <?php echo $_smarty_tpl->tpl_vars['c']->value;?>
, 
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
</ul> -->
<hr>
smarty view
<?php echo $_smarty_tpl->tpl_vars['info']->value;?>

<hr><?php }
}
