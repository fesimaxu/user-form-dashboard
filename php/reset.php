<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $newpassword = $_POST['password'];

    resetPassword($email, $newpassword);
}

function resetPassword($email, $newpassword){
    //open file and check if the username exist inside
    //if it does, replace the password
    $formData = fopen("C:/xampp/htdocs/userAuth/storage/users.csv", "r");
    
    $getData = fgetcsv($formData);
    fclose($formData);

        if(trim($getData[1]) == $email ) {
             str_replace(trim($getData[2]),$newpassword, $getData);
             
             $fileopen = fopen('C:/xampp/htdocs/userAuth/storage/users.csv', 'a');
             
             $formdata = array(
                'email' => $email,
                'password' => $newpassword
            );
            
            fputcsv($fileopen,$formdata);
            echo "Password Sucessfully Changed";
        }
    
}



