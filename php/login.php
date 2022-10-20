<?php
//session_start();

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    loginUser($email, $password);
    // $_SESSION[$password] = loginUser($password);
}

function loginUser($email, $password){
  
    /*
        Finish this function to check if username and password 
    from file match that which is passed from the form
    */
   
    $formData = fopen("C:/xampp/htdocs/userAuth/storage/users.csv", "r");
    
    $getData = fgetcsv($formData);
    fclose($formData);
    
   // while (($getData) !== FALSE){
        if (trim($getData[1]) == $email && trim($getData[2]) == $password) {
            session_start();
            $_SESSION['email'] = trim($getData[1]);
            $_SESSION["username"] = trim($getData[0]);
            header("Location:../dashboard.php");    
    }else{
        session_unset();
        header('Location:/login.html');
        echo "Invalid Email or Password";
    }
   //}
    
}



