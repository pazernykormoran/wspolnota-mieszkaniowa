<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-01 22:03:58
  from 'C:\xampp\htdocs\wspolnota-mieszkaniowa\templates\indexArticle.html.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e35e7be2cac97_24846881',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0e436a0e1bf0c4005be586fea544839f8118611' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wspolnota-mieszkaniowa\\templates\\indexArticle.html.php',
      1 => 1580591030,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e35e7be2cac97_24846881 (Smarty_Internal_Template $_smarty_tpl) {
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
