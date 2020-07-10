<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-10 10:42:47
  from 'C:\xampp\htdocs\myshop.local\views\default\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f082a07e0f7e6_03365803',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e84548cdf8f2d47ff61c9b8feb52149a2711e75' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myshop.local\\views\\default\\register.tpl',
      1 => 1594370567,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f082a07e0f7e6_03365803 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="registerBox">
  <form>
    email:<br>
    <input type="text" id="email" name="email" value=""><br>
    password:<br>
    <input type="password" id="pwd1" name="pwd1" value=""><br>
    confirm password:<br>
    <input type="password" id="pwd2" name="pwd2" value=""><br>
    <input type="button" onclick="registerNewUser();" value="Register">
  </form>
</div><?php }
}
