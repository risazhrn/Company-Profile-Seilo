<x-guest-layout>
    <x-slot name="title">
        {{ $blog->judul }}
    </x-slot>
    <!-- bg shape area start -->
    <div class="bg-shape">
        <img src="{{ asset('img/shape/shape-1.png') }}" alt="">
    </div>
    <!-- bg shape area end -->

    <!-- page title area -->
    <section class="page__title-area  pt-85">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="page__title-content mb-50">
                        {{-- <div class="postbox__meta d-flex">
                            <div class="postbox__tag-2">
                                <a href="#">Digital,</a>
                                <a href="#">Marketing. </a>
                            </div>
                            <div class="postbox__time">
                                <span>4 min read</span>
                            </div>
                        </div> --}}
                        <h2 class="page__title">{{ $blog->judul }}</h2>
                        <div class="postbox__author-2 mt-20">
                            <ul class="d-flex align-items-center">
                                <li>
                                    <div class="postbox__author-thumb-2">
                                        <img src="{{ asset('img/blog/author/blog-author-4.jpg') }}" alt="">
                                    </div>
                                </li>
                                <li>
                                    <h6><a href="#">{{ $blog->penulis->name }}</a></h6>
                                    <span><a href="#">View Profile</a></span>
                                </li>
                                <li>
                                    <h6>{{ $blog->created_at->diffForHumans() }}</h6>
                                    <span>Published</span>
                                </li>
                                {{-- <li class="d-none d-sm-block">
                                    <h6>Join the Conversation </h6>
                                    <span>2 comments</span>
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page title end -->

    <!-- postbox area start -->
    <section class="postbox__area pb-120">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-xl-8 col-lg-8">
                    <div class="postbox__wrapper">
                        <div class="postbox__thumb postbox__thumb-2 fix w-img mb-30">
                            <a href="#"><img src="{{ asset($blog->media->path) }}" alt=""></a>
                        </div>
                        <div class="postbox__details mb-30">
                            {!! $blog->isi !!}
                        </div>

                        {{-- <div class="postbox__quote-2 mb-50">
                            <blockquote>
                                <h4>“Even if we can go very far in the detail of the user experience terms of design, a
                                    bad copy can completely” </h4>
                                <span>Sophie Ianiro</span>
                            </blockquote>
                        </div> --}}
                        {{-- <div class="postbox__thumb postbox__thumb-2 fix w-img mb-30">
                            <img src="{{ asset('img/blog/blog-2.jpg') }}" alt="">
                        </div> --}}
                        {{-- <div class="postbox__details mb-30">
                            <p>Owt to do with me chap the little rotter cras starkers bugger all mate bleeder horse play
                                David he nicked it, James Bond smashing mufty bonnet haggle Oxford knackered fanny
                                around bog a, boot cuppa blower I don't want no agro Eaton lost the plot sloshed ummm
                                I'm telling. Hanky panky Harry burke butty Charles amongst tosser you mug, <span
                                    class="highlight"><a href="about.html">lemon squeezy wellies cheesed</a></span> off
                                quaint pardon you old wind up bevvy, bugger all mate Oxford bonnet fanny around mush
                                smashing. Cracking goal pukka what a load of rubbish a load</p>
                        </div> --}}
                        {{-- <div class="postbox__details mb-45">
                            <h4>Introducing the new Markit</h4>

                            <div class="postbox__list">
                                <ol>
                                    <li>Amazon Handmade</li>
                                    <li>Your own stand-alone website (powered by Shopify, Weebly, Big Cartel etc)</li>
                                    <li>Your Instagram feed</li>
                                    <li>Offline at your local markets</li>
                                    <li>Plus many more channels…</li>
                                </ol>
                            </div>
                        </div> --}}
                        {{-- <div class="postbox__tag postbox__tag-3 d-sm-flex mb-25">
                            <h5>Tagged with:</h5>
                            <a href="#">Business</a>
                            <a href="#">Landing</a>
                            <a href="#">Design</a>
                            <a href="#">UI/UX</a>
                        </div> --}}
                        {{-- <div class="postbox__share m-social mb-80">
                            <h5>The share</h5>
                            <ul>
                                <li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" class="pin"><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a href="#" class="link"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div> --}}
                        {{-- <div class="postbox__author-3 d-sm-flex grey-bg-2 mb-85">
                            <div class="postbox__author-thumb-3 mr-20">
                                <img src="{{ asset('img/blog/author/blog-author-5.jpg') }}" alt="">
                            </div>
                            <div class="postbox__author-content">
                                <h4>{{ $blog->penulis->name }}</h4>
                                <p>James Bond cheers barney the little rotter I don't want no agro gutted mate
                                    smashing cheeky pear shaped, mufty super.</p>
                            </div>
                        </div> --}}
                        {{-- <div class="postbox__recent mb-60">
                            <h4>Recent Posts</h4>

                            <div class="row">

                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                    <div class="blog__single-2 white-bg mb-30">
                                        <div class="blog__thumb-2 w-img mb-20">
                                            <a href="blog-details.html">
                                                <img src="{{ asset('img/blog/blog-5.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="blog__content-2">
                                            <div class="postbox__meta d-flex">
                                                <div class="postbox__tag-2">
                                                    <a href="#">Digital,</a>
                                                    <a href="#">Marketing. </a>
                                                </div>
                                                <div class="postbox__time">
                                                    <span>4 min read</span>
                                                </div>
                                            </div>
                                            <h3 class="blog__title-2"><a href="blog-details.html">How to build outside
                                                    links for your shop SEO</a></h3>
                                            <p>Jeffrey arse over tit give us a bell old posh morish wellies cheeky.</p>
                                            <a href="blog-details.html" class="link-btn"><i
                                                    class="fal fa-arrow-right"></i>read more</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                    <div class="blog__single-2 white-bg mb-30">
                                        <div class="blog__thumb-2 w-img mb-20">
                                            <a href="blog-details.html">
                                                <img src="{{ asset('img/blog/blog-6.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="blog__content-2">
                                            <div class="postbox__meta d-flex">
                                                <div class="postbox__tag-2">
                                                    <a href="#">Personal,</a>
                                                    <a href="#">Stories. </a>
                                                </div>
                                                <div class="postbox__time">
                                                    <span> 6 min read</span>
                                                </div>
                                            </div>
                                            <h3 class="blog__title-2"><a href="blog-details.html">How to get your
                                                    handmade website found on Google</a></h3>
                                            <p>Jeffrey arse over tit give us a bell old posh morish wellies cheeky.</p>
                                            <a href="blog-details.html" class="link-btn"><i
                                                    class="fal fa-arrow-right"></i> read more</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div> --}}
                        {{-- <div class="latest-comments mb-55">
                            <h3>2 Comments</h3>
                            <ul>
                                <li>
                                    <div class="comments-box grey-bg-2">
                                        <div class="comments-info d-flex">
                                            <div class="comments-avatar mr-15">
                                                <img src="{{ asset('img/product/support/sup-1.jpg') }}" alt="">
                                            </div>
                                            <div class="avatar-name">
                                                <h5>Jason Response</h5>
                                                <span class="post-meta"> March 24, 2020 at 12:23 pm</span>
                                            </div>
                                        </div>
                                        <div class="comments-text ml-65">
                                            <p>Up the duff a gosh cup of tea lemon squeezy bleeder victoria sponge
                                                haggle, cheers wellies bugger hotpot vagabond spiffing.!</p>
                                            <div class="comments-replay">
                                                <a href="#"><i class="fal fa-reply"></i>Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="children">
                                    <div class="comments-box grey-bg-2">
                                        <div class="comments-info d-flex">
                                            <div class="comments-avatar mr-15">
                                                <img src="{{ asset('img/product/support/sup-2.jpg') }}" alt="">
                                            </div>
                                            <div class="avatar-name">
                                                <h5>Hilary Ouse</h5>
                                                <span class="post-meta">April 06, 2021 at 06:19 pm </span>
                                            </div>
                                        </div>
                                        <div class="comments-text ml-65">
                                            <p>Nancy boy gutted mate smashing naff hanky panky grub down the pub lost
                                                his bottle, cockup buggered.!</p>
                                            <div class="comments-replay">
                                                <a href="#"><i class="fal fa-reply"></i>Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div> --}}
                        {{-- <div class="comment__wrapper p-relative white-bg">
                            <div class="comment__shape">
                                <img class="circle" src="{{ asset('img/icon/sign/circle.png') }}" alt="">
                                <img class="zigzag" src="{{ asset('img/icon/sign/zigzag.png') }}" alt="">
                                <img class="dot" src="{{ asset('img/icon/sign/dot.png') }}" alt="">
                            </div>
                            <h3>Post a comment</h3>
                            <p>Jolly good bevvy butty it's all gone to pot that quaint so I said cheers.</p>
                            <div class="comment__form mt-35">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                            <div class="comment__input-wrapper mb-25">
                                                <h5>Full Name</h5>
                                                <div class="comment__input">
                                                    <input type="text" placeholder="Full name">
                                                    <i class="fal fa-user"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                            <div class="comment__input-wrapper mb-25">
                                                <h5>Work email</h5>
                                                <div class="comment__input">
                                                    <input type="text" placeholder="e-mail address">
                                                    <i class="fal fa-envelope"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                            <div class="comment__input-wrapper mb-25">
                                                <h5>Company Name</h5>
                                                <div class="comment__input">
                                                    <input type="text" placeholder="Company Name">
                                                    <i class="fal fa-smile"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                            <div class="comment__input-wrapper mb-25">
                                                <h5>Website</h5>
                                                <div class="comment__input">
                                                    <input type="text" placeholder="Website">
                                                    <i class="fal fa-globe"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xxl-12">
                                            <div class="comment__input-wrapper mb-25">
                                                <h5>Message</h5>
                                                <div class="comment__input textarea">
                                                    <textarea placeholder="Tell us a bil about your project"></textarea>
                                                    <i class="fal fa-comment"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xxl-12">
                                            <button type="submit" class="m-btn m-btn-4"> <span></span> submit
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div> --}}
                    </div>
                </div>
                {{-- <div class="col-xxl-4 col-xl-4 col-lg-4">
                    <div class="blog__sidebar-wrapper  ml-30">
                        <div class="blog__sidebar mb-30">
                            <div class="sidebar__widget mb-30">
                                <div class="sidebar__widget-content">
                                    <div class="sidebar__search-wrapper">
                                        <form action="#">
                                            <input type="text" placeholder="Search ...">
                                            <button type="submit"><i class="fal fa-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar__widget mb-30">
                                <div class="sidebar__widget-title">
                                    <h3>Recent News</h3>
                                </div>
                                <div class="sidebar__widget-content">
                                    <div class="rc__post-wrapper">
                                        <div class="rc__post d-flex align-items-center">
                                            <div class="rc__thumb mr-15">
                                                <a href="blog-details.html"><img
                                                        src="{{ asset('img/blog/sm/blog-sm-1.jpg') }}"
                                                        alt=""></a>
                                            </div>
                                            <div class="rc__content">
                                                <div class="rc__meta">
                                                    <span>October 15, 2021</span>
                                                </div>
                                                <h6 class="rc__title"><a href="blog-details.html">Communication
                                                        Between Departments</a></h6>
                                            </div>
                                        </div>
                                        <div class="rc__post d-flex align-items-center">
                                            <div class="rc__thumb mr-15">
                                                <a href="blog-details.html"><img
                                                        src="{{ asset('img/blog/sm/blog-sm-2.jpg') }}"
                                                        alt=""></a>
                                            </div>
                                            <div class="rc__content">
                                                <div class="rc__meta">
                                                    <span>March 26, 2021</span>
                                                </div>
                                                <h6 class="rc__title"><a href="blog-details.html">How to build outside
                                                        links for your shop SEO</a></h6>
                                            </div>
                                        </div>
                                        <div class="rc__post d-flex align-items-center">
                                            <div class="rc__thumb mr-15">
                                                <a href="blog-details.html"><img
                                                        src="{{ asset('img/blog/sm/blog-sm-3.jpg') }}"
                                                        alt=""></a>
                                            </div>
                                            <div class="rc__content">
                                                <div class="rc__meta">
                                                    <span>October 15, 2021</span>
                                                </div>
                                                <h6 class="rc__title"><a href="blog-details.html">20 creative content
                                                        ideas to post on Instagram</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar__widget mb-30">
                                <div class="sidebar__widget-title">
                                    <h3>Categories</h3>
                                </div>
                                <div class="sidebar__widget-content">
                                    <div class="sidebar__catagory">
                                        <ul>
                                            <li><a href="blog.html">Web Design (6)</a></li>
                                            <li><a href="blog.html"> Web Development (14)</a></li>
                                            <li><a href="blog.html">Graphics (12)</a></li>
                                            <li><a href="blog.html">IOS/Android Design (10)</a></li>
                                            <li><a href="blog.html">App & Saas (4)</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar__widget">
                                <div class="sidebar__widget-title">
                                    <h3>Popular Tags</h3>
                                </div>
                                <div class="sidebar__widget-content">
                                    <div class="tags">
                                        <a href="#">Business</a>
                                        <a href="#">Landing</a>
                                        <a href="#">Design</a>
                                        <a href="#">Digital</a>
                                        <a href="#">Technology</a>
                                        <a href="#">UI/UX</a>
                                        <a href="#">Features</a>
                                        <a href="#">Pix Saas Blog</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="sidebar__banner" data-background="{{ asset('img/banner/sidebar-banner.jpg') }}">
                            <h4 class="sidebar__banner-title">Check Out <br>Our free Templates</h4>
                            <a href="product.html" class="m-btn m-btn-white"> <span></span> free template</a>
                        </div> --}}
                    </div>
                </div> 
            </div>
        </div>
    </section>
    <!-- postbox area end -->
</x-guest-layout>
