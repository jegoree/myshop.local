<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-10 15:41:40
  from 'C:\xampp\htdocs\myshop.local\views\default\leftcolumn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f087014c0c243_84223712',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '726de5a813a061ae61eb7f6a7f9d3c2d9f4d4f8c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myshop.local\\views\\default\\leftcolumn.tpl',
      1 => 1594388500,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f087014c0c243_84223712 (Smarty_Internal_Template $_smarty_tpl) {
?>	
	  <div class="col-sm-4 col-md-4 col-lg-3 col-xl-2 mt-3">



	    <div id="accordion">
	      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCategories']->value, 'item', false, NULL, 'count', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['iteration']++;
?>
  	      <div class="card">
  	        <div class="card-header p-0">
  	          <h5>
  	            <div href="#collapse<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['iteration'] : null);?>
" data-parent="#accordion" data-toggle="collapse" class="p-3 headerText"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
<i class="fas fa-chevron-down fa"></i></div>
  	          </h5>
  	        </div>
  
  
  	        <?php if (isset($_smarty_tpl->tpl_vars['item']->value['children'])) {?>
    	        <div id="collapse<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['iteration'] : null);?>
" class="collapse">
    	          <div class="card-body p-0">
    	            <ul class="list-group">
    	              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['children'], 'itemChild', false, NULL, 'count', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['iteration']++;
?>
      	              <li class="list-group-item p-0">
      	                <a href="/category/<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['id'];?>
/" class="d-block p-2">
      	                  <?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
</a>
      	              </li>
    	              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    	            </ul>
    	          </div>
    	        </div>
  	        <?php }?>
  	      </div>
	      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	    </div>


	  </div> 
	  <div class="col-sm-6 col-md-8 col-lg-9 col-xl-10 mb-3"><?php }
}
