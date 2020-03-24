<?php
include 'config/db.php';

session_start();

if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    if(!empty($username) && !empty($password)){
        // $pwd = password_verify($password);
        $sql = $conn->prepare ("SELECT * FROM users WHERE email = :email ");
        // $result = $conn->prepare($conn, $sql) or die ('ERROR');
        // $sql->bindParam(':pass',$_POST['password'] );
        $sql->bindParam(':email',$_POST['email'] );
        $sql->execute();

        $result = $sql->fetch(PDO::FETCH_OBJ);
        // var_dump($result);
        
        if($result){
            $compareMDP = $result->password;
            $verifyMDP = password_verify($password, $compareMDP);

            // var_dump($verifyMDP); 

                if($verifyMDP){

                    var_dump($result->username);
                    $_SESSION['username'] = $result->username;
                    // var_dump($_SESSION['username']);

                    header('Location: dashboard.php');
                } 
                else {
                    $err = " CHECK YOUR PASSWORD";
            }
        } else{
            $err = " NOTHING FOUND !!";
          
        }
    } else {
        $err = "PLEASE FILL ALL FIELDS";
    }
} 
