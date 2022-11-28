<?php 
// @author Jessica Ejelöv - jeej2100@student.miun.se 
// get header
get_header(); ?>
<section >
    <!-- get title  -->
<h1><?php single_post_title();?></h1>
<?php
        // loop
        if (have_posts()) {
            while (have_posts()) {
                the_post();
        ?>
                <article class="single-page">
                    <?php the_content(); ?>
                </article>
        <?php
            }
        }

        ?>

</section>




<?php get_footer();  ?>