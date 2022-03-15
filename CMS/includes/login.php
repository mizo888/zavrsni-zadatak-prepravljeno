<?php include "db.php"; ?>
<?php session_start(); ?>


<?php

if(isset($_POST['login'])){
                                    // Getting data from login page
    
  $username = $_POST['username'];
  $password = $_POST['password'];                  

  $username = mysqli_real_escape_string($connection, $username );
  $password = mysqli_real_escape_string($connection, $password );

  $query = "SELECT * FROM users WHERE username = '{$username}' ";
  $select_user_query = mysqli_query($connection, $query);
    


}

while($row = mysqli_fetch_array($select_user_query)){         //Looping through table of users
    
  $db_id = $row['user_id'];
  $db_username = $row['username'];
  $db_password = $row['password'];
  $db_role = $row['role'];
    
}

$password = crypt($password, $db_password);



if($username === $db_username && $password === $db_password){   //Redirecting users based on their credentials
    
    $_SESSION['username'] = $db_username;
    $_SESSION['password'] = $db_password;
    $_SESSION['role'] = $db_role;
    
    header("Location: ../admin ");    
}

         
  
    else{   
       header("Location: ../index.php ");
}





?>