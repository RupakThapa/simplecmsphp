<?php
session_start();
include_once('../include/connect.php');

// include_once('connect.php');
// include('../include/header.php');
// used in iframe so chaidaina

if(isset($_SESSION['logged_in'])){
if(isset($_POST['title'],$_POST['content'],$_POST['file'])){
$title = $_POST['title'];
$content = nl2br($_POST['content']);
$file = $_POST['file'];

if(empty($title) or empty($content)) {
$error= 'All fields are required';
}else {
$query= $pdo->prepare("INSERT INTO articles (article_title, article_content, article_timestamp, article_img) VALUES (?, ?, ?, ?)");
$query->bindValue(1, $title);
$query->bindValue(2, $content);
$query->bindValue(3, time());
$query->bindValue(4, $file);

$query->execute();
echo "article published successfully";
header('Location: add.php');
}
  }
  ?>
  <html>
     <head>
       <title>Add Article</title>
       <link rel="stylesheet" href="../css/blog.css" />
   		<link rel="stylesheet" href="../css/bulma.css" />
     </head>
     <body>
   <div class="container">
<?php if (isset($error)) { ?>
   <small style="color:#aa0000"><?php echo $error; ?> </small>
   <?php } ?>

   <form action="add.php" method="post" autocomplete="off">


   <div class="field">
     <div class="control">
           <input class="input is-primary" type="text" name="title" placeholder="Title" />
     </div>
   </div>

   <div class="field">
     <div class="control">
           <textarea class="textarea is-primary" rows="10" cols="100" name="content" placeholder="content"></textarea>
     </div>
   </div>
   <div class="field">
     <div class="control">
               <input type="text" class="input is-primary" name="file" placeholder="file path" />
     </div>
   </div>




     <input class="button is-primary" type="submit" value="Add Article" />


     </form>
       </div>
     </body>
   </html>


  <?php
}
else {
  header('Location: index.php');
}


 ?>
