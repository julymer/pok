<?php get_header(); ?>

<header class="header" style="background-image: url('<?php the_field('home__header_image') ?>">  
    <video class="header__video" autoplay muted loop> 
        <source src="<?php the_field('home__header_video') ?>" type="video/mp4">
    </video>
    <div class="header__overlay">
        <div class="container header__overlay_container">
            <div class="logoPok">
                <img class="header__overlay_container_title" src="<?php the_field('home__header_title') ?>" alt="logo POK">
                <?php the_field('home__header_description') ?>
            </div>
            
        </div>
    </div>
</header>

<main>
    <div id="retourHaut">
        <p>Retour en haut</p>
    </div>
    <section id="pok" class="section pok">

        <div class="pok_container">
            <div class="pok__content">
                <h2 class="section__title"><?php the_field('home__pok_titre') ?><img src="<?php the_field('home__pok_drapeau') ?>"></h2>
                <p><?php the_field('home__pok_description')?></p>
                    <div class="pok__content_gallery">
                        <?php if(have_rows('home__pok_images')) : ?>
                        <?php while (the_repeater_field('home__pok_images')) : ?>  
                        <a href="<?php the_sub_field('img') ?>" class="popup-image"> <img src="<?php the_sub_field('img') ?>" alt="image de présentation de la cidrerie"></a>
                        <?php endwhile; ?>
                        <?php else : ?>
                        <?php endif; ?>
                    </div>
            </div>
            
        </div>

    </section>

    <section id="la-cidrerie" class="section cidrerie">

        <div class="main_container">
            <h2 class="section__title"><?php the_field('home__story_title') ?><img src="<?php the_field('home__story_drapeau') ?>" alt="icône du drapeau breton"></h2>
            <?php if(have_rows('home__story_text')) : ?>
            <?php while (the_repeater_field('home__story_text')) : ?>
                
            <div class="cidrerie__content">  
                <div class="cidrerie__content_img" style="background-image: url('<?php the_sub_field('image') ?>')">
                    <p class="cidrerie__content_parag"><?php the_sub_field('paragraphe'); ?></p>
                </div>
                <div class="cidrerie__content_picto">
                    <img src="<?php the_sub_field('picto'); ?>" alt="pictogramme agriculture">
                </div>
            </div> 
            <?php endwhile; ?>
            <?php else : ?>
            <?php endif; ?>

            <div class="custom-shape-divider-bottom-1694504049">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M598.97 114.72L0 0 0 120 1200 120 1200 0 598.97 114.72z" class="shape-fill"></path>
                </svg>
            </div>

            <div class="btn_video">
                <a class="popup-video" href="<?php the_field('home__story_video') ?>"><?php the_field('home__story_btn_texte') ?></a>
            </div>
        </div>
        
    </section>

    <section id="nos-produits" class="section products">
        
        <div class="main_container">
            <h2 class="section__title"><?php the_field('home__product_title') ?><img src="<?php the_field('home__product_drapeau') ?>" alt="icône du drapeau breton"></h2>
            <p class="products__description"><?php the_field('home__product_description') ?></p>

            <div class="products__cards">
                <?php if(have_rows('home__product_cards')) : ?>
                <?php while (the_repeater_field('home__product_cards')) : ?>

                <div class="products__cards_one">
                    <div class="products__cards_one_texte">
                        <h3><?php the_sub_field('title'); ?></h3>
                        <p><?php the_sub_field('description'); ?></p>
                    </div>
                    
                    <div class="products__cards_one_img">
                        <img src="<?php the_sub_field('image'); ?>" alt="image bouteille de cidre">
                    </div>
                </div>


                <?php endwhile; ?>
                <?php else : ?>
                <?php endif; ?>    
            </div>
        </div>
        
    </section>

    <section id="l-equipe" class="section equipe" >
        <div class="custom-shape-divider-top-1694441383">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
        </svg>
        </div>
        
        <div class="main_container">
            <h2 class="section__title" ><?php the_field('home__equipe_title') ?><img src="<?php the_field('home__equipe_drapeau') ?>" alt="icône du drapeau breton"></h2>
            <p class="equipe__paragraphe">Une équipe de passionnés qui représente leur racine à travers des produits de qualité, authentiques, respectant l'environnement et les procédés de création et de production ancestraux.</p>
            <div class="equipe__cards slider-container">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                <?php if(have_rows('home__equipe_cards')) : ?>
                <?php while (the_repeater_field('home__equipe_cards')) : ?>
            
                        <div class="equipe__cards_one slider-single swiper-slide">
                            <div class="equipe__cards_one_texte">
                                <h3><?php the_sub_field('name'); ?></h3>
                                <p><?php the_sub_field('description'); ?></p>
                            </div>
                            
                            <div class="equipe__cards_one_img">
                                <img id="img-carousel" src="<?php the_sub_field('image'); ?>" alt="image membre de l'équipe POK">
                            </div>
                        </div>

                <?php endwhile; ?>
                <?php else : ?>
                <?php endif; ?>   
                
                    </div>
                    <div class="swiper-pagination"></div>
                        <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
    </section>

    <section id="nous-contacter" class="section contact">

        <div class="main_container">
            <h2 class="section__title"><?php the_field('home__contact_title') ?><img src="<?php the_field('home__contact_drapeau') ?>" alt="icône du drapeau breton"></h2>
            <div class="contact__content">
                <div class="contact__content_coordonnees">
                    <?php the_field('home__contact_texte') ?>
                    <p class="contact__content_coordonnees_mail">Mail : <?php the_field('home__contact_mail') ?></p>
                    <p>Téléphone : <?php the_field('home__contact_telephone') ?></p>
                    <p>Adresse : <?php the_field('home__contact_adresse') ?></p>
                    <a href="<?php the_field('home__contact_carte') ?>" class="popup-carte"><img src="<?php the_field('home__contact_carte') ?>" alt="Carte"></a>
                </div>
                <div class="contact__content_form">
                    <?php echo do_shortcode('[wpforms id="273" title="false"]'); ?>
                </div>
            </div>
        </div>
        
    </section>

</main>
<?php get_footer(); ?>
