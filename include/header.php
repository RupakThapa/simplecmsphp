<?php
  session_start();
  include_once('connect.php');
  $current_url=$_SERVER['REQUEST_URI'];
  ?>

<head>
<link rel="stylesheet" href="css/blog.css" />
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans" > -->
<link rel="stylesheet" href="css/bulma.css" />
<style>
.parallaxhome {
  background-image: url(img/poonhill.png);
  min-height: 450px;
  width: inherit;
  height: 450px;
  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position:center;
  background-repeat: no-repeat;
  background-size: cover;
}

.footerr {
    padding: 20px;!important
    font-size: 5px;!important
    display: inline-block;
    color: #a5a5a5;

overflow: hidden;
background-color: #eee;
/* position: fixed; */
bottom: 0;
width: 100%;
}
.footerr ul {margin: 0; padding: 0; float: left;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  padding-top: 60px;
  overflow: hidden;
    padding-left: 200px;
  background-color: rgba(255,255,255,0.7);
 position: fixed;
 top: 0;
 width: 100%;
}

.navbar {
    min-height: 3.25rem;
    max-height: 3.25rem;
    background-color: rgba(255,255,255);
   position: fixed;
   top: 0;
   width: 100%;

}
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {

  background-color: #e91e63;
  color: white;
}
</style>
</head>

<nav class="navbar">
    <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item" href="../cms">
                    <img src="img/tournepal.png" alt="Logo">
                </a>
            <span class="navbar-burger burger" data-target="navbarMenu">

        </div>
        <div id="navbarMenu" class="navbar-menu">
            <div class="navbar-end">

                <a class="navbar-item is-active" href="index.php">Home</a>
                <a class="navbar-item" href="about.php">About</a>


                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">
                            Account
                        </a>
                    <div class="navbar-dropdown">
                        <a class="navbar-item" href="login.php">
                                Dashboard
                            </a>

                        <hr class="navbar-divider">
                        <div class="navbar-item">
                          <?php  if(isset($_SESSION['logged_in'])){

                         echo'<a href="/cms/admin/logout.php">logout</a>';

                        }else{
                          if( $current_url== '/cms/admin/login.php'){
                          echo '<a href="#">login</a>';
                        }else
                           echo '<a href="login.php">login</a>';

                        }  ?>

                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
