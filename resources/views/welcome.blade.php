@extends('layouts.frontend.master')

@push('css')
    <!-- Required Core Stylesheet -->
    <link rel="stylesheet" href="{{ asset('plugins/glide/dist/css/glide.core.min.css') }}">

    <!-- Optional Theme Stylesheet -->
    <link rel="stylesheet" href="{{ asset('plugins/glide/dist/css/glide.theme.min.css') }}">

    <style>
        .m-0 {
            margin: 0 !important;
        }
        .mt-1 {
            margin-top: 15px !important;
        }
        .pt-2 {
            padding-top: 20px;
        }
        .pt-0 {
            padding-top: 0 !important;
        }
        .pb-0 {
            padding-bottom: 0 !important;
        }
        .product_section {
            position: relative;
        }
        .banner_sliderFull .em-swiperSliderFull .swiper-pagination {
            bottom: 30px !important;
        }
        .floating-bar {
            position: absolute;
            left: 50%;
            top: -13%;
            transform: translateX(-50%);
            width: 90%;
            height: 50px;
            background-color: #B2B2B2;
            z-index: 80;
            border-radius: 10px;
            padding: 3px 8px;
            display: flex;
            justify-content: space-between;
        }
        .product-wrapper {
            overflow: auto;
        }
        .product-wrapper__item {
            display: flex;
            width: 100%;
            overflow-y: hidden;
            overflow-x: auto;
            padding: 12px 16px;
            align-items: flex-start;
            justify-content: space-between;
            gap: 12px;
        }
        .product-wrapper__item::-webkit-scrollbar {
            display: none !important;
        }
        .product-item {
            position: relative;
            display: flex;
            align-items: center;
            flex-flow: column nowrap;
            width: 63px;
            height: 100px;
            border-radius: 8px;
            -webkit-tap-highlight-color: transparent;
            padding: 6px;
        }
        .product-item .icon {
            margin-bottom: 12px;
            width: 55px;
            height: 55px;
            background-color: lightgray;
            border-radius: 8px;
        }
        .product-item .text {
            position: relative;
            max-width: 65px;
            text-align: center;
            font-size: 10px;
            line-height: 14px;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            padding: 0;
            margin: 0;
            color: lightgrey;
        }
        .qris-section {
            display: flex;
            align-items: center;
            gap: 3px;
        }
        .qris-section .qris-text {
            word-break: break-all;
            font-size: 10px;
            max-width: 30px;
            line-height: 1.2;
            color: #fff;
        }
        .qris-section .box-qris {
            width: 40px;
            height: 40px;
            border-radius: 6px;
            background-color: lightgrey;
        }
        .saldo {
            align-self: center;
        }
        .saldo .saldo-title {
            font-size: 12px;
            color: lightgrey;
            line-height: 1;
        }
        .saldo .saldo-amount {
            font-size: 18px;
            color: lightgrey;
            line-height: 1;
        }
        .top-up {
            display: flex;
            flex-flow: column nowrap;
            align-items: center;
            min-width: 45px;
            max-width: 50px;
        }
        .top-up .top-up-box {
            width: 35px;
            height: 35px;
            border-radius: 6px;
            background-color: lightgrey;
            margin-bottom: 6px;
        }
        .top-up .top-up-text {
            font-size: 10px;
            color: lightgrey;
            line-height: 1px;
        }
        .featured-product .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
            padding: 5px 15px;
        }
        .featured-product .header .title .title-header {
            font-size: 18px;
            color: lightgrey;
            font-weight: bold;
            margin-bottom: 5px !important;
        }
        .featured-product .header .title .helper {
            font-size: 12px;
            color: grey;
        }
        .featured-product .header .action .text {
            font-size: 12px;
        }
        @media screen and (min-width: 876px) {
            .product-wrapper__item {
                justify-content: space-around !important;
            }
        }
        .banner_sliderFull .em-swiperSliderFull .--item-inside .cover_img img {
            height: 200px;
        }
        .glide__bullets {
            bottom: 2.5em;
        }
        .herosale {
            margin-bottom: 10px;
        }
    </style>
@endpush

@section('content')

<!-- Start banner_sliderFull-->
{{-- <div class="banner_sliderFull margin-b-20">
    <!-- Swiper -->
    <div class="swiper-container em-swiperSliderFull">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="--item-inside">
                    <div class="cover_img">
                        <img src="assets/img/165.jpg" alt="">
                        <div
                            class="text_img position-absolute bottom-0 padding-b-50 padding-l-20 text-left">
                            <h2 data-swiper-parallax="-300"
                                class="size-30 weight-600 color-white text-uppercase mb-1">
                                Up to 60% off</h2>
                            <p data-swiper-parallax="-200" class="size-14 color-white">
                                Women Clothes, Shoes,Bags, ACC</p>
                            <a data-swiper-parallax="-100" href="#"
                                class="btn rounded-8 bg-red color-white size-14 weight-500 min-w-110 h-41 hover:color-white d-inline-flex align-items-center justify-content-center">
                                Discover
                                <i
                                    class="tio-chevron_right ml-1 size-16 color-white color-opacity-70"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="swiper-slide">
                <div class="--item-inside">
                    <div class="cover_img">
                        <img src="assets/img/man-portrait.jpg" alt="">
                        <div
                            class="text_img position-absolute bottom-0 padding-b-50 padding-l-20 text-left">
                            <h2 data-swiper-parallax="-300"
                                class="size-30 weight-600 color-white text-uppercase mb-1">
                                Up to 60% off</h2>
                            <p data-swiper-parallax="-200" class="size-14 color-white">
                                Women Clothes, Shoes,Bags, ACC</p>
                            <a data-swiper-parallax="-100" href="#"
                                class="btn rounded-8 bg-red color-white size-14 weight-500 min-w-110 h-41 hover:color-white d-inline-flex align-items-center justify-content-center">
                                Discover
                                <i
                                    class="tio-chevron_right ml-1 size-16 color-white color-opacity-70"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="swiper-slide">
                <div class="--item-inside">
                    <div class="cover_img">
                        <img src="assets/img/0987.jpg" alt="">
                        <div
                            class="text_img position-absolute bottom-0 padding-b-50 padding-l-20 text-left">
                            <h2 data-swiper-parallax="-300"
                                class="size-30 weight-600 color-white text-uppercase mb-1">
                                Up to 60% off</h2>
                            <p data-swiper-parallax="-200" class="size-14 color-white">
                                Women Clothes, Shoes,Bags, ACC</p>
                            <a data-swiper-parallax="-100" href="#"
                                class="btn rounded-8 bg-red color-white size-14 weight-500 min-w-110 h-41 hover:color-white d-inline-flex align-items-center justify-content-center">
                                Discover
                                <i
                                    class="tio-chevron_right ml-1 size-16 color-white color-opacity-70"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
</div> --}}

{{-- banner --}}
<div class="glide heropeek">
    <div class="glide__track" data-glide-el="track">
      <ul class="glide__slides">
        <div class="glide__slide" style="background: lightgray; width: 100%; height: 170px;"></div>
        <div class="glide__slide" style="background: darkgray; width: 100%; height: 170px;"></div>
        <div class="glide__slide" style="background: aqua; width: 100%; height: 170px;"></div>
      </ul>
    </div>
    <div class="glide">
        <div class="glide__bullets" data-glide-el="controls[nav]">
            <button class="glide__bullet" data-glide-dir="=0"></button>
            <button class="glide__bullet" data-glide-dir="=1"></button>
            <button class="glide__bullet" data-glide-dir="=2"></button>
        </div>
    </div>
</div>

<!-- End. banner_sliderFull -->
<div class="product_section">
    <!-- Floating bar -->
    <div class="floating-bar">
        <div class="qris-section">
            <p class="qris-text m-0">Scan QRIS</p>
            <div class="box-qris"></div>
        </div>

        <!-- Saldo -->
        <div class="saldo">
            <p class="m-0 saldo-title">Saldo</p>
            <p class="m-0 saldo-amount">Rp. 1.500.000</p>
        </div> <!-- End Saldo -->

        <!-- topup -->
        <div class="top-up">
            <div class="top-up-box"></div>
            <p class="m-0 top-up-text">Top Up</p>
        </div> <!-- End Top up -->

        <!-- topup -->
        <div class="top-up">
            <div class="top-up-box"></div>
            <p class="m-0 top-up-text">Scan</p>
        </div> <!-- End Top up -->
    </div> <!-- End Floating bar -->

    <div class="product-wrapper pt-3">
        <div class="product-wrapper__item pb-0">
            <a href="" class="product-item">
                <div class="icon"></div>
                <p class="text">
                    Pulsa
                </p>
            </a>
            <a href="" class="product-item">
                <div class="icon"></div>
                <p class="text">
                    Paket Data
                </p>
            </a>
            <a href="" class="product-item">
                <div class="icon"></div>
                <p class="text">
                    Listrik PLN
                </p>
            </a>
            <a href="" class="product-item">
                <div class="icon"></div>
                <p class="text">
                    Voucher Game
                </p>
            </a>
            <a href="" class="product-item">
                <div class="icon"></div>
                <p class="text">
                    Tiket
                </p>
            </a>
            <a href="" class="product-item">
                <div class="icon"></div>
                <p class="text">
                    Pulsa
                </p>
            </a>
        </div>
    </div>
    <div class="product-wrapper">
        <div class="product-wrapper__item pt-0">
            <a href="" class="product-item">
                <div class="icon"></div>
                <p class="text">
                    Pulsa
                </p>
            </a>
            <a href="" class="product-item">
                <div class="icon"></div>
                <p class="text">
                    Paket Data
                </p>
            </a>
            <a href="" class="product-item">
                <div class="icon"></div>
                <p class="text">
                    Listrik PLN
                </p>
            </a>
            <a href="" class="product-item">
                <div class="icon"></div>
                <p class="text">
                    Voucher Game
                </p>
            </a>
            <a href="" class="product-item">
                <div class="icon"></div>
                <p class="text">
                    Tiket
                </p>
            </a>
            <a href="" class="product-item">
                <div class="icon"></div>
                <p class="text">
                    Pulsa
                </p>
            </a>
        </div>
    </div>
</div>
<!-- Start Products -->

<div class="glide herosale">
    <div class="glide__track" data-glide-el="track">
      <ul class="glide__slides">
        <div class="glide__slide" style="padding: 0 20px;">
            <div class="sale-item" style="background: lightgray; width: 100%; height: 100px; border-radius: 8px;"></div>
        </div>
        <div class="glide__slide" style="padding: 0 20px;">
            <div class="sale-item" style="background: lightgray; width: 100%; height: 100px; border-radius: 8px;"></div>
        </div>
        <div class="glide__slide" style="padding: 0 20px;">
            <div class="sale-item" style="background: lightgray; width: 100%; height: 100px; border-radius: 8px;"></div>
        </div>
      </ul>
    </div>
</div>

<!-- Featured product -->
<div class="featured-product">
    <div class="header">
        <div class="title">
            <p class="m-0 title-header">Featured</p>
            <p class="m-0 helper">You're never seen it before!</p>
        </div>
        <div class="action">
            <a href="href" class="text">View all</a>
        </div>
    </div>
    <!-- Start em_swiper_products -->
    <div class="em_swiper_products margin-b-20">
        <div class="em_body_products">
            <div class="owl-carousel owl-theme em-owlRight">
                <div class="item em_item_product">
                    <div class="em_head">
                        <a href="#" class="image_product">
                            <img src="assets/img/01.jpg" alt="">
                        </a>
                        <button type="button" class="btn rounded-8 btn_addBookmark item-active">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M11.6648 18.6316L5.73341 21.8811C5.25984 22.1272 4.67641 21.953 4.41533 21.4875V21.4875C4.3398 21.3433 4.29905 21.1834 4.29634 21.0206V6.62247C4.29634 3.87647 6.17277 2.77808 8.873 2.77808H15.2162C17.8341 2.77808 19.7929 3.80325 19.7929 6.4394V21.0206C19.7929 21.2804 19.6897 21.5295 19.506 21.7132C19.3224 21.8969 19.0733 22 18.8135 22C18.6478 21.9974 18.485 21.9567 18.3375 21.8811L12.3696 18.6316C12.1497 18.5128 11.8847 18.5128 11.6648 18.6316Z"
                                    stroke="#200E32" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path opacity="0.4" d="M8.36957 9.32266H15.6648" stroke="#200E32"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span class="icon_active"></span>
                        </button>
                        <div class="item_discount">-15%</div>
                    </div>
                    <div class="title_product">
                        <h3>Cotton Single Jackets</h3>
                        <div class="bottom_info">
                            <p class="item_price">$33 <span class="price_old">$39</span></p>
                            <button type="button" class="btn btn_addCart item-active">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12.75 8.32727C12.75 7.91306 12.4142 7.57727 12 7.57727C11.5858 7.57727 11.25 7.91306 11.25 8.32727V11.2405H8.33333C7.91911 11.2405 7.58333 11.5763 7.58333 11.9905C7.58333 12.4047 7.91911 12.7405 8.33333 12.7405H11.25V15.6536C11.25 16.0678 11.5858 16.4036 12 16.4036C12.4142 16.4036 12.75 16.0678 12.75 15.6536V12.7405H15.6667C16.0809 12.7405 16.4167 12.4047 16.4167 11.9905C16.4167 11.5763 16.0809 11.2405 15.6667 11.2405H12.75V8.32727Z"
                                        fill="#200E32" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M16.6857 2H7.31429C4.04762 2 2 4.31208 2 7.58516V16.4148C2 19.6879 4.0381 22 7.31429 22H16.6857C19.9619 22 22 19.6879 22 16.4148V7.58516C22 4.31208 19.9619 2 16.6857 2Z"
                                        stroke="#200E32" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                <div class="icon_active"></div>
                                <span class="txt_added">Added!</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="item em_item_product">
                    <div class="em_head">
                        <a href="#" class="image_product">
                            <img src="assets/img/02.jpg" alt="">
                        </a>
                        <button type="button" class="btn rounded-8 btn_addBookmark item-active">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M11.6648 18.6316L5.73341 21.8811C5.25984 22.1272 4.67641 21.953 4.41533 21.4875V21.4875C4.3398 21.3433 4.29905 21.1834 4.29634 21.0206V6.62247C4.29634 3.87647 6.17277 2.77808 8.873 2.77808H15.2162C17.8341 2.77808 19.7929 3.80325 19.7929 6.4394V21.0206C19.7929 21.2804 19.6897 21.5295 19.506 21.7132C19.3224 21.8969 19.0733 22 18.8135 22C18.6478 21.9974 18.485 21.9567 18.3375 21.8811L12.3696 18.6316C12.1497 18.5128 11.8847 18.5128 11.6648 18.6316Z"
                                    stroke="#200E32" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path opacity="0.4" d="M8.36957 9.32266H15.6648" stroke="#200E32"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span class="icon_active"></span>
                        </button>
                    </div>
                    <div class="title_product">
                        <h3>Cotton Single Jackets</h3>
                        <div class="bottom_info">
                            <p class="item_price">$47</p>
                            <button type="button" class="btn btn_addCart item-active">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12.75 8.32727C12.75 7.91306 12.4142 7.57727 12 7.57727C11.5858 7.57727 11.25 7.91306 11.25 8.32727V11.2405H8.33333C7.91911 11.2405 7.58333 11.5763 7.58333 11.9905C7.58333 12.4047 7.91911 12.7405 8.33333 12.7405H11.25V15.6536C11.25 16.0678 11.5858 16.4036 12 16.4036C12.4142 16.4036 12.75 16.0678 12.75 15.6536V12.7405H15.6667C16.0809 12.7405 16.4167 12.4047 16.4167 11.9905C16.4167 11.5763 16.0809 11.2405 15.6667 11.2405H12.75V8.32727Z"
                                        fill="#200E32" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M16.6857 2H7.31429C4.04762 2 2 4.31208 2 7.58516V16.4148C2 19.6879 4.0381 22 7.31429 22H16.6857C19.9619 22 22 19.6879 22 16.4148V7.58516C22 4.31208 19.9619 2 16.6857 2Z"
                                        stroke="#200E32" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                <div class="icon_active"></div>
                                <span class="txt_added">Added!</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="item em_item_product">
                    <div class="em_head">
                        <a href="#" class="image_product">
                            <img src="assets/img/03.jpg" alt="">
                        </a>
                        <button type="button" class="btn rounded-8 btn_addBookmark item-active">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M11.6648 18.6316L5.73341 21.8811C5.25984 22.1272 4.67641 21.953 4.41533 21.4875V21.4875C4.3398 21.3433 4.29905 21.1834 4.29634 21.0206V6.62247C4.29634 3.87647 6.17277 2.77808 8.873 2.77808H15.2162C17.8341 2.77808 19.7929 3.80325 19.7929 6.4394V21.0206C19.7929 21.2804 19.6897 21.5295 19.506 21.7132C19.3224 21.8969 19.0733 22 18.8135 22C18.6478 21.9974 18.485 21.9567 18.3375 21.8811L12.3696 18.6316C12.1497 18.5128 11.8847 18.5128 11.6648 18.6316Z"
                                    stroke="#200E32" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path opacity="0.4" d="M8.36957 9.32266H15.6648" stroke="#200E32"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span class="icon_active"></span>
                        </button>
                    </div>
                    <div class="title_product">
                        <h3>Cotton Single Jackets</h3>
                        <div class="bottom_info">
                            <p class="item_price">$32</p>
                            <button type="button" class="btn btn_addCart item-active">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12.75 8.32727C12.75 7.91306 12.4142 7.57727 12 7.57727C11.5858 7.57727 11.25 7.91306 11.25 8.32727V11.2405H8.33333C7.91911 11.2405 7.58333 11.5763 7.58333 11.9905C7.58333 12.4047 7.91911 12.7405 8.33333 12.7405H11.25V15.6536C11.25 16.0678 11.5858 16.4036 12 16.4036C12.4142 16.4036 12.75 16.0678 12.75 15.6536V12.7405H15.6667C16.0809 12.7405 16.4167 12.4047 16.4167 11.9905C16.4167 11.5763 16.0809 11.2405 15.6667 11.2405H12.75V8.32727Z"
                                        fill="#200E32" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M16.6857 2H7.31429C4.04762 2 2 4.31208 2 7.58516V16.4148C2 19.6879 4.0381 22 7.31429 22H16.6857C19.9619 22 22 19.6879 22 16.4148V7.58516C22 4.31208 19.9619 2 16.6857 2Z"
                                        stroke="#200E32" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                <div class="icon_active"></div>
                                <span class="txt_added">Added!</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="item em_item_product">
                    <div class="em_head">
                        <a href="#" class="image_product">
                            <img src="assets/img/05.jpg" alt="">
                        </a>
                        <button type="button" class="btn rounded-8 btn_addBookmark item-active">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M11.6648 18.6316L5.73341 21.8811C5.25984 22.1272 4.67641 21.953 4.41533 21.4875V21.4875C4.3398 21.3433 4.29905 21.1834 4.29634 21.0206V6.62247C4.29634 3.87647 6.17277 2.77808 8.873 2.77808H15.2162C17.8341 2.77808 19.7929 3.80325 19.7929 6.4394V21.0206C19.7929 21.2804 19.6897 21.5295 19.506 21.7132C19.3224 21.8969 19.0733 22 18.8135 22C18.6478 21.9974 18.485 21.9567 18.3375 21.8811L12.3696 18.6316C12.1497 18.5128 11.8847 18.5128 11.6648 18.6316Z"
                                    stroke="#200E32" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path opacity="0.4" d="M8.36957 9.32266H15.6648" stroke="#200E32"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span class="icon_active"></span>
                        </button>
                        <div class="item_discount">-20%</div>
                    </div>
                    <div class="title_product">
                        <h3>Cotton Single Jackets</h3>
                        <div class="bottom_info">
                            <p class="item_price">$33 <span class="price_old">$39</span></p>
                            <button type="button" class="btn btn_addCart item-active">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12.75 8.32727C12.75 7.91306 12.4142 7.57727 12 7.57727C11.5858 7.57727 11.25 7.91306 11.25 8.32727V11.2405H8.33333C7.91911 11.2405 7.58333 11.5763 7.58333 11.9905C7.58333 12.4047 7.91911 12.7405 8.33333 12.7405H11.25V15.6536C11.25 16.0678 11.5858 16.4036 12 16.4036C12.4142 16.4036 12.75 16.0678 12.75 15.6536V12.7405H15.6667C16.0809 12.7405 16.4167 12.4047 16.4167 11.9905C16.4167 11.5763 16.0809 11.2405 15.6667 11.2405H12.75V8.32727Z"
                                        fill="#200E32" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M16.6857 2H7.31429C4.04762 2 2 4.31208 2 7.58516V16.4148C2 19.6879 4.0381 22 7.31429 22H16.6857C19.9619 22 22 19.6879 22 16.4148V7.58516C22 4.31208 19.9619 2 16.6857 2Z"
                                        stroke="#200E32" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                <div class="icon_active"></div>
                                <span class="txt_added">Added!</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="item em_item_product">
                    <div class="em_head">
                        <a href="#" class="image_product">
                            <img src="assets/img/06.jpg" alt="">
                        </a>
                        <button type="button" class="btn rounded-8 btn_addBookmark item-active">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M11.6648 18.6316L5.73341 21.8811C5.25984 22.1272 4.67641 21.953 4.41533 21.4875V21.4875C4.3398 21.3433 4.29905 21.1834 4.29634 21.0206V6.62247C4.29634 3.87647 6.17277 2.77808 8.873 2.77808H15.2162C17.8341 2.77808 19.7929 3.80325 19.7929 6.4394V21.0206C19.7929 21.2804 19.6897 21.5295 19.506 21.7132C19.3224 21.8969 19.0733 22 18.8135 22C18.6478 21.9974 18.485 21.9567 18.3375 21.8811L12.3696 18.6316C12.1497 18.5128 11.8847 18.5128 11.6648 18.6316Z"
                                    stroke="#200E32" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path opacity="0.4" d="M8.36957 9.32266H15.6648" stroke="#200E32"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span class="icon_active"></span>
                        </button>
                    </div>
                    <div class="title_product">
                        <h3>Cotton Single Jackets</h3>
                        <div class="bottom_info">
                            <p class="item_price">$32</p>
                            <button type="button" class="btn btn_addCart item-active">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12.75 8.32727C12.75 7.91306 12.4142 7.57727 12 7.57727C11.5858 7.57727 11.25 7.91306 11.25 8.32727V11.2405H8.33333C7.91911 11.2405 7.58333 11.5763 7.58333 11.9905C7.58333 12.4047 7.91911 12.7405 8.33333 12.7405H11.25V15.6536C11.25 16.0678 11.5858 16.4036 12 16.4036C12.4142 16.4036 12.75 16.0678 12.75 15.6536V12.7405H15.6667C16.0809 12.7405 16.4167 12.4047 16.4167 11.9905C16.4167 11.5763 16.0809 11.2405 15.6667 11.2405H12.75V8.32727Z"
                                        fill="#200E32" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M16.6857 2H7.31429C4.04762 2 2 4.31208 2 7.58516V16.4148C2 19.6879 4.0381 22 7.31429 22H16.6857C19.9619 22 22 19.6879 22 16.4148V7.58516C22 4.31208 19.9619 2 16.6857 2Z"
                                        stroke="#200E32" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                <div class="icon_active"></div>
                                <span class="txt_added">Added!</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End. em_swiper_products -->
</div>

@endsection

@push('script')
    <script src="{{ asset('plugins/glide/dist/glide.min.js') }}"></script>
    <script>
        var glideHeroPeek = new Glide('.heropeek', {
            type: 'carousel',
            animationDuration: 500,
            autoplay: 3000,
            focusAt: '1',
            startAt: 1,
            perView: 1,
            gap: 0
        });
        glideHeroPeek.mount();

        var glideHeloSale = new Glide('.herosale', {
            type: 'carousel',
            animationDuration: 500,
            focusAt: '1',
            startAt: 1,
            perView: 1,
            gap: 0,
        }).mount();
    </script>
@endpush
