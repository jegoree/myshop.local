<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-10 11:26:49
  from 'C:\xampp\htdocs\myshop.local\views\default\leftcolumn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f083459237b44_22499190',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '726de5a813a061ae61eb7f6a7f9d3c2d9f4d4f8c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myshop.local\\views\\default\\leftcolumn.tpl',
      1 => 1594373206,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f083459237b44_22499190 (Smarty_Internal_Template $_smarty_tpl) {
?>	<div id="leftColumn">

	  <div id="leftMenu">
	    <div class="menuCaption">Menu:</div>
	    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCategories']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
  	    <a href="/category/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a><br>
  
  	    <?php if (isset($_smarty_tpl->tpl_vars['item']->value['children'])) {?>
    	    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['children'], 'itemChild');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->value) {
?>
      	    --<a href="/category/<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
</a></br>
    	    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  	    <?php }?>
	    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	  </div>


	  <div>
	    <div class="menuCaption">Shopping cart</div>
	    <a href="/cart/" title="Go to cart">In cart: </a>
	    <span id="cartCntItems">
	      <?php if ($_smarty_tpl->tpl_vars['cartCntItems']->value > 0) {
echo $_smarty_tpl->tpl_vars['cartCntItems']->value;
} else { ?>Empty<?php }?>
	    </span>
	  </div>
	</div><?php }
}
