<?php
 // session_start();
include('include/header.php');
include_once('include/connect.php');

if(isset($_SESSION['logged_in'])){
?>
<html>
   <head>
     <title>Login</title>
<link rel="stylesheet" href="css/bulma.css">

<script src="js/jquery.js"></script>
     <script type="text/javascript">
     $(function(){
       $('#addarticle').click(function(){
         $('#iframeHolder').html('<iframe id="iframe" src="admin/add.php" width="100%" height="450" scrolling="no"></iframe>');
        });
   });

   $(function(){
     $('#deletearticle').click(function(){
       $('#iframeHolder').html('<iframe id="iframe" src="admin/delete.php" width="100%" height="650px" scrolling="no"></iframe>');
     });
   });

   $(function(){
     $('#display').click(function(){

                 $('#iframeHolder').html('<iframe src="admin/display.php" id="iframe" src="" width="700" height="450" style="overflow-y: hidden;" ></iframe>');

     });
 });
     </script>
   </head>

   <body>
     <div class="columns">
     <div class="column is-one-fifth">
       <nav class="panel">
         <p class="panel-heading">
           Dashboard
         </p>

         <a class="panel-block is-active" id="addarticle">
        Add Article
         </a>
         <a class="panel-block" id="deletearticle">
          Delete Article
         </a>
         <a class="panel-block" id="display" >
           Contact Form
         </a>

         <div class="panel-block">
           <a class="button is-primary is-outlined is-fullwidth" href="/cms/admin/logout.php">
             Logout
           </a>
         </div>
       </nav>

     </div>
     <div class="column">
       <div class="notification">
  Welcome to dashboard
</div>
       <div id="iframeHolder"></div>
     </div>
   </div>
 </body>
  </html>

<?php
}
else {
  if (isset($_POST['username'], $_POST['password'])){
      $username = $_POST['username'];
      $password = md5($_POST['password']);

      if (empty($username) or empty($password)){
       $error = 'All fields are required!';
     }else {
       $query = $pdo->prepare("SELECT * FROM users WHERE user_name= ? AND user_pass= ? ");
          $query->bindValue(1,$username);
          $query->bindValue(2,$password);
          $query->execute();

          $num = $query->rowCount();

          if($num==1){
              $_SESSION['logged_in'] = true;
              header('Location: login.php');
              exit();
          }//yeuta row bhetyo bhane ni valid entry hunxa

            else {
              $error = 'The Username or Password is Incorrect';
            }
     }
    }

  ?>

  <html>
     <head>
       <title>CMS Dashboard</title>
       <script>
         function validateForm(){


           var password = document.getElementById("password").value;
           if(password.length==0){
               alert("password is compulsory");
             return false;
           }

           var email = document.getElementById("email").value;
           if(!email.match(/^[a-zA-Z\._\-0-9]*@[a-zA-Z]*[\.][a-z]{2,4}$/)){
               alert("email format is unknown");
             return false;
           }
         }

       </script>
     </head>



       <body>
         <section class="hero is-fullheight is-medium is-primary is-bold">
               <div class="hero-body" style="background-image:url(img/bg.png);">
                 <div class="container" >
                   <div class="columns is-centered">
                     <article class="card is-rounded">
                       <div class="card-content">
                         <h1 class="title">

                           <img src="img/tournepal.png" alt="logo" width="200">
                         </h1>
                         <?php if (isset($error)) { ?>
  <small style="color:#ff0000"><?php echo $error; ?> </small>
  <?php } ?>
  <form action="login.php" method="post" autocomplete="off" onsubmit="return validateForm()">
    <div class="field">
        <input class="input" type="text" name="username" placeholder="Name" size="35">
    </div>
    <div class="field">
        <input class="input" name="password" type="password" placeholder="Password">
    </div>
    <div class="field">
        <input class="button is-primary is-fullwidth" type="submit" value="Login">
    </div>

        </form>
                       </div>
                     </article>
                   </div>
                 </div>
           </div>
         </section>
         <?php
         include('include/footer.php');
}
 ?>
