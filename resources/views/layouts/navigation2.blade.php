<!-- header area start -->
<header>
    <div class="header__area header__shadow white-bg" id="header-sticky">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-6">
                    <div class="logo">
                        <a href="/">
                            <img src="assets/img/logo/logo.png" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="col-xxl-7 col-xl-7 col-lg-8 d-none d-lg-block">
                    <div class="main-menu d-flex justify-content-end">
                        <nav id="mobile-menu">
                            <ul>
                                <li class="active">
                                    <a href="/">Home</a>
                                </li>

                                <li><a href="product.html">About Us</a></li>

                                <li class="has-dropdown">
                                    <a href="blog.html">Blog</a>

                                    <ul class="submenu">
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Program</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-2 col-md-8 col-6">
                    <div class="header__action d-flex align-items-center justify-content-end">
                        <div class="header__login header__login-2 d-none d-sm-block">
                            <a href="{{ route('login') }}"><i class="far fa-unlock"></i> Log In</a>
                        </div>
                        <div class="header__btn d-none d-xl-block">
                            <a href="#" class="m-btn m-btn-2">get started</a>
                         </div>
                        <div class="sidebar__menu d-lg-none">
                            <div class="sidebar-toggle-btn" id="sidebar-toggle">
                                <span class="line"></span>
                                <span class="line"></span>
                                <span class="line"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header area end -->

<!-- cart mini area start -->
<div class="cartmini__area">
    <div class="cartmini__wrapper">
        <div class="cartmini__title">
            <h4>Shopping cart</h4>
        </div>
        <div class="cartmini__close">
            <button type="button" class="cartmini__close-btn"><i class="fal fa-times"></i></button>
        </div>
        <div class="cartmini__widget">
            <div class="cartmini__inner">
                <ul>
                    <li>
                        <div class="cartmini__thumb">
                            <a href="product-details.html">
                                <img src="assets/img/product/sm/cart-5.jpg" alt="">
                            </a>
                        </div>
                        <div class="cartmini__content">
                            <h5><a href="product-details.html">Findup - Directory & Listing</a></h5>
                            <div class="product-quantity mt-10 mb-10">
                                <span class="cart-minus">-</span>
                                <input class="cart-input" type="text" value="1" />
                                <span class="cart-plus">+</span>
                            </div>
                            <div class="product__sm-price-wrapper">
                                <span>2 <i class="fal fa-times"></i></span>
                                <span class="product__sm-price">$24.00</span>
                            </div>
                        </div>
                        <a href="#" class="cartmini__del"><i class="fal fa-times"></i></a>
                    </li>
                    <li>
                        <div class="cartmini__thumb">
                            <a href="product-details.html">
                                <img src="assets/img/product/sm/cart-2.jpg" alt="">
                            </a>
                        </div>
                        <div class="cartmini__content">
                            <h5><a href="product-details.html">TechBuzz - Businesses Agency</a></h5>
                            <div class="product-quantity mt-10 mb-10">
                                <span class="cart-minus">-</span>
                                <input class="cart-input" type="text" value="1" />
                                <span class="cart-plus">+</span>
                            </div>
                            <div class="product__sm-price-wrapper">
                                <span>1 <i class="fal fa-times"></i></span>
                                <span class="product__sm-price">$17.00</span>
                            </div>
                        </div>
                        <a href="#" class="cartmini__del"><i class="fal fa-times"></i></a>
                    </li>
                    <li>
                        <div class="cartmini__thumb">
                            <a href="product-details.html">
                                <img src="assets/img/product/sm/cart-3.jpg" alt="">
                            </a>
                        </div>
                        <div class="cartmini__content">
                            <h5><a href="product-details.html">Zibber - Agency Template</a></h5>
                            <div class="product-quantity mt-10 mb-10">
                                <span class="cart-minus">-</span>
                                <input class="cart-input" type="text" value="1" />
                                <span class="cart-plus">+</span>
                            </div>
                            <div class="product__sm-price-wrapper">
                                <span>5 <i class="fal fa-times"></i></span>
                                <span class="product__sm-price">$72.00</span>
                            </div>
                        </div>
                        <a href="#" class="cartmini__del"><i class="fal fa-times"></i></a>
                    </li>
                </ul>
            </div>
            <div class="cartmini__checkout">
                <div class="cartmini__checkout-title mb-30">
                    <h4>Subtotal:</h4>
                    <span>$113.00</span>
                </div>
                <div class="cartmini__checkout-btn">
                    <a href="#" class="m-btn m-btn-border mb-10 w-100"> <span></span> view cart</a>
                    <a href="#" class="m-btn m-btn-3 w-100"> <span></span> checkout</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="body-overlay"></div>

<!-- sidebar area start -->
<div class="sidebar__area">
    <div class="sidebar__wrapper">
        <div class="sidebar__close">
            <button class="sidebar__close-btn" id="sidebar__close-btn">
                <span><i class="fal fa-times"></i></span>
                <span>close</span>
            </button>
        </div>
        <div class="sidebar__content">
            <div class="logo mb-40">
                <a href="index.html">
                    <img src="assets/img/logo/logo-white.png" alt="logo">
                </a>
            </div>
            <div class="mobile-menu"></div>
            <div class="sidebar__action mt-330">
                <div class="sidebar__login mt-15">
                    <a href="{{ route('login') }}"><i class="far fa-unlock"></i> Log In</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- sidebar area end -->
<div class="body-overlay"></div>
<!-- sidebar area end -->
