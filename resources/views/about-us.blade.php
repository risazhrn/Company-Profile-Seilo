<x-guest-layout>
    <x-slot name="title">
        About Us
    </x-slot>

    <main>

         <!-- bg shape area start -->
         <div class="bg-shape">
            <img src="{{asset('img/shape/shape-1.png')}}" alt="">
         </div>
         <!-- bg shape area end -->

         <!-- about area start -->
         <section class="about__area pt-100">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-10 offset-xxl-1 col-xl-10 offset-xl-1">
                     <div class="about__wrapper">
                        <h3 class="about__title" style="padding: 8px;">Our History</h3>
                        {{-- <div class="about__thumb w-img wow fadeInUp" data-wow-delay=".3s">
                           <img src="{{asset('img/about/about-1.jpg')}}" alt="">
                        </div> --}}
                        {{-- <div class="about__count pt-50 pb-15 wow fadeInUp" data-wow-delay=".5s">
                           <div class="row">
                              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                                 <div class="about__count-item text-center launche mb-30">
                                    <p>LAUNCHED IN</p>
                                    <h4><span class="counter">2009</span></h4>
                                 </div>
                              </div>
                              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                                 <div class="about__count-item text-center community mb-30">
                                    <p>COMMUNITY OF</p>
                                    <h4><span class="counter">13,000</span>+</h4>
                                 </div>
                              </div>
                              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                                 <div class="about__count-item text-center mission mb-30">
                                    <p>MISSION PROGRESS</p>
                                    <h4><span class="counter">4.9</span>%</h4>
                                 </div>
                              </div>
                           </div>
                        </div> --}}
                        <div class="about__content">
                           {{-- <p class="about__text">Tomfoolery nice one have it cup of tea wind up bugger on your bike mate cobblers Queen's English, it's all gone to pot mush a load of old tosh off his nut I don't want no agro up the duff. Blower excuse my French William squiffy bender young delinquent the little rotter pardon me bubble and squeak baking cakes don't get shirty with me!</p> --}}
                           <p class="about__sub-text" style="text-align: justify;padding: 8px;">
                              SEILO, didirikan pada tahun 2021 dengan semangat untuk mengubah lanskap pendidikan dan pengembangan keterampilan vokasional. Dalam waktu singkat sejak pendiriannya, kami telah mencapai berbagai prestasi yang memperkuat perjalanan kami. Salah satu prestasi yang signifikan adalah memperoleh pendanaan sebesar 60 juta dari Telkom Indonesia, salah satu perusahaan telekomunikasi terkemuka di Indonesia. Pendanaan ini memungkinkan kami untuk memperluas jangkauan layanan kami, meningkatkan infrastruktur teknologi, dan mendukung pengembangan konten pembelajaran yang lebih komprehensif.

                              Perjalanan kami dimulai dengan melibatkan komunitas pendidik dan para profesional muda dalam pengembangan produk kami. Dengan mendengarkan kebutuhan mereka, kami merancang platform yang menawarkan akses mudah ke konten pembelajaran yang relevan, interaktif, dan praktis. Dalam waktu singkat, kami berhasil meluncurkan berbagai program pembelajaran vokasional yang meliputi berbagai industri, mulai dari teknologi informasi hingga keuangan dan kreatif.
                              
                              Perusahaan kami telah membangun kemitraan yang kuat dengan institusi pendidikan, organisasi industri, dan pemangku kepentingan lainnya. Kolaborasi kami dengan lembaga-lembaga terkemuka memungkinkan kami untuk menyajikan kurikulum yang sesuai dengan tuntutan pasar dan kebutuhan pekerjaan saat ini. Kami juga terus berupaya untuk melibatkan para profesional dan ahli di berbagai bidang dalam pengembangan dan pemutakhiran konten kami agar tetap relevan dan mutakhir.
                              
                              Kami sangat bersemangat dan berkomitmen untuk terus berinovasi dan meningkatkan layanan kami agar dapat memenuhi kebutuhan pendidikan dan pengembangan keterampilan vokasional yang semakin berkembang. Dengan fokus pada kualitas, aksesibilitas, dan pengalaman pengguna yang unggul, kami bertekad untuk menjadi mitra belajar yang terpercaya bagi semua siswa yang ingin mencapai keunggulan dan sukses dalam karier mereka.   
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- about area end -->

         <!-- brand area start -->
         <section class="faq__area grey-bg-2 pt-105 pb-125">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                        <div class="section__title-wrapper text-center mb-65">
                            <h2 class="section__title">About Seilo</h2>
                           </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-3">
                            <div class="faq__tab wow fadeInLeft" data-wow-delay=".3s">
                                <ul class="nav nav-tabs" id="faqTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="sale-tab" data-bs-toggle="tab"
                                            data-bs-target="#sale" type="button" role="tab" aria-controls="sale"
                                            aria-selected="true">Goals</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="template-tab" data-bs-toggle="tab"
                                            data-bs-target="#template" type="button" role="tab"
                                            aria-controls="template" aria-selected="false">Vision</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="ui-tab" data-bs-toggle="tab"
                                            data-bs-target="#ui" type="button" role="tab" aria-controls="ui"
                                            aria-selected="false">Mission</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-9">
                            <div class="faq__tab-content wow fadeInRight" data-wow-delay=".7s">
                                <div class="tab-content" id="faqTabContent">
    
                                    <div class="tab-pane fade show active" id="sale" role="tabpanel"
                                        aria-labelledby="sale-tab">
                                        <div class="accordion" id="sale-accordion">
    
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingTwo">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                        aria-expanded="false" aria-controls="collapseTwo">
                                                        Our Goals
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse show"
                                                    aria-labelledby="headingTwo" data-bs-parent="#sale-accordion">
                                                    <div class="accordion-body">
                                                        <ul class="list">
                                                            <li>Menyediakan platform belajar yang komprehensif dan
                                                                interaktif untuk memfasilitasi pengembangan keterampilan
                                                                vokasional dan profesional bagi para siswa.</li>
                                                            <li>Membantu siswa dalam meningkatkan kualifikasi mereka dan
                                                                persiapan karier melalui akses ke program pembelajaran yang
                                                                relevan dan berkualitas.</li>
                                                            <li>Menyediakan sumber daya pendidikan yang bervariasi, seperti
                                                                kursus online, materi pelajaran, dan alat evaluasi, untuk
                                                                memenuhi kebutuhan belajar siswa.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="tab-pane fade" id="template" role="tabpanel"
                                        aria-labelledby="template-tab">
                                        <div class="accordion" id="template-accordion">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingSix">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseSix"
                                                        aria-expanded="false" aria-controls="collapseSix">
                                                        Our Vision
                                                    </button>
                                                </h2>
                                                <div id="collapseSix" class="accordion-collapse collapse show"
                                                    aria-labelledby="headingSix" data-bs-parent="#template-accordion">
                                                    <div class="accordion-body">
                                                        <p>Menjadi platform pilihan utama bagi siswa yang ingin
                                                            memperluas pengetahuan dan meningkatkan persiapan karier
                                                            mereka melalui pembelajaran vokasional dan pengembangan
                                                            keterampilan.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
    
                                    <div class="tab-pane fade" id="ui" role="tabpanel"
                                        aria-labelledby="ui-tab">
                                        <div class="accordion" id="ui-accordion">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingSix">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseSix"
                                                        aria-expanded="false" aria-controls="collapseSix">
                                                        Our Mission
                                                    </button>
                                                </h2>
                                                <div id="collapseSix" class="accordion-collapse collapse show"
                                                    aria-labelledby="headingSix" data-bs-parent="#ui-accordion">
                                                    <div class="accordion-body">
                                                        <ul class='list'>
                                                            <li>
                                                                Menyediakan aksesibilitas dan ketersediaan yang luas terhadap program pembelajaran vokasional dan profesional berkualitas tinggi.
                                                            </li>
                                                            <li>
                                                                Menghadirkan konten pembelajaran yang inovatif dan menarik dengan menggunakan teknologi terkini untuk meningkatkan keterlibatan siswa.
                                                            </li>
                                                            <li>
                                                                Menyediakan dukungan dan panduan untuk membantu siswa merencanakan dan mencapai tujuan karier mereka.
                                                            </li>
                                                            <li>
                                                                Membangun jaringan kemitraan dengan lembaga pendidikan dan industri terkait untuk memastikan relevansi dan kualitas program pembelajaran.
                                                            </li>
                                                            <li>
                                                                Menggunakan data dan analisis pembelajaran untuk memberikan wawasan yang berharga kepada siswa dalam mengukur kemajuan mereka dan mengidentifikasi area pengembangan yang perlu diperhatikan.
                                                            </li>
                                                            <li>
                                                                Memberikan pengalaman pengguna yang intuitif dan menyenangkan melalui antarmuka yang ramah pengguna dan desain responsif.
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
         <!-- brand area end --> 

         <!-- testimonial area start -->
         <div class="testimonial__area pb-100 fix">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-6 offset-xxl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                     <div class="section__title-wrapper text-center mb-45 wow fadeInUp" data-wow-delay=".3s">
                        <h2 class="section__title" style="margin-top: 40px">Seilo Squad</h2>
                        <p>Our Team</p>
                     </div>
                  </div>
               </div>
               <div class="testimonial__inner p-relative pb-110">
                  <div class="row">
                     <div class="col-xxl-12">
                        <div class="testimonial__slider owl-carousel wow fadeInUp" data-wow-delay=".5s">
                           <div class="testimonial__item white-bg">
                              <div class="testimonial__person mb-20">
                                 <div class="mb-15">
                                    <img class="rounded" src="{{asset('img/foto/Reza.jpg')}}" alt="">
                                 </div>
                                 <div class="testimonial__info m-auto">
                                    <h5 style="text-align: center">M. Reza Raihan NR</h5>
                                 </div>
                              </div>
                              <div class="testimonial__text">
                                 <p style="text-align: center">CEO</p>
                              </div>
                           </div>
                           <div class="testimonial__item white-bg">
                              <div class="testimonial__person mb-20">
                                 <div class="mb-15">
                                    <img class="rounded" src="{{asset('img/foto/Risa.jpg')}}" alt="">
                                 </div>
                                 <div class="testimonial__info m-auto">
                                    <h5 style="text-align: center">Risa Zahrani</h5>
                                 </div>
                              </div>
                              <div class="testimonial__text">
                                 <p style="text-align: center">CTO</p>
                              </div>
                           </div>
                           <div class="testimonial__item white-bg">
                              <div class="testimonial__person mb-20">
                                 <div class="mb-15">
                                    <img class="rounded" src="{{asset('img/foto/Eka.jpg')}}" alt="">
                                 </div>
                                 <div class="testimonial__info m-auto">
                                    <h5 style="text-align: center">Eka Dian Wananda</h5>
                                 </div>
                              </div>
                              <div class="testimonial__text">
                                 <p style="text-align: center">CFO</p>
                              </div>
                           </div>
                           <div class="testimonial__item white-bg">
                              <div class="testimonial__person mb-20">
                                 <div class="mb-15">
                                    <img class="rounded" src="{{asset('img/foto/Yopi.jpg')}}" alt="">
                                 </div>
                                 <div class="testimonial__info m-auto">
                                    <h5 style="text-align: center">Yopi Yuda Febrian</h5>
                                 </div>
                              </div>
                              <div class="testimonial__text">
                                 <p style="text-align: center">COO</p>
                              </div>
                           </div>
                           
                           <div class="testimonial__item white-bg">
                              <div class="testimonial__person mb-20">
                                 <div class="mb-15">
                                    <img class="rounded" src="{{asset('img/foto/Madova.jpg')}}" alt="">
                                 </div>
                                 <div class="testimonial__info m-auto">
                                    <h5 style="text-align: center">March Madova Jovanovic</h5>
                                 </div>
                              </div>
                              <div class="testimonial__text">
                                 <p style="text-align: center">CMO</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- testimonial area end -->

         {{-- <!-- cta area start -->
         <section class="cta__area pb-60">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-6 offset-xxl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                     <div class="section__title-wrapper text-center mb-45 wow fadeInUp" data-wow-delay=".3s">
                        <h2 class="section__title">Join The Community</h2>
                        <p>Thousands of Markit Brands have made the swich.Text marketing with the customer in mind!</p>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xxl-6 offset-xxl-3">
                     <div class="cta__content text-center wow fadeInUp" data-wow-delay=".5s">
                        <a href="pricing.html" class="m-btn m-btn-border-2 cta__btn active"> <span></span> Start 14 Day Free Trial</a>
                        <a href="pricing.html" class="m-btn m-btn-border-2 cta__btn"> <span></span> Claim Free Demo</a>
                        <p>Start Sending Texts - No Credit Card Necessary</p>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- cta area end -->

         <!-- community area start -->
         <div class="community__area pb-140">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-10 offset-xxl-1">
                     <div class="community__wrapper p-relative wow fadeInUp" data-wow-delay=".7s">
                        <img class="community-map" src="{{asset('img/shape/map.png')}}" alt="">
                        <div class="community__person">
                           <img class="com-1" src="{{asset('img/community/com-1.jpg')}}" alt="">
                           <img class="com-2" src="{{asset('img/community/com-2.jpg')}}" alt="">
                           <img class="com-3" src="{{asset('img/community/com-3.jpg')}}" alt="">
                           <img class="com-4" src="{{asset('img/community/com-4.jpg')}}" alt="">
                           <img class="com-5" src="{{asset('img/community/com-5.jpg')}}" alt="">
                           <img class="com-6" src="{{asset('img/community/com-6.jpg')}}" alt="">
                           <img class="com-7" src="{{asset('img/community/com-7.jpg')}}" alt="">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- community area end --> --}}

         {{-- <!-- subscribe area start -->
         <section class="subscribe__area p-relative pt-100 pb-110" data-background="{{asset('img/bg/subscribe-bg.jpg')}}">
            <div class="subscribe__icon">
               <img class="ps" src="{{asset('img/icon/subscribe/ps.png')}}" alt="">
               <img class="wp" src="{{asset('img/icon/subscribe/wp.png')}}" alt="">
               <img class="html" src="{{asset('img/icon/subscribe/html.png')}}" alt="">
               <img class="f" src="{{asset('img/icon/subscribe/f.png')}}" alt="">
               <img class="man" src="{{asset('img/icon/subscribe/man.png')}}" alt="">
            </div>
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="subscribe__content text-center wow fadeInUp" data-wow-delay=".3s">
                        <h3 class="subscribe__title">Have a project? <br> Create your website now.</h3>
                        <p>Try our any product for FREE!</p>
                        <div class="subscribe__form wow fadeInUp" data-wow-delay=".5s">
                           <form action="#">
                              <input type="email" placeholder="Email Address">
                              <button type="submit" class="m-btn m-btn-black"><span></span> subscribe </button>
                           </form>
                           <p>Join 20,000+ other creators in our Markit community.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- subscribe area end --> --}}
      </main>

</x-guest-layout>
