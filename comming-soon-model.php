<div class="modal fade" id="commingSoon" role="dialog">
    <div class="modal-dialog modal-sm">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:15px 30px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Comming Soon</h4>
        </div>
        <div class="modal-body" style="padding:20px 30px;">
          <p class="center" style="color: #231835;">We'll Come Soon With This Feature.</p>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn modal-login-button modal-login-close-button pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <!--p>Not a member? <a href="#">Sign Up</a></p-->
          <p>It's <a href="mailto:info@easym2m.in?subject=Info | EasyM2M">urgent!</a></p>
        </div>
      </div>
      
    </div>
  </div> 
 
<script>
$(document).ready(function(){
    $("#comming-soon").click(function(){
        $("#commingSoon").modal();
    });
});
</script>
