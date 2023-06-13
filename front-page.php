<?php get_header(); ?>

<header class="header" style="background-image: url('<?php echo wp_get_attachment_image_src(get_field('home__header_image'), 'large')[0]; ?>">  
    <video class="header__video" autoplay muted loop> 
        <source src="<?php the_field('home__header_video') ?>" type="video/mp4">
    </video>
    <div class="header__overlay">
        <div class="container header__overlay_container">
            <h1 class="header__overlay_container_title"><?php the_field('home__header_title') ?></h1>
            <div class="header__overlay_container_description">
                <?php the_field('home__header_description') ?>
            </div>
        </div>
    </div>

</header>

<main>
    <div>
        <h2><?php the_field('home__main_title') ?></h2>
        <div>
            <?php if(have_rows('home__main_product')) : ?>
            <?php while (the_repeater_field('home__main_product')) : ?>

            <div>
                <?php the_sub_field('home__main_product_title'); ?>
                <?php the_sub_field('home__main_product_description'); ?>
                <img src="<?php the_sub_field('home__main_product_image'); ?>" alt="">
            </div>


            <?php endwhile; ?>
            <?php else : ?>
            <?php endif; ?>    
        </div>
    </div>

</main>
<?php get_footer(); ?>