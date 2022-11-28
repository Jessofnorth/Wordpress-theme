<?php 
// @author Jessica Ejelöv - jeej2100@student.miun.se 
// header
get_header(); ?>
<!-- tilte -->
<h1><?php single_post_title();?></h1>
<div class="container-grid">
   <section>
      <!-- sidebar -->
      <?php get_sidebar('news'); ?>
   </section>
   <section>

      <?php
      // loop
      if (have_posts()) {
         while (have_posts()) {
            the_post();
      ?>
      <!-- news -->
      <article class="news-grid">
      <a href="<?= the_permalink(); ?>"><?= the_post_thumbnail(); ?></a>
      <div>
            <h2><?= the_title(); ?></h2>
            <p><?= get_the_date(); ?></p>
            <?= the_excerpt(); ?>
            <a class="read-more" href="<?= the_permalink(); ?>">Läs mer</a>
            </div>
            </article>
      <?php
         }
      }

      ?>

   </section>
</div>
<!-- footer -->
<?php get_footer();  ?>