   <?php include("header.php") ?>
   <?php include("dbconn.php") ?>


<form action="register.php" method="post" >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Register</h5>
        </div>
        <div class="modal-body">
    <div class="mb-3">
      <label for="InputUserName" class="form-label">Username</label>
      <input type="text" name="username" class="form-control" id="InputUserName">
    </div>
    <div class="mb-3">
      <label for="InputEmail" class="form-label">Email</label>
      <input type="email" name="email" class="form-control" id="InputEmail">
    </div>
    <div class="mb-3">
      <label for="InputPass" class="form-label">Passsword</label>
      <input type="password" name="pass" class="form-control" id="InputPass">
    </div>
  </div>
    <div class="modal-footer d-flex justify-content-between">
    <input type="submit" name="register" value="Submit" class="btn btn-success">
    <p>don't have an account <a href="./index.php">Register</a></p>
</div>
  </div>
  </div>
</form>


   <?php include("footer.php") ?>
