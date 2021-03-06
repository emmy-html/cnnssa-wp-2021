<?php /* Template Name: Board of Directors Page Template */ ?>
<?php get_header(); ?>

<main id="content">
<section id="board-of-directors-page">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<h1><?php the_title(); ?></h1>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php the_content(); ?>
</article>
<?php endwhile; endif; ?>
</section>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>