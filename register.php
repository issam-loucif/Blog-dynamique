<?php
 session_start();
 include('includes/header.php');
 include('includes/navbar.php');
 ?>
 

<div class="modal fade" id="addadmiprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">
      <div class="modal-body">

        <div class="form-group">
            <label >Username</label>
            <input type="text" name="username" class="form-control" placeholder="Enter Username">
        </div>
        <div class="form-group">
            <label >Email</label>
            <input type="email" name="email" class="form-control" placeholder="Enter Email">
        </div>
        <div class="form-group">
            <label >Password</label>
            <input type="password" name="password" class="form-control" placeholder="Enter Password">
        </div>
        <div class="form-group">
            <label >Confirm Password</label>
            <input type="password" name="confirmpassword" class="form-control" placeholder="Enter Password">
        </div>
      </div>
      <div class="modal-footer">
      <a href="index.php" class="btn btn-google btn-user btn-block">
                <i class="fab fa-google fa-fw"></i> Register with Google
            </a>
            <a href="index.php" class="btn btn-facebook btn-user btn-block">
                <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
            </a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>

      </div>
      </form>
    </div>
  </div>
</div>

<div class="container-fluid">
    <div class="card shadow md-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-blod text-primary">Admin Profile
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadmiprofile">
             Add Admin Profile
            </button>
            </h6>
        </div>
        <div class="card-body">
        <?php
        if (isset($_SESSION['success']) && $_SESSION['success'] !='')
        {
            echo '<h2 class="btn btn-success text-white"> '.$_SESSION['success'].'</h2>';
            unset($_SESSION['success']);
        }
        if (isset($_SESSION['status']) && $_SESSION['status'] !='')
        {
            echo '<h2 class="btn btn-danger text-white"> '.$_SESSION['status'].'</h2>';
            unset($_SESSION['status']);
        }
        ?>
   
<?php
   include('includes/scripts.php');
?>