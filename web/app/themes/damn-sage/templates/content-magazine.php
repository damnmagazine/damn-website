<div class="news-item-wrapper col-xs-6 col-sm-4" id="post-<?php the_ID(); ?>">
  <div class="news-item">
    <?php /* REUSED snippet to display post image */ ?>
    <?php get_template_part('templates/snippet', 'post-image'); ?>

    <?php /* REUSED snippet to display title, category, subtitle */ ?>
    <?php get_template_part('templates/snippet', 'feed-header'); ?>
  </div>
</div>