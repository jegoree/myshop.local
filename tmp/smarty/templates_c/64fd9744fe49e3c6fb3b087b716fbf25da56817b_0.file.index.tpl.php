<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-11 15:22:53
  from 'C:\xampp\htdocs\myshop.local\views\default\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f09bd2d24b283_35736951',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64fd9744fe49e3c6fb3b087b716fbf25da56817b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myshop.local\\views\\default\\index.tpl',
      1 => 1594473772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f09bd2d24b283_35736951 (Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="d-flex flex-wrap my-5">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsProducts']->value, 'item', false, NULL, 'products', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card">
        <a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/">
          <img class="card-img-top" src="/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="100px" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" />
        </a>
        <h4 class="card-title"><a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></h4>
      </div>
    </div>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div><?php }
}
