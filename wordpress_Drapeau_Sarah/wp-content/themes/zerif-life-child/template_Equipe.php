<?php  

/**
 * Template Name: template equipe
 */

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

				<div class="equipe_title">
						<h1>Les membres de l'équipe</h1>
					</div>

<?php  

$args = array(

	'post_type' => 'equipe'
);

// The Query
$the_query = new WP_Query($args);

//The Loop
if($the_query->have_posts())
{
	while($the_query->have_posts())
	{

		$the_query->the_post();?>

		<!-- Contenu Affiché -->
		<div class="equipe">
		<?php the_post_thumbnail() ?>
		<h2><?php the_field('nom') ?></h2>
		<p><?php the_field('poste') ?></p>
		</div>

	<?php
	}
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