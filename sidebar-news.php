<?php
//  @author Jessica Ejelöv - jeej2100@student.miun.se
  ?>
   <!-- sidebar news -->
<aside class="sidebar-wrapper">
   
        <?php
    // widget - news categorys
    if (is_active_sidebar('news-categorys')) :
    ?>
        <section>
            <h2>Kategorier</h2>
            <?php dynamic_sidebar('news-categorys'); ?>
        </section>
    <?php endif; ?>
    <?php
    // widget - news archive
    if (is_active_sidebar('news-archive')) :
    ?>
        <section>
            <h2>Arkiv</h2>
            <?php dynamic_sidebar('news-archive'); ?>
        </section>
    <?php endif; ?>


</aside>