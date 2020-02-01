<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-01 12:28:00
  from 'D:\xampp\htdocs\wspolnota-mieszkaniowa\templates\indexArticle.html.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e3560c09a21d4_74117527',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f14ce68086ab1fd68a324eb2410dd31833f5975d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\wspolnota-mieszkaniowa\\templates\\indexArticle.html.php',
      1 => 1580555394,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e3560c09a21d4_74117527 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php ';?>
include 'templates/header.html.php'; <?php echo '?>';?>


<h1>Lista artykułów</h1>
<table>
    <tr>
        <td>Tytuł</td>
        <td>Data dodania</td>
        <td>Autor</td>
        <td>Kategoria</td>
        <td>&nbsp;</td>
    </tr>
    <?php echo '<?php
     ';?>
foreach($this->get('articles') as $articles) { <?php echo '?>';?>


    <tr>
        <td><a href="?task=articles&amp;action=one&amp;id=<?php echo '<?=';?>
 $articles['id']; <?php echo '?>';?>
"><?php echo '<?=';?>
 $articles['title']; <?php echo '?>';?>
</a></td>
        <td><?php echo '<?=';?>
 $articles['date_add']; <?php echo '?>';?>
</td>
        <td><?php echo '<?=';?>
 $articles['autor']; <?php echo '?>';?>
</td>
        <td><?php echo '<?=';?>
 $articles['name']; <?php echo '?>';?>
</td>
        <td><a href="?task=articles&amp;action=delete&amp;id=<?php echo '<?=';?>
 $articles['id']; <?php echo '?>';?>
">usuń</a></td>
        <td><a href="?task=aplikacja&amp;action=dashboard&amp;info=siematuinfo">przekieruj zi infem</a></td>
    </tr>
    <?php echo '<?php ';?>
} <?php echo '?>';?>

</table>

<?php echo '<?php ';?>
include 'templates/footer.html.php'; <?php echo '?>';
}
}
