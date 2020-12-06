<?php
$con = mysqli_connect("localhost","root","root","cms");
if (!$conn)
  {
die("could not connect to db ");
}


$sql="SELECT * FROM articles";
$result=mysqli_query($con,$sql);

// $count=mysqli_num_rows($result);

?>
<body>
  <?php if(isset($_POST["submit"])){
    if(isset($_POST[id])){
      foreach ($_POST['id'] as $id) {
      $query="DELETE FROM articles WHERE id=$id";
      mysqli_query($conn,$query);
      }
    }
  } ?>

<table width="400" border="0" cellspacing="1" cellpadding="0">
<tr>
<td><form name="form1" method="post" action="">
<table width="400" border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td bgcolor="#FFFFFF">&nbsp;</td>
<td colspan="4" bgcolor="#FFFFFF"><strong>Delete multiple rows in mysql</strong> </td>
</tr>
<tr>
<td align="center" bgcolor="#FFFFFF"><strong>#</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Title</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Pic</strong></td>
</tr>

<?php
while($rows=mysqli_fetch_array($result,MYSQLI_NUM)){
?>

<tr>
<td align="center" bgcolor="#FFFFFF"><input name="checkbox[]" type="checkbox" id="checkbox[]" value="<? echo $rows['article_id']; ?>"></td>
<td bgcolor="#FFFFFF"><? echo $rows['article_title']; ?></td>
<td bgcolor="#FFFFFF"><? echo $rows['article_img']; ?></td>
</tr>

<?php
}
?>

<tr>
<td colspan="5" align="center" bgcolor="#FFFFFF"><input name="delete" type="submit" id="delete" value="Delete"></td>
</tr>

<?php

// Check if delete button active, start this
if($delete){
for($i=0;$i<$count;$i++){
$del_id = $checkbox[$i];
$sql = "DELETE FROM $tbl_name WHERE id='$del_id'";
$result = mysqli_query($con,$sql);
}

// if successful redirect to delete_multiple.php
if($result){
echo "<meta http-equiv=\"refresh\" content=\"0;URL=delete_multiple.php\">";
}
}
mysqli_close($con);
?>

</table>
</form>
</td>
</tr>
</table>
</body>
