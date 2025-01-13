
<?php if (get_field('enable_page_banner')): ?>
<section class="banner-wrapper">
    <div class="container">
        <div class="row">
            <div class="banner">
                <h4>Home / Features</h4>
                <h1><?php echo get_field('title'); ?></h1>
                <p><?php echo get_field('description'); ?></p>

                <button class="btn-green"><?php echo get_field('button_title'); ?></button>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>