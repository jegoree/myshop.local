<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-12 17:54:01
  from 'C:\xampp\htdocs\myshop.local\views\default\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ebac699c3ad51_90615866',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f2407d13ceb470ce5973199d3408a2b5a1e5d0f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myshop.local\\views\\default\\product.tpl',
      1 => 1589298836,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ebac699c3ad51_90615866 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h2 id="test"><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['name'];?>
</h2>

<img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image'];?>
" width="300px" alt="<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['name'];?>
"/>
<br>
Price: <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['price'];?>
 

<a id="removeCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" <?php if (!$_smarty_tpl->tpl_vars['itemInCart']->value) {?>class="hideme"<?php }?> href="#" onClick="removeCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
); return false" alt="Remove from cart">Remove from cart</a>

<a id="addCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['itemInCart']->value) {?>class="hideme"<?php }?> href="#" onClick="addToCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
); return false;" alt="Add to cart">Add to cart</a>

<p>Description<br><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['description'];?>
</p><?php }
}
