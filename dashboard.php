<?php session_start(); ?>
<?php 
    // include("./config/db.php");
    // $id = $_SESSION['id'];
    // echo $id;
    // $query = "SELECT * FROM profile WHERE id = '$id'";

    // $result = mysqli_query($query, $conn) or die ('error');
    // if (mysqli_num_rows($result) > 0 ) {
    //     while($row = mysqli_fetch_assoc($result)){
    //         $id = $row['id'];
    //         $avatar = $row['avatar'];
    //         $profession = $row['status'];
    //     }
    // }

?>

<?php include ('inc/header.php'); ?>
<?php if(!$_SESSION['username']): ?>
    <?php  var_dump($_SESSION['username']);?>
    <?php header('Location: login.php'); ?>

<?php else:?>

    <div class="container">

    <?php
        $url = $_SERVER['PHP_SELF'];
        // echo $url;
        $segURL = explode('/', $url);
        // print_r($segmentURL);
        $path = "http://127.0.0.1".$segURL[0].'/'.$segURL[1];
        // echo $path;
        $fullURL = $path.'/'.'img'.'/'.'avatargirl.png';
        // echo $fullURL;
    ?>

    <?php if ($_SESSION['id'] == 1):?>
        <h1>Admin Dashboard</h1>
    <?php else:?>
        <h1>User Dashborad</h1>
    <?php endif;?>

    
<h1 style="text-align: center;">WELCOME <?php echo $_SESSION['username']; ?> </h1>
<div class="row">
    <div class="col-lg-12">
        <p style="text-align: center;">
            <?php if(isset($avatar)): ?>
           <img src=<?php echo $avatar ?> style="width:150px; height:150px;">
           <?php else: ?>
           <img src=<?php echo $fullURL ?> style="width:150px; height:150px;">
           <?php endif; ?>

        </p>
    </div>
</div>

    </div>




<?php include ('inc/footer.php'); ?>

<?php endif; ?>


<!-- https://www.youtube.com/watch?v=Cwm31CyteH0&list=PLZwQ-rUbiP03pgUns_yXU3tFuL5yml3eJ&index=6 -->