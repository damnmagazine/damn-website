<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if lt IE 9]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>

    <div class="wrap" role="document">
      <div class="content container">
        <main class="main " role="main">

          <div class="row">

            <img src="/app/uploads/2015/09/damnplus-black.png">
            <hr />

            <?php
            if(!defined('WPINC')) // MUST have WordPress.
              exit("Do not access this file directly.");
            ?>

            <!-- Header Section (contains information and possible custom code from the originating site/domain). -->
            <div id="s2member-default-return-header-section" class="s2member-return-section s2member-return-header-section s2member-default-return-header-section">
              <div id="s2member-default-return-header-div" class="s2member-return-div s2member-return-header-div s2member-default-return-header-div">
                %%header%% <!-- (this is auto-filled by s2Member, based on configuration). -->
              </div>
              <div style="clear:both;"></div>
            </div>

            <!-- Response Section (this is auto-filled by s2Member, based on what action has taken place). -->
            <!-- Although NOT recommended, you can remove the response Replacement Code and build your own message if you prefer. -->
            <!-- It is NOT recommended, because the dynamic response message may vary, depending on what action has taken place. -->
            <div id="s2member-default-return-response-section" class="s2member-return-section s2member-return-response-section s2member-default-return-response-section">
              <div id="s2member-default-return-response-div" class="s2member-return-div s2member-return-response-div s2member-default-return-response-div">
                %%response%% <!-- (this is auto-filled by s2Member, based on what action has taken place). -->
                <div id="s2member-default-return-continue" class="s2member-return-continue s2member-default-return-continue">
                  %%continue%% <!-- (auto-filled by s2Member, based on what action has taken place). -->
                  <br /><br />
                  <a href="/wp/wp-login.php?action=register" class="btn btn-primary btn-lg" title="REGISTER NOW">REGISTER NOW</a>
                </div>
              </div>
              <div style="clear:both;"></div>
            </div>

            <!-- Support Section (contains information about how a Customer can contact support). -->
            <div id="s2member-default-return-support-section" class="s2member-return-section s2member-return-support-section s2member-default-return-support-section">
              <div id="s2member-default-return-support-div" class="s2member-return-div s2member-return-support-div s2member-default-return-support-div">
                %%support%% <!-- (this is auto-filled by s2Member, based on configuration). -->
                If you need assistance, <a href="/join-damn-plus/assisstance">go here</a>.
              </div>
              <div style="clear:both;"></div>
            </div>

            %%tracking%% <!-- (this is auto-filled, supports tracking codes integrated w/ s2Member). -->

          </div>

        </main><!-- /.main -->
      </div><!-- /.content -->

      <div class="clearthis"></div>
    </div><!-- /.wrap -->

    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
