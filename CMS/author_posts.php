<?php include "includes/header.php";?>





  



<!-- Page Content -->
    

            <!-- Blog Entries  -->
            <div >
<section id="field1">
     
                         
               
               
<?php
    
    
    if(isset($_GET['p_id'])){
        
        $get_post_id = $_GET['p_id'];
        $get_author_post = $_GET['author'];
    }
  
    
//    Fetching data from 'posts' table and dynamically applying to blog posts
    
                $query = "SELECT * FROM posts WHERE post_author = '{$get_author_post}' ";
                $select_all_posts = mysqli_query($connection, $query);
    
    while($post_row = mysqli_fetch_assoc($select_all_posts)){
        $post_title = $post_row['post_title'];
        $post_author = $post_row['post_author'];
        $post_date = $post_row['post_date'];
        $post_content = $post_row['post_content'];
        $post_image = $post_row['post_image'];
        
?>
        
                
                <br>
                <br>
                <br>
                <br>
                <br>
                <!-- Blog Posts -->
                <h2>
                    <p id="title_t"> <?php echo $post_title ?></p>
                </h2>
                <p id="title_a" class="lead">by: <span id="title_a_a"><?php echo $post_author ?></span>
                    
                </p>
<p id="title_d"><span id="title_d_d">Date:&nbsp;</span><?php echo $post_date ?></p>
                
                <img class="img-post" src="images/<?php echo $post_image;?>" alt="">
                
                <p id="title_c"><?php echo $post_content ?></p>
                
                <hr>
        
<!--    end the while loop      -->
  <?php  }  ?>
 
                

                
             </section>
            </div>
     
            <!-- Blog Sidebar  -->
<div>
<?php include "includes/sidebar.php"?>

   </div>        
<?php include "includes/footer.php";?>