<?php 

session_start(); 
include "db.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);
    
       return $data;

    }

    $uname = validate($_POST['username']);
    $pass = validate($_POST['password']);
    $pass = md5($pass);
    if (empty($uname)) {

        header("Location: index.php");

    }else if(empty($pass)){

        header("Location: index.php");
        
    }else{
        $sql = "SELECT * FROM adminlogin WHERE username='$uname' AND password='$pass'";


        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['username'] === $uname && $row['password'] === $pass) {

                echo "Logged in!";
                $_SESSION['username'] = $row['username'];

                $_SESSION['id'] = $row['id'];
                
                header("Location: ../feedback.php");
            }else{

                header("Location: index.php");
            }

        }else{

            header("Location: index.php");
        }

    }

}else{

    header("Location: index.php");

    exit();

}