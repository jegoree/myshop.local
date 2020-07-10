<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-11 22:25:42
  from 'C:\xampp\htdocs\myshop.local\views\admin\adminCategory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee293462a9667_23157796',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0fa527db31bb3692f1d379143e3101747354a92d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myshop.local\\views\\admin\\adminCategory.tpl',
      1 => 1591907139,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee293462a9667_23157796 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Categories management</h2>
    <table border="1" cellpadding="1" cellspacing="1">
        <tr>
            <th>№</th>
            <th>ID</th>
            <th>Name</th>
            <th>Parent category</th>
            <th>Action</th>
        </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCategories']->value, 'item', false, NULL, 'categories', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['iteration']++;
?>
        <tr>
            <td><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['iteration'] : null);?>
</td>

            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
            <td>
                <input type="edit" id="itemName_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
">
            </td>
            <td>
                <select id="parentId_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                    <option value="0">Head category
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsMainCategories']->value, 'mainItem');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['mainItem']->value) {
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['mainItem']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['parent_id'] == $_smarty_tpl->tpl_vars['mainItem']->value['id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['mainItem']->value['name'];?>

                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </td>
            <td>
                <input type="button" value="Update" onclick="updateCat(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
);">
            </td>

        </tr>
    
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
    </table><?php }
}
