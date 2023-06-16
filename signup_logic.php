<?php
    include('connect.php');

   
    if(isset($_POST['signupbtn'])){

         $name = $_REQUEST['fullname'];
         $email = $_REQUEST['email'];
         $pass = $_REQUEST['password'];
        

        $sql = "INSERT INTO sign_up_sytem(full_name,email,password_)
                VALUES('$name','$email','$pass')";
        $qry = mysqli_query($conn,$sql);

        if($qry){
            'Signed Up Successfully';
           header('location:login.php?success=Account signed up successfully!');
        }else{
            echo'Logged In Successfully';
        }

    }
        
    


?>