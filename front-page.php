<?php
// @author Jessica Ejelöv - jeej2100@student.miun.se 
// header
get_header(); ?>
<img class="custom-header" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="Header bild.">
<section class="front-page-section">

    <?php
    // loop
    if (have_posts()) :
        while (have_posts()) :
            the_post();
            the_content();
        endwhile;
    endif;
    ?>

</section>
<section>
    <?php
    // widget - front-page
    if (is_active_sidebar('front_page')) : ?>
        <article class="front_page_puff">
            <?php
            dynamic_sidebar('front_page'); ?>
        </article>
    <?php
    endif; ?>
</section>
<!-- news -->
<section>
    <h2 class="center">Nyheter</h2>
    <div class="news-front-page">
        <?php
        // loop
        query_posts('posts_per_page=4');
        if (have_posts()) {
            while (have_posts()) {
                the_post();
        ?>
                <article>
                    <div>
                        <a href="<?= the_permalink(); ?>"><?= the_post_thumbnail(); ?></a>
                        <h2><?= the_title(); ?></h2>
                        <p><?= get_the_date(); ?></p>
                        <?= the_excerpt(); ?>
                    </div>
                    <a class="read-more" href="<?= the_permalink(); ?>">Läs mer</a>
                </article>
        <?php
            }
        }

        ?>
    </div>
</section>

<?php get_footer();  ?>