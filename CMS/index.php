<?php include "includes/header.php";?>





    

       
<div >
<section id="field1">
               
               
               
               <?php
    
//    Fetching data from 'posts' table and dynamically applying to blog posts
    
                $query = "SELECT * FROM posts";
                $select_all_posts = mysqli_query($connection, $query);
    
    while($post_row = mysqli_fetch_assoc($select_all_posts)){
        $post_id = $post_row['post_id'];
        $post_title = $post_row['post_title'];
        $post_author = $post_row['post_author'];
        $post_date = $post_row['post_date'];
        $post_image = $post_row['post_image'];
        $post_content = $post_row['post_content'];
        
        
//        If character numbers are greater than 150 only show 150
        if (strlen($post_content) >  150)
   $post_content = substr($post_content, 0, 147) . '...';
        
        ?>
        
        
                <br>
                <br>
                <br>
                <br>
                <br>
                <!-- Blog Posts -->
                <h2>
                    <a id="title_t" href="posts.php?p_id=<?php echo $post_id; ?>"><?php echo $post_title ?></a>
                </h2>
                <p id="title_a" class="lead">
                    by: <a id="title_a_a" href="author_posts.php?author=<?php echo $post_author ?>&p_id=<?php echo $post_id ?>"><?php echo $post_author ?></a>
                </p>
                <p id="title_d"><span id="title_d_d" class="">Date:&nbsp;</span><?php echo $post_date ?></p>
                
                <img class="img-post" src="images/<?php echo $post_image;?>" alt="">
                
                <p><?php echo $post_content ?></p>
                <a id="title_c" class="button2" href="posts.php?p_id=<?php echo $post_id; ?>">Read More <span class=""></span></a>
                
              
        <hr>
        
<!--    end the while loop      -->
  <?php  }  ?>
  
 
                

                <!-- Pager -->
<!--
                <ul class="pager">
                    <li class="previous">
                        <a href="#">Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer</a>
                    </li>
                </ul>
-->
             </section>
            </div>
            
            

     
            <!-- Blog Sidebar  -->
<div>
       <?php include "includes/sidebar.php"?>

   </div>    

    
<?php include "includes/footer.php";?> 


