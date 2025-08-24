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
                <span class="slide-up">Welcome to</span>
                <h1 class="mt0 mb4 h1 slide-up">Masterbasic Theme</h1>
                <p class="md-col-3 slide-up">This is a WordPress theme, created to be completely customizable in every single aspect.</p>
            </div>

            <div class="pt4">
                <h2 class="h4 mb2 slide-up">Super clean</h2>
                <div class="flex gap2 flex-wrap">
                    <div class="card slide-up flex items-end p2 bg-darken-1 rounded">
                        <div class="flex-column">
                            <h2 class="h3">Disable Gutemberg</h2>
                            <p>In every post type by default</p>
                        </div>
                    </div>
                   <div class="card slide-up flex items-end p2 bg-darken-1 rounded">
                       <div class="flex-column">
                           <h2 class="h3">Disable Comments</h2>
                           <p>for real</p>
                       </div>
                   </div>
                   <div class="card slide-up flex items-end p2 bg-darken-1 rounded">
                       <div class="flex-column">
                           <h2 class="h3">A few template</h2>
                           <p>Just what you need to start</p>
                       </div>
                   </div>
                   <div class="card slide-up flex items-end p2 bg-darken-1 rounded">
                       <div class="flex-column">
                           <h2 class="h3">300 KB</h2>
                           <p>Of pure performance</p>
                       </div>
                   </div>
                </div>
            </div>

            <div class="pt4">
                <h2 class="h4 mb2 slide-up">Frameworks included</h2>
                <div class="flex gap2 flex-wrap">
                    <div class="card slide-up flex items-end p2 bg-darken-1 rounded">
                        <div class="flex-column">
                            <h2 class="h3">GSAP</h2>
                            <p>Basic and ScrollTrigger</p>
                        </div>
                    </div>
                   <div class="card slide-up flex items-end p2 bg-darken-1 rounded">
                       <div class="flex-column">
                           <h2 class="h3">Basscss</h2>
                           <p>Basic css framework for layout</p>
                       </div>
                   </div>
                   <div class="card slide-up flex items-end p2 bg-darken-1 rounded">
                       <div class="flex-column">
                           <h2 class="h3">Barba js</h2>
                           <p>Customizable framework for page transitions</p>
                       </div>
                   </div>
                   <div class="card slide-up flex items-end p2 bg-darken-1 rounded">
                       <div class="flex-column">
                           <h2 class="h3">Swiper js</h2>
                           <p>Powering Millions of Sliders </p>
                       </div>
                   </div>
                </div>
            </div>

            
        </div>
        
    </div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>