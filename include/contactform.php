<?php
$name=$_POST['name'];
$phone=$_POST['number'];
$text=$_POST['comment'];

  $con=mysqli_connect("localhost","root","root","cms");
  mysqli_query($con,"INSERT INTO contactform VALUES ('','$name','$text','$phone')");
  $current_url="http://localhost/cms/about.php";
  header("Location: $current_url");
 ?>
