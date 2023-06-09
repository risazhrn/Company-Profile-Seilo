<x-guest-layout>
    <x-slot name="title">
        {{ $program->judul }}
    </x-slot>
    <!-- bg shape area start -->
    <div class="bg-shape">
        <img src="assets/img/shape/shape-1.png" alt="">
    </div>
    <!-- bg shape area end -->

    <!-- page title area -->
    <section class="page__title-area  pt-85">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="page__title-content mb-50">
                        <h2 class="page__title">{{ $program->judul }}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="product.html">Program</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Current</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page title end -->

    <!-- product area start -->
    <section class="product__area pb-115">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-xl-8 col-lg-8">
                    <div class="product__wrapper">
                        <div class="product__details-thumb w-img mb-30">
                            <img src="{{ asset($program->media->path) }}" alt="product-details">
                        </div>
                        <div class="product__details-content">
                            <div class="product__tab mb-40">
                                <ul class="nav nav-tabs" id="proTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="overview-tab" data-bs-toggle="tab"
                                            data-bs-target="#overview" type="button" role="tab"
                                            aria-controls="overview" aria-selected="true">Overview</button>
                                    </li>
                                    {{-- <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="support-tab" data-bs-toggle="tab"
                                            data-bs-target="#support" type="button" role="tab"
                                            aria-controls="support" aria-selected="false">Support</button>
                                    </li> --}}
                                </ul>
                            </div>
                            <div class="product__tab-content">
                                <div class="tab-content" id="proTabContent">
                                    <div class="tab-pane fade show active" id="overview" role="tabpanel"
                                        aria-labelledby="overview-tab">
                                        <div class="product__overview">
                                            {{-- <h3 class="product__overview-title">Template Details</h3>
                                            <p>The little rotter absolutely bladdered wind up victoria sponge starkers
                                                cack posh jolly good lost the plot nancy boy bonnet plastered, bevvy say
                                                the bee's knees only a quid well bodge daft bits and bobs amongst my
                                                good sir golly gosh crikey, the wireless Eaton mush Harry codswallop
                                                boot porkies up the duff morish cor blimey guvnor. Faff about blower
                                                twit Why it's your round matie boy bog-standard, say A bit of how's your
                                                father.</p>
                                            <p>What a plonker say william mush bite your arm off brown bread chinwag he
                                                legged it the bee's knees lost the plot loo gutted mate old, zonked bog
                                                Harry morish cup of char butty blag get stuffed mate cobblers cockup.!
                                            </p>
                                            <div class="product__features mt-40">
                                                <h3 class="product__overview-title">Template Features:</h3>
                                                <ol>
                                                    <li>
                                                        <p>Fully Responsive Layout</p>
                                                    </li>
                                                    <li>
                                                        <p>CMS for Courses (Products)</p>
                                                    </li>
                                                    <li>
                                                        <p>CMS for Workshops</p>
                                                    </li>
                                                    <li>
                                                        <p>Symbols for Common Elements</p>
                                                    </li>
                                                    <li>
                                                        <p>Pre-Built Templates for Common Pages</p>
                                                    </li>
                                                    <li>
                                                        <p>Royalty-Free Google Fonts</p>
                                                    </li>
                                                    <li>
                                                        <p>Easy-to-Change Global Color Swatches</p>
                                                    </li>
                                                    <li>
                                                        <p>Working Contact Page</p>
                                                    </li>
                                                    <li>
                                                        <p>Slider Testimonial Section</p>
                                                    </li>
                                                    <li>
                                                        <p>Elegant Micro Interactions</p>
                                                    </li>
                                                </ol>
                                            </div>
                                            <div class="product__features">
                                                <h3 class="product__overview-title">Design Layout</h3>
                                                <ol>
                                                    <li>
                                                        <p>Home / Landing</p>
                                                    </li>
                                                    <li>
                                                        <p>Products Collection</p>
                                                    </li>
                                                    <li>
                                                        <p>Services</p>
                                                    </li>
                                                    <li>
                                                        <p>App Collection</p>
                                                    </li>
                                                    <li>
                                                        <p>Blog Collection</p>
                                                    </li>
                                                    <li>
                                                        <p>Individual Blog Article</p>
                                                    </li>
                                                    <li>
                                                        <p>About</p>
                                                    </li>
                                                    <li>
                                                        <p>Contact</p>
                                                    </li>
                                                </ol>
                                            </div> --}}
                                            {!! $program->deskripsi !!}
                                            {{-- <div class="product__social m-social grey-bg-2">
                                                <h4 class="product__social-title">Follow us</h4>
                                                <ul>
                                                    <li><a href="#" class="fb"><i
                                                                class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#" class="tw"><i
                                                                class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#" class="pin"><i
                                                                class="fab fa-pinterest-p"></i></a></li>
                                                    <li><a href="#" class="link"><i
                                                                class="fab fa-linkedin-in"></i></a></li>
                                                </ul>
                                            </div> --}}
                                        </div>
                                    </div>
                                    {{-- <div class="tab-pane fade" id="support" role="tabpanel"
                                        aria-labelledby="support-tab">
                                        <div class="product__support">
                                            <div class="latest-comments mb-55">
                                                <ul>
                                                    <li>
                                                        <div class="comments-box grey-bg-2">
                                                            <div class="comments-info d-flex">
                                                                <div class="comments-avatar mr-15">
                                                                    <img src="assets/img/product/support/sup-1.jpg"
                                                                        alt="">
                                                                </div>
                                                                <div class="avatar-name">
                                                                    <h5>Jason Response</h5>
                                                                    <span class="post-meta">Author</span>
                                                                </div>
                                                            </div>
                                                            <div class="comments-text ml-65">
                                                                <p>Harry codswalp boot porkies up the duff morish cor
                                                                    blimey guvnor fa about blower twit Why it's your
                                                                    round matie.</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="children">
                                                        <div class="comments-box grey-bg-2">
                                                            <div class="comments-info d-flex">
                                                                <div class="comments-avatar mr-15">
                                                                    <img src="assets/img/product/support/sup-2.jpg"
                                                                        alt="">
                                                                </div>
                                                                <div class="avatar-name">
                                                                    <h5>Hilary Ouse</h5>
                                                                    <span class="post-meta">Author</span>
                                                                </div>
                                                            </div>
                                                            <div class="comments-text ml-65">
                                                                <p>I don't want no agro dropped a clanger do one wind.!
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="post-comment-form wow fadeInUp" data-wow-delay=".2s">
                                                <h4 class="post-comment-title mb-25">Add a comment</h4>
                                                <form action="#">
                                                    <div class="post-comment-inner">
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div
                                                                    class="post-input d-sm-flex align-items-center mb-10">
                                                                    <textarea placeholder="Comment for the author..."></textarea>
                                                                    <button type="submit" class="m-btn m-btn-4">
                                                                        <span></span> Post Comment</button>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-12">
                                                                <div class="post-agree d-flex align-items-center">
                                                                    <input class="m-check-input" type="checkbox"
                                                                        id="m-agree">
                                                                    <label class="m-check-label" for="m-agree">Email
                                                                        me when this comment receives a reply</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4">
                    <div class="product__details-sidebar ml-30">
                        <div class="product__proprietor white-bg mb-30">
                            <div class="product__proprietor-head mb-25">
                                <div class="product__prorietor-info mb-20 d-flex justify-content-between">
                                    <div class="product__proprietor-avater d-flex align-items-center">
                                        <div class="product__proprietor-thumb">
                                            <img src="https://ui-avatars.com/api/?name={{ $program->pembuat->name }}"
                                                alt="">
                                        </div>
                                        <div class="product__proprietor-name">
                                            <h5><a href="#">{{ $program->pembuat->name }}</a></h5>
                                            <a href="#">View Profile</a>
                                        </div>
                                    </div>
                                    {{-- <div class="product__proprietor-price">
                                        <span class="d-flex align-items-start"><span>$</span>49</span>
                                    </div> --}}
                                </div>
                                {{-- <div class="product__proprietor-text">
                                    <p>Jeffrey arse over tit give us a bell old posh morish wellies cheeky.</p>
                                </div> --}}
                            </div>
                            <div class="product__proprietor-body fix">
                                <ul class="mb-10 fix">
                                    {{-- <li>
                                        <h6>Downloads:</h6>
                                        <span>44</span>
                                    </li> --}}
                                    <li>
                                        <h6>Released On:</h6>
                                        <span>{{ $program->created_at }}</span>
                                    </li>
                                    {{-- <li>
                                        <h6>Version:</h6>
                                        <span>1.0</span>
                                    </li>
                                     <li>
                                        <h6>Compatibility:</h6>
                                        <span>Elementor</span>
                                    </li>
                                    <li>
                                        <h6>Framework:</h6>
                                        <span>Redux:</span>
                                    </li> --}}
                                </ul>
                                {{-- <a href="pricing.html" class="m-btn m-btn-2 w-100 mb-20"> <span></span> Buy Now</a> --}}
                                {{-- <a href="https://themeforest.net/item/zibber-business-consulting-wordpress-theme/30120392"
                                    target="_blank" class="m-btn m-btn-border w-100"> <span></span> Preview
                                    Project</a> --}}
                            </div>
                        </div>
                        {{-- <div class="sidebar__banner" data-background="assets/img/banner/sidebar-banner.jpg">
                            <h4 class="sidebar__banner-title">Check Out <br>Our free Templates</h4>
                            <a href="product.html" class="m-btn m-btn-white"> <span></span> free template</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product area end -->


    <!-- subscribe area start -->
    <section class="subscribe__area p-relative pt-100 pb-110" data-background="assets/img/bg/subscribe-bg.jpg">
        <div class="subscribe__icon">
            <img class="ps" src="assets/img/icon/subscribe/ps.png" alt="">
            <img class="wp" src="assets/img/icon/subscribe/wp.png" alt="">
            <img class="html" src="assets/img/icon/subscribe/html.png" alt="">
            <img class="f" src="assets/img/icon/subscribe/f.png" alt="">
            <img class="man" src="assets/img/icon/subscribe/man.png" alt="">
        </div>
        {{-- <div class="container">
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
        </div> --}}
    </section>
    <!-- subscribe area end -->
</x-guest-layout>
