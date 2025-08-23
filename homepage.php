<?php
/*
Template Name: homepage
*/
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div id="page-<?php the_ID(); ?>">
        
        <div class="content py4 px2">
            <div class="flex flex-column mb4">
                <span>Welcome to</span>
                <h1 class="mt0 mb4">Masterbasic Theme</h1>
                <p class="md-col-3">This is a WordPress theme, created to be completely customizable in every single aspect.</p>
            </div>

            <div class="pt4">
                <h2 class="h4 mb2">Frameworks included</h2>
                <div class="flex gap2 flex-wrap">
                    <div class="card flex flex-grow flex-end p2 bg-darken-1 rounded">
                        <div class="flex-column">
                            <h2>GSAP</h2>
                            <p>Basic, ScrollTrigger and DrawSVG</p>
                        </div>
                    </div>
                   <div class="card flex flex-grow flex-end p2 bg-darken-1 rounded">
                       <div class="flex-column">
                           <h2>Basscss</h2>
                           <p>Basic css framework for layout</p>
                       </div>
                   </div>
                   <div class="card flex flex-grow flex-end p2 bg-darken-1 rounded">
                       <div class="flex-column">
                           <h2>Barba js</h2>
                           <p>Customizable framework for page transitions</p>
                       </div>
                   </div>
                </div>
            </div>

            <div class="pt4 mt4">
                <h2 class="h4 mb2">Basic components</h2>
                <div class="mb4">
                    <p>#1 Card</p>
                    <div class="flex">
                        <?php 
                            get_template_part(
                                'assets/template-parts/card-post',
                                null,
                                array( 'post_type' => 'wallpaper' )
                            ); 
                        ?>
                    </div>
                </div>

                
            </div>
        </div>
        
    </div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>