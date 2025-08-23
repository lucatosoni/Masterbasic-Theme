<?php
$images = get_post_meta( get_the_ID(), 'gallery', true );

if ( !empty($images) && is_array($images) ) : ?>
    <div class="swiper my-swiper">
        <div class="swiper-wrapper">
            <?php foreach ( $images as $image_id ) : 
                $img_url = wp_get_attachment_image_url( $image_id, 'large' );
                $alt     = get_post_meta( $image_id, '_wp_attachment_image_alt', true );
            ?>
                <div class="swiper-slide">
                    <img src="<?php echo esc_url( $img_url ); ?>" alt="<?php echo esc_attr( $alt ); ?>" style="width:100%; height:auto;">
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Navigazione -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function(){
            const swiper = new Swiper('.my-swiper', {
                loop: true,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                slidesPerView: 1,
                spaceBetween: 10,
                breakpoints: {
                    640: { slidesPerView: 2, spaceBetween: 15 },
                    1024: { slidesPerView: 3, spaceBetween: 20 },
                }
            });
        });
    </script>
<?php endif; ?>
