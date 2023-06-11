<x-guest-layout>
    <x-slot name="title">
        Home
    </x-slot>

    <main>

        <!-- hero area start -->
        <section class="hero__area hero__height grey-bg-3 d-flex align-items-center">
            <div class="hero__shape">
                <img class="circle" src="{{ asset('img/icon/hero/hero-circle.png') }}" alt="circle">
                <img class="circle-2" src="{{ asset('img/icon/hero/hero-circle-2.png') }}" alt="circle">
                <img class="square" src="{{ asset('img/icon/hero/hero-square.png') }}" alt="circle">
                <img class="square-2" src="{{ asset('img/icon/hero/hero-square-2.png') }}" alt="circle">
                <img class="dot" src="{{ asset('img/icon/hero/hero-dot.png') }}" alt="circle">
                <img class="triangle" src="{{ asset('img/icon/hero/hero-triangle.png') }}" alt="circle">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-8 col-sm-8">
                        <div class="hero__content">
                            <h2 class="hero__title">
                                <span>Let's Join</span><br>
                                Our Program & Community.
                            </h2>
                            <p>Enhancing The Education Through Industrial Experience.</p>
                            <div class="hero__search">
                                <form action="#">
                                    <div class="hero__search-inner d-xl-flex">
                                        <div class="hero__search-input">
                                            <span><i class="far fa-search"></i></span>
                                            <input type="text" placeholder="Search">
                                        </div>
                                        <button type="submit" class="m-btn ml-20"> <span></span> search</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                        <div class="ml-70">

                            <img class="layer image-hidden" width="500px" data-depth="0.2"
                                src="{{ asset('img/startup.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- hero area end -->

        {{-- <!-- Program area start -->
        <section class="product__area pt-105 pb-110 grey-bg-2">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="section__title-wrapper text-center mb-60">
                            <h2 class="section__title">Our Program</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @forelse ($programs as $program)
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                            <div class="product__item white-bg mb-30 wow fadeInUp" data-wow-delay=".3s">
                                <div class="product__thumb">
                                    <div class="product__thumb-inner fix w-img">
                                        <a href="{{route('program.show', $program) }}">
                                            <img src="{{ asset($program->media->path) }}" alt="">
                                        </a>
                                    </div>
                                    <div class="product__thumb-btn transition-3">
<<<<<<< HEAD
                                        {{-- <a href="#" class="m-btn m-btn-6 mb-15">
                                            Buy Now
                                        </a> --}}
                                        {{-- <a href="{{route('program.show', $program) }}"
=======
                                        <a href="https://themeforest.net/item/zibber-business-consulting-wordpress-theme/30120392"
>>>>>>> f0de8e29916b57ea659d0e5731295574f56ad475
                                            target="_blank" class="m-btn m-btn-7">
                                            Lihat Program
                                        </a>
                                    </div>
                                </div>
                                <div class="product__content">
                                    <h3 class="product__title">
                                        <a href="product-details.html">{{ $program->judul }}</a>
                                    </h3>
                                    <p class="product__author">by <a href="#">{{ $program->pembuat->name }}</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse --}}

                {{-- </div>
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="product__more text-center mt-30">
                            <a href="{{ route('program.index') }}" class="m-btn m-btn-2"> <span></span> More
                                Program</a>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- featured area end --> 

        <!-- Program area start -->
        <section class="product__area pt-105 pb-110 grey-bg-2">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="section__title-wrapper text-center mb-60">
                            <h2 class="section__title">Paket Media Pembelajaran</h2>
                            {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p> --}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                        <div class="product__item white-bg mb-30 wow fadeInUp" data-wow-delay=".3s">
                            <div class="product__thumb">
                                <div class="product__thumb-btn transition-3">
                                    <a href="https://wa.me/6285156326419?text=Saya%20tertarik%20dengan%20Paket%20Silver%20Media%20Pembelajaran%20Seilo" class="m-btn m-btn-6 mb-15">
                                        Order Sekarang
                                    </a>
                                    
                                </div>
                                <div class="product__content">
                                    <h3 class="product__title" style="font-size: 24px">
                                        <a href="product-details.html">Paket Silver</a>
                                    </h3>
                                    <div class="product__meta mb-10 d-flex justify-content-between align-items-center">
                                        <div class="product__price">
                                            Rp<span style="font-size: 20px">2 juta</span>/bulan
                                        </div>
                                    </div>
                                    <ul class="list" style="padding: 20px">
                                        <li>Materi disesuaikan dengan pelanggan</li>
                                        <li>desain Media Pembelajaran</li>
                                        <li>video Media Pembelajaran</li>
                                        <li>Implementasi dari Seilo</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                        <div class="product__item white-bg mb-30 wow fadeInUp" data-wow-delay=".3s">
                            <div class="product__thumb">
                                <div class="product__thumb-btn transition-3">
                                    <a href="https://wa.me/6285156326419?text=Saya%20tertarik%20dengan%20Paket%20Gold%20Media%20Pembelajaran%20Seilo" class="m-btn m-btn-6 mb-15">
                                        Order Sekarang
                                    </a>
                                    {{-- <a href="https://themeforest.net/item/zibber-business-consulting-wordpress-theme/30120392"
                                        target="_blank" class="m-btn m-btn-7">
                                        Lihat Paket
                                    </a> --}}
                                </div>
                                <div class="product__content">
                                    <h3 class="product__title" style="font-size: 24px">
                                        <a href="product-details.html">Paket Gold</a>
                                    </h3>
                                    <div class="product__meta mb-10 d-flex justify-content-between align-items-center">
                                        <div class="product__price">
                                            Rp<span style="font-size: 20px">4 juta</span>/bulan
                                        </div>
                                    </div>
                                    <ul class="list" style="padding: 20px">
                                        <li>Materi disesuaikan dengan pelanggan</li>
                                        <li>desain Media Pembelajaran</li>
                                        <li>video Media Pembelajaran</li>
                                        <li>Implementasi dari Seilo</li>
                                        <li>konten yang lebih lengkap dan mendalam</li>
                                        <li>pengerjaan lebih cepat dari pada paket silver</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- featured area end -->

        <!-- Program area start -->
        <section class="product__area pt-105 pb-110 grey-bg-2">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="section__title-wrapper text-center mb-60">
                            <h2 class="section__title">Paket Scaleup</h2>
                            {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p> --}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                        <div class="product__item white-bg mb-30 wow fadeInUp" data-wow-delay=".3s">
                            <div class="product__thumb">
                                <div class="product__thumb-btn transition-3">
                                    <a href="https://wa.me/6285156326419?text=Saya%20tertarik%20dengan%20Paket%20Silver%20Program%20Scaleup%20Seilo" class="m-btn m-btn-6 mb-15">
                                        Order Sekarang
                                    </a>
                                    
                                </div>
                                <div class="product__content">
                                    <h3 class="product__title" style="font-size: 24px">
                                        <a href="product-details.html">Paket Silver</a>
                                    </h3>
                                    <div class="product__meta mb-10 d-flex justify-content-between align-items-center">
                                        <div class="product__price">
                                            Rp<span style="font-size: 20px">4 juta</span>/bulan
                                        </div>
                                    </div>
                                    <ul class="list" style="padding: 20px">
                                        <li>Pelatihan maksimum 10 peserta per mentor</li>
                                        <li>Belajar dasar dan fundamental</li>
                                        <li>Kelas dengan intensitas rendah</li>
                                        <li>Pertemuan luring selama 2- 4 pertemuan selama 1 bulan</li>
                                        <li>Dapat ditambah dengan kelas daring untuk progress reporting</li>
                                        <li>Setiap pertemuan maksimal 2 jam</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                        <div class="product__item white-bg mb-30 wow fadeInUp" data-wow-delay=".3s">
                            <div class="product__thumb">
                                <div class="product__thumb-btn transition-3">
                                    <a href="https://wa.me/6285156326419?text=Saya%20tertarik%20dengan%20Paket%20Gold%20Program%20Scaleup%20Seilo" class="m-btn m-btn-6 mb-15">
                                        Order Sekarang
                                    </a>
                                    
                                </div>
                                <div class="product__content">
                                    <h3 class="product__title" style="font-size: 24px">
                                        <a href="product-details.html">Paket Gold</a>
                                    </h3>
                                    <div class="product__meta mb-10 d-flex justify-content-between align-items-center">
                                        <div class="product__price">
                                            Rp<span style="font-size: 20px">7 juta</span>/bulan
                                        </div>
                                    </div>
                                    <ul class="list" style="padding: 20px">
                                        <li>Pelatihan maksmum 10 peserta per mentor</li>
                                        <li>Belajar kurikulum SEED ditambah dengan praktik studi kasus industri.</li>
                                        <li>Kelas dengan intensitas sedang</li>
                                        <li>Pertemuan luring selama 4-8 pertemuan selama 3 bulan.</li>
                                        <li>Dapat ditambah dengan kelas daring untuk progress reporting dan bimbingan.
                                        </li>
                                        <li>Setiap pertemuan maksimal 2 jam.</li>
                                        <li>Berkesempatan disalurkan ke perusahaan rekanan mitra</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                        <div class="product__item white-bg mb-30 wow fadeInUp" data-wow-delay=".3s">
                            <div class="product__thumb">
                                <div class="product__thumb-btn transition-3">
                                    <a href="https://wa.me/6285156326419?text=Saya%20tertarik%20dengan%20Paket%20Platinum%20Program%20Scaleup%20Seilo" class="m-btn m-btn-6 mb-15">
                                        Order Sekarang
                                    </a>
                                    {{-- <a href="https://themeforest.net/item/zibber-business-consulting-wordpress-theme/30120392"
                                        target="_blank" class="m-btn m-btn-7">
                                        Lihat Paket
                                    </a> --}}
                                </div>
                                <div class="product__content">
                                    <h3 class="product__title" style="font-size: 24px">
                                        <a href="product-details.html">Paket Platinum</a>
                                    </h3>
                                    <div class="product__meta mb-10 d-flex justify-content-between align-items-center">
                                        <div class="product__price">
                                            Rp<span style="font-size: 20px">12 juta</span>/bulan
                                        </div>
                                    </div>
                                    <ul class="list" style="padding: 20px">
                                        <li>Pelatihan maksimum 10 peserta per mentor</li>
                                        <li>Belajar kurikulum BLOOMING ditambah dengan bimbingan projek intensif,
                                            portofolio</li>
                                        <li>Kelas dengan intensitas tinggi</li>
                                        <li>Pertemuan luring selama 16 pertemuan selama 6 bulan.</li>
                                        <li>Dapat ditambah dengan kelas daring untuk progress reporting dan bimbingan.
                                        </li>
                                        <li>Setiap pertemuan maksimal 2 jam.</li>
                                        <li>Berkesempatan disalurkan ke perusahaan rekanan mitra.</li>
                                        <li>Berkesempatan mendapatkan beasiswa kuliah.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- featured area end -->

        <!-- faq area start -->
        <section class="faq__area grey-bg-2 pt-105 pb-125">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                        <div class="section__title-wrapper text-center mb-65">
                            <h2 class="section__title">About Seilo</h2>
                            {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, esse.</p> --}}
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

                                <div class="tab-pane fade" id="ui" role="tabpanel" aria-labelledby="ui-tab">
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
                                                            Menyediakan aksesibilitas dan ketersediaan yang luas
                                                            terhadap program pembelajaran vokasional dan profesional
                                                            berkualitas tinggi.
                                                        </li>
                                                        <li>
                                                            Menghadirkan konten pembelajaran yang inovatif dan menarik
                                                            dengan menggunakan teknologi terkini untuk meningkatkan
                                                            keterlibatan siswa.
                                                        </li>
                                                        <li>
                                                            Menyediakan dukungan dan panduan untuk membantu siswa
                                                            merencanakan dan mencapai tujuan karier mereka.
                                                        </li>
                                                        <li>
                                                            Membangun jaringan kemitraan dengan lembaga pendidikan dan
                                                            industri terkait untuk memastikan relevansi dan kualitas
                                                            program pembelajaran.
                                                        </li>
                                                        <li>
                                                            Menggunakan data dan analisis pembelajaran untuk memberikan
                                                            wawasan yang berharga kepada siswa dalam mengukur kemajuan
                                                            mereka dan mengidentifikasi area pengembangan yang perlu
                                                            diperhatikan.
                                                        </li>
                                                        <li>
                                                            Memberikan pengalaman pengguna yang intuitif dan
                                                            menyenangkan melalui antarmuka yang ramah pengguna dan
                                                            desain responsif.
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
        <!-- faq area end -->

        <!-- testimonial area start -->
        {{-- <section class="testimonial__area pt-105 pb-120 fix">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="section__title-wrapper mb-115 text-center">
                            <h2 class="section__title">What our <br>Customers have to say</h2>
                            <p>Curabitur lacus arcu, sodales in quam sed, commodo efficitur ligula.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="testimonial__wrapper p-relative pb-135 wow fadeInUp" data-wow-delay=".5s">
                            <div class="testimonial__shape">
                                <img src="{{ asset('img/testimonial/testimonial-shape.png') }}" alt="">
                            </div>
                            <div class="testimonial__slider-2 owl-carousel">
                                <div class="testimonial__item-2">
                                    <div class="testimonial__person-wrapper">
                                        <div class="testimonial__person d-flex">
                                            <div class="testimonial__avater">
                                                <img src="{{ asset('img/testimonial/testi-1.jpg') }}" alt="">
                                            </div>
                                            <div class="testimonial__info ml-15">
                                                <h5>Justin Case</h5>
                                                <span>@justin</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial__text testimonial__text-2 white-bg mt--40">
                                        <div class="rating mb-5">
                                            <ul>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <p>Up the duff crikey argy-bargy in my flat is faff about victoria sponge brolly
                                            the lurgy bubble and squeak bogstandard you mug bloke pardon you mush.</p>
                                    </div>
                                </div>
                                <div class="testimonial__item-2">
                                    <div class="testimonial__person-wrapper">
                                        <div class="testimonial__person d-flex">
                                            <div class="testimonial__avater">
                                                <img src="{{ asset('img/testimonial/testi-2.jpg') }}" alt="">
                                            </div>
                                            <div class="testimonial__info ml-15">
                                                <h5>Gunther Beard</h5>
                                                <span>@beard</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial__text testimonial__text-2 white-bg mt--40">
                                        <div class="rating mb-5">
                                            <ul>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <p>Up the duff crikey argy-bargy in my flat is faff about victoria sponge brolly
                                            the lurgy bubble and squeak bogstandard you mug bloke pardon you mush.</p>
                                    </div>
                                </div>
                                <div class="testimonial__item-2">
                                    <div class="testimonial__person-wrapper">
                                        <div class="testimonial__person d-flex">
                                            <div class="testimonial__avater">
                                                <img src="{{ asset('img/testimonial/testi-3.jpg') }}" alt="">
                                            </div>
                                            <div class="testimonial__info ml-15">
                                                <h5>Shahnewaz Sakil</h5>
                                                <span>@shahnewaz</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial__text testimonial__text-2 white-bg mt--40">
                                        <div class="rating mb-5">
                                            <ul>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <p>Up the duff crikey argy-bargy in my flat is faff about victoria sponge brolly
                                            the lurgy bubble and squeak bogstandard you mug bloke pardon you mush.</p>
                                    </div>
                                </div>
                                <div class="testimonial__item-2">
                                    <div class="testimonial__person-wrapper">
                                        <div class="testimonial__person d-flex">
                                            <div class="testimonial__avater">
                                                <img src="{{ asset('img/testimonial/testi-4.jpg') }}" alt="">
                                            </div>
                                            <div class="testimonial__info ml-15">
                                                <h5>Shamiha Islam</h5>
                                                <span>@shamiha</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial__text testimonial__text-2 white-bg mt--40">
                                        <div class="rating mb-5">
                                            <ul>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <p>Up the duff crikey argy-bargy in my flat is faff about victoria sponge brolly
                                            the lurgy bubble and squeak bogstandard you mug bloke pardon you mush.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- testimonial area end -->

        <!-- cta area start -->
        {{-- <section class="cta__area pb-145">
            <div class="container">
                <div class="cta__bg cta__inner pt-90 pb-90">
                    <div class="row">
                        <div class="col-xxl-6 offset-xxl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                            <div class="section__title-wrapper text-center mb-45 wow fadeInUp" data-wow-delay=".3s">
                                <h2 class="section__title text-white">Join The Community</h2>
                                <p class="text-white opacity-7">Thousands of Markit Brands have made the swich.Text
                                    marketing with the customer in mind!</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xxl-6 offset-xxl-3">
                            <div class="cta__content text-center wow fadeInUp" data-wow-delay=".5s">
                                <a href="pricing.html" class="m-btn m-btn-white-2 cta__btn"> <span></span> Start 14
                                    Day Free Trial</a>
                                <a href="pricing.html" class="m-btn m-btn-border-4 cta__btn"> <span></span> Claim Free
                                    Demo</a>
                                <p class="text-white opacity-7">Start Sending Texts - No Credit Card Necessary</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- cta area end -->
    </main>
</x-guest-layout>
