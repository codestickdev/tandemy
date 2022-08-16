<?php
    /**
     * Template name: Zdjęcia
     */
get_header(); ?>

<main class="tandemy tandemy--gallerycat">
    <section class="imagesHeading">
        <div class="imagesHeading__wrap container">
            <h1>Galerie zdjęć</h1>
        </div>
    </section>
    <section class="imagesList">
        <div class="imagesList__wrap container">
            <?php 
            $args = array(
                'posts_per_page'	=> -1,
                'post_type'		    => 'galeria',
            );
            $galleries = new WP_Query( $args ); ?>
            <?php while( $galleries->have_posts() ) : $galleries->the_post();
                $images = get_field('gallery_images');
            ?>
                <a href="<?php the_permalink(); ?>" class="image">
                    <img src="<?php echo $images[0]['url']; ?>"/>
                    <h3><?php the_title(); ?></h3>
                </a>
            <?php endwhile; ?>

            <?php wp_reset_query(); ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>