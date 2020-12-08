<?php
get_header();
?>

<div id="primary" class="content-area">
		<main id="main" class="site-main">

		

		</main><!-- .site-main -->
	</div><!-- .content-area -->

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
<?php

/*$sorteret_medarbejder = new WP_Query(array(
	'meta_key' => 'medarbejder_titel',
	'orderby' => 'meta_value',
	'meta_query' => array(
		array(
			'key' => x,
			'compare' => x,
			'value' => 
		)
	)
));*/

?>
	<div id="liste_r_1" class="row">
		<div class="col-sx-12 col-sm-12 col-md-12 col-lg-12">
			<div class="dropdown">
				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Dropdown button
				</button>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					<a class="dropdown-item" href="#">Action</a>
					<a class="dropdown-item" href="#">Another action</a>
					<a class="dropdown-item" href="#">Something else here</a>
				</div>
			</div>
		</div>
	</div>
	<div id="liste_r_2" class="row">
		<div id="infobox_1_1" class="col-sx-6 col-sm-2 col-md-2 col-lg-2">
			<h1>info1</h1>
		</div>
		<div id="infobox_1_2" class="col-sx-6 col-sm-4 col-md-4 col-lg-4">
			<h1>info2</h1>
		</div>
		<div class="ansat_ulige col-sx-12 col-sm-2 col-md-2 col-lg-2">
			<h3>ansat 1</h3>
			<?php
				$medarbejder_udvikling = new WP_Query(array(
					'posts_per_page' => 4,
					'post_type' => 'medarbejdere',
					
				));

				while($medarbejder_udvikling->have_posts()) {
					$medarbejder_udvikling->the_post(); ?>
					<h6><?php the_title(); ?></h6>
					<p><?php the_field('medarbejder_titel');?></p>
					<p><?php the_field('medarbejder_telefon') ?></p>
					<?php the_post_thumbnail(); ?>
				<?php }
			?>
		</div>
		<div class="ansat_lige col-sx-12 col-sm-2 col-md-2 col-lg-2">
			<h3>ansat 2</h3>
		</div>
		<div class="ansat_ulige col-sx-12 col-sm-2 col-md-2 col-lg-2">
			<h3>ansat 3</h3>
		</div>
	</div>
	<div id="liste_r_3" class="row">
		<div class="ansat_lige col-sx-12 col-sm-2 col-md-2 col-lg-2">
			<h3>ansat 4</h3>
		</div>
		<div  class="ansat_ulige col-sx-12 col-sm-2 col-md-2 col-lg-2">
			<h3>ansat 5</h3>
		</div>
		<div class="ansat_lige col-sx-12 col-sm-2 col-md-2 col-lg-2">
			<h3>ansat 6</h3>
		</div>
		<div class="ansat_ulige col-sx-12 col-sm-2 col-md-2 col-lg-2">
			<h3>ansat 7</h3>
		</div>
		<div class="ansat_lige col-sx-12 col-sm-2 col-md-2 col-lg-2">
			<h3>ansat 8</h3>
		</div>
		<div class="ansat_ulige col-sx-12 col-sm-2 col-md-2 col-lg-2">
			<h3>ansat 9</h3>
		</div>
	</div>
	<div id="liste_r_4" class="row">
		<div id="infobox_2_1" class="col-sx-6 col-sm-2 col-md-2 col-lg-2">
			<h1>info1</h1>
		</div>
		<div id="infobox_2_2" class="col-sx-6 col-sm-4 col-md-4 col-lg-4">
			<h1>info2</h1>
		</div>
		<div class="ansat_ulige col-sx-12 col-sm-2 col-md-2 col-lg-2">
			<h3>ansat 1</h3>
		</div>
		<div class="ansat_lige col-sx-12 col-sm-2 col-md-2 col-lg-2">
			<h3>ansat 2</h3>
		</div>
		<div class="ansat_ulige col-sx-12 col-sm-2 col-md-2 col-lg-2">
			<h3>ansat 3</h3>
		</div>
	</div>
	<div id="liste_r_5" class="row">
		<div class="ansat_lige col-sx-12 col-sm-2 col-md-2 col-lg-2">
			<h3>ansat 4</h3>
		</div>
		<div  class="ansat_ulige col-sx-12 col-sm-2 col-md-2 col-lg-2">
			<h3>ansat 5</h3>
		</div>
		<div class="ansat_lige col-sx-12 col-sm-2 col-md-2 col-lg-2">
			<h3>ansat 6</h3>
		</div>
		<div class="ansat_ulige col-sx-12 col-sm-2 col-md-2 col-lg-2">
			<h3>ansat 7</h3>
		</div>
		<div class="ansat_lige col-sx-12 col-sm-2 col-md-2 col-lg-2">
			<h3>ansat 8</h3>
		</div>
		<div class="ansat_ulige col-sx-12 col-sm-2 col-md-2 col-lg-2">
			<h3>ansat 9</h3>
		</div>
	</div>
	<div id="liste_r_6" class="row">
		<div class="ansat_lige col-sx-12 col-sm-2 col-md-2 col-lg-2">
			<h3>ansat 4</h3>
		</div>
		<div  class="ansat_ulige col-sx-12 col-sm-2 col-md-2 col-lg-2">
			<h3>ansat 5</h3>
		</div>
		<div class="ansat_lige col-sx-12 col-sm-2 col-md-2 col-lg-2">
			<h3>ansat 6</h3>
		</div>
		<div class="ansat_ulige col-sx-12 col-sm-2 col-md-2 col-lg-2">
			<h3>ansat 7</h3>
		</div>
		<div class="ansat_lige col-sx-12 col-sm-2 col-md-2 col-lg-2">
			<h3>ansat 8</h3>
		</div>
		<div class="ansat_ulige col-sx-12 col-sm-2 col-md-2 col-lg-2">
			<h3>ansat 9</h3>
		</div>
	</div>
	<div class="row">
		<div id="infobox_3_1" class="col-sx-12 col-sm-12 col-md-8 col-lg-8">
			<h1>er du i tvivl box</h1>
		</div>
		<div id="infobox_3_2" class="col-sx-12 col-sm-12 col-md-4 col-lg-4">
			<h1>er du i tvivl pt. 2</h1>
		</div>
	</div>
</div>

<?php
get_footer();
?>
<?php