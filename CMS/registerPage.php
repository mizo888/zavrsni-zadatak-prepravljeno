<?php include "includes/db.php";?>

<!--Register new users and crypt password function-->
<?php

if(isset($_POST['register'])){
    
    $username = $_POST['username'];     
    $password = $_POST['password'];
    
    
    if(!empty($username) && !empty($password)){
        
        
    $username = mysqli_real_escape_string($connection, $username );
    $password = mysqli_real_escape_string($connection, $password );

    $query = "SELECT randSalt FROM users";   
    $select_randSalt_query = mysqli_query($connection, $query);
                                         

if(!$select_randSalt_query){
    
    die("failed query randSalt" . mysqli_error($connection));
}
   
      
while($row = mysqli_fetch_array($select_randSalt_query)){   
$salt = $row['randSalt'];        

} 
        
        $password = crypt($password, $salt);
    
$query = "INSERT INTO users (username, password ) ";
$query .= "VALUES ('{$username}','{$password}' ) ";
$register_user_query = mysqli_query($connection, $query);    
if(!$register_user_query){   
    die("failed insert register" . mysqli_error($connection));
}   
        
        $message = "Your registration has been submited";
        header( "refresh:1;url=index.php" );
      
    }else{ $message = "";    }
    
} else {  $message = "";  }

?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/css.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

</head>
<body>
    
<!--    <h2 class="lr-title">Register</h2>-->
    <div class="login_form">
  <form action="registerPage.php" method="post">
    <h3><?php echo $message; ?></h3>
    <br>
    <label for="username">Username</label>
    <input type="text" id="" name="username" placeholder="username .." required>

    <label for="password">Password</label>
    <input class="pw_login" type="password" id="" name="password" placeholder="password .." required>

      <button class="btn_login" type="submit" name="register">Register</button>
  </form>
</div>
    
    
</body>
</html>