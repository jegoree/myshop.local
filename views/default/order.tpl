{* orders page *}

<h2>Order details</h2>
<form id="frmOrder" action="/cart/saveorder/" method="POST">
  <table>
    <tr>
      <td>№</td>
      <td>Name</td>
      <td>Ammount</td>
      <td>Price per item</td>
      <td>Total price</td>
    </tr>

    {foreach $rsProducts as $item name=products}
      <tr>
        <td>{$smarty.foreach.products.iteration}</td>
        <td><a href="/product/{$item['id']}/" target="_blank">{$item['name']}</a></td>
        <td>
          <span id="itemCnt_{$item['id']}">
            <input type="hidden" name="itemCnt_{$item['id']}" value="{$item['cnt']}">
            {$item['cnt']}
          </span>
        </td>
        <td>
          <span id="itemCnt_{$item['id']}">
            <input type="hidden" name="itemPrice_{$item['id']}" value="{$item['price']}">
            {$item['price']}
          </span>
        </td>
        <td>
          <span id="itemCnt_{$item['id']}">
            <input type="hidden" name="itemRealPrice_{$item['id']}" value="{$item['realPrice']}">
            {$item['realPrice']}
          </span>
        </td>
      </tr>
    {/foreach}

  </table>

  {if isset($arUser)}
    {$buttonClass = ""}
    <h2>Users details</h2>
    <div id="orderUserInfoBox">
      {$name = $arUser['name']}
      {$phone = $arUser['phone']}
      {$adress = $arUser['adress']}
  
      <table>
        <tr>
          <td>Name*</td>
          <td><input type="text" id="name" name="name" value="{$name}"></td>
        </tr>
        <tr>
          <td>Phone*</td>
          <td><input type="text" id="phone" name="phone" value="{$phone}"></td>
        </tr>
        <tr>
          <td>Adress*</td>
          <td><textarea id="adress" name="adress">{$adress}</textarea></td>
        </tr>
      </table>
  
    </div>
  {else}
  
    <div id="loginBox">
      <div class="menuCaption">Login</div>
      <table>
        <tr>
          <td>Username</td>
          <td><input type="text" id="loginEmail" name="loginEmail" value=""></td>
        </tr>
  
        <tr>
          <td>Password</td>
          <td><input type="password" id="loginPwd" name="loginPwd" value=""></td>
        </tr>
  
        <tr>
          <td></td>
          <td><input type="button" onClick="login();" value="Enter"></td>
        </tr>
      </table>
    </div>
  
    <div id="registerBox">Or<br>
      <div href="#" class="menuCaptionn">New user registration:</div>
      email*:<br>
      <input type="text" id="email" name="email" value=""><br>
      password*:<br>
      <input type="password" id="pwd1" name="pwd1" value=""><br>
      confirm password*:<br>
      <input type="password" id="pwd2" name="pwd2" value=""><br>
  
      Name* :<input type="text" id="name" name="name" value="">
      Phone* :<input type="text" id="phone" name="phone" value="">
      Adress* :<textarea type="text" id="adress" name="adress" value=""></textarea>
  
      <input type="button" onclick="registerNewUser();" value="Register">
    </div>
    {$buttonClass = "class='hideme'"}
  
  {/if}

  <input {$buttonClass} id="btnSaveOrder" type="button" value="Place order" onclick="saveOrder();">
</form>