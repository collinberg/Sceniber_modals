<?php


 ?>
 <!--Modal-->
 <div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center" id="modal-1">
   <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

   <div class="modal-container bg-white w-11/12 lg:w-1/2 mx-auto rounded shadow-lg z-50 overflow-y-auto">

     <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
       <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
         <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
       </svg>
       <span class="text-sm">(Esc)</span>
     </div>

     <!-- Add margin if you want to see some of the overlay behind the modal-->
     <div class="modal-content">
       <!--Body-->
           <div class="modal-left">
             <img src='dante.jpg' alt="Modal Image for TITLE">
           </div>
           <div class='modal-right'>
             <h2 class='font-bold text-3xl mb-5 leading-tight'>The Most 5 Star Rated App</h2>
             <p class='text-gray-500 text-lg leading-relaxed'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor aliqua.</p>
             <div class='cta_container'>
               <button class='btn rounded-full py-3 px-10 bg-blue-500 uppercase text-white mt-5'>Get Started!</button>
             </div>
           </div>
       </div>
   </div>
 </div>
