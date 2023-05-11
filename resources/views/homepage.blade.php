<x-guest-layout>
    <x-slot name="title">
        Home
    </x-slot>

    <main>

        <!-- hero area start -->
        <section class="hero__area hero__height grey-bg-3 d-flex align-items-center">
            <div class="hero__shape">
                <img class="circle" src="{{asset('img/icon/hero/hero-circle.png')}}" alt="circle">
                <img class="circle-2" src="{{asset('img/icon/hero/hero-circle-2.png')}}" alt="circle">
                <img class="square" src="{{asset('img/icon/hero/hero-square.png')}}" alt="circle">
                <img class="square-2" src="{{asset('img/icon/hero/hero-square-2.png')}}" alt="circle">
                <img class="dot" src="{{asset('img/icon/hero/hero-dot.png')}}" alt="circle">
                <img class="triangle" src="{{asset('img/icon/hero/hero-triangle.png')}}" alt="circle">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-8 col-sm-8">
                        <div class="hero__content">
                            <h2 class="hero__title">
                                <span>Let's Join</span><br>
                                Our Program & Community.
                            </h2>
                            <p>The bee's knees pardon you plastered it's all gone to pot cheeky bugger wind up down.</p>
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
                        <div class="hero__thumb-wrapper scene ml-70">
                            <div class="hero__thumb one d-none d-lg-block">
                                <img class="layer" data-depth="0.2" src="{{asset('img/hero/hero-1.jpg')}}" alt="">
                            </div>
                            <div class="hero__thumb two">
                                <img class="layer" data-depth="0.3" src="{{asset('img/hero/hero-2.jpg')}}" alt="">
                            </div>
                            <div class="hero__thumb three">
                                <img class="layer" data-depth="0.4" src="{{asset('img/hero/hero-3.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- hero area end -->

        <!-- Program area start -->
        <section class="product__area pt-105 pb-110 grey-bg-2">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="section__title-wrapper text-center mb-60">
                            <h2 class="section__title">Our Program</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                        <div class="product__item white-bg mb-30 wow fadeInUp" data-wow-delay=".3s">
                            <div class="product__thumb">
                                <div class="product__thumb-inner fix w-img">
                                    <a href="product-details.html">
                                        <img src="{{asset('img/product/product-1.jpg')}}" alt="">
                                    </a>
                                </div>
                                <div class="product__thumb-btn transition-3">
                                    <a href="#" class="m-btn m-btn-6 mb-15">
                                        Buy Now
                                    </a>
                                    <a href="https://themeforest.net/item/zibber-business-consulting-wordpress-theme/30120392"
                                        target="_blank" class="m-btn m-btn-7">
                                        Preview Project
                                    </a>
                                </div>
                            </div>
                            <div class="product__content">
                                <div class="product__meta mb-10 d-flex justify-content-between align-items-center">
                                    <div class="product__tag">
                                        <a href="#">Business</a>
                                    </div>
                                    <div class="product__price">
                                        <span>$49</span>
                                    </div>
                                </div>
                                <h3 class="product__title">
                                    <a href="product-details.html">Zibber - Business Consulting...</a>
                                </h3>
                                <p class="product__author">by <a href="#">Theme Pure</a> in <a
                                        href="#">Templates</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                        <div class="product__item white-bg mb-30 wow fadeInUp" data-wow-delay=".5s">
                            <div class="product__thumb">
                                <div class="product__thumb-inner fix w-img">
                                    <a href="product-details.html">
                                        <img src="{{asset('img/product/product-2.jpg')}}" alt="">
                                    </a>
                                </div>
                                <div class="product__thumb-btn transition-3">
                                    <a href="#" class="m-btn m-btn-6 mb-15">
                                        Buy Now
                                    </a>
                                    <a href="https://themeforest.net/item/zibber-business-consulting-wordpress-theme/30120392"
                                        target="_blank" class="m-btn m-btn-7">
                                        Preview Project
                                    </a>
                                </div>
                            </div>
                            <div class="product__content">
                                <div class="product__meta mb-10 d-flex justify-content-between align-items-center">
                                    <div class="product__tag">
                                        <a href="product-details.html">corporate</a>
                                    </div>
                                    <div class="product__price">
                                        <span>$23</span>
                                    </div>
                                </div>
                                <h3 class="product__title">
                                    <a href="product-details.html">Pixen - Printing Services Company..</a>
                                </h3>
                                <p class="product__author">by <a href="#">Theme Pure</a> in <a
                                        href="#">Templates</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                        <div class="product__item white-bg mb-30 wow fadeInUp" data-wow-delay=".7s">
                            <div class="product__thumb">
                                <div class="product__thumb-inner fix w-img">
                                    <a href="product-details.html">
                                        <img src="{{asset('img/product/product-3.jpg')}}" alt="">
                                    </a>
                                </div>
                                <div class="product__thumb-btn transition-3">
                                    <a href="#" class="m-btn m-btn-6 mb-15">
                                        Buy Now
                                    </a>
                                    <a href="https://themeforest.net/item/zibber-business-consulting-wordpress-theme/30120392"
                                        target="_blank" class="m-btn m-btn-7">
                                        Preview Project
                                    </a>
                                </div>
                            </div>
                            <div class="product__content">
                                <div class="product__meta mb-10 d-flex justify-content-between align-items-center">
                                    <div class="product__tag">
                                        <a href="#">listing</a>
                                    </div>
                                    <div class="product__price">
                                        <span>$12</span>
                                    </div>
                                </div>
                                <h3 class="product__title">
                                    <a href="product-details.html">Findup - Directory & Listing PSD...</a>
                                </h3>
                                <p class="product__author">by <a href="#">Theme Pure</a> in <a
                                        href="#">Templates</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="product__more text-center mt-30">
                            <a href="product.html" class="m-btn m-btn-2"> <span></span> More Program</a>
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
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, esse.</p>
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
                                        aria-selected="true">Sales</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="template-tab" data-bs-toggle="tab"
                                        data-bs-target="#template" type="button" role="tab"
                                        aria-controls="template" aria-selected="false">Templates</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="ui-tab" data-bs-toggle="tab"
                                        data-bs-target="#ui" type="button" role="tab" aria-controls="ui"
                                        aria-selected="false">UI Design </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="xd-tab" data-bs-toggle="tab"
                                        data-bs-target="#xd" type="button" role="tab" aria-controls="xd"
                                        aria-selected="false">XD Files</button>
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
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                    aria-expanded="true" aria-controls="collapseOne">
                                                    Which plan should I choose?
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse"
                                                aria-labelledby="headingOne" data-bs-parent="#sale-accordion">
                                                <div class="accordion-body">
                                                    <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup
                                                        of tea cheers it grub blatant, some dodgy chav william buggered
                                                        my good sir owt to do with me the bee's knees bubble and squeak.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                    aria-expanded="false" aria-controls="collapseTwo">
                                                    Do you offer custom services & development?
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse show"
                                                aria-labelledby="headingTwo" data-bs-parent="#sale-accordion">
                                                <div class="accordion-body">
                                                    <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup
                                                        of tea cheers it grub blatant, some dodgy chav william buggered
                                                        my good sir owt to do with me the bee's knees bubble and squeak.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingThree">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                    aria-expanded="false" aria-controls="collapseThree">
                                                    What are your office hours?
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse"
                                                aria-labelledby="headingThree" data-bs-parent="#sale-accordion">
                                                <div class="accordion-body">
                                                    <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup
                                                        of tea cheers it grub blatant, some dodgy chav william buggered
                                                        my good sir owt to do with me the bee's knees bubble and squeak.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingFour">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                    aria-expanded="false" aria-controls="collapseFour">
                                                    Can I get support for the free version?
                                                </button>
                                            </h2>
                                            <div id="collapseFour" class="accordion-collapse collapse"
                                                aria-labelledby="headingFour" data-bs-parent="#sale-accordion">
                                                <div class="accordion-body">
                                                    <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup
                                                        of tea cheers it grub blatant, some dodgy chav william buggered
                                                        my good sir owt to do with me the bee's knees bubble and squeak.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingFive">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                                    aria-expanded="false" aria-controls="collapseFive">
                                                    Do your products support RTL?
                                                </button>
                                            </h2>
                                            <div id="collapseFive" class="accordion-collapse collapse"
                                                aria-labelledby="headingFive" data-bs-parent="#sale-accordion">
                                                <div class="accordion-body">
                                                    <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup
                                                        of tea cheers it grub blatant, some dodgy chav william buggered
                                                        my good sir owt to do with me the bee's knees bubble and squeak.
                                                    </p>
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
                                                    Do you offer custom services & development?
                                                </button>
                                            </h2>
                                            <div id="collapseSix" class="accordion-collapse collapse show"
                                                aria-labelledby="headingSix" data-bs-parent="#template-accordion">
                                                <div class="accordion-body">
                                                    <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup
                                                        of tea cheers it grub blatant, some dodgy chav william buggered
                                                        my good sir owt to do with me the bee's knees bubble and squeak.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingSev">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseSev"
                                                    aria-expanded="false" aria-controls="collapseSev">
                                                    What are your office hours?
                                                </button>
                                            </h2>
                                            <div id="collapseSev" class="accordion-collapse collapse"
                                                aria-labelledby="headingSev" data-bs-parent="#template-accordion">
                                                <div class="accordion-body">
                                                    <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup
                                                        of tea cheers it grub blatant, some dodgy chav william buggered
                                                        my good sir owt to do with me the bee's knees bubble and squeak.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingEig">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseEig"
                                                    aria-expanded="false" aria-controls="collapseEig">
                                                    Can I get support for the free version?
                                                </button>
                                            </h2>
                                            <div id="collapseEig" class="accordion-collapse collapse"
                                                aria-labelledby="headingEig" data-bs-parent="#template-accordion">
                                                <div class="accordion-body">
                                                    <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup
                                                        of tea cheers it grub blatant, some dodgy chav william buggered
                                                        my good sir owt to do with me the bee's knees bubble and squeak.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingNine">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseNine"
                                                    aria-expanded="false" aria-controls="collapseNine">
                                                    Do your products support RTL?
                                                </button>
                                            </h2>
                                            <div id="collapseNine" class="accordion-collapse collapse"
                                                aria-labelledby="headingNine" data-bs-parent="#template-accordion">
                                                <div class="accordion-body">
                                                    <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup
                                                        of tea cheers it grub blatant, some dodgy chav william buggered
                                                        my good sir owt to do with me the bee's knees bubble and squeak.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTen">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseTen"
                                                    aria-expanded="true" aria-controls="collapseTen">
                                                    Which plan should I choose?
                                                </button>
                                            </h2>
                                            <div id="collapseTen" class="accordion-collapse collapse"
                                                aria-labelledby="headingTen" data-bs-parent="#template-accordion">
                                                <div class="accordion-body">
                                                    <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup
                                                        of tea cheers it grub blatant, some dodgy chav william buggered
                                                        my good sir owt to do with me the bee's knees bubble and squeak.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="ui" role="tabpanel" aria-labelledby="ui-tab">
                                    <div class="accordion" id="ui-accordion">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingEle">
                                                <button class="accordion-button" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseEle"
                                                    aria-expanded="false" aria-controls="collapseEle">
                                                    Do you offer custom services & development?
                                                </button>
                                            </h2>
                                            <div id="collapseEle" class="accordion-collapse collapse show"
                                                aria-labelledby="headingEle" data-bs-parent="#ui-accordion">
                                                <div class="accordion-body">
                                                    <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup
                                                        of tea cheers it grub blatant, some dodgy chav william buggered
                                                        my good sir owt to do with me the bee's knees bubble and squeak.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwl">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseTwl"
                                                    aria-expanded="false" aria-controls="collapseTwl">
                                                    What are your office hours?
                                                </button>
                                            </h2>
                                            <div id="collapseTwl" class="accordion-collapse collapse"
                                                aria-labelledby="headingTwl" data-bs-parent="#ui-accordion">
                                                <div class="accordion-body">
                                                    <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup
                                                        of tea cheers it grub blatant, some dodgy chav william buggered
                                                        my good sir owt to do with me the bee's knees bubble and squeak.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingThi">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseThi"
                                                    aria-expanded="false" aria-controls="collapseThi">
                                                    Can I get support for the free version?
                                                </button>
                                            </h2>
                                            <div id="collapseThi" class="accordion-collapse collapse"
                                                aria-labelledby="headingThi" data-bs-parent="#ui-accordion">
                                                <div class="accordion-body">
                                                    <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup
                                                        of tea cheers it grub blatant, some dodgy chav william buggered
                                                        my good sir owt to do with me the bee's knees bubble and squeak.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingFourth">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseFourth"
                                                    aria-expanded="false" aria-controls="collapseFourth">
                                                    Do your products support RTL?
                                                </button>
                                            </h2>
                                            <div id="collapseFourth" class="accordion-collapse collapse"
                                                aria-labelledby="headingFourth" data-bs-parent="#ui-accordion">
                                                <div class="accordion-body">
                                                    <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup
                                                        of tea cheers it grub blatant, some dodgy chav william buggered
                                                        my good sir owt to do with me the bee's knees bubble and squeak.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingFiveth">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseFivth"
                                                    aria-expanded="true" aria-controls="collapseFivth">
                                                    Which plan should I choose?
                                                </button>
                                            </h2>
                                            <div id="collapseFivth" class="accordion-collapse collapse"
                                                aria-labelledby="headingFiveth" data-bs-parent="#ui-accordion">
                                                <div class="accordion-body">
                                                    <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup
                                                        of tea cheers it grub blatant, some dodgy chav william buggered
                                                        my good sir owt to do with me the bee's knees bubble and squeak.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="xd" role="tabpanel" aria-labelledby="xd-tab">
                                    <div class="accordion" id="xd-accordion">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingSixth">
                                                <button class="accordion-button" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseSixth"
                                                    aria-expanded="false" aria-controls="collapseSixth">
                                                    Do you offer custom services & development?
                                                </button>
                                            </h2>
                                            <div id="collapseSixth" class="accordion-collapse collapse show"
                                                aria-labelledby="headingSixth" data-bs-parent="#xd-accordion">
                                                <div class="accordion-body">
                                                    <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup
                                                        of tea cheers it grub blatant, some dodgy chav william buggered
                                                        my good sir owt to do with me the bee's knees bubble and squeak.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingSevth">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseSevth"
                                                    aria-expanded="false" aria-controls="collapseSevth">
                                                    What are your office hours?
                                                </button>
                                            </h2>
                                            <div id="collapseSevth" class="accordion-collapse collapse"
                                                aria-labelledby="headingSevth" data-bs-parent="#xd-accordion">
                                                <div class="accordion-body">
                                                    <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup
                                                        of tea cheers it grub blatant, some dodgy chav william buggered
                                                        my good sir owt to do with me the bee's knees bubble and squeak.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingEigth">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseEigth"
                                                    aria-expanded="false" aria-controls="collapseEigth">
                                                    Can I get support for the free version?
                                                </button>
                                            </h2>
                                            <div id="collapseEigth" class="accordion-collapse collapse"
                                                aria-labelledby="headingEigth" data-bs-parent="#xd-accordion">
                                                <div class="accordion-body">
                                                    <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup
                                                        of tea cheers it grub blatant, some dodgy chav william buggered
                                                        my good sir owt to do with me the bee's knees bubble and squeak.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingNieth">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseNieth"
                                                    aria-expanded="false" aria-controls="collapseNieth">
                                                    Do your products support RTL?
                                                </button>
                                            </h2>
                                            <div id="collapseNieth" class="accordion-collapse collapse"
                                                aria-labelledby="headingNieth" data-bs-parent="#xd-accordion">
                                                <div class="accordion-body">
                                                    <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup
                                                        of tea cheers it grub blatant, some dodgy chav william buggered
                                                        my good sir owt to do with me the bee's knees bubble and squeak.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwth">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseTwth"
                                                    aria-expanded="true" aria-controls="collapseTwth">
                                                    Which plan should I choose?
                                                </button>
                                            </h2>
                                            <div id="collapseTwth" class="accordion-collapse collapse"
                                                aria-labelledby="headingTwth" data-bs-parent="#xd-accordion">
                                                <div class="accordion-body">
                                                    <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup
                                                        of tea cheers it grub blatant, some dodgy chav william buggered
                                                        my good sir owt to do with me the bee's knees bubble and squeak.
                                                    </p>
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
        <section class="testimonial__area pt-105 pb-120 fix">
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
                                <img src="{{asset('img/testimonial/testimonial-shape.png')}}" alt="">
                            </div>
                            <div class="testimonial__slider-2 owl-carousel">
                                <div class="testimonial__item-2">
                                    <div class="testimonial__person-wrapper">
                                        <div class="testimonial__person d-flex">
                                            <div class="testimonial__avater">
                                                <img src="{{asset('img/testimonial/testi-1.jpg')}}" alt="">
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
                                                <img src="{{asset('img/testimonial/testi-2.jpg')}}" alt="">
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
                                                <img src="{{asset('img/testimonial/testi-3.jpg')}}" alt="">
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
                                                <img src="{{asset('img/testimonial/testi-4.jpg')}}" alt="">
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
        <section class="cta__area pb-145">
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
        </section>
        <!-- cta area end -->
    </main>
</x-guest-layout>
