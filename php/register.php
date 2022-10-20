<?php
if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

registerUser($username, $email, $password);

}

function registerUser($username, $email, $password){
    //save data into the file
$fileopen = fopen('C:/xampp/htdocs/userAuth/storage/users.csv', 'a');
$formdata = array(
    'username'=> $username,
    'email' => $email,
    'password' => $password
);

fputcsv($fileopen,$formdata);
fclose($fileopen);
    // echo "OKAY";
    echo "User Successfully registered";
}


