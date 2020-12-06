<?php
// include_once('../include/connect.php');
session_start();
//include_once('../include/article.php');
// include('../include/header.php');
// included in iframe so not needed
$conn = mysqli_connect("localhost","root","root","cms");
if(!$conn){
die("could not connect to db ");
}
?>

  <html>
     <head>
       <title>Delete Article</title>
       <link rel="stylesheet" href="../css/blog.css" />
       <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"> -->
       <link rel="stylesheet" href="../css/bulma.css">

       <!-- jQuery library -->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
       <script type="text/javascript">
       	$(document).ready(function(){
       		$("#checkAll").click(function(){
       			if($(this).is(":checked")){
       				$(".checkItem").prop('checked',true);
       			}
       			else {
       					$(".checkItem").prop('checked',false);
       			}
       		});
       	});
       </script>
     </head>
     <body class="bg-info">
       <?php
       if(isset($_SESSION['logged_in'])){
       if(isset($_POST['submit'])){
         if(isset($_POST['id'])){
           foreach ($_POST['id'] as $id) {
           $query="DELETE FROM articles WHERE article_id='$id'";
           mysqli_query($conn,$query);
           }
         }
       }

       $sql="SELECT * FROM articles";
       $result=mysqli_query($conn,$sql);

?>

<form action="delete.php" method="post">
<div class="container">
<table class="table">
   <thead>
     <tr>
       <th><input type="checkbox" id="checkAll"> </th>
       <th>ID</th>
       <th>Article</th>
       <th>Thumbnail</th>
     </tr>
   </thead>
   <tbody>
   <?php
while($row=mysqli_fetch_array($result)){
   ?>
     <tr>
       <td><input type="checkbox" class="checkItem" value="<?= $row['article_id']?>" name="id[]"> </td>
       <td><?= $row['article_id']; ?></td>
       <td><?= $row['article_title']; ?></td>
        <td><img width="50" height="50" src="../<?= $row['article_img']; ?>"></td>


     </tr>
<?php } ?>

   </tbody>
 </table>

   <input type="submit" name="submit" value="Delete" onclick="return confirm(Are you sure??)" class="button is-primary">

  </div>

<!-- </div>
</div> -->
</form>
     </body>
   </html>

  <?php
}
else {
  header('Location: ../login.php');
}
 ?>
