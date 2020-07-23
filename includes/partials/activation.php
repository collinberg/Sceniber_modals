<?php
$modalID = $modal->ID;
$cookie_length = get_field('cookie_length', $modal->ID);
$modal_delay = get_field('modal_delay', $modal->ID);
?>

<!-- Activate Modal -->
<script type="text/javascript">
  $(function(){

    var openmodal = document.querySelectorAll('.modal-open')
    for (var i = 0; i < openmodal.length; i++) {
      openmodal[i].addEventListener('click', function(event){

      targetModal = this.dataset.modal;
      event.preventDefault()
      toggleModal(targetModal)
      })
    }

    const overlay = document.querySelectorAll('.modal-overlay')
    for (var i = 0; i < overlay.length; i++) {
      overlay[i].addEventListener('click', closeModal)
    }

    var closemodal = document.querySelectorAll('.modal-close')
    for (var i = 0; i < closemodal.length; i++) {
      closemodal[i].addEventListener('click', closeModal)
    }

    document.onkeydown = function(evt) {
      evt = evt || window.event
      var isEscape = false
      if ("key" in evt) {
      isEscape = (evt.key === "Escape" || evt.key === "Esc")
      } else {
      isEscape = (evt.keyCode === 27)
      }
      if (isEscape && document.body.classList.contains('modal-active')) {
      closeModal()
      }
    };


    function toggleModal (targetModal) {
      // Set A Cookie that tells the browser that the Modal has been actiavted.
      // Cookie says which modal was active, and sets expire date
      if (Cookies.get('modal_<?php echo $modalID; ?>') != 'active') {
        Cookies.set('modal_<?php echo $modalID; ?>', 'active', { expires: <?php echo $cookie_length; ?> });
      } else {
        console.log('Cookie is already Set, will not show modal for <?php echo $cookie_length; ?> days')
        return;
      }
      const body = document.querySelector('body')
      let modal = document.getElementById(targetModal)

      console.log('Modal Active: ' + targetModal);

      //Add Open Classes
      modal.classList.toggle('active-sce-modal')
      modal.classList.toggle('opacity-0')
      modal.classList.toggle('pointer-events-none')

      body.classList.toggle('modal-active')
    }

    function closeModal() {
      const body = document.querySelector('body')
      const modalActive = document.querySelector('.active-sce-modal')

      modalActive.classList.toggle('active-sce-modal')
      modalActive.classList.toggle('opacity-0')
      modalActive.classList.toggle('pointer-events-none')
      body.classList.toggle('modal-active')
    }

  setTimeout(function () { toggleModal('modal-<?php echo $modalID ?>')}, <?php echo $modal_delay; ?>);
});
</script>
