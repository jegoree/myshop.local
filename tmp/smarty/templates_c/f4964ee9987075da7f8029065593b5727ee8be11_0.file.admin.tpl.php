<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-10 20:09:30
  from 'C:\xampp\htdocs\myshop.local\views\admin\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee121daad76a3_91931036',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4964ee9987075da7f8029065593b5727ee8be11' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myshop.local\\views\\admin\\admin.tpl',
      1 => 1591812217,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee121daad76a3_91931036 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="blockNewCategory">
    New category:
    <input name="newCategoryName" id="newCategoryName" type="text" value="">
    <br>

    Sub-category:
    <select name="generalCatId">
        <option value="0">Head category
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCategories']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>

        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
    <br>
    <input type="button" onclick="newCategory();" value="Create new category">
    <br>
</div><?php }
}
