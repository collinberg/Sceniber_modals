<div class="modal-container w-11/12 lg:w-1/2">
  <div class="modal-content">
    <!--Body-->
    <?php $img = get_field('modal_image', $modal->ID); ?>
    <div class="modal-left" style="background-image: url(<?php echo $img['url']; ?>); background-size: cover;  background-position: center center;">
      <img src="<?php echo $img['url']; ?>" class='hidden'>
    </div>
    <div class='modal-right'>
      <h2 class='modal-title'><?php the_field('modal_title', $modal->ID); ?></h2>
      <div class='modal-text'>
        <?php the_field('modal_content', $modal->ID); ?>
      </div>
      <?php include plugin_dir_path( __FILE__ ) . '../partials/cta.php'; ?>
    </div>
  </div>
</div>
