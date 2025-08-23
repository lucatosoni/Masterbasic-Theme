<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>">
        <h1><?php the_title(); ?></h1>
         <?php if ( has_post_thumbnail() ) : ?>
                <div class="cpt-image">
                    <?php the_post_thumbnail('medium'); ?>
                </div>
            <?php endif; ?>
        <div class="">
                    <p>#2 Grid gallery</p>
                        <?php 
                            get_template_part(
                                'assets/template-parts/gallery-carousel',
                                
                            ); 
                        ?>

                </div>
    </article>
<?php endwhile; endif; ?>

<?php get_footer(); ?>