<?php get_header(); ?>
<div align="center">
<h1><?php bloginfo("name"); ?></h1>
<h3><?php bloginfo("description"); ?></h3>



<div id="anayazi">


    <article>
    	<?php while(have_posts()) : the_post(); ?>
<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
<p ><?php the_time("d,m y") ?>  <?php echo get_the_author(); ?> <?php the_category(); ?></p>
<br></br>
<p id="yazi"><?php the_excerpt(); ?></p>

 

	<?php endwhile; ?>

    </article>

</div>
<?php get_footer(); ?>