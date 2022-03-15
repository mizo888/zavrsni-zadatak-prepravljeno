<?php include "../includes/db.php";?>
<?php include "../includes/functions.php";?>
<?php session_start(); ?>


<!--Checking if the user is admin, if not, redirecting to index page-->
<?php     

checkingSession();

?>


<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>CMS Page</title>
<link rel="stylesheet" href="../css/css.css" type="text/css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

</head>
  
<body> 
<!--   <div class="navbar">-->

    
 

<!--</div>-->


<!--NAVIGATION BAR FOR USERS-->
<div  class="navbar" id="navbar" >

 <a class="lg_out_main" style="float: right" href="../includes/logOut.php">Log out<div id="press" class="w_message"><i>Welcome:</i>&nbsp;&nbsp;<?php echo $_SESSION['username'];?></div></a>
 <a style="float: right" class="lg_out_main_reg" href="./addPost.php"><i class="fa fa-pencil-square-o">&nbsp;&nbsp;&nbsp;</i>New Blog Post</a>
  <div class="dropdown">
  
<a class="dropbtn" href="javascript:void(0)">Blog Management  <i class="fa fa-caret-down"></i></a>
   
    <div class="dropdown-content">
    <a href="postOptionsTable.php">Edit/Delete</a>
    <a href="./addPost.php">Add Posts</a>
    <a href="users.php">Users</a>
    <a href="index.php">Home</a>
    
    </div>
    
  </div> 
  
</div >


<?php 
//    echo $_SESSION['username']; 
    ?>


<script>
// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("navbar");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
} 
</script>




<script>

document.getElementById("press").addEventListener("click", function(event){
  event.preventDefault()
});
</script>
