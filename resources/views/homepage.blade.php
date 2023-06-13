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

        <!-- pricing area start -->
        <section class="pricing__area pt-100 pb-110">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-8 offset-xxl-2 col-xl-8 offset-xl-2">
                        <div class="page__title-wrapper text-center mb-50">
                            <h2 class="page__title-2">Our Pricing <br>We provide flexible plan</h2>
                            <p>Lembaga pelatihan dan penyaluran kerja.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="pricing__tab mb-40">
                            <ul class="nav nav-tabs justify-content-center" id="priceTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="monthly-tab" data-bs-toggle="tab"
                                        data-bs-target="#monthly" type="button" role="tab" aria-controls="monthly"
                                        aria-selected="true">ScaleUP</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="yearly-tab" data-bs-toggle="tab"
                                        data-bs-target="#yearly" type="button" role="tab" aria-controls="yearly"
                                        aria-selected="false">Media Pembelajaran</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-content wow fadeInUp" id="priceTabContent" data-wow-delay=".5s">
                    <div class="tab-pane fade show active" id="monthly" role="tabpanel" aria-labelledby="monthly-tab">
                        <div class="row" style="justify-content: center">

                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="pricing__item text-center transition-3 mb-30">
                                    <div class="pricing__header mb-25">
                                        <h3>Silver</h3>
                                        <p>Paket Pelatihan</p>
                                    </div>
                                    <div class="pricing__tag d-flex align-items-start justify-content-center mb-30">
                                        <span>Rp</span>
                                        <h4>4Jt<span style="font-size:0.35em">/bulan</span></h4>
                                    </div>

                                    <div class="pricing__buy mb-20">
                                        <a href="#" class="m-btn m-btn-border m-btn-border-5 w-100"> <span></span>
                                            Buy Now</a>
                                    </div>
                                    <div class="pricing__features text-start">
                                        <ul>
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

                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="pricing__item active text-center transition-3 mb-30">
                                    <div class="pricing__header mb-25">
                                        <h3>Gold</h3>
                                        <p>Paket Pelatihan</p>
                                    </div>
                                    <div class="pricing__tag d-flex align-items-start justify-content-center mb-30">
                                        <span>Rp</span>
                                        <h4>7Jt<span style="font-size:0.35em">/bulan</h4>
                                    </div>

                                    <div class="pricing__buy mb-20">
                                        <a href="#" class="m-btn m-btn-border m-btn-border-5 w-100"> <span></span>
                                            Buy Now</a>
                                    </div>
                                    <div class="pricing__features text-start">
                                        <ul>
                                            <li>Pelatihan maksmum 10 peserta per mentor</li>
                                            <li>Belajar kurikulum SEED ditambah dengan praktik studi kasus industri.
                                            </li>
                                            <li>Kelas dengan intensitas sedang</li>
                                            <li>Pertemuan luring selama 4-8 pertemuan selama 3 bulan.</li>
                                            <li>Dapat ditambah dengan kelas daring untuk progress reporting dan
                                                bimbingan.
                                            </li>
                                            <li>Setiap pertemuan maksimal 2 jam.</li>
                                            <li>Berkesempatan disalurkan ke perusahaan rekanan mitra</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="pricing__item text-center transition-3 mb-30">
                                    <div class="pricing__header mb-25">
                                        <h3>Platinum</h3>
                                        <p>Paket Pelatihan</p>
                                    </div>
                                    <div class="pricing__tag d-flex align-items-start justify-content-center mb-30">
                                        <span>Rp</span>
                                        <h4>12Jt<span style="font-size:0.35em">/bulan</h4>
                                    </div>
                                    <div class="pricing__buy mb-20">
                                        <a href="#" class="m-btn m-btn-border m-btn-border-5 w-100"> <span></span>
                                            Buy Now</a>
                                    </div>
                                    <div class="pricing__features text-start">
                                        <ul>
                                            <li>Pelatihan maksimum 10 peserta per mentor</li>
                                            <li>Belajar kurikulum BLOOMING ditambah dengan bimbingan projek intensif,
                                                portofolio</li>
                                            <li>Kelas dengan intensitas tinggi</li>
                                            <li>Pertemuan luring selama 16 pertemuan selama 6 bulan.</li>
                                            <li>Dapat ditambah dengan kelas daring untuk progress reporting dan
                                                bimbingan.
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
                    <div class="tab-pane fade" id="yearly" role="tabpanel" aria-labelledby="yearly-tab">
                        <div class="row" style="justify-content: center">
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="pricing__item text-center transition-3 mb-30">
                                    <div class="pricing__header mb-25">
                                        <h3>Silver</h3>
                                        <p>Paket Media Pembelajaran</p>
                                    </div>
                                    <div class="pricing__tag d-flex align-items-start justify-content-center mb-30">
                                        <span>Rp</span>
                                        <h4>2Jt<span style="font-size:0.35em">/bulan</h4>
                                    </div>

                                    <div class="pricing__buy mb-20">
                                        <a href="#" class="m-btn m-btn-border m-btn-border-5 w-100">
                                            <span></span> Buy Now</a>
                                    </div>
                                    <div class="pricing__features text-start">
                                        <ul>
                                            <li>Materi disesuaikan dengan pelanggan</li>
                                        <li>desain Media Pembelajaran</li>
                                        <li>video Media Pembelajaran</li>
                                        <li>Implementasi dari Seilo</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="pricing__item active text-center transition-3 mb-30">
                                    <div class="pricing__header mb-25">
                                        <h3>Gold</h3>
                                        <p>Paket Media Pembelajaran</p>
                                    </div>
                                    <div class="pricing__tag d-flex align-items-start justify-content-center mb-30">
                                        <span>Rp</span>
                                        <h4>4Jt<span style="font-size:0.35em">/bulan</h4>
                                    </div>

                                    <div class="pricing__buy mb-20">
                                        <a href="#" class="m-btn m-btn-border m-btn-border-5 w-100">
                                            <span></span> Buy Now</a>
                                    </div>
                                    <div class="pricing__features text-start">
                                        <ul>
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
            </div>
        </section>
        <!-- pricing area end -->


        <!-- testimonial area start -->
        <section class="testimonial__area pt-105 pb-120 fix">
            <div class="container">
                {{-- <div class="row">
                    <div class="col-xxl-12">
                        <div class="section__title-wrapper mb-115 text-center">
                            <h2 class="section__title">What our <br>Customers have to say</h2>
                            <p>Curabitur lacus arcu, sodales in quam sed, commodo efficitur ligula.</p>
                        </div>
                    </div>
                </div> --}}
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
        </section>
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
