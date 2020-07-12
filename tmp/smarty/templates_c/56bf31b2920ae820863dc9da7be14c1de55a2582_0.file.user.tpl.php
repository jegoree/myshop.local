<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-12 15:12:37
  from 'C:\xampp\htdocs\myshop.local\views\default\user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f0b0c45b57284_55032591',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56bf31b2920ae820863dc9da7be14c1de55a2582' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myshop.local\\views\\default\\user.tpl',
      1 => 1594559556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f0b0c45b57284_55032591 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1 class="display-4 mt-5">Account details:</h1>
<table border="0">
  <tr>
    <td>Login (email)</td>
    <td><?php echo $_smarty_tpl->tpl_vars['arUser']->value['email'];?>
</td>
  </tr>

  <tr>
    <td>Name</td>
    <td><input type="text" id="newName" value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['name'];?>
"></td>
  </tr>

  <tr>
    <td>Phone</td>
    <td><input type="text" id="newPhone" value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['phone'];?>
"></td>
  </tr>

  <tr>
    <td>Adress</td>
    <td><textarea id="newAdress"><?php echo $_smarty_tpl->tpl_vars['arUser']->value['adress'];?>
</textarea></td>
  </tr>

  <tr>
    <td>New password</td>
    <td><input type="password" id="newPwd1" value=""></td>
  </tr>

  <tr>
    <td>Confirm new password</td>
    <td><input type="password" id="newPwd2" value=""></td>
  </tr>

  <tr>
    <td>To apply all changes please enter current password</td>
    <td><input type="password" id="curPwd" value=""></td>
  </tr>
  <tr>
    <td></td>
    <td><input type="button" value="Save changes" onclick="updateUserData();"></td>
  </tr>
</table><?php }
}
