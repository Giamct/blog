<?php get_header(); ?>

<section class="container">
	<center>


     <?php $articulos = new WP_Query ([ 
                         'showpost'=> 3,
                         ]);
     while ($articulos -> have_posts ()) {
     	$articulos -> the_post (); ?>






<div class="row caja">
	<div class="col-sm-3">
		<?php the_post_thumbnail("thumbnail");?>
	</div>
	<div class="col-sm-9">
		<h2><a href="<?php the_permalink();?>"><?php the_title (); ?></a></h2>
		<P>Publicado por <?php the_author (); ?> el <?php the_time ("d/m/Y");?></P>
		<?php the_excerpt (); ?>
	</div>
	
</div>
		










     	<?php } ?>

		

<?php get_footer(); ?>