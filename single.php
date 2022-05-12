<?php get_header(); ?>

<section>
	<center>

		<h3> <?php the_title (); ?></h3>

		<h6> <?php the_field ('resumen'); ?> </h6>

		<?php the_post_thumbnail("large");?>

		<?php the_content (); ?>

		<h6> Fuente : <?php the_field ('fuente'); ?> </h6>




        <ul>



<?php get_footer(); ?> 

           



</ul>
	</center>
</section>
<footer>
	<ul>

	<li>
		<a href="https://es-la.facebook.com/">Facebook</a>
	</li>

	<li>
		<a href="https://es-la.facebook.com/">Instagram</a>
	</li>

	<li>
		<a href="https://twitter.com/?lang=es">Twiter</a>
	</li>
</ul>
</footer>
</body>
</html>
