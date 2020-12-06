<?php
include('include/header.php');

?>
<html>
	<head>
		<title>Tour Nepal</title>
		<link rel="stylesheet" href="css/blog.css" />
		<link rel="stylesheet" href="css/bulma.css" />
    <style>
    .parallax {
      background-image: url("img/about.jpg");
      height: 450px;
      width: 100%;
      background-attachment: fixed;
      background-position:center;
      background-repeat: no-repeat;
      background-size: cover;
}

    </style>
	</head>

	<body style="background:#fff;">
    <div class="parallax"></div>

      <div id="container" style="background:#fff;"><br>


      <div class="article" ><p style="text-align: justify;text-justify: inter-word;"> <p style="font-size:24px;"><b>About Nepal</b></p>
        Nepal with rich ancient cultures set against the most dramatic scenery in the world is a land of discovery and unique experience. For broad minded individuals who value an experience that is authentic and mesmerizing, Nepal is the ideal destination. Come and revel in the untouched and the undiscovered and uncover yourself.
It is unsurpassed that the sheer diversity Nepal boasts, from steamy jungle and Terai to the icy peaks of the world’s highest mountains means that the range of activities on offer. Trekking, mountaineering, rafting in spectacular scenery are just three things Nepal is famous for. Activities as diverse as Elephant Polo and a micro-light flight through the Himalayas show that in Nepal, the only boundary is your imagination. With 15 National & Wildlife Parks (two are UNESCO Heritage sites) Nepal is one of the last places on earth you can spot the Asiatic rhinoceros and the Royal Bengal Tiger.
<br><br>
<b>Wilderness tourism</b><br>
Nepal’s major tourist activities include wilderness and adventure activities such as mountain biking, bungee jumping, rock climbing and mountain climbing, trekking, hiking, bird watching, mountain flights, ultralight aircraft flights, paragliding and hot air ballooning over the mountains of the Himalaya, hiking and mountain biking, exploring the waterways by raft, kayak or canoe and jungle safaris especially in the Terai region.
<br><br>
<b>Religious sites</b><br>

Nepal is a multi-religious society. The major religion in Nepal is Hinduism, and the Pashupatinath Temple, which is the world’s one of the main Hindu religious sites is located in Kathmandu, attracts many pilgrims and tourists. Other Hindu pilgrimage sites include the temple complex in Swargadwari located in the Pyuthan district, Lake Gosainkunda near Dhunche, the temples at Devghat, Manakamana temple in the Gorkha District, and Pathibhara near Phungling, Mahamrityunjaya Shivasan Nepal in Palpa District where biggest metallic idol of Lord Shiva is located.
</p>
      </div>
      <br>

<br>


<p><b><p style="font-size:20px;">Contact us</p></b>

<div>
  <form action="include/contactform.php" method="post">
    <div class="field">
      <div class="control">
          <input class="input is-primary"  type="text" name="name" cols="80" placeholder="Your Name">
      </div>
    </div>
    <div class="field">
      <div class="control">
          <input type="number" class="input is-primary" name="number" placeholder="phone number">
      </div>
    </div>
    <div class="field">
      <div class="control">
        <textarea name="comment"  class="textarea is-primary" rows="8" cols="80" placeholder="Your Message"></textarea><br>
        <input type="submit" class="button is-primary" name="commentbutton" >
      </div>
    </div>

  </form>
</div>

  </div>
  <?php
  include('include/footer.php');
 ?>
