<!-- Features -->
<section class="features">
    <div class="container">
        <div class="row">
            <!--  -->
            <div class="slick-features">
                <?php query_posts('post_type=features && order=desc'); ?>
                <?php while (have_posts()):
                    the_post(); ?>
                    <!--  -->
                    <div class="feat-block move-down">
                        <div class="feat-block-img">
                            <?php
                            $alt_text = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
                            echo get_the_post_thumbnail(null, 'full', array('class' => '', 'alt' => $alt_text));
                            ?>
                        </div>
                        <h2><?php echo the_title(); ?></h2>
                        <p><?php echo strip_tags(get_the_excerpt()); ?></p>
                    </div>
                    <!--  -->
                <?php endwhile;
                wp_reset_query(); ?>
            </div>
        </div>
    </div>
</section>