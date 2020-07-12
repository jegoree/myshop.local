<?php
/* Smarty version 3.1.34-dev-7, created on 2020-07-11 14:51:01
  from 'C:\xampp\htdocs\myshop.local\views\default\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f09b5b596f511_51258109',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7ee05bafd0f5eae1f83725291aafb01cf82b44d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myshop.local\\views\\default\\footer.tpl',
      1 => 1594471856,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f09b5b596f511_51258109 (Smarty_Internal_Template $_smarty_tpl) {
?></div> </div> </div> 



<div class="modal fade" id="loginModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Account Login</h5>
        <button class="close" data-dismiss="modal">
          <span>&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="loginEmail">Email</label>
            <input type="text" class="form-control" id="loginEmail" name="loginEmail" value="">
          </div>
          <div class="form-group">
            <label for="loginPwd">Password</label>
            <input type="password" class="form-control" id="loginPwd" name="loginPwd" value="">
          </div>
        </form>
      </div>

      <div class="modal-footer">
        <input type="button" onClick="login();" value="Enter" data-dismiss="modal">
      </div>
    </div>
  </div>
</div>


</div>
<footer id="main-footer" class="bg-primary text-white">
  <div class="container">
    <div class="row text-center">
      <div class="col-md-6 ml-auto">
        <p class="lead mb-0">©&nbsp;<span id="year">2020</span>&nbsp;Copyright:&nbsp; <a href="https://jegor.ee" class="text-white" target="blank">jegor.ee</a></p>
      </div>
    </div>
  </div>
</footer>
</body>

</html><?php }
}
