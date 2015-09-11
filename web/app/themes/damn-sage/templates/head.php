<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>

  <!-- fonts / typekit -->
  <script src="https://use.typekit.net/iir2zjt.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>

  <?php /*-- style all colors based on issue # color --*/ ?>
  <style type="text/css" media="screen">
    a, a:visited, #menu-main-nav a span {
      color: #<?php the_field('issue_number_color', 'option'); ?>;
    }
    .btn-default, .btn-primary, body.damn-plus .title-wrapper, body.category-damn-plus .title-wrapper, body.login h3.widget-title {
      background-color: #<?php the_field('issue_number_color', 'option'); ?>;
      color: #fff !important;
    }
    .btn:hover {
      background-color: inherit;
    }
    .color-box, .damn-plus-badge, .join-damn-plus-home-image, .damn-plus-cta, .category-link .damn-plus, .page-featured-image {
      background-color: #<?php the_field('issue_number_color', 'option'); ?>;
    }
    .category-link .damn-plus {
      border-color: #<?php the_field('issue_number_color', 'option'); ?> !important;
    }
    body.damn-plus .title-wrapper h1, body.category-damn-plus .title-wrapper h1 {
      border-color: #fff;
    }
  </style>
</head>
