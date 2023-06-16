<?php
    include('connect.php');

    

    if(isset($_POST['btn'])){
        $name = $_REQUEST['fullname'];
        $email = $_REQUEST['email'];
        $pass = $_REQUEST['password'];

       $select = "SELECT * FROM sign_up_sytem WHERE email='$email' AND password_='$pass' ";
        $qry = mysqli_query($conn,$select);
        $num = mysqli_num_rows($qry);
        $fetch = mysqli_fetch_assoc($qry);
        if($qry && $num > 0){

            $_SESSION['ID'] = $fetch['id'];
            $_SESSION['EMAIL'] = $fetch['email'];
           header('location:index.php?msg3=Logged in Successfully!');
        }else{
            header('location:sign-up.php?msg=Access denied sign up if you dont have an account');
        }

        
    }


?>