<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-12 15:13:19
  from 'C:\xampp\htdocs\myshop.local\views\default\category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f0b0c6fef49f1_24296846',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3bc3ef47c2c60ee82365f5794abba6c6a52c48f8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myshop.local\\views\\default\\category.tpl',
      1 => 1594559599,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f0b0c6fef49f1_24296846 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1 class="display-4 mt-5"><?php echo $_smarty_tpl->tpl_vars['rsCategory']->value['name'];?>
</h1>

<div class="d-flex flex-wrap mt-2 mb-5">
  <?php if ($_smarty_tpl->tpl_vars['rsProducts']->value || $_smarty_tpl->tpl_vars['rsChildCats']->value) {?>
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
  
  <?php } else { ?>
    <h2 style="color:red"><ins> Currently unavaliable!</ins></h2>
  <?php }?>

</div>
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
