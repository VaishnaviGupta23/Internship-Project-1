<?php 
$page_title="Registration form";
include('includes/header.php');
include('includes/navbar.php');

?>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Registration form</h5>
                    </div>
                    <div class="card-body">

                        <form action="register_process.php" method="POST">
                            <div class="form-group mb-3">
                                <label for="username">Username</label>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            
                            <div class="form-group mb-3">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" class="form-control">
                            </div>
                            
                            <div class="form-group mb-3">
                                <label for="password">Password</label>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <button type="submit" name="submit" class="btn btn-primary">Register</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include('includes/footer.php');?>