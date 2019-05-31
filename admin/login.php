<?php 
  include'include/header.php';
?>
  <div class="row justify-content-center form-signin">
    <div class="col-md-3">
      <form>
        <div class="text-center mb-1">
          <h4 class="h4 mb-3 font-weight-normal">Sign In</h4>
        </div>

        <div class="form-label-group mb-3">
          <label for="inputEmail">Username</label>
          <input type="text" id="inputEmail" class="form-control" placeholder="admin" required="" autofocus="">
        </div>

        <div class="form-label-group mb-3">
          <label for="inputPassword">Password</label>
          <input type="password" id="inputPassword" class="form-control" placeholder="admin" required="">
        </div>

        <div class="checkbox mb-1">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-success btn-block mb-2 btn-sm" type="submit">Sign in</button>        
        <p class="mb-1">New to Pronaturals? <a href="../contact.php">Message us!</a></p>
        <p class="mb-1">View demo page <a href="my-downline.php">member </a> or <a href="pending-accounts.php">admin </a>access.</p>
      </form>
    </div>
  </div>
  

<?php 
  include'include/footer.php';
?>