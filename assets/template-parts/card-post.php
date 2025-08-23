<?php
// Recupera il post_type dagli args, se non c'è usa quello corrente
$post_type = isset($args['post_type']) ? $args['post_type'] : get_post_type();

$args = array(
    'post_type'      => $post_type,
    'posts_per_page' => 5,
);

$query = new WP_Query( $args );

if ( $query->have_posts() ) :
    while ( $query->have_posts() ) : $query->the_post(); ?>
        
        <div class="cpt-card">
            
            <?php if ( has_post_thumbnail() ) : ?>
                <div class="cpt-image">
                    <?php the_post_thumbnail('medium'); ?>
                </div>
            <?php endif; ?>
            
            <div class="p1">
                <h3 class="cpt-title mb2"><?php the_title(); ?></h3>

                <div class="cpt-excerpt"><?php the_excerpt(); ?></div>

                <a class="cpt-button btn btn-outline mb1 black" href="<?php the_permalink(); ?>">
                    Discover more
                </a>
            </div>
        </div>
        
    <?php endwhile;
    wp_reset_postdata();
endif;
?>
