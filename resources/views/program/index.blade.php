<x-guest-layout>
    <x-slot name="title">
        Program
    </x-slot>

    <main>

        <!-- bg shape area start -->
        <div class="bg-shape">
            <img src="{{ asset('img/shape/shape-1.png') }}" alt="">
        </div>
        <!-- bg shape area end -->

        <!-- product area start -->
        <section class="product__area po-rel-z1 pt-100 pb-115 grey-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 order-lg-first order-last">
                        <div class="product__sidebar mr-30">
                            {{-- <div class="product__sidebar-widget  white-bg mb-30">
                                <div class="sidebar__widget mb-20">
                                    <form action="#">
                                        <div
                                            class="sidebar__widget-head d-flex align-items-center justify-content-between">
                                            <h4 class="sidebar__widget-title">Category</h4>
                                            <button type="submit" class="sidebar__clear-btn"><i
                                                    class="fal fa-repeat"></i>Clear</button>
                                        </div>
                                        <div class="sidebar__widget-content">
                                            <div class="sidebar__check-wrapper">
                                                <ul>
                                                    <li class="d-flex justify-content-between align-items-center">
                                                        <div class="sidebar__check d-flex align-items-center">
                                                            <input class="m-check-input" type="checkbox" id="m-wp">
                                                            <label class="m-check-label"
                                                                for="m-wp">WordPress</label>
                                                        </div>
                                                        <span>76</span>
                                                    </li>
                                                    <li class="d-flex justify-content-between align-items-center">
                                                        <div class="sidebar__check d-flex align-items-center">
                                                            <input class="m-check-input" type="checkbox"
                                                                id="m-marketing">
                                                            <label class="m-check-label"
                                                                for="m-marketing">Marketing</label>
                                                        </div>
                                                        <span>24</span>
                                                    </li>
                                                    <li class="d-flex justify-content-between align-items-center">
                                                        <div class="sidebar__check d-flex align-items-center">
                                                            <input class="m-check-input" type="checkbox" id="m-kit">
                                                            <label class="m-check-label" for="m-kit">Interface
                                                                Kit</label>
                                                        </div>
                                                        <span>27</span>
                                                    </li>
                                                    <li class="d-flex justify-content-between align-items-center">
                                                        <div class="sidebar__check d-flex align-items-center">
                                                            <input class="m-check-input" type="checkbox"
                                                                id="m-templates">
                                                            <label class="m-check-label"
                                                                for="m-templates">Templates</label>
                                                        </div>
                                                        <span>44</span>
                                                    </li>
                                                    <li class="d-flex justify-content-between align-items-center">
                                                        <div class="sidebar__check d-flex align-items-center">
                                                            <input class="m-check-input" type="checkbox"
                                                                id="m-ecommerce">
                                                            <label class="m-check-label"
                                                                for="m-ecommerce">eCommerce</label>
                                                        </div>
                                                        <span>16</span>
                                                    </li>
                                                    <li class="d-flex justify-content-between align-items-center">
                                                        <div class="sidebar__check d-flex align-items-center">
                                                            <input class="m-check-input" type="checkbox"
                                                                id="m-component">
                                                            <label class="m-check-label"
                                                                for="m-component">Component</label>
                                                        </div>
                                                        <span>12</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="sidebar__widget">
                                    <form action="#">
                                        <div
                                            class="sidebar__widget-head d-flex align-items-center justify-content-between">
                                            <h4 class="sidebar__widget-title">Tags</h4>
                                            <button type="submit" class="sidebar__clear-btn"><i
                                                    class="fal fa-repeat"></i>Clear</button>
                                        </div>
                                        <div class="sidebar__widget-content">
                                            <div class="sidebar__check-wrapper sidebar__tag">
                                                <ul>
                                                    <li class="d-flex justify-content-between align-items-center">
                                                        <div class="sidebar__check d-flex align-items-center">
                                                            <input class="m-check-input" type="checkbox"
                                                                id="m-marketplace">
                                                            <label class="m-check-label"
                                                                for="m-marketplace">Marketplace</label>
                                                        </div>
                                                        <span>28</span>
                                                    </li>
                                                    <li class="d-flex justify-content-between align-items-center">
                                                        <div class="sidebar__check d-flex align-items-center">
                                                            <input class="m-check-input" type="checkbox" id="m-fashion">
                                                            <label class="m-check-label" for="m-fashion">Fashion</label>
                                                        </div>
                                                        <span>13</span>
                                                    </li>
                                                    <li class="d-flex justify-content-between align-items-center">
                                                        <div class="sidebar__check d-flex align-items-center">
                                                            <input class="m-check-input" type="checkbox"
                                                                id="m-responsive">
                                                            <label class="m-check-label"
                                                                for="m-responsive">Responsive</label>
                                                        </div>
                                                        <span>26</span>
                                                    </li>
                                                    <li class="d-flex justify-content-between align-items-center">
                                                        <div class="sidebar__check d-flex align-items-center">
                                                            <input class="m-check-input" type="checkbox"
                                                                id="m-education">
                                                            <label class="m-check-label"
                                                                for="m-education">Education</label>
                                                        </div>
                                                        <span>05</span>
                                                    </li>
                                                    <li class="d-flex justify-content-between align-items-center">
                                                        <div class="sidebar__check d-flex align-items-center">
                                                            <input class="m-check-input" type="checkbox"
                                                                id="m-shop">
                                                            <label class="m-check-label" for="m-shop">Shop</label>
                                                        </div>
                                                        <span>07</span>
                                                    </li>
                                                    <li class="d-flex justify-content-between align-items-center">
                                                        <div class="sidebar__check d-flex align-items-center">
                                                            <input class="m-check-input" type="checkbox"
                                                                id="m-furniture">
                                                            <label class="m-check-label"
                                                                for="m-furniture">Furniture</label>
                                                        </div>
                                                        <span>10</span>
                                                    </li>
                                                    <li class="d-flex justify-content-between align-items-center">
                                                        <div class="sidebar__check d-flex align-items-center">
                                                            <input class="m-check-input" type="checkbox"
                                                                id="m-multipurpose">
                                                            <label class="m-check-label"
                                                                for="m-multipurpose">Multipurpose</label>
                                                        </div>
                                                        <span>32</span>
                                                    </li>
                                                    <li class="d-flex justify-content-between align-items-center">
                                                        <div class="sidebar__check d-flex align-items-center">
                                                            <input class="m-check-input" type="checkbox"
                                                                id="m-store">
                                                            <label class="m-check-label" for="m-store">Store</label>
                                                        </div>
                                                        <span>20</span>
                                                    </li>
                                                    <li class="d-flex justify-content-between align-items-center">
                                                        <div class="sidebar__check d-flex align-items-center">
                                                            <input class="m-check-input" type="checkbox"
                                                                id="m-agency">
                                                            <label class="m-check-label" for="m-agency">Agency</label>
                                                        </div>
                                                        <span>83</span>
                                                    </li>
                                                    <li class="d-flex justify-content-between align-items-center">
                                                        <div class="sidebar__check d-flex align-items-center">
                                                            <input class="m-check-input" type="checkbox"
                                                                id="m-portfolio">
                                                            <label class="m-check-label"
                                                                for="m-portfolio">Portfolio</label>
                                                        </div>
                                                        <span>45</span>
                                                    </li>
                                                    <li class="d-flex justify-content-between align-items-center">
                                                        <div class="sidebar__check d-flex align-items-center">
                                                            <input class="m-check-input" type="checkbox"
                                                                id="m-construction">
                                                            <label class="m-check-label"
                                                                for="m-construction">Construction</label>
                                                        </div>
                                                        <span>25</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div> --}}
                            {{-- <div class="sidebar__banner"
                                data-background="{{ asset('img/banner/sidebar-banner.jpg') }}">
                                <h4 class="sidebar__banner-title">Check Out <br>Our free Templates</h4>
                                <a href="product.html" class="m-btn m-btn-white"> <span></span> free template</a>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-xxl-8 col-xl-8 col-lg-8">
                        <div class="row">
                            @forelse ($programs as $program)
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                    <div class="product__item white-bg mb-30 wow fadeInUp" data-wow-delay=".3s">
                                        <div class="product__thumb">
                                            <div class="product__thumb-inner fix w-img">
                                                <a href="product-details.html">
                                                    <img src="{{ asset($program->media->path) }}" alt="">
                                                </a>
                                            </div>
                                            <div class="product__thumb-btn transition-3">
                                                {{-- <a href="#" class="m-btn m-btn-6 mb-15">
                                                    Buy Now
                                                </a> --}}
                                                <a href="{{ route('program.show', $program) }}" class="m-btn m-btn-7">
                                                    Lihat Program
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            {{-- <div
                                                class="product__meta mb-10 d-flex justify-content-between align-items-center">
                                                <div class="product__tag">
                                                    <a href="#">Business</a>
                                                </div>
                                                <div class="product__price">
                                                    <span>$49</span>
                                                </div>
                                            </div> --}}
                                            <h3 class="product__title">
                                                <a href="product-details.html">{{ $program->judul }}</a>
                                            </h3>
                                            <p class="product__author">oleh <a
                                                    href="#">{{ $program->pembuat->name }}</a></p>
                                        </div>
                                    </div>
                                </div>
                            @empty
                            @endforelse
                            {{ $programs->onEachSide(0)->links('vendor.pagination.bootstrap-5-new') }}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- product area end -->

        {{-- <!-- trending area start -->
        <section class="trending__area pt-110 pb-110">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-xxl-6 col-xl-6 col-lg col-md-8">
                        <div class="section__title-wrapper mb-50">
                            <h2 class="section__title">Trending <br> Landmark Themes</h2>
                            <p>Jeffrey pardon me jolly good.</p>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg col-md-4">
                        <div class="trending__more d-flex justify-content-md-end  mb-50">
                            <a href="product.html" class="m-btn m-btn-border"><span></span>Explore Cloneables</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                        <div class="trending__item trending__item-2 d-sm-flex align-items-center transition-3 mb-30 wow fadeInUp"
                            data-wow-delay=".3s">
                            <div class="trending__thumb mr-25">
                                <div class="trending__thumb-inner fix">
                                    <a href="product-details.html">
                                        <img src="assets/img/trending/tren-1.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="trending__content">
                                <div class="trending__tag trending__tag-2">
                                    <a href="#">Business</a>
                                </div>
                                <h3 class="trending__title trending__title-2"><a href="product-details.html">Zibber WP
                                        Theme</a></h3>
                                <div class="trending__author">
                                    <p>by <a href="#">Themepure</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                        <div class="trending__item trending__item-2 d-sm-flex align-items-center transition-3 mb-30 wow fadeInUp"
                            data-wow-delay=".3s">
                            <div class="trending__thumb mr-25">
                                <div class="trending__thumb-inner fix">
                                    <a href="product-details.html">
                                        <img src="assets/img/trending/tren-2.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="trending__content">
                                <div class="trending__tag trending__tag-2">
                                    <a href="#">Technology</a>
                                </div>
                                <h3 class="trending__title trending__title-2"><a href="product-details.html">React App
                                        Landing</a></h3>
                                <div class="trending__author">
                                    <p>by <a href="#">Themepure</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                        <div class="trending__item trending__item-2 d-sm-flex align-items-center transition-3 mb-30 wow fadeInUp"
                            data-wow-delay=".3s">
                            <div class="trending__thumb mr-25">
                                <div class="trending__thumb-inner fix">
                                    <a href="product-details.html">
                                        <img src="assets/img/trending/tren-3.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="trending__content">
                                <div class="trending__tag trending__tag-2">
                                    <a href="#">Marketing</a>
                                </div>
                                <h3 class="trending__title trending__title-2"><a href="product-details.html">Digital
                                        Marketing</a></h3>
                                <div class="trending__author">
                                    <p>by <a href="#">Themepure</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                        <div class="trending__item trending__item-2 d-sm-flex align-items-center transition-3 mb-30 wow fadeInUp"
                            data-wow-delay=".3s">
                            <div class="trending__thumb mr-25">
                                <div class="trending__thumb-inner fix">
                                    <a href="product-details.html">
                                        <img src="assets/img/trending/tren-4.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="trending__content">
                                <div class="trending__tag trending__tag-2">
                                    <a href="#">Software</a>
                                </div>
                                <h3 class="trending__title trending__title-2"><a href="product-details.html">Ad
                                        Manager Admin</a></h3>
                                <div class="trending__author">
                                    <p>by <a href="#">Themepure</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                        <div class="trending__item trending__item-2 d-sm-flex align-items-center transition-3 mb-30 wow fadeInUp"
                            data-wow-delay=".3s">
                            <div class="trending__thumb mr-25">
                                <div class="trending__thumb-inner fix">
                                    <a href="product-details.html">
                                        <img src="assets/img/trending/tren-5.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="trending__content">
                                <div class="trending__tag trending__tag-2">
                                    <a href="#">UI Kit</a>
                                </div>
                                <h3 class="trending__title trending__title-2"><a href="product-details.html">UI
                                        Template</a></h3>
                                <div class="trending__author">
                                    <p>by <a href="#">Themepure</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                        <div class="trending__item trending__item-2 d-sm-flex align-items-center transition-3 mb-30 wow fadeInUp"
                            data-wow-delay=".3s">
                            <div class="trending__thumb mr-25">
                                <div class="trending__thumb-inner fix">
                                    <a href="product-details.html">
                                        <img src="assets/img/trending/tren-6.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="trending__content">
                                <div class="trending__tag trending__tag-2">
                                    <a href="#">Mail</a>
                                </div>
                                <h3 class="trending__title trending__title-2"><a href="product-details.html">Email
                                        Template</a></h3>
                                <div class="trending__author">
                                    <p>by <a href="#">Themepure</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- trending area end --> --}}

        {{-- <!-- banner area start -->
        <section class="banner__area pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-6 col-xl-6 col-md-6">
                        <div class="banner__item mb-30 wow fadeInUp" data-wow-delay=".3s"
                            data-background="assets/img/banner/banner-1.jpg">
                            <h3 class="banner__title">Designers who changed the web with Markit</h3>
                            <p>He lost his bottle that zonked spend a penny young delinquent bugger.</p>
                            <a href="about.html" class="m-btn m-btn-white banner__more"> <span></span> Learn More</a>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-md-6">
                        <div class="banner__item mb-30 wow fadeInUp" data-wow-delay=".7s"
                            data-background="assets/img/banner/banner-2.jpg">
                            <h3 class="banner__title">Professional Websites are made by Markit</h3>
                            <p>He lost his bottle that zonked spend a penny young delinquent bugger.</p>
                            <a href="about.html" class="m-btn m-btn-white banner__more"> <span></span> Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner area end --> --}}

        {{-- <!-- subscribe area start -->
        <section class="subscribe__area p-relative pt-100 pb-110" data-background="assets/img/bg/subscribe-bg.jpg">
            <div class="subscribe__icon">
                <img class="ps" src="assets/img/icon/subscribe/ps.png" alt="">
                <img class="wp" src="assets/img/icon/subscribe/wp.png" alt="">
                <img class="html" src="assets/img/icon/subscribe/html.png" alt="">
                <img class="f" src="assets/img/icon/subscribe/f.png" alt="">
                <img class="man" src="assets/img/icon/subscribe/man.png" alt="">
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
