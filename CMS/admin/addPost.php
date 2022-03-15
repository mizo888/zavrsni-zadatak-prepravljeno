<?php include "includes/admin_header.php";?>

<?php
if(isset($_POST['create_post'])){
   header( "refresh:0.1;postOptionsTable.php" );
    }
  
?>


<?php 
//include "../includes/db.php";
?>  

<?php
   
//Query to insert data into add posts form
   if(isset($_POST['create_post'])) {
   
       
       
            $post_title = $_POST['title'];
            $post_author = $_POST['author'];    
//            $post_tags = $_POST['post_tags'];
            $post_content = $_POST['post_content'];
            $post_date = $_POST['date'];
//     now()       $post_date = date('d-m-y');
            $post_image = ($_FILES['image']['name']);
            $post_image_temp = ($_FILES['image']['tmp_name']);
       
       
            move_uploaded_file($post_image_temp, "../images/$post_image" );
       
       $query = "INSERT INTO posts(post_title, post_date, post_author, post_image, post_content) ";
       $query .= "VALUES('{$post_title}','{$post_date}','{$post_author}','{$post_image}','{$post_content}' ) ";

       $create_post_query = mysqli_query($connection, $query);
       
       
   }

?>



<!--<body>-->
    



<!--<div style="margin-top: 80px;">-->

                   <!--addPost form-->

<form class="font" action="" method="post" enctype="multipart/form-data">
 
  <div class="add_post_form"> 
      <h4 id="h4" class="font">New Blog Post</h4>
    <label class="l_cl" for="title">Title</label>
    
    <input type="text" id="fname" name="title" placeholder="Title .." required>
  
    <label class="l_cl" for="post_content">Content</label>
    <textarea id="size" name="post_content" placeholder="Write .." style="height:330px" cols="30" rows="10" required></textarea>
   
    
<?php


        
//    $query = "SELECT * FROM users WHERE role LIKE 'admin' ";
//    $select_users = mysqli_query($connection, $query);
//
//    while($row = mysqli_fetch_assoc($select_users)){
//    
//    
//    $user_id = $row['user_id'];
//    $username = $row['username'];
//    
//    
//    echo "<option value='$user_id'>{$username}</option>";
//}

?>
    
    

<!--        Displaying author name in blogs based on session-->
<input type="text" id="fname" name="author" value="<?php echo $_SESSION['username']; ?>" placeholder="author" required style="display: none">
    
    
    
    
    
</div>
  <div class="add_post_form_date">
   <label class="l_cl" for="date">Date</label>
   <input type="text" name="date" placeholder="DD.MM.YYYY" required>
  </div>   

<div id="reload">
<!--<div class="abc"></div>-->
 <img label="sdsd" class="d_s" id="output" />
 </div> 
<!-- remember to add label id when adding and removing an imageccccccccccccccccccccccccccccc-->
<div class="add_post_form_image">
 <label  class="img_file" for="file" style="cursor: pointer;" id="rem">Select Image</label>
 <input  type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;">    

<a class="img_rem" id="removeImage" href="#">Remove Image</a>
</div>

    

<!-- used for showing an image-->
<script>
var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
};
</script>
    
<div class="add_post_form_publish" id="input-icons">
    <input class="btn_pub" onclick="history.go(-1)" type="submit" value="Cancel" name="cancel">
    <i class="fa fa-pencil"></i>
    <input class="input-field" id="u_post" type="submit" value="Publish Post" name="create_post" >    
</div> 

</form>

<!--
</div>
</body>
-->
<script>
    
    //used for removing image in addPost page
   
   $("#removeImage").click(function(e) {
   e.preventDefault(); // prevent default action of link
   $('#output').attr('src', ""); //clear image src
   $("#file").val(""); // clear image input value

 });

</script>

<!-- If create post isset, redirect-->







