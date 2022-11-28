<?php
/* @author Jessica Ejelöv - jeej2100@student.miun.se */
// get header
get_header(); ?>
<div class="container-grid">
    <section>
        <!-- sidebar -->
        <?php get_sidebar('news'); ?>
    </section>
    <section>
        <!-- news -->
        <?php
        // loop
        if (have_posts()) {
            while (have_posts()) {
                the_post();
        ?>
                <article class="single-post">
                    <h1><?= the_title(); ?></h1>
                    <p class="date"> <?= the_date(); ?></p>
                    <?php the_content(); ?>
                </article>
        <?php
            }
        }

        ?>


    </section>
</div>
<?php get_footer();  ?>