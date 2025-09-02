<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:5px 10px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body" style="padding:20px 20px;">
          <form role="form" name="Login" method="post" action="http://easym2m.ddns.net:8765/easym2m/thirdeye" target="_blank">
            <div class="form-group">
              <label for="account"><span class="glyphicon glyphicon-info-sign"></span> Account Id</label>
              <input type="text" class="login-model-custom" name="account" id="account" placeholder="Enter account-id" required>
            </div>
            <div class="form-group">
              <label for="user"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="email" class="login-model-custom" name="user" id="user" placeholder="Enter email" required>
            </div>
            <div class="form-group">
              <label for="password"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="login-model-custom" id="password" name="password" placeholder="Enter password" required>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" id="remember" value="" checked>Remember me</label>
            </div>
              <input type="submit" name="password" id="password" class="btn btn-block modal-login-button">
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn modal-login-button modal-login-close-button pull-left" data-dismiss="modal" style="padding:5px;">
            <span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <!--p>Not a member? <a href="#">Sign Up</a></p-->
          <p style="color:#fff">Forgot <a href="mailto:info@easym2m.in?subject=forgot password">Password?</a></p>
        </div>
      </div>
      
    </div>
  </div> 
 
<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script>
