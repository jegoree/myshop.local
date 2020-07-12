{* Users page *}

<h1 class="display-4 mt-5">Account details:</h1>
<table border="0">
  <tr>
    <td>Login (email)</td>
    <td>{$arUser['email']}</td>
  </tr>

  <tr>
    <td>Name</td>
    <td><input type="text" id="newName" value="{$arUser['name']}"></td>
  </tr>

  <tr>
    <td>Phone</td>
    <td><input type="text" id="newPhone" value="{$arUser['phone']}"></td>
  </tr>

  <tr>
    <td>Adress</td>
    <td><textarea id="newAdress">{$arUser['adress']}</textarea></td>
  </tr>

  <tr>
    <td>New password</td>
    <td><input type="password" id="newPwd1" value=""></td>
  </tr>

  <tr>
    <td>Confirm new password</td>
    <td><input type="password" id="newPwd2" value=""></td>
  </tr>

  <tr>
    <td>To apply all changes please enter current password</td>
    <td><input type="password" id="curPwd" value=""></td>
  </tr>
  <tr>
    <td></td>
    <td><input type="button" value="Save changes" onclick="updateUserData();"></td>
  </tr>
</table>