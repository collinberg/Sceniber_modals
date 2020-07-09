<div class="modal-content">
  <!--Body-->
  <div class='modal-center'>
    <h2 class='modal-title'><?php the_field('modal_title', $modal->ID); ?></h2>
    <div class='modal-text'>
      <?php the_field('modal_content', $modal->ID); ?>
    </div>
    <?php include plugin_dir_path( __FILE__ ) . '../partials/cta.php'; ?>

</div>
</div>
