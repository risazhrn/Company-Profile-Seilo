<x-guest-layout>
    <x-slot name="title">
        Blog
    </x-slot>

    <main>

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
                            <h2 class="page__title">Latest From The Blog</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Blog</li>
                                </ol>
                            </nav>
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
                            @forelse ($blogs as $blog)
                                <article class="postbox__item format-image fix mb-50 wow fadeInUp" data-wow-delay=".2s">
                                    <div class="postbox__thumb">
                                        <a href="blog-details.html" class="w-img">
                                            <img src="{{ asset($blog->media->path) }}" alt="">
                                        </a>
                                    </div>
                                    <div class="postbox__content">
                                        <div class="postbox__meta d-flex mb-10">
                                            <div class="postbox__tag mr-20">
                                                <a href="#">marketing</a>
                                            </div>
                                            <div class="postbox__date">
                                                <span><i class="fal fa-clock"></i>
                                                    {{ $blog->created_at->diffForHumans() }}</span>
                                            </div>
                                        </div>
                                        <h3 class="postbox__title mb-15"><a
                                                href="{{ route('blog.detail', $blog->slug) }}">{{ $blog->judul }}</a>
                                        </h3>
                                        <div class="postbox__text mb-20">
                                            <p>{!! $blog->isi !!}</p>
                                        </div>
                                        <div class="postbox__author d-flex align-items-center">
                                            <div class="postbox__author-thumb mr-15">
                                                <img src="{{ asset('img/blog/author/blog-author-1.jpg') }}"
                                                    alt="">
                                            </div>
                                            <h5>Post by <a href="#">{{ $blog->penulis->name }}</a> </h5>
                                        </div>
                                    </div>
                                </article>
                            @empty
                            @endforelse

                            {{ $blogs->onEachSide(0)->links('vendor.pagination.bootstrap-5-new') }}

                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4">
                        <div class="blog__sidebar-wrapper  ml-30">
                            <div class="blog__sidebar mb-30">
                                <div class="sidebar__widget mb-30">
                                    <div class="sidebar__widget-content">
                                        <div class="sidebar__search-wrapper">
                                            <form action="{{ route('blog') }}">
                                                <input type="text" placeholder="Search ..." name='s'
                                                    value="{{ request()->s }}">
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
                                            @forelse ($recentNews as $rn)
                                                <div class="rc__post d-flex align-items-center">
                                                    <div class="rc__thumb mr-15">
                                                        <a href="#"><img src="{{ asset($rn->media->path) }}"
                                                                alt="" width="50"></a>
                                                    </div>
                                                    <div class="rc__content">
                                                        <div class="rc__meta">
                                                            <span>{{ $rn->created_at->diffForHumans() }}</span>
                                                        </div>
                                                        <h6 class="rc__title"><a
                                                                href="blog-details.html">{{ $rn->judul }}</a></h6>
                                                    </div>
                                                </div>
                                            @empty
                                            @endforelse
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="sidebar__widget mb-30">
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
                                </div> --}}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- postbox area end -->

    </main>

</x-guest-layout>
