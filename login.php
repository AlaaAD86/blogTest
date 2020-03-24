<?php include 'config/db.php' ?>
<?php 
    include 'inc/header.php';
    include 'inc/login.inc.php';
?>


<?php if(isset($_SESSION['username'])):?>
<?php header('Location: dashboard.php') ?>
<?php else: ?>

<div class="container">
    <form action="login.php" method="post">
        <fieldset>

            <!-- WARNING FILEDS ARE NOT FILLED  -->
            <div class="row">
                <div class="form-group">
                    <div class="col-lg-12">
                        <?php if(isset($_POST['login'])):?>

                        <div class="alert alert-dismissible alert-warning">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <h4 class="alert-heading" style="font-weight:bold;">Warning!</h4>
                            <p><?php echo $err; ?></p>
                        </div>
                        <?php endif;?>
                    </div>
                </div>
            </div>

            <legend>LOGIN</legend>

            <div class="form-group">
                <label for="email">EMAIL</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Enter email">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                    placeholder="Password">
            </div>


            <button type="submit" name="login" value="login" class="btn btn-secondary">Login</button>


        </fieldset>



    </form>

        <br>

        <img src="assets/img/blogimg.jpg" class="img-fluid" alt="Responsive image">
    

</div>



<?php endif; ?>



<?php

include 'inc/footer.php';

?>