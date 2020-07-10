<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-10 11:18:24
  from 'C:\xampp\htdocs\myshop.local\views\default\orders.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f08326039b7c2_03981414',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad335cf415c522ac8cf05662b2c360926660f70a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myshop.local\\views\\default\\orders.tpl',
      1 => 1594372701,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f08326039b7c2_03981414 (Smarty_Internal_Template $_smarty_tpl) {
?><h2><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</h2>


<?php if (!$_smarty_tpl->tpl_vars['rsUserOrders']->value) {?>
  No orders found
<?php } else { ?>
  <table border="1" cellpadding="1" cellspacing="1">
    <tr>
      <th>№</th>
      <th>Action</th>
      <th>Order ID</th>
      <th>Status</th>
      <th>Order date</th>
      <th>Payment date</th>
      <th>Additional info</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsUserOrders']->value, 'item', false, NULL, 'orders', array (
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
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['status'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['date_created'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['date_payment'];?>
&nbsp;</td>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['comment'];?>
</td>
      </tr>
    
      <tr class="hideme" id="purchaseForOrderId_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
        <td colspan="7">
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
                  <td><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['product_id'];?>
</td>
                  <td><a href="/product/<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['product_id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
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
<?php }
}
}
