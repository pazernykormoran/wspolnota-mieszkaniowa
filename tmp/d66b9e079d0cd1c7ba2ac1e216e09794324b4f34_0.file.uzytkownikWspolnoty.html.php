<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-02 13:58:14
  from 'C:\xampp\htdocs\wspolnota-mieszkaniowa\templates\includes\uzytkownikWspolnoty.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e36c766055790_70742133',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd66b9e079d0cd1c7ba2ac1e216e09794324b4f34' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wspolnota-mieszkaniowa\\templates\\includes\\uzytkownikWspolnoty.html',
      1 => 1580643097,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e36c766055790_70742133 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="vertical-menu">
    <div class = "menuSection">
        Panel użytkownika wspólnoty
    </div>
    <a href="#">Zgłoś usterke</a>
    <a href="#">Postępy pracy</a>
    <a href="#">Plan budżetowy</a>
    <a href="#">Przeglądaj zgłoszenia usterki</a>
  </div>

  <style>
      .vertical-menu {
  width: 200px; /* Set a width if you like */
}

.vertical-menu a {
  background-color: #eee; /* Grey background color */
  color: black; /* Black text color */
  display: block; /* Make the links appear below each other */
  padding: 12px; /* Add some padding */
  text-decoration: none; /* Remove underline from links */
}

.menuSection {
  background-color: #4CAF50; /* Grey background color */
  color: black; /* Black text color */
  display: block; /* Make the links appear below each other */
  padding: 12px; /* Add some padding */
  text-decoration: none; /* Remove underline from links */
}

.vertical-menu a:hover {
  background-color: #ccc; /* Dark grey background on mouse-over */
}

.vertical-menu a.active {
  background-color: #4CAF50; /* Add a green color to the "active/current" link */
  color: white;
}
  </style><?php }
}
