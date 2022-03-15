<?php include "includes/db.php";?>
<?php include "includes/functions.php";?>
<?php session_start();?>



<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>CMS Page</title>

<link rel="stylesheet" href="css/css.css" type="text/css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<!--<link rel="icon" type="image/x-icon" href="cogwheel-g052d9f0cd_1280.png">-->
    
</head>
  

<body> 

<!--
   <div class="navbar">
<header>
    
<nav>       
<ul class="main_nav">

    <li><a href="index.php">Home</a></li>
-->
<div class="navbar" id="navbar">
<!-- <a class="lg_out" style="float: right" href="../includes/logOut.php">Log Out</a>-->
<!--
  <div class="dropdown">
<button class="dropbtn">Blog Management  <i class="fa fa-caret-down"></i></button>
    <div class="dropdown-content">
    <a href="postOptionsTable.php">Edit/Delete</a>
    <a href="./addPost.php">Add Posts</a>
    <a href="users.php">Users</a>
    <a href="index.php">Home-admin</a>
    
    </div>
  </div> 
-->

<a class="lg_out_main_home" href="index.php">Home</a>
  
 
 
    
<!--  Hiding or showing login/logout button based on session status        -->
<?php if(isset($_SESSION['username']) && !empty($_SESSION['username']) )
{
?>
      <a class="lg_out_main" style="float: right" href="includes/logOut.php">Log Out</a> <h4 style="float: right" class="s_log_w">  <?php echo $_SESSION['username'];?> </h4><i style="float: right" class="s_log_w"> Welcome:&nbsp; </i>
<?php }else { ?>
     <a style="" class="lg_out_main_reg"  href="registerPage.php"><i class="fa fa-file-text-o">&nbsp;&nbsp;&nbsp;</i> Register</a> 
     <a class="lg_out_main" style="float: right" href="includes/loginPage.php">Login</a>     
<?php } ?>
   
   

</div>


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