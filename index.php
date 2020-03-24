<?php include 'config/db.php' ?>
<?php 
    include 'inc/header.php';
    include 'inc/register.inc.php';
?>


<div class="container">
    <form action="index.php" method="post">
        <fieldset>

            <!-- WARNING FILEDS ARE NOT FILLED  -->
            <div class="row">
                <div class="form-group">
                    <div class="col-lg-12">
                        <?php if(isset($_POST['register'])):?>

                        <div class="alert alert-dismissible alert-warning">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <h4 class="alert-heading" style="font-weight:bold;">Warning!</h4>
                            <p><?php echo $error;?></p>
                        </div>
                        <?php endif;?>
                    </div>
                </div>
            </div>

            <legend>REGISTER USER FORM</legend>

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter Usernamer">
            </div>

            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                    else.</small>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                    placeholder="Password">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Confirm Password</label>
                <input type="password" name="password2" class="form-control" id="exampleInputPassword1"
                    placeholder="Confirm Password">
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <select class="form-control" id="exampleSelect1" name="gender">
                    <option>Choose One</option>
                    <option>Male</option>
                    <option>Female</option>
                    <option>Autres</option>
                    <option>Aures qu'Autre</option>

                </select>
            </div>


            <div class="form-group">
                <label for="exampleInputFile">Your Beatiful Profile Photo</label>
                <input type="file" class="form-control-file" id="exampleInputFile">
            </div>

            <button type="submit" name="register" value="register" class="btn btn-secondary">Submit</button>
            <button type="resset" name="reset" value="cancel" class="btn btn-danger">Cancel</button>
              
        </fieldset>



    </form>

</div>




<?php include 'inc/footer.php' ?>