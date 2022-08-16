<?php
    /**
     * Template name: Podstrona
     */
get_header(); ?>

<main class="tandemy tandemy--subpage">
    <section class="subHeading">
        <div class="subHeading__wrap container">
            <h1><?php the_title(); ?></h1>
            <a href="<?php echo home_url('/'); ?>">Wróć do strony głównej</a>
        </div>
    </section>
    <section class="subContent">
        <div class="subContent__wrap container">
            <?php echo get_field('content'); ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>