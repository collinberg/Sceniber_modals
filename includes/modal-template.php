<?php

$args = array(
  'numberposts' => -1,
  'post_type' => 'sceniber-modals'
);

$modals = get_posts( $args );
?>
<!--Modal-->
<?php

foreach($modals as $modal):

if( !is_front_page() ): break; endif;

$layout = get_field('modal_layouts', $modal->ID);
$background_image = get_field('background_image', $modal->ID);
$background_image_type = get_field('background_image_type', $modal->ID);

if($background_image_type == 'Repeat'): $background_image_type = 'contain'; endif;
?>
<style>
:root {
  --user-bg:  <?php the_field('background_color', $modal->ID); ?>;
  --user-btn-bg: <?php the_field('main_button_color', $modal->ID); ?>;
}

</style>
<div class="modal opacity-0 pointer-events-none" id="modal-1">
  <?php if( get_field('background_type', $modal->ID) == 'Image'): ?>
    <div class="modal-overlay modal-bg" style="background-image: url(<?php echo $background_image; ?>); background-size: <?php echo $background_image_type; ?>; background-repeat: repeat;"></div>
  <?php else: ?>
    <div class="modal-overlay"></div>
  <?php endif; ?>

  <div class="modal-close">
    <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
      <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
    </svg>
    <span class="text-sm">(Esc)</span>
  </div>
  <div class="modal-container w-11/12 lg:w-1/2">

      <?php
      if($layout == 'left'):
        include(plugin_dir_path( __FILE__ ) .'layouts/LeftAlign.php');
      elseif($layout == 'right'):
        include(plugin_dir_path( __FILE__ ) .'layouts/RightAlign.php');
      elseif($layout == 'top'):
        include(plugin_dir_path( __FILE__ ) .'layouts/TopAlign.php');
      else:
        include(plugin_dir_path( __FILE__ ) .'layouts/Center.php');
      endif;  ?>


  </div>
</div>
<?php endforeach; ?>
<!-- end Modal -->
