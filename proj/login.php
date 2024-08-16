<?php 
$page_title="Login form";
include('includes/header.php');
include('includes/navbar.php');

?>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Login form</h5>
                    </div>
                    <div class="card-body">
                        <form action="login_process.php" method="post">
                            <div class="form-group mb-3">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                            
                            <div class="form-group mb-3">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>
                            
                            <div class="form-group">
                                <button type="submit" name="submit" class="btn btn-primary">Login</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include('includes/footer.php');?>