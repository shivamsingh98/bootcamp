<?php include 'templates/header.php' ?>
<div class="container">
    <h1 class="text-center">Sign Up</h1>
    
  <div class="form-group">
    <label for="exampleInputEmail1">User Name</label>
    <input type="text" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Enter username">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password">
  </div>

  <button onclick="signup()"  class="btn btn-primary">Sign UP</button>
  
    
</div>
<?php include 'templates/footer.php' ?>