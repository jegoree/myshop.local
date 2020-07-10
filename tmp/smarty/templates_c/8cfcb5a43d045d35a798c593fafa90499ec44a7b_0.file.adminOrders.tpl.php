<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-13 12:09:53
  from 'C:\xampp\htdocs\myshop.local\views\admin\adminOrders.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee4a5f18d80a4_31028002',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8cfcb5a43d045d35a798c593fafa90499ec44a7b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myshop.local\\views\\admin\\adminOrders.tpl',
      1 => 1592041064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee4a5f18d80a4_31028002 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Orders</h2>

<?php if (!$_smarty_tpl->tpl_vars['rsOrders']->value) {?>
    There are no orders
<?php } else { ?>
    <table border="1" cellpadding="1" cellspacing="1" width="900px">
        <tr>
            <th>№</th>
            <th>Products</th>
            <th>Order ID</th>
            <th width="110">Status</th>
            <th>Date created</th>
            <th>Payment date</th>
            <th>Additional info</th>
            <th>Last modified</th>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsOrders']->value, 'item', false, NULL, 'orders', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_orders']->value['iteration']++;
?>
            <tr>
                <td><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_orders']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_orders']->value['iteration'] : null);?>
</td>
                <td><a href="#" onclick="showProducts('<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
'); return false">Show products</a></td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
                <td>
                    <input type="checkbox" id="itemStatus_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['status']) {?>checked="checked"<?php }?> onclick="updateOrderStatus('<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
');">Close order
                </td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['date_created'];?>
</td>
                <td>
                    <input id="datePayment_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" type="text" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['date_payment'];?>
">        
                    <input type="button" value="save" onclick="updateDatePayment('<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
');">        
                </td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['comment'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['date_modification'];?>
</td>
            </tr>

            <tr class="hideme" id="purchasesForOrderId_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                <td colspan="8">

                <?php if ($_smarty_tpl->tpl_vars['item']->value['children']) {?>
                    <table border="1" cellpadding="1" cellspacing="1" width="100%">
                    <tr>
                        <th>№</th>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Ammount</th>
                    </tr>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['children'], 'itemChild', false, NULL, 'products', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']++;
?>
                        <tr>
                            <td><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null);?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['id'];?>
</td>
                            <td><a href="/product/<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
</a></td>
                            <td><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['price'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['ammount'];?>
</td>
                        </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </table>
                <?php }?>
                </td>
            </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
<?php }?>

<?php }
}
