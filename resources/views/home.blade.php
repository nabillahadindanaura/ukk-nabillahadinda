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
                    <div class="swiper-slide-img" style="background: url({{ asset('img/banner2.jpg') }})"></div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-img" style="background: url({{ asset('img/banner1.jpg') }})"></div>
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
            <a href="/menu" class="kategori-content-item">
                <img src="{{ asset('img/cookies.png') }}" alt="">
                <p>Cookies</p>
            </a>
            <a href="/menu" class="kategori-content-item">
                <img src="{{ asset('img/bread (1).png') }}" alt="">
                <p>Bread</p>
            </a>
        </div>
    </div>

    <div class="menu-content">
        @foreach ($menu as $m)
            <div class="menu-content-item" style="background:url({{ $m->cover }}) ">
                <p>${{ $m->harga }}</p>
                <p>{{ $m->nama }}</p>
            </div>
        @endforeach
    </div>
    <div class="menu-popup">
        <div class="menu-value">
            <div class="menu-value-plus">
                <ion-icon name="add-outline"></ion-icon>
            </div>
            <p>1</p>
            <div class="menu-value-minus">
                <ion-icon name="remove-outline"></ion-icon>
            </div>
        </div>
        <div class="menu-total">
            <p>Add to bag</p>
            <p>$2.95</p>
        </div>
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
