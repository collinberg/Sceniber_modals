<div class="modal-content">
  <!--Body-->
    <?php $img = get_field('modal_image', $modal->ID); ?>
      <div class="modal-left" style="background-image: url(<?php echo $img['url']; ?>); background-size: cover; background-position: center center;">
        <img src="<?php echo $img['url']; ?>" class='hidden'>
      </div>
      <div class='modal-right'>
        <h2 class='modal-title'><?php the_field('modal_title', $modal->ID); ?></h2>
        <div class='modal-text'>
          <?php the_field('modal_content', $modal->ID); ?>
        </div>

        <div class='cta_container'>
          <?php if( get_field('enable_call_to_action', $modal->ID) ): ?>
          <a class='modal-btn' href="<?php the_field('main_button_link', $modal->ID); ?>"><?php the_field('main_button_text', $modal->ID); ?></a>
          <?php endif;
          if( get_field('secondary_action', $modal->ID) ): ?>
          <a href="<?php the_field('2nd_link_link', $modal->ID); ?>" class=''><?php the_field('2nd_button_text', $modal->ID); ?></a>
          <?php endif; ?>
        </div>

      </div>
  </div>
