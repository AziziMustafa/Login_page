<?php include('./includes/header.php'); ?>
    


<div class="container mt-5">
  <h4 class="text-center text-secondary">REGISTER HERE</h4>
  <br>
  <form method="" action="">
  <div class="mb-3 m-auto w-50">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" placeholder="E-mail">
  </div>
  <div class="mb-3 m-auto w-50">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" placeholder="Password">
  </div>
  <div class="mb-3 m-auto w-50">
    <label for="exampleInputImage" class="form-label">Image</label>
    <input type="file" class="form-control">
  </div>
  <div class="mb-3 m-auto w-50">
   <button type="submit" class="btn btn-secondary">Register</button>
   <p href="" class="mt-3"> Already have an account ? <a href="login.php" class="text-secondary text-decoration-none">Login</a></p>
 </div>
</form>
</div>


<?php include('./includes/footer.php'); ?>