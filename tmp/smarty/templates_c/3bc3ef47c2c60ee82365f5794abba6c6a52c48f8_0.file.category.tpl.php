<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-12 16:05:40
  from 'C:\xampp\htdocs\myshop.local\views\default\category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ebaad34374545_91650352',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3bc3ef47c2c60ee82365f5794abba6c6a52c48f8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myshop.local\\views\\default\\category.tpl',
      1 => 1589292338,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ebaad34374545_91650352 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1><?php echo $_smarty_tpl->tpl_vars['rsCategory']->value['name'];?>
</h1>

	<?php if ($_smarty_tpl->tpl_vars['rsProducts']->value || $_smarty_tpl->tpl_vars['rsChildCats']->value) {?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsProducts']->value, 'item', false, NULL, 'products', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']++;
?>
			
			<div style="float: left; padding: 0px 30px 40px 0px;">
				<a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/">
					<img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="100px" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
"/>
				</a><br>
				<a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
			</div>

		<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null) % 3 == 0) {?>
			<div style="clear:both;"></div>
		<?php }?>


		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

		<?php } else { ?>
			<h2 style="color:red"><ins> Currently unavaliable!</ins></h2>
		<?php }?>


	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsChildCats']->value, 'item', false, NULL, 'childCats', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
		<h2><a href="/category/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></h2>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
