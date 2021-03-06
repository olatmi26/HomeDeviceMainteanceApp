<header class="site__header">
    <div class="header">
        <div class="header__megamenu-area megamenu-area"></div>
        <div class="header__topbar-classic-bg"></div>
        <div class="header__topbar-classic">
            <div class="topbar topbar--classic">
                <div class="topbar__item-text"><a class="topbar__link" href="about-us.html">About Us</a></div>
                <div class="topbar__item-text"><a class="topbar__link" href="contact-us-v1.html">Contacts</a>
                </div>
                {{-- <div class="topbar__item-text"><a class="topbar__link" href="">Store Location</a></div> --}}
                <div class="topbar__item-text"><a class="topbar__link" href="track-order.html">Track Order</a>
                </div>
                <div class="topbar__item-text"><a class="topbar__link" href="blog-classic-right-sidebar.html">Blog</a>
                </div>
                <div class="topbar__item-spring"></div>
                {{-- <div class="topbar__item-button">
                    <a href="" class="topbar__button">
                        <span class="topbar__button-label">Compare:</span>
                        <span class="topbar__button-title">5</span>
                    </a>
                </div> --}}
                <div class="topbar__item-button topbar__menu">
                    <button class="topbar__button topbar__button--has-arrow topbar__menu-button" type="button">
                        <span class="topbar__button-label">Currency:</span>
                        <span class="topbar__button-title">$ (USD)</span>
                        <span class="topbar__button-arrow">
                            <svg width="7px" height="5px">
                                <path
                                    d="M0.280,0.282 C0.645,-0.084 1.238,-0.077 1.596,0.297 L3.504,2.310 L5.413,0.297 C5.770,-0.077 6.363,-0.084 6.728,0.282 C7.080,0.634 7.088,1.203 6.746,1.565 L3.504,5.007 L0.262,1.565 C-0.080,1.203 -0.072,0.634 0.280,0.282 Z" />
                            </svg>
                        </span>
                    </button>
                    <div class="topbar__menu-body">
                        <a class="topbar__menu-item selected" href="#">EG?? Egypy Pounds</a>
                        {{-- <a class="topbar__menu-item" href="#">$ US Dollar</a> --}}
                    </div>
                </div>
                <div class="topbar__menu">
                    <button class="topbar__button topbar__button--has-arrow topbar__menu-button" type="button">
                        <span class="topbar__button-label">Language:</span>
                        <span class="topbar__button-title">EN</span>
                        <span class="topbar__button-arrow"><svg width="7px" height="5px">
                                <path
                                    d="M0.280,0.282 C0.645,-0.084 1.238,-0.077 1.596,0.297 L3.504,2.310 L5.413,0.297 C5.770,-0.077 6.363,-0.084 6.728,0.282 C7.080,0.634 7.088,1.203 6.746,1.565 L3.504,5.007 L0.262,1.565 C-0.080,1.203 -0.072,0.634 0.280,0.282 Z" />
                            </svg>
                        </span>
                    </button>
                    <div class="topbar__menu-body">
                        <a class="topbar__menu-item" href="#">
                            <img src="{{ asset('frontend/images/languages/language-2.jpg') }}"
                                alt=""><span>{{ __('Arabic') }}</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__navbar">
            <div class="header__navbar-departments">
                <div class="departments">
                    <button class="departments__button" type="button">
                        <span class="departments__button-icon"><svg width="16px" height="12px">
                                <path d="M0,7L0,5L16,5L16,7L0,7ZM0,0L16,0L16,2L0,2L0,0ZM12,12L0,12L0,10L12,10L12,12Z" />
                            </svg>
                        </span>
                        <span class="departments__button-title">Shop By Category</span>
                        <span class="departments__button-arrow"><svg width="9px" height="6px">
                                <path
                                    d="M0.2,0.4c0.4-0.4,1-0.5,1.4-0.1l2.9,3l2.9-3c0.4-0.4,1.1-0.4,1.4,0.1c0.3,0.4,0.3,0.9-0.1,1.3L4.5,6L0.3,1.6C-0.1,1.3-0.1,0.7,0.2,0.4z" />
                            </svg>
                        </span>
                    </button>
                    @include('components.shopbydept')
                </div>
            </div>
            <div class="header__navbar-menu">
                <div class="main-menu">
                    <ul class="main-menu__list">
                        <li class="main-menu__item">
                            <a href="{{ route('index') }}" class="main-menu__link">
                                Home
                            </a>

                        </li>
                        <li class="main-menu__item main-menu__item--submenu--menu main-menu__item--has-submenu">
                            <a class="main-menu__link" href="#">
                                Shop
                                <svg height="5px" width="7px">
                                    <path
                                        d="M0.280,0.282 C0.645,-0.084 1.238,-0.077 1.596,0.297 L3.504,2.310 L5.413,0.297 C5.770,-0.077 6.363,-0.084 6.728,0.282 C7.080,0.634 7.088,1.203 6.746,1.565 L3.504,5.007 L0.262,1.565 C-0.080,1.203 -0.072,0.634 0.280,0.282 Z">
                                    </path>
                                </svg>
                            </a>
                            <div class="main-menu__submenu">
                                <ul class="menu">
                                    <li class="menu__item menu__item--has-submenu">
                                        <a class="menu__link" href="category-4-columns-sidebar.html">
                                            Category
                                            <span class="menu__arrow">
                                                <svg height="9px" width="6px">
                                                    <path
                                                        d="M0.3,7.4l3-2.9l-3-2.9c-0.4-0.3-0.4-0.9,0-1.3l0,0c0.4-0.3,0.9-0.4,1.3,0L6,4.5L1.6,8.7c-0.4,0.4-0.9,0.4-1.3,0l0,0C-0.1,8.4-0.1,7.8,0.3,7.4z">
                                                    </path>
                                                </svg>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="menu__item">
                                        <a class="menu__link" href="cart.html">
                                            Cart
                                            <span class="menu__arrow">
                                                <svg height="9px" width="6px">
                                                    <path
                                                        d="M0.3,7.4l3-2.9l-3-2.9c-0.4-0.3-0.4-0.9,0-1.3l0,0c0.4-0.3,0.9-0.4,1.3,0L6,4.5L1.6,8.7c-0.4,0.4-0.9,0.4-1.3,0l0,0C-0.1,8.4-0.1,7.8,0.3,7.4z">
                                                    </path>
                                                </svg>
                                            </span>
                                        </a>
                                    </li>

                                    <li class="menu__item">
                                        <a class="menu__link" href="track-order.html">
                                            Track Order
                                            <span class="menu__arrow">
                                                <svg height="9px" width="6px">
                                                    <path
                                                        d="M0.3,7.4l3-2.9l-3-2.9c-0.4-0.3-0.4-0.9,0-1.3l0,0c0.4-0.3,0.9-0.4,1.3,0L6,4.5L1.6,8.7c-0.4,0.4-0.9,0.4-1.3,0l0,0C-0.1,8.4-0.1,7.8,0.3,7.4z">
                                                    </path>
                                                </svg>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="main-menu__item">
                            <a href="#" class="main-menu__link">
                                Blog
                            </a>
                        </li>
                        <li class="main-menu__item main-menu__item--submenu--menu main-menu__item--has-submenu">
                            <a href="#" class="main-menu__link">
                                Account
                                <svg width="7px" height="5px">
                                    <path
                                        d="M0.280,0.282 C0.645,-0.084 1.238,-0.077 1.596,0.297 L3.504,2.310 L5.413,0.297 C5.770,-0.077 6.363,-0.084 6.728,0.282 C7.080,0.634 7.088,1.203 6.746,1.565 L3.504,5.007 L0.262,1.565 C-0.080,1.203 -0.072,0.634 0.280,0.282 Z" />
                                </svg>
                            </a>
                            <div class="main-menu__submenu">
                                <ul class="menu">
                                    @guest('customer')
                                    <li class="menu__item">
                                        <a href="#" class="menu__link text-center">
                                            {{ __('Login') }}
                                        </a>
                                    </li>
                                    <li class="menu__item">
                                        <a href="#" class="menu__link text-center">
                                            {{ __('Register') }}
                                        </a>
                                    </li>
                                    @endguest
                                    @auth('customer')
                                    <li class="menu__item">
                                        <a href="account-dashboard.html" class="menu__link">
                                            Dashboard
                                        </a>
                                    </li>
                                    <li class="menu__item">
                                        <a href="account-profile.html" class="menu__link">
                                            Edit Profile
                                        </a>
                                    </li>
                                    <li class="menu__item">
                                        <a href="account-orders.html" class="menu__link">
                                            Order History
                                        </a>
                                    </li>
                                    <li class="menu__item">
                                        <a href="account-order-details.html" class="menu__link">
                                            Order Details
                                        </a>
                                    </li>
                                    <li class="menu__item">
                                        <a href="account-password.html" class="menu__link">
                                            Change Password
                                        </a>
                                    </li>
                                    @endauth
                                </ul>
                            </div>
                        </li>
                        <li class="main-menu__item main-menu__item--submenu--menu main-menu__item--has-submenu">
                            <a href="#" class="main-menu__link">
                                Our Services
                                <svg width="7px" height="5px">
                                    <path
                                        d="M0.280,0.282 C0.645,-0.084 1.238,-0.077 1.596,0.297 L3.504,2.310 L5.413,0.297 C5.770,-0.077 6.363,-0.084 6.728,0.282 C7.080,0.634 7.088,1.203 6.746,1.565 L3.504,5.007 L0.262,1.565 C-0.080,1.203 -0.072,0.634 0.280,0.282 Z" />
                                </svg>
                            </a>
                            <div class="main-menu__submenu">
                                <ul class="menu">

                                    <li class="menu__item">
                                        <a href="#" class="menu__link">
                                            {{ __('About Us') }}
                                        </a>
                                    </li>
                                    <li class="menu__item">
                                        <a href="#" class="menu__link">
                                            {{ __('Contact Us') }}
                                        </a>
                                    </li>

                                    <li class="menu__item">
                                        <a href="#" class="menu__link">
                                            {{ __('Terms And Conditions') }}

                                        </a>
                                    </li>
                                    <li class="menu__item">
                                        <a href="#" class="menu__link">
                                            {{ __('FAQ') }}
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="main-menu__item main-menu__item--submenu--menu main-menu__item--has-submenu">
                            <a href="#" class="main-menu__link">
                                Workers
                                <svg width="7px" height="5px">
                                    <path
                                        d="M0.280,0.282 C0.645,-0.084 1.238,-0.077 1.596,0.297 L3.504,2.310 L5.413,0.297 C5.770,-0.077 6.363,-0.084 6.728,0.282 C7.080,0.634 7.088,1.203 6.746,1.565 L3.504,5.007 L0.262,1.565 C-0.080,1.203 -0.072,0.634 0.280,0.282 Z" />
                                </svg>
                            </a>
                            <div class="main-menu__submenu">
                                <ul class="menu">
                                    @guest('worker')
                                    <li class="menu__item">
                                        <a href="{{ route('worker.showLogin') }}" class="menu__link">
                                            {{ __('Login') }}
                                        </a>
                                    </li>
                                    <li class="menu__item">
                                        <a href="{{ route('worker.register') }}" class="menu__link">
                                            {{ __('Register') }}
                                        </a>
                                    </li>
                                    @endguest
                                    @auth('worker')
                                    <li class="menu__item">
                                        <a href="account-dashboard.html" class="menu__link">
                                            Dashboard
                                        </a>
                                    </li>
                                    <li class="menu__item">
                                        <a href="account-profile.html" class="menu__link">
                                            Edit Profile
                                        </a>
                                    </li>
                                    <li class="menu__item">
                                        <a href="account-orders.html" class="menu__link">
                                            Order History
                                        </a>
                                    </li>
                                    <li class="menu__item">
                                        <a href="account-order-details.html" class="menu__link">
                                            Order Details
                                        </a>
                                    </li>
                                    <li class="menu__item">
                                        <a href="account-password.html" class="menu__link">
                                            Change Password
                                        </a>
                                    </li>
                                    @endauth
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="header__navbar-phone phone">
                <a href="" class="phone__body">
                    <div class="phone__title">Call Us:</div>
                    <div class="phone__number">(02)+36128076</div>
                </a>
            </div>
        </div>
        <div class="header__logo">
            <a href="index.html" class="logo">
                <div class="logo__slogan">
                    Auto parts for Cars, trucks and motorcycles
                </div>
                <div class="logo__image">
                    <!-- logo -->
                    <img src="{{ asset('images/sitelogo.png')}}" class="site-logo" />
                    <!-- logo / end -->
                </div>
            </a>
        </div>
        <div class="header__search">
            <div class="search">
                <form action="" class="search__body">
                    <div class="search__shadow"></div>
                    <input class="search__input" type="text" placeholder="Enter Keyword or Part Number">
                    <button class="search__button search__button--start" type="button">
                        <span class="search__button-icon"><svg width="20" height="20">
                                <path
                                    d="M6.6,2c2,0,4.8,0,6.8,0c1,0,2.9,0.8,3.6,2.2C17.7,5.7,17.9,7,18.4,7C20,7,20,8,20,8v1h-1v7.5c0,0.8-0.7,1.5-1.5,1.5h-1 c-0.8,0-1.5-0.7-1.5-1.5V16H5v0.5C5,17.3,4.3,18,3.5,18h-1C1.7,18,1,17.3,1,16.5V16V9H0V8c0,0,0.1-1,1.6-1C2.1,7,2.3,5.7,3,4.2 C3.7,2.8,5.6,2,6.6,2z M13.3,4H6.7c-0.8,0-1.4,0-2,0.7c-0.5,0.6-0.8,1.5-1,2C3.6,7.1,3.5,7.9,3.7,8C4.5,8.4,6.1,9,10,9 c4,0,5.4-0.6,6.3-1c0.2-0.1,0.2-0.8,0-1.2c-0.2-0.4-0.5-1.5-1-2C14.7,4,14.1,4,13.3,4z M4,10c-0.4-0.3-1.5-0.5-2,0 c-0.4,0.4-0.4,1.6,0,2c0.5,0.5,4,0.4,4,0C6,11.2,4.5,10.3,4,10z M14,12c0,0.4,3.5,0.5,4,0c0.4-0.4,0.4-1.6,0-2c-0.5-0.5-1.3-0.3-2,0 C15.5,10.2,14,11.3,14,12z" />
                            </svg>
                        </span>
                        <span class="search__button-title">Select Vehicle</span>
                    </button>
                    <button class="search__button search__button--end" type="submit">
                        <span class="search__button-icon"><svg width="20" height="20">
                                <path
                                    d="M19.2,17.8c0,0-0.2,0.5-0.5,0.8c-0.4,0.4-0.9,0.6-0.9,0.6s-0.9,0.7-2.8-1.6c-1.1-1.4-2.2-2.8-3.1-3.9C10.9,14.5,9.5,15,8,15 c-3.9,0-7-3.1-7-7s3.1-7,7-7s7,3.1,7,7c0,1.5-0.5,2.9-1.3,4c1.1,0.8,2.5,2,4,3.1C20,16.8,19.2,17.8,19.2,17.8z M8,3C5.2,3,3,5.2,3,8 c0,2.8,2.2,5,5,5c2.8,0,5-2.2,5-5C13,5.2,10.8,3,8,3z" />
                            </svg>
                        </span>
                    </button>
                    <div class="search__box"></div>
                    <div class="search__decor">
                        <div class="search__decor-start"></div>
                        <div class="search__decor-end"></div>
                    </div>
                    <div class="search__dropdown search__dropdown--suggestions suggestions">
                        <div class="suggestions__group">
                            <div class="suggestions__group-title">Products</div>
                            <div class="suggestions__group-content">
                                <a class="suggestions__item suggestions__product" href="">
                                    <div class="suggestions__product-image image image--type--product">
                                        <div class="image__body">
                                            <img class="image__tag"
                                                src="{{ asset('frontend/images/products/product-2-40x40.jpg') }}"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="suggestions__product-info">
                                        <div class="suggestions__product-name">Brandix Brake Kit BDX-750Z370-S
                                        </div>
                                        <div class="suggestions__product-rating">
                                            <div class="suggestions__product-rating-stars">
                                                <div class="rating">
                                                    <div class="rating__body">
                                                        <div class="rating__star rating__star--active"></div>
                                                        <div class="rating__star rating__star--active"></div>
                                                        <div class="rating__star rating__star--active"></div>
                                                        <div class="rating__star rating__star--active"></div>
                                                        <div class="rating__star rating__star--active"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="suggestions__product-rating-label">5 on 22 reviews</div>
                                        </div>
                                    </div>
                                    <div class="suggestions__product-price">$224.00</div>
                                </a>
                                <a class="suggestions__item suggestions__product" href="">
                                    <div class="suggestions__product-image image image--type--product">
                                        <div class="image__body">
                                            <img class="image__tag"
                                                src="{{ asset('frontend/images/products/product-3-40x40.jpg') }}"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="suggestions__product-info">
                                        <div class="suggestions__product-name">Left Headlight Of Brandix Z54
                                        </div>
                                        <div class="suggestions__product-rating">
                                            <div class="suggestions__product-rating-stars">
                                                <div class="rating">
                                                    <div class="rating__body">
                                                        <div class="rating__star rating__star--active"></div>
                                                        <div class="rating__star rating__star--active"></div>
                                                        <div class="rating__star rating__star--active"></div>
                                                        <div class="rating__star"></div>
                                                        <div class="rating__star"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="suggestions__product-rating-label">3 on 14 reviews</div>
                                        </div>
                                    </div>
                                    <div class="suggestions__product-price">$349.00</div>
                                </a>
                                <a class="suggestions__item suggestions__product" href="">
                                    <div class="suggestions__product-image image image--type--product">
                                        <div class="image__body">
                                            <img class="image__tag"
                                                src="{{ asset('frontend/images/products/product-4-40x40.jpg') }}"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="suggestions__product-info">
                                        <div class="suggestions__product-name">Glossy Gray 19" Aluminium Wheel
                                            AR-19</div>
                                        <div class="suggestions__product-rating">
                                            <div class="suggestions__product-rating-stars">
                                                <div class="rating">
                                                    <div class="rating__body">
                                                        <div class="rating__star rating__star--active"></div>
                                                        <div class="rating__star rating__star--active"></div>
                                                        <div class="rating__star rating__star--active"></div>
                                                        <div class="rating__star rating__star--active"></div>
                                                        <div class="rating__star"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="suggestions__product-rating-label">4 on 26 reviews</div>
                                        </div>
                                    </div>
                                    <div class="suggestions__product-price">$589.00</div>
                                </a>
                            </div>
                        </div>
                        <div class="suggestions__group">
                            <div class="suggestions__group-title">Categories</div>
                            <div class="suggestions__group-content">
                                <a class="suggestions__item suggestions__category" href="">Headlights &
                                    Lighting</a>
                                <a class="suggestions__item suggestions__category" href="">Fuel System &
                                    Filters</a>
                                <a class="suggestions__item suggestions__category" href="">Body Parts &
                                    Mirrors</a>
                                <a class="suggestions__item suggestions__category" href="">Interior
                                    Accessories</a>
                            </div>
                        </div>
                    </div>
                    <div class="search__dropdown search__dropdown--vehicle-picker vehicle-picker">
                        <div class="search__dropdown-arrow"></div>
                        <div class="vehicle-picker__panel vehicle-picker__panel--list vehicle-picker__panel--active"
                            data-panel="list">
                            <div class="vehicle-picker__panel-body">
                                <div class="vehicle-picker__text">
                                    Select a vehicle to find exact fit parts
                                </div>
                                <div class="vehicles-list">
                                    <div class="vehicles-list__body">
                                        <label class="vehicles-list__item">
                                            <span class="vehicles-list__item-radio input-radio">
                                                <span class="input-radio__body">
                                                    <input class="input-radio__input" name="header-vehicle"
                                                        type="radio">
                                                    <span class="input-radio__circle"></span>
                                                </span>
                                            </span>
                                            <span class="vehicles-list__item-info">
                                                <span class="vehicles-list__item-name">2011 Ford Focus S</span>
                                                <span class="vehicles-list__item-details">Engine 2.0L 1742DA L4
                                                    FI Turbo</span>
                                            </span>
                                            <button type="button" class="vehicles-list__item-remove">
                                                <svg width="16" height="16">
                                                    <path
                                                        d="M2,4V2h3V1h6v1h3v2H2z M13,13c0,1.1-0.9,2-2,2H5c-1.1,0-2-0.9-2-2V5h10V13z" />
                                                </svg>
                                            </button>
                                        </label>
                                        <label class="vehicles-list__item">
                                            <span class="vehicles-list__item-radio input-radio">
                                                <span class="input-radio__body">
                                                    <input class="input-radio__input" name="header-vehicle"
                                                        type="radio">
                                                    <span class="input-radio__circle"></span>
                                                </span>
                                            </span>
                                            <span class="vehicles-list__item-info">
                                                <span class="vehicles-list__item-name">2019 Audi Q7
                                                    Premium</span>
                                                <span class="vehicles-list__item-details">Engine 3.0L 5626CC L6
                                                    QK</span>
                                            </span>
                                            <button type="button" class="vehicles-list__item-remove">
                                                <svg width="16" height="16">
                                                    <path
                                                        d="M2,4V2h3V1h6v1h3v2H2z M13,13c0,1.1-0.9,2-2,2H5c-1.1,0-2-0.9-2-2V5h10V13z" />
                                                </svg>
                                            </button>
                                        </label>
                                    </div>
                                </div>
                                <div class="vehicle-picker__actions">
                                    <button type="button" class="btn btn-primary btn-sm" data-to-panel="form">Add A
                                        Vehicle</button>
                                </div>
                            </div>
                        </div>
                        <div class="vehicle-picker__panel vehicle-picker__panel--form" data-panel="form">
                            <div class="vehicle-picker__panel-body">
                                <div class="vehicle-form vehicle-form--layout--search">
                                    <div class="vehicle-form__item vehicle-form__item--select">
                                        <select class="form-control form-control-select2" aria-label="Year">
                                            <option value="none">Select Year</option>
                                            <option>2010</option>
                                            <option>2011</option>
                                            <option>2012</option>
                                            <option>2013</option>
                                            <option>2014</option>
                                            <option>2015</option>
                                            <option>2016</option>
                                            <option>2017</option>
                                            <option>2018</option>
                                            <option>2019</option>
                                            <option>2020</option>
                                        </select>
                                    </div>
                                    <div class="vehicle-form__item vehicle-form__item--select">
                                        <select class="form-control form-control-select2" aria-label="Brand" disabled>
                                            <option value="none">Select Brand</option>
                                            <option>Audi</option>
                                            <option>BMW</option>
                                            <option>Ferrari</option>
                                            <option>Ford</option>
                                            <option>KIA</option>
                                            <option>Nissan</option>
                                            <option>Tesla</option>
                                            <option>Toyota</option>
                                        </select>
                                    </div>
                                    <div class="vehicle-form__item vehicle-form__item--select">
                                        <select class="form-control form-control-select2" aria-label="Model" disabled>
                                            <option value="none">Select Model</option>
                                            <option>Explorer</option>
                                            <option>Focus S</option>
                                            <option>Fusion SE</option>
                                            <option>Mustang</option>
                                        </select>
                                    </div>
                                    <div class="vehicle-form__item vehicle-form__item--select">
                                        <select class="form-control form-control-select2" aria-label="Engine" disabled>
                                            <option value="none">Select Engine</option>
                                            <option>Gas 1.6L 125 hp AT/L4</option>
                                            <option>Diesel 2.5L 200 hp AT/L5</option>
                                            <option>Diesel 3.0L 250 hp MT/L5</option>
                                        </select>
                                    </div>
                                    <div class="vehicle-form__divider">Or</div>
                                    <div class="vehicle-form__item">
                                        <input type="text" class="form-control" placeholder="Enter VIN number"
                                            aria-label="VIN number">
                                    </div>
                                </div>
                                <div class="vehicle-picker__actions">
                                    <div class="search__car-selector-link">
                                        <a href="" data-to-panel="list">Back to vehicles list</a>
                                    </div>
                                    <button type="button" class="btn btn-primary btn-sm" disabled>Add A
                                        Vehicle</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="header__indicators">
            <div class="indicator">
                <a href="#" class="indicator__button">
                    <span class="indicator__icon">
                        <svg width="32" height="32">
                            <path
                                d="M23,4c3.9,0,7,3.1,7,7c0,6.3-11.4,15.9-14,16.9C13.4,26.9,2,17.3,2,11c0-3.9,3.1-7,7-7c2.1,0,4.1,1,5.4,2.6l1.6,2l1.6-2 C18.9,5,20.9,4,23,4 M23,2c-2.8,0-5.4,1.3-7,3.4C14.4,3.3,11.8,2,9,2c-5,0-9,4-9,9c0,8,14,19,16,19s16-11,16-19C32,6,28,2,23,2L23,2z" />
                        </svg>
                    </span>
                </a>
            </div>
            <div class="indicator indicator--trigger--click">
                <a href="#" class="indicator__button">
                    <span class="indicator__icon">
                        <svg width="32" height="32">
                            <path
                                d="M16,18C9.4,18,4,23.4,4,30H2c0-6.2,4-11.5,9.6-13.3C9.4,15.3,8,12.8,8,10c0-4.4,3.6-8,8-8s8,3.6,8,8c0,2.8-1.5,5.3-3.6,6.7	C26,18.5,30,23.8,30,30h-2C28,23.4,22.6,18,16,18z M22,10c0-3.3-2.7-6-6-6s-6,2.7-6,6s2.7,6,6,6S22,13.3,22,10z" />
                        </svg>
                    </span>
                    <span class="indicator__title">Hello, Log In</span>
                    <span class="indicator__value">My Account</span>
                </a>
                <div class="indicator__content">
                    <div class="account-menu">
                        <span class="indicator__value" style="margin-left: 80px;">Account Info</span>
                        <div class="account-menu__divider"></div>
                        @guest('customer')
                            <a href="" class="account-menu__user">
                                <div class="account-menu__user-info text-center">
                                    <div class="account-menu__user-name">Log In to Your Account</div>
                                </div>
                            </a>
                            <div class="account-menu__divider"></div>
                            <a href="" class="account-menu__user">
                                <div class="account-menu__user-info text-center">
                                    <div class="account-menu__user-name">Create an Account</div>
                                </div>
                            </a>
                        @endguest
                        <div class="account-menu__divider"></div>
                            @auth('customer')
                                <ul class="account-menu__links">
                                    <li><a href="account-dashboard.html">Dashboard</a></li>
                                    <li><a href="">My Order</a></li>
                                </ul>
                                <div class="account-menu__divider"></div>
                                <ul class="account-menu__links">
                                    <li><a href="#">Logout</a></li>
                                </ul>
                            @endauth
                    </div>
                </div>
            </div>
            <div class="indicator indicator--trigger--click">
                <a href="cart.html" class="indicator__button">
                    <span class="indicator__icon">
                        <svg width="32" height="32">
                            <circle cx="10.5" cy="27.5" r="2.5" />
                            <circle cx="23.5" cy="27.5" r="2.5" />
                            <path
                                d="M26.4,21H11.2C10,21,9,20.2,8.8,19.1L5.4,4.8C5.3,4.3,4.9,4,4.4,4H1C0.4,4,0,3.6,0,3s0.4-1,1-1h3.4C5.8,2,7,3,7.3,4.3 l3.4,14.3c0.1,0.2,0.3,0.4,0.5,0.4h15.2c0.2,0,0.4-0.1,0.5-0.4l3.1-10c0.1-0.2,0-0.4-0.1-0.4C29.8,8.1,29.7,8,29.5,8H14	c-0.6,0-1-0.4-1-1s0.4-1,1-1h15.5c0.8,0,1.5,0.4,2,1c0.5,0.6,0.6,1.5,0.4,2.2l-3.1,10C28.5,20.3,27.5,21,26.4,21z" />
                        </svg>
                        {{-- <span class="indicator__counter"></span> --}}
                        {{-- <span class="indicator__counter">3</span> --}}
                    </span>
                        <span class="indicator__title"> {{ __('Shopping Cart') }}</span>

                    <span class="indicator__value" style="font-size: 1rem; color:#e1e8ed;">Empty Cart</span>
                    {{-- <span class="indicator__value">$250.00</span> --}}
                </a>
                <div class="indicator__content">
                    <div class="dropcart">
                        <ul class="dropcart__list">
                            <li class="dropcart__item">
                                <div class="dropcart__item-image image image--type--product">
                                    <a class="image__body" href="product-full.html">
                                        <img class="image__tag"
                                            src="{{ asset('frontend/images/products/product-4-70x70.jpg') }}" alt="">
                                    </a>
                                </div>
                                <div class="dropcart__item-info">
                                    <div class="dropcart__item-name">
                                        <a href="product-full.html">Glossy Gray 19" Aluminium Wheel AR-19</a>
                                    </div>
                                    <ul class="dropcart__item-features">
                                        <li>Color: Yellow</li>
                                        <li>Material: Aluminium</li>
                                    </ul>
                                    <div class="dropcart__item-meta">
                                        <div class="dropcart__item-quantity">2</div>
                                        <div class="dropcart__item-price">$699.00</div>
                                    </div>
                                </div>
                                <button type="button" class="dropcart__item-remove"><svg width="10" height="10">
                                        <path
                                            d="M8.8,8.8L8.8,8.8c-0.4,0.4-1,0.4-1.4,0L5,6.4L2.6,8.8c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L3.6,5L1.2,2.6 c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L5,3.6l2.4-2.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L6.4,5l2.4,2.4	C9.2,7.8,9.2,8.4,8.8,8.8z" />
                                    </svg>
                                </button>
                            </li>
                            <li class="dropcart__divider" role="presentation"></li>
                        </ul>
                        <div class="dropcart__totals">
                            <table>
                                <tr>
                                    <th>Subtotal</th>
                                    <td>$5877.00</td>
                                </tr>
                                <tr>
                                    <th>Shipping</th>
                                    <td>$25.00</td>
                                </tr>
                                <tr>
                                    <th>Tax</th>
                                    <td>$0.00</td>
                                </tr>
                                <tr>
                                    <th>Total</th>
                                    <td>$5902.00</td>
                                </tr>
                            </table>
                        </div>
                        <div class="dropcart__actions">
                            <a href="cart.html" class="btn btn-secondary">View Cart</a>
                            <a href="checkout.html" class="btn btn-primary">Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
