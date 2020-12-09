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
	<div class="row">
		<div id="medarbejder-box">
			<div class="row">
				<div id="infobox1" class="col-xs-12 col-sm-8 col-md-6">
					<h3>Salg</h3>
					<div class="row">				
						<div class="kolone-1">							
							<a href="https://www.google.com/maps?sxsrf=ALeKk01xQ8GS6R_YxMZwWoncVUIFlXnDMg:1607517174901&q=onlineplus+odense&gs_lcp=CgZwc3ktYWIQAzIRCC4QxwEQrwEQyQMQywEQkwIyAggmOhAILhDHARCvARDJAxAnEJMCOgQIIxAnOgUIABDLAToHCAAQFBCHAjoCCAA6DgguEMcBEK8BEMkDEMsBOgYIABAWEB46CAgAEBYQChAeUKVhWOVpYIFsaABwAHgBgAGWAogBgwmSAQUyLjUuMZgBAKABAaoBB2d3cy13aXrAAQE&uact=5&um=1&ie=UTF-8&sa=X&ved=2ahUKEwiruY6Z9MDtAhXBsKQKHYZUAa4Q_AUoAnoECA0QBA">
								<p>OnlinePlus<br>
								Rugårdsvej 104D<br>
								5000 Odense</p>
							</a>
						</div>
						<div class="kolone-2">
							<p><a href="tel:70221144"><i class="fas fa-phone-alt"></i> Tlf. 70 22 11 44</a></p>
						</div>
					</div>
				</div>
				<?php
					$medarbejder = array(
						'numberposts' => -1,
						'post_type' => 'medarbejdere',
					);

					$the_query = new WP_Query ( $medarbejder );
					?>
					
					<?php
					if( $the_query->have_posts() ): ?>
						<?php while ($the_query->have_posts() ): $the_query->the_post(); ?>
						<div class="col-sx-12 col-sm-2 col-md-2 medarbejder-wrapper">
							<div class="medarbejder-img">
								<?php the_post_thumbnail(); ?>
							</div>
							<div class="medarbejder-overlay">
								<p><b><?php the_title(); ?></b>
								<?php the_field('medarbejder_titel'); ?></p>				
								<div class="medarbejder-knap"><p><i class="fas fa-angle-down"></i></p>
									<!--<p><?php the_field('medarbejder_telefon'); ?></p>
									<p><?php the_field('medarbejder_email'); ?></p>-->
								</div>
							</div>
						</div>
						<?php endwhile; ?>
					<?php endif; ?>
			</div>
		</div>
	</div>
	<div class="row">
		<div id="medarbejder-box">
			<div class="row">
				<div id="infobox1" class="col-xs-12 col-sm-8 col-md-6">
					<h3>Udvikling</h3>
					<div class="row">				
						<div class="kolone-1">							
							<a href="https://www.google.com/maps?sxsrf=ALeKk01xQ8GS6R_YxMZwWoncVUIFlXnDMg:1607517174901&q=onlineplus+odense&gs_lcp=CgZwc3ktYWIQAzIRCC4QxwEQrwEQyQMQywEQkwIyAggmOhAILhDHARCvARDJAxAnEJMCOgQIIxAnOgUIABDLAToHCAAQFBCHAjoCCAA6DgguEMcBEK8BEMkDEMsBOgYIABAWEB46CAgAEBYQChAeUKVhWOVpYIFsaABwAHgBgAGWAogBgwmSAQUyLjUuMZgBAKABAaoBB2d3cy13aXrAAQE&uact=5&um=1&ie=UTF-8&sa=X&ved=2ahUKEwiruY6Z9MDtAhXBsKQKHYZUAa4Q_AUoAnoECA0QBA">
								<p>OnlinePlus<br>
								Rugårdsvej 104D<br>
								5000 Odense</p>
							</a>
						</div>
						<div class="kolone-2">
							<p><a href="tel:70221144"><i class="fas fa-phone-alt"></i> Tlf. 70 22 11 44</a></p>
						</div>
					</div>
				</div>
				<?php
					$medarbejder = array(
						'numberposts' => -1,
						'post_type' => 'medarbejdere',
					);

					$the_query = new WP_Query ( $medarbejder );
					?>
					
					<?php
					if( $the_query->have_posts() ): ?>
						<?php while ($the_query->have_posts() ): $the_query->the_post(); ?>
						<div class="col-sx-12 col-sm-2 col-md-2 medarbejder-wrapper">
							<div class="medarbejder-img">
								<?php the_post_thumbnail(); ?>
							</div>
							<div class="medarbejder-overlay">
								<p><b><?php the_title(); ?></b>
								<?php the_field('medarbejder_titel'); ?></p>
								<div class="medarbejder-knap"><p><i class="fas fa-angle-down"></i></p>
									<!--<p><?php the_field('medarbejder_telefon'); ?></p>
									<p><?php the_field('medarbejder_email'); ?></p>-->
								</div>
							</div>
						</div>
						<?php endwhile; ?>
					<?php endif; ?>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sx-12 col-sm-12 col-md-12 col-lg-12">
			<div id="infobox2">
			
				<div class="row">
					<div class="kolone-1">	
						<h3>Er du i tvivl?</h3>						
						<p>Er du i tvivl eller har du spørgsmål til vores produkter, er du mere end velkommen til at kontakte os på tlf. eller mail.</p>
					</div>
					<div class="kolone-2">
						<p class="tlf"><a href="tel:70221144"><i class="fas fa-phone-alt"></i> Tlf. 70 22 11 44</a></p>
						<p class="mail"><a href="mailto:support@onlineplus.dk"><i class="far fa-envelope"></i> support@onlineplus.dk</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	
</div>

<?php
get_footer();
?>
<?php