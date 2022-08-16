<?php
    /**
     * Template name: Wideo
     */
get_header(); ?>

<main class="tandemy tandemy--videos">
    <section class="imagesHeading">
        <div class="imagesHeading__wrap container">
            <h1>Filmy wideo</h1>
        </div>
    </section>
    <section class="videoList">
        <div class="videoList__wrap">
            <?php while(have_rows('videoList')): the_row(); ?>
            <div class="video">
                <?php echo get_sub_field('videoList_video'); ?>
            </div>
            <?php endwhile; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>