<?php 
session_start();
$page_title = "Sign Up";
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="alert">
                    <?php 
                        if(isset($_SESSION['status'])) {
                            echo "<h5>".$_SESSION['status']."</h5>";
                            unset($_SESSION["status"]);
                        }
                    ?>
                </div>
                <div class="card shadow">
                    <div class="card-header">
                        <h5>Sign Up</h5>
                        <h6>Create your account.</h6>
                    </div>
                    <div class="card-body">

                         <form action="code.php" method="POST">
                            <div class="form-group mb-3">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Email Address</label>
                                <input type="text" name="email" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Password</label>
                                <input type="text" name="password" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Confirm Password</label>
                                <input type="text" name="confirm_password" class="form-control">
                            </div>
                            <div class="form-group">
                                <button type="submit" name="signup_btn" class="btn btn-primary">Sign Up</button>
                            </div>
                         </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>