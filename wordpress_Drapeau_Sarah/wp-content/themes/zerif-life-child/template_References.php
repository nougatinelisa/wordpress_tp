<?php  

/*Template Name: template references*/

get_header();

?>

<div class="clear"></div>

</header> <!-- / END HOME SECTION  -->
<?php zerif_after_header_trigger(); ?>
<div id="content" class="site-content">

	<div class="container">

		<?php zerif_before_page_content_trigger(); ?>

		<div class="content-left-wrap col-md-12">

			<?php zerif_top_page_content_trigger(); ?>

			<div id="primary" class="content-area">

				<main id="main" class="site-main">

					<div class="collaborateur_title">
						<h1>Nos références</h1>
					</div>


<?php  

$args = array(

	'post_type' => 'reference'
);

// The Query
$the_query = new WP_Query($args);

//The Loop
if($the_query-> have_posts())
{
	while($the_query -> have_posts())
	{
		$the_query -> the_post();?>

		<!-- Contenu Affiché -->
		<div class="collaborateur">
		<h2><?php the_field('nom_du_client') ?></h2>
		<p><?php the_field('description_du_client') ?></p>
		<h3>Actions réalisées: </h3>
		<p><?php the_field('actions_realisees') ?></p>
		<h3>Technologies utilisées: </h3>
		<p><?php the_field('technologies') ?></p>
		<a href="<?php the_field('aperçu_de_la_realisation') ?>">Aperçu de la réalisation</a>
		</div>

	<?php }
	/* Restore original Post Data */
	wp_reset_postdata();
}
else
{
	//no posts found
}

?>


				</main><!-- #main -->

			</div><!-- #primary -->

			<?php zerif_bottom_page_content_trigger(); ?>

		</div><!-- .content-left-wrap -->

		<?php zerif_after_page_content_trigger(); ?>

	</div><!-- .container -->


<?php get_footer(); ?>