<?php

if (isset($_POST['register'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    
    if(!empty($username) &&
        !empty($email) &&
        !empty($password) &&
        !empty($password2) &&
        $password == $password2
        )
        {
        $pwd_hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (username, email, password, user_role) VALUES ('$username', '$email', '$pwd_hash', 1)";
        $query = $conn->query($sql);

        if ($query == TRUE) {
            echo "New record created successfully";
            header('Location: login.php');
        }
        else {
            $error = 'FAIELD TO REGISTER USER';
        }
            
    }
    else {
        $error = "PLEASE FILL ALL FIELDS !";
    }
}
