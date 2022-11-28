<?php
/*
Template name: Event sida med sidebar
*/
// @author Jessica Ejelöv - jeej2100@student.miun.se 
// header
get_header(); ?>
<!-- title -->
<h1><?php single_post_title();?></h1>
<div class="container-grid">
    <section>
        <!-- sidebar -->
        <?php get_sidebar('event'); ?>
    </section>
    
        <?php
        // loop
        if (have_posts()) {
            while (have_posts()) {
                the_post();
        ?>
                <article class="single-post">
                    <?php the_content(); ?>
                </article>
        <?php
            }
        }

        ?>


</div>
<?php get_footer();  ?>