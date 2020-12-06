<?php
$con=mysqli_connect("localhost","root","root","cms");

$result =mysqli_query($con,"SELECT * FROM contactform");
if($result){
while($row = mysqli_fetch_assoc($result))
{
  $comment_name = $row['name'];
  $comment = $row['comment'];
  $phone = $row['phone'];
  ?>

<html>
<head>
  <link rel="stylesheet" href="../css/blog.css" />
 <link rel="stylesheet" href="../css/bulma.css" />
</head>
<body>

  <div class="notification">
  Name:<?php echo "<b>$comment_name</b><br>"; ?>
  contact no:<?php echo "$phone<br>"; ?>
  <?php echo "<p>$comment</p><br>"; ?>
</div>

<?php
}
}

if(isset($_GET['haserror'])){
  echo "Error posting Comment";
}
?>
