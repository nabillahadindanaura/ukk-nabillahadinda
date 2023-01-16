@extends('index')
@section('content')
    <div class="header">
        <div class="header-title">
            <p>Good Morning.</p>
            <p>AdindaResto</p>
        </div>
        <div class="header-icon">
            <ion-icon name="storefront-outline"></ion-icon>
        </div>
    </div>

    <div class="home-hero">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                <div class="swiper-slide-img" style="background: url({{asset('img/banner2.jpg')}})"></div>
                </div>
                <div class="swiper-slide">
                <div class="swiper-slide-img" style="background: url({{asset('img/banner1.jpg')}})"></div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <div class="kategori">
        <div class="kategori-title">
            <p>Kategori</p>
        </div>
        <div class="kategori-content">
            <div class="kategori-content-item">
                <img src="{{asset('img/cookies.png')}}" alt="">
                <p>Cookies</p>
            </div>
            <a href="menu/" class="kategori-content-item">
                <img src="{{asset('img/bread (1).png')}}" alt="">
                <p>Bread</p>
            </a>
        </div>
    </div>
    
@endsection

@section('js')
    <script>
        var swiper = new Swiper(".mySwiper", {
            pagination: {
                el: ".swiper-pagination",
                dynamicBullets: true,
            },
        });
    </script>
@endsection
