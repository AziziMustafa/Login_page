<?php include('./includes/header.php'); ?>
    


<div class="container mt-5">
  <h4 class="text-center text-secondary">LOGIN HERE</h4>
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
  <div class="mb-3 form-check m-auto w-50">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1"> Remember me </label>
    <a href="#" class="float-end text-decoration-none text-secondary">Forgot Password?</a>
  </div>
  <div class="mb-3 m-auto w-50">
   <button type="submit" class="btn btn-secondary">Submit</button>
   <p href="" class="mt-3"> Do not have an account ? <a href="register.php" class="text-secondary text-decoration-none">Register Here</a></p>
 </div>
</form>
</div>


<?php include('./includes/footer.php'); ?>