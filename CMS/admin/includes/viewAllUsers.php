<?php
     
    if(isset($_GET['change_to_admin'])){
        
        $the_user_id = $_GET['change_to_admin'];
        
    

        $query = "UPDATE users SET role = 'admin' WHERE user_id = {$the_user_id} ";
        $change_to_admin_query = mysqli_query($connection, $query);
        header( "refresh:0.1;users.php" );
      }


    if(isset($_GET['change_to_sub'])){
        
        $the_user_id = $_GET['change_to_sub'];
        
    

        $query = "UPDATE users SET role = 'subscriber' WHERE user_id = {$the_user_id} ";
        $change_to_admin_query = mysqli_query($connection, $query);
//      header("Location: users.php");
        header( "refresh:0.1;users.php" );
      } 




?>

<div style="margin-top: 10px;">

<h4 id="h3" class="font">Users table</h4>
<table class="table_users">
    <thead>
        <tr>
<!--            <th>id</th>-->
<!--            <th>Author</th>-->
            <th>Username</th>
<!--            <th>Password</th>-->
            <th style="text-align: center;">Current Role</th>
<!--            <th>Tags</th>-->
            <th style="text-align: center;">Change Role</th>
<!--            <th>Delete</th>-->
        </tr>
    </thead>
    <?php
        
        
        $query = "SELECT * FROM users";
        $select_users = mysqli_query($connection, $query);
        
        while($row = mysqli_fetch_assoc($select_users)){
           $user_id = $row['user_id'];
           $username = $row['username'];          
//           $password = $row['password'];          
           $role = $row['role'];
//           $post_title = $row['post_title'];
//           $post_date = $row['post_date'];
//           $post_tags = $row['post_tags'];
 

        
        echo "<tr>";
//            
            echo "<td>{$username}</td>";
//            echo "<td>{$password}</td>";
            echo "<td style='text-align: center;'>{$role}</td>";
            echo "<td style='text-align: center;'><a class='admin-icons' href='users.php?change_to_admin={$user_id}'>admin</a>  <a class='admin-icons_sub' href='users.php?change_to_sub={$user_id}'>subscriber</a></td>";
            

            
            
                        
        echo "</tr>";
      
        }
        
        ?>
</table>



</div>










