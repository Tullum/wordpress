<?php
get_header();
?>


<h1>hello!!!</h1>

<?php

if (have_posts()) :
	while (have_posts()) : the_post();?>

	<h1><?php the_title(); ?></h1>

	<?php the_content(); ?>

	<?php endwhile;

else :
	echo '<p>No content</p>';

endif;
?>

<div class="container">
	<div id="liste_r_1" class="row">
		<div class="col-sx-12">
	</div>
</div>

<?php
get_footer();
?>
<?php