<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add Blog') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- contact area start -->
         <section class="contact__area pt-105 pb-145">
            <div class="contact__shape">
               <img class="man-1" src="assets/img/icon/sign/man-1.png" alt="">
               <img class="circle" src="assets/img/icon/sign/circle.png" alt="">
               <img class="zigzag" src="assets/img/icon/sign/zigzag.png" alt="">
               <img class="dot" src="assets/img/icon/sign/dot.png" alt="">
               <img class="bg" src="assets/img/icon/sign/sign-up.png" alt="">
            </div>
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="page__title-wrapper mb-55">
                        <h2 class="page__title-2">Leave Us a Message.</h2>
                        <p>Jolly good bevvy butty it's all gone to pot that quaint so I said cheers.</p>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xxl-7 col-xl-7">
                     <div class="contact__wrapper  white-bg">
                        <div class="contact__form">
                           <form action="assets/mail.php" method="POST">
                              <div class="row">
                                 <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                    <div class="contact__input-wrapper mb-25">
                                       <h5>Full Name</h5>
                                       <div class="contact__input">
                                          <input type="text" placeholder="Full name" name="name">
                                          <i class="fal fa-user"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                    <div class="contact__input-wrapper mb-25">
                                       <h5>Work email</h5>
                                       <div class="contact__input">
                                          <input type="text" placeholder="e-mail address" name="email">
                                          <i class="fal fa-envelope"></i>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                    <div class="contact__input-wrapper mb-25">
                                       <h5>Company Name</h5>
                                       <div class="contact__input">
                                          <input type="text" placeholder="Company Name" name="subject">
                                          <i class="fal fa-smile"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                    <div class="contact__input-wrapper mb-25">
                                       <h5>Website</h5>
                                       <div class="contact__input">
                                          <input type="text" placeholder="Website" name="website">
                                          <i class="fal fa-globe"></i>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-xxl-12">
                                    <div class="contact__input-wrapper mb-25">
                                       <h5>Message</h5>
                                       <div class="contact__input textarea">
                                          <textarea placeholder="Tell us a bil about your project" name="message"></textarea>
                                          <i class="fal fa-comment"></i>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-xxl-12">
                                    <button type="submit" class="m-btn m-btn-4"> <span></span> submit </button>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-5 col-xl-5">
                     <div class="contact__map">
                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3649.4800810528923!2d90.36797221544877!3d23.837080434546706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c14a3366b005%3A0x901b07016468944c!2z4Kau4Ka_4Kaw4Kaq4KeB4KawIOCmoeCmvyzgppMs4KaP4KaH4KaaLOCmj-CmuCwg4Kai4Ka-4KaV4Ka-!5e0!3m2!1sbn!2sbd!4v1615723408957!5m2!1sbn!2sbd"></iframe>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- contact area end -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
