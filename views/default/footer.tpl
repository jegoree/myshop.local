	</div>{*/centerColumn*}

	<div id="footer">
	  Footer
	</div>

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
	</body>

	</html>