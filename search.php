<?php
include('include/header.php');
include_once('include/connect.php');
include_once('include/article.php');
$term1=$_POST["term"];
$term =mysqli_real_escape_string($term1);

$sql = "SELECT * FROM articles WHERE article_content LIKE '%".$term."%'";
$r_query = mysqli_query($pdo,$sql);

while ($row = mysqli_fetch_array($r_query)){ 
echo 'title: ' .$row['article_title']; 

}
?>