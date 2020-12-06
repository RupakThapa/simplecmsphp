<?php
include_once('include/connect.php');
include_once('include/article.php');
include('include/header.php');

$article = new Article;
if (isset($_GET['id'])){
  $id = $_GET['id'];
  $data = $article->fetch_data($id);
?>
<html>
	<head>
		<title>Tour Nepal</title>
		<link rel="stylesheet" href="css/blog.css" />
		<link rel="stylesheet" href="css/bulma.css" />
    <style>
    .parallax {
      background-image: url(<?php echo $data['article_img']; ?>);
      min-height: 450px;
      width: 800px;
      margin-left: 265px;
      height: 450px;
      background-attachment: fixed;
      background-position:center;
      background-repeat: no-repeat;
      background-size: 1000px 1000px;

}
    </style>
	</head>

	<body style="background:#fff;"><br>
    <div class="parallax"></div>

      <div id="container" style="background:#fff;"><br>
      <p style="color:#000;font-size:20px;"><b><?php echo $data['article_title']; ?></b></p>
      <small><?php echo date('l jS',$data['article_timestamp'])?></small>
      <div class="article" > <p style="text-align: justify;text-justify: inter-word;"><?php echo $data['article_content']; ?></p>
      </div>
      <br>
      <a class="button is-primary" href="index.php">Back</a><br>
<br>
<p style='font-size:20px;'><b>Comments</b></p><br>
<?php
$con=mysqli_connect("localhost","root","root","cms");



$result =mysqli_query($con,"SELECT * FROM comment WHERE article_id=$id");
if($result){
while($row = mysqli_fetch_assoc($result))
{
  $comment_name = $row['name'];
  $comment = $row['comment'];
  ?>



    <table>

      <tr>
           <td rowspan="2"><img src="img/pro.png" style="display:inline;"></td>
        <td>  <?php echo "<b>$comment_name</b><br>"; ?></td>

      </tr>
      <tr>

        <td> <div  style='{
           background-color: #f5fffd;
           width: 300px;
           padding: 25px;
           margin: 25px;
           line-height: 1.5;
           border-radius:4px;
           font-family: Helvetica,Arial,sans-serif;
    }'>

       <?php echo "<p>$comment</p><br>"; ?>
        </div></td>
      </tr>
    </table>
<?php

}
}

if(isset($_GET['haserror'])){
  echo "Error posting Comment";
}
?>

<p><b>Submit your comment</b></p>
<div>
  <form action="include/comment.php" method="post">
    <div class="field">
      <div class="control">
          <input class="input is-primary" type="text" name="name" cols="80" placeholder="Your Name">
      </div>
    </div>
    <div class="field">
      <div class="control">
        <textarea class="textarea is-primary" name="comment" rows="8" cols="80" placeholder="Comment"></textarea>
      </div>
    </div>


    <input type="submit" class="button is-primary" name="commentbutton" >
    <input type="hidden" name="article_id" value="<?php echo $id ?>">
  </form>
</div>

  </div>
  <?php
  include('include/footer.php');

}else{
  header('Location: index.php');
  exit();
}
 ?>
