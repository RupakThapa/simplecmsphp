<?php
include('include/header.php');
include_once('include/connect.php');
include_once('include/article.php');

$article= new Article;
$articles= (new Article)->fetch_all();
?>

<div class="parallaxhome" ></div>

<div class="container"  >

<section class="articles" >
<div class="column is-full" style="margin-top:-100px; ">
		<div class="container" style="margin-right:400px;">


	<?php  foreach ($articles as $article ) {?>
		<section class="articles" >
	<div class="row" >
						<div class="column is-8 is-offset-4">
								<div class="card article" >
										<div class="card-content" >
											<table>
														<tr>
															<td>
																<img src="<?php echo $article['article_img']; ?>" width="500" height="375" />
															</td>

															<td>
																<div class="content article-body" style="margin:0 0 0 2rem" >
																	<h5><?php echo $article['article_title']; ?></h5>
																	<div class="tags has-addons level-item" style="justify-content: left;">
																	<span class="tag is-rounded is-info">posted </span>
																	<span class="tag is-rounded"><?php echo date('l jS',$article['article_timestamp']); ?></span>


																	</div>

														<p style="font-size:14px; margin-top:0; margin-bottom:0">	<?php
															$str_len = strlen($article['article_content']);
															$string = strip_tags($article['article_content']);
															$length=150;
																if ($str_len > $length) {
																		$stringCut = substr($string, 0, $length-15);
																		$string = $stringCut;
																}
																echo $string ;
																?>
															</p>

															<a class="button is-primary is-small" href="article.php?id=<?php echo $article['article_id']; ?>">Read more</a>

															</div>
														</td>
														</tr>
													</table>


										</div>
								</div>
							</div>
						</div>
						</section>
								<?php	}	?>
								<?php
								include('include/footer.php');
								?>
							</div>

</div>

</section>

</div>
