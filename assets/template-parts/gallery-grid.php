<?php
// Recupera le immagini dal campo custom SCF "gallery"
$images = get_post_meta( get_the_ID(), 'gallery', true );

if ( !empty($images) && is_array($images) ) : ?>
    <div class="gallery-grid">
        <?php foreach ( $images as $image_id ) : 
            $img_url = wp_get_attachment_image_url( $image_id, 'medium' );
            $alt     = get_post_meta( $image_id, '_wp_attachment_image_alt', true );
        ?>
            <div class="gallery-item">
                <img src="<?php echo esc_url( $img_url ); ?>" alt="<?php echo esc_attr( $alt ); ?>">
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
