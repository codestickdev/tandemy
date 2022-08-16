<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Tandemy
 */

get_header();
?>

	<main class="tandemy tandemy--gallery">
        <section class="galleryHeading">
            <div class="galleryHeading__wrap container">
                <h1><?php the_title(); ?></h1>
            </div>
        </section>
        <section class="galleryList">
            <div class="galleryList__wrap container">
                <?php $images = get_field('gallery_images'); ?>
                <?php foreach( $images as $image ): ?>
                <a href="<?php echo $image['url']; ?>" class="image" data-lightbox="image-1">
                    <img src="<?php echo $image['url']; ?>"/>
                </a>
                <?php endforeach; ?>
            </div>
        </section>
	</main><!-- #main -->

<?php
get_footer();