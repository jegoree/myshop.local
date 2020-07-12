<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-12 15:16:09
  from 'C:\xampp\htdocs\myshop.local\views\default\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f0b0d19b80ab5_98950343',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e84548cdf8f2d47ff61c9b8feb52149a2711e75' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myshop.local\\views\\default\\register.tpl',
      1 => 1594559544,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f0b0d19b80ab5_98950343 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h2 class="display-4 mt-5">New user registration</h2>
<div id="registerBox">

  <form>
    <div class="form-group">
      <label for="email">Email:</label>
      <input class="form-control" type="text" id="email" name="email" value="">

      <label for="pwd1">Password:</label>
      <input class="form-control" type="password" id="pwd1" name="pwd1" value="">

      <label for="pwd2">Confirm password:</label>
      <input class="form-control" type="password" id="pwd2" name="pwd2" value="">

      <input type="button" onclick="registerNewUser();" value="Register">
    </div>
  </form>
</div><?php }
}
