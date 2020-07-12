<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-10 15:49:08
  from 'C:\xampp\htdocs\myshop.local\views\default\order.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f0871d4362d91_17341551',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf66c0d13ec0a03d8b01fd6ccc948ede379ce557' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myshop.local\\views\\default\\order.tpl',
      1 => 1594388071,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f0871d4362d91_17341551 (Smarty_Internal_Template $_smarty_tpl) {
?>orders page

<h2>Order details</h2>
<form id="frmOrder" action="/cart/saveorder/" method="POST">
  <table>
    <tr>
      <td>№</td>
      <td>Name</td>
      <td>Ammount</td>
      <td>Price per item</td>
      <td>Total price</td>
    </tr>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsProducts']->value, 'item', false, NULL, 'products', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']++;
?>
      <tr>
        <td><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null);?>
</td>
        <td><a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/" target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></td>
        <td>
          <span id="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
            <input type="hidden" name="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['cnt'];?>
">
            <?php echo $_smarty_tpl->tpl_vars['item']->value['cnt'];?>

          </span>
        </td>
        <td>
          <span id="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
            <input type="hidden" name="itemPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
">
            <?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>

          </span>
        </td>
        <td>
          <span id="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
            <input type="hidden" name="itemRealPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['realPrice'];?>
">
            <?php echo $_smarty_tpl->tpl_vars['item']->value['realPrice'];?>

          </span>
        </td>
      </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

  </table>

  <?php if (isset($_smarty_tpl->tpl_vars['arUser']->value)) {?>
    <?php $_smarty_tpl->_assignInScope('buttonClass', '');?>
    <h2>Users details</h2>
    <div id="orderUserInfoBox">
      <?php $_smarty_tpl->_assignInScope('name', $_smarty_tpl->tpl_vars['arUser']->value['name']);?>
      <?php $_smarty_tpl->_assignInScope('phone', $_smarty_tpl->tpl_vars['arUser']->value['phone']);?>
      <?php $_smarty_tpl->_assignInScope('adress', $_smarty_tpl->tpl_vars['arUser']->value['adress']);?>
  
      <table>
        <tr>
          <td>Name*</td>
          <td><input type="text" id="name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"></td>
        </tr>
        <tr>
          <td>Phone*</td>
          <td><input type="text" id="phone" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
"></td>
        </tr>
        <tr>
          <td>Adress*</td>
          <td><textarea id="adress" name="adress"><?php echo $_smarty_tpl->tpl_vars['adress']->value;?>
</textarea></td>
        </tr>
      </table>
  
    </div>
  <?php } else { ?>
  
    <div id="loginBox">
      <div class="menuCaption">Login</div>
      <table>
        <tr>
          <td>Username</td>
          <td><input type="text" id="loginEmail" name="loginEmail" value=""></td>
        </tr>
  
        <tr>
          <td>Password</td>
          <td><input type="password" id="loginPwd" name="loginPwd" value=""></td>
        </tr>
  
        <tr>
          <td></td>
          <td><input type="button" onClick="login();" value="Enter"></td>
        </tr>
      </table>
    </div>
  
    <div id="registerBox">Or<br>
      <div href="#" class="menuCaptionn">New user registration:</div>
      email*:<br>
      <input type="text" id="email" name="email" value=""><br>
      password*:<br>
      <input type="password" id="pwd1" name="pwd1" value=""><br>
      confirm password*:<br>
      <input type="password" id="pwd2" name="pwd2" value=""><br>
  
      Name* :<input type="text" id="name" name="name" value="">
      Phone* :<input type="text" id="phone" name="phone" value="">
      Adress* :<textarea type="text" id="adress" name="adress" value=""></textarea>
  
      <input type="button" onclick="registerNewUser();" value="Register">
    </div>
    <?php $_smarty_tpl->_assignInScope('buttonClass', "class='hideme'");?>
  
  <?php }?>

  <input <?php echo $_smarty_tpl->tpl_vars['buttonClass']->value;?>
 id="btnSaveOrder" type="button" value="Place order" onclick="saveOrder();">
</form><?php }
}
