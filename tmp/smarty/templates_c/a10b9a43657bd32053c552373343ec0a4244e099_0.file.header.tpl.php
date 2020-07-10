<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-10 14:15:28
  from 'C:\xampp\htdocs\myshop.local\views\default\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f085be0e6bba4_66246844',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a10b9a43657bd32053c552373343ec0a4244e099' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myshop.local\\views\\default\\header.tpl',
      1 => 1594383325,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:leftcolumn.tpl' => 1,
  ),
),false)) {
function content_5f085be0e6bba4_66246844 (Smarty_Internal_Template $_smarty_tpl) {
?><html>

  <head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/style.css" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <?php echo '<script'; ?>
 type="text/javascript" src="/js/jquery-3.5.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/js/main.js"><?php echo '</script'; ?>
>
  </head>

  <body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
      <div class="container">
        <a href="http://myshop.local/" class="navbar-brand">Mobiil </a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">

          <?php if (isset($_smarty_tpl->tpl_vars['arUser']->value)) {?>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown mr-3">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                  <i class="fas fa-user fa"></i> <?php echo $_smarty_tpl->tpl_vars['arUser']->value['displayName'];?>

                </a>
                <div class="dropdown-menu">
                  <a href="/user/" class="dropdown-item">
                    <i class="fas fa-user-circle fa"></i> Profile</a>
                  <a href="/user/orders/" class="dropdown-item">
                    <i class="far fa-list-alt fa"></i> Orders</a>
                  <a href="/user/logout/" class="dropdown-item">
                    <i class="fas fa-user-times fa"></i> Logout</a>
                </div>
              </li>
            </ul>
          <?php } else { ?>
  
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a href="/user/registration/" class="nav-link"><i class="fas fa-pencil fa"></i> Register</a>
              </li>
  
              <li class="nav-item">
                <a href="#" class="nav-link" data-toggle="modal" data-target="#loginModal"><i class="fas fa-user fa"></i> Login</a>
              </li>
            </ul>
          <?php }?>

          <div class="text-light">
            <a href="/cart/" title="Go to cart" class="text-light"><i class="fas fa-shopping-cart fa"></i> <span id="cartCntItems">
                <?php if ($_smarty_tpl->tpl_vars['cartCntItems']->value > 0) {
echo $_smarty_tpl->tpl_vars['cartCntItems']->value;
} else { ?>0<?php }?>
              </span></a>

          </div>
        </div>
    </nav>
    <div class="container">
      <div class="row">

        <?php $_smarty_tpl->_subTemplateRender('file:leftcolumn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
