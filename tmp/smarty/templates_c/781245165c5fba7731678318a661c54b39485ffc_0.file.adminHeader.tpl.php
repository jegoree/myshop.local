<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-10 15:41:52
  from 'C:\xampp\htdocs\myshop.local\views\admin\adminHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee0e3200fa5f6_53926110',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '781245165c5fba7731678318a661c54b39485ffc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myshop.local\\views\\admin\\adminHeader.tpl',
      1 => 1591796432,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminLeftColumn.tpl' => 1,
  ),
),false)) {
function content_5ee0e3200fa5f6_53926110 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/style.css" type="text/css"/>
        <?php echo '<script'; ?>
 type="text/javascript" src="/js/jquery-3.5.1.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="/js/admin.js"><?php echo '</script'; ?>
>
    </head>

    <body>
        <div id="header">
            <h1>Site management</h1>
        </div>
        <?php $_smarty_tpl->_subTemplateRender("file:adminLeftColumn.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <div id="centerColumn"> <?php }
}
