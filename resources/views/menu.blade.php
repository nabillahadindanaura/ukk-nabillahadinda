@extends('index')
@section('content')
    <div class="menu">
        <div class="menu-title">
            <p>Menu</p>
        </div>
        <div class="menu-content">

            <div class="menu-content-item"
                style="background:url({{ asset('img/cake-almonds.jpg') }}) ">
                <p>$3.07</p>
                <p>Cake With Almonds</p>
            </div>
            <div class="menu-content-item" style="background:url({{ asset('img/roti2.jpg') }}) ">
                
                <p>$2.05</p>
                <p>Burger Buns</p>
            </div>
            <div class="menu-content-item"
                style="background:url({{ asset('img/roti-coklat.jpg') }}) ">
                <p>$3.07</p>
                <p>Brownis Cake</p>
            </div>
            <div class="menu-content-item" style="background:url({{ asset('img/roti-bulat.jpg') }}) ">
                <p>$2.05</p>
                <p>Freshly Baked</p>
            </div>
        </div>
        <a href="/" class="menu-back"> <div class="menu-back-wrapper">

            <ion-icon name="arrow-back-circle-outline"></ion-icon>
        </div>
        </a>
    @endsection
