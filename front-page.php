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

<main class="main_container">
    <section class="section products">
        <h2 class="section__title"><?php the_field('home__product_title') ?></h2>
        <div class="products__cards">
            <?php if(have_rows('home__product_cards')) : ?>
            <?php while (the_repeater_field('home__product_cards')) : ?>

            <div class="products__cards_one">
                <h3><?php the_sub_field('title'); ?></h3>
                <p><?php the_sub_field('description'); ?></p>
                <div class="products__cards_one_img">
                    <img src="<?php echo wp_get_attachment_image_src(get_sub_field('image'), 'cards')[0];?>" alt="">
                </div>
            </div>


            <?php endwhile; ?>
            <?php else : ?>
            <?php endif; ?>    
        </div>
    </section>

    <section class="section histoire">
        <div class="histoire__text">
            <h2 class="section__title"><?php the_field('home__story_title') ?></h2>
            <p><?php the_field('home__story_text'); ?></p>
        </div> 
        <div class="histoire__image">
            <img src="<?php echo wp_get_attachment_image_src(get_field('home__story_image'), 'large')[0];?>" alt="">
        </div>
        




    </div>

</main>
<?php get_footer(); ?>