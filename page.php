<?php get_header();?>
    <!-- document content start -->
    <div class="index-Hld">
      <div class="container">
        <div class="row">
          <?php if(have_posts()):?>
          <?php while(have_posts()):the_post();?>
          <?php get_template_part('template-parts/page');?>
          <?php endwhile;?>
          <?php endif;?>
        </div>
      </div>
    </div>
    <!-- document content end -->
<?php get_footer();?>