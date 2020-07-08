<div class="modal-content">
  <!--Body-->
  <div class='modal-center'>
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
