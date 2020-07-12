{* Register page *}

<h2 class="display-4 mt-5">New user registration</h2>
<div id="registerBox">

  <form>
    <div class="form-group">
      <label for="email">Email:</label>
      <input class="form-control" type="text" id="email" name="email" value="">

      <label for="pwd1">Password:</label>
      <input class="form-control" type="password" id="pwd1" name="pwd1" value="">

      <label for="pwd2">Confirm password:</label>
      <input class="form-control" type="password" id="pwd2" name="pwd2" value="">

      <input type="button" onclick="registerNewUser();" value="Register">
    </div>
  </form>
</div>