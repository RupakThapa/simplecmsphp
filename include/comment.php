<?php
$name=$_POST['name'];
$comment=$_POST['comment'];
$article_id=$_POST['article_id'];

  $con=mysqli_connect("localhost","root","root","cms");
  mysqli_query($con,"INSERT INTO comment VALUES ('','$name','$comment','$article_id')");
  $current_url="http://localhost/cms/article.php?id=$article_id";
  header("Location: $current_url");
 ?>
