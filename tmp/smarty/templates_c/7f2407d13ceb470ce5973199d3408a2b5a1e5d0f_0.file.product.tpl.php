<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-12 15:40:42
  from 'C:\xampp\htdocs\myshop.local\views\default\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f0b12da869ec6_11359440',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f2407d13ceb470ce5973199d3408a2b5a1e5d0f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myshop.local\\views\\default\\product.tpl',
      1 => 1594561241,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f0b12da869ec6_11359440 (Smarty_Internal_Template $_smarty_tpl) {
?>


<h2 class="display-4 mt-5" id="test"><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['name'];?>
</h2>
<div class="row d-flex">
  <div class="col-lg-6 col-xl-5">

    <img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image'];?>
" width="300px" alt="<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['name'];?>
" />
  </div>
  <div class="col-lg-6 col-xl-7">
    <br>
    <div class="pb-3">
      <strong>Price: &euro; <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['price'];?>
&#44;&#45; </strong>

      <a id="removeCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" <?php if (!$_smarty_tpl->tpl_vars['itemInCart']->value) {?> class="hideme" <?php }?> href="#" onClick="removeCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
); return false" alt="Remove from cart">Remove from cart</a>

      <a id="addCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['itemInCart']->value) {?>class="hideme" <?php }?> href="#" onClick="addToCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
); return false;" alt="Add to cart">Add to cart</a>
    </div>
    <p class="lead">Description</p><br><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['description'];?>


  </div>
</div><?php }
}
