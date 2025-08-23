<?php get_header(); ?>

<h1><?php single_term_title(); ?></h1>
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        </article>
    <?php endwhile; ?>
<?php else : ?>
    <p><?php esc_html_e( 'Nessun contenuto trovato.', 'masterbasic-wptheme' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>