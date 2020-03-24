<?php session_start(); ?>
<?php
    include ("config/db.php");
    if(isset($_FILES['avatar'])){
        $profession = $_POST['profession'];
        if($profession != ""){
            // echo "validated";
            $uploadok = 1;
            $file_name = $_FILES['avatar']['name'];
            $file_size = $_FILES['avatar']['size'];
            $file_tmp = $_FILES['avatar']['tmp_name'];
            $file_type = $_FILES['avatar']['type'];
            $target_dir = "asset/uploads";
            $target_file = $target_dir . basename($_FILES['avatar']['name']);
            // $check = getimagesize($_FILES['avatar']['name']);
            // $check = finfo_file($file_name);
            $check = finfo_open(FILEINFO_MIME_TYPE);


            $exploded = explode('.',$_FILES['avatar']['name']);
            $file_ext = strtolower(end($exploded));
            
            // $data = array(
            //     'file_name' => $file_name,
            //     'file_size' => $file_size,
            //     'file_tmp' => $file_tmp,
            //     'file_type' => $file_type,
            //     'target_dir' => $target_dir,
            //     'file_ext' => $file_ext
            // );
            // echo '<pre>';
            // print_r($data);
            // echo '<pre>';
            // exit();
            $extension = array("jpeg","jpg","png", "gif");
            if (in_array($file_ext, $extension) === false){
                $msg = "Please choose image with these extensions jpeg, jpg, png, gif";
            }
            if (file_exists($target_file)){
                $msg = "file already exists";
            }
            if ($check == false){
                $msg = "File is not valid!";
            }
            if (empty($msg) == true){
                var_dump($msg);
                move_uploaded_file($file_tmp, "assets/uploads/" . $file_name);
                $url = $_SERVER['HTTP_REFERER'];
                $seg = explode('/', $url);
                // print_r($seg);
                $path = $seg[0].'/'.$seg[1].'/'.$seg[2].'/'.$seg[3];
                $full_url = $path.'/'.'assets/uploads/'.$file_name;
                $id = $_SESSION['id'];
                $sql = "INSERT INTO profile(status, avatar, user_role) VALUES ('$profession','$full_url', '$id')";
                $query = $conn->query($sql);
                if ($query){
                    header('Location: dashboard.php');
                }
                else 
                {
                    $msg = "Failde to upload image !";
                }
            }
    } 
    
    else
    {
        $msg = "please fill all fields";
    }
}
?>


<?php if (isset($_SESSION['username'])) : ?>
    <?php header('Location: dashboard.php'); ?>

<?php else : ?>
    <?php include 'inc/header.php'; ?>


    <div class="container">
        <form action="profile.php" method="POST" enctype="multipart/form-data">
            <fieldset>




                <legend>Add User Profile</legend>

                <div class="form-group">
                    <label for="profession">Status</label>
                    <input type="text" class="form-control" id="profession" name="profession" placeholder="Enter Status">
                </div>

                <div class="form-group">
                    <label for="avatar">Avatar</label>
                    <input type="file" name="avatar" class="form-control" id="avatar" placeholder="User Avatar">
                </div>


                <button type="submit" name="profile" value="Add Profile" class="btn btn-primary">Add Profile</button>
                <button type="reset" class="btn btn-secondary">Cancel</button>



                <!-- WARNING FILEDS ARE NOT FILLED  -->
                <div class="row">
                    <div class="form-group">
                        <div class="col-lg-12">
                            <?php if (isset($_POST['profile'])) : ?>
                                <div class="alert alert-dismissible alert-warning">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <h4 class="alert-heading" style="font-weight:bold;">Warning!</h4>
                                    <p><?php echo $msg; ?></p>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

            </fieldset>

        </form>

    </div>



<?php endif; ?>


<?php include 'inc/footer.php' ?>