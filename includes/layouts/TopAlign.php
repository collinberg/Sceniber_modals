<div class="modal-content">
  <!--Body-->
    <?php $img = get_field('modal_image', $modal->ID); ?>
      <div class="modal-top w-full">
        <img src="<?php echo $img['url']; ?>" class='w-full'>
      </div>
      <div class='modal-bottom w-full'>
        <h2 class='modal-title'><?php the_field('modal_title', $modal->ID); ?></h2>
        <div class='modal-text'>
          <?php the_field('modal_content', $modal->ID); ?>
        </div>
        <?php include plugin_dir_path( __FILE__ ) . '../partials/cta.php'; ?>
      </div>
  </div>
