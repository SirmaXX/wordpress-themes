<?php get_header(); ?>
<div align="center">
<h1><?php bloginfo("name"); ?></h1>
<h3><?php bloginfo("description"); ?></h3>



<div id="anayazi">


    <article>
    	<?php while(have_posts()) : the_post(); ?>
<h3><a href="<?php the_permalink(); ?>"></a><?php the_title(); ?></h3>
<p><?php the_time("d,m y") ?> yazar : <?php echo get_the_author(); ?> - <?php the_category(); ?> </p>
<p id="yazi"><?php the_content(); ?></p>

 

	<?php endwhile; ?>
   <?php comments_template(); ?>
    </article>

</div>
<?php get_footer(); ?>