@extends('layouts.app')
@section('content')
    <section>
        <div class="hero">
        </div>
    </section>
    <section class="ms_bg_cards">
        <div class="ms_container ">
            <div class="row justify-content-between g-3 pt-3">
                @foreach ($comics as $singlecomic)
                    <div class="col-2 ">
                        <div class="ms_card">
                            <div class="ms_image mb-2">
                                <img src="{{ $singlecomic['thumb'] }}" alt="">
                            </div>
                            <div class="text-white ms_title">{{ $singlecomic['title'] }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center">
                <button class="text-white ms_btn">LOAD MORE</button>
            </div>
        </div>
    </section>
    <section class="ms_icon_section">
        <div class="ms_container">
            <div class="row justify-content-between text-white">
                <div class="col d-flex align-items-center gap-2 mt-5 mb-5">
                    <div class="ms_icon_image">
                        <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
                    </div>
                    <div class="ms_title">
                        DIGITAL COMICS
                    </div>
                </div>
                <div class="col d-flex align-items-center gap-2 mt-5 mb-5">
                    <div class="ms_icon_image">
                        <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">
                    </div>
                    <div class="ms_title">
                        DC MERCHANDISE
                    </div>
                </div>
                <div class="col d-flex align-items-center gap-2 mt-5 mb-5">
                    <div class="ms_icon_image">
                        <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">
                    </div>
                    <div class="ms_title">
                        SUBSCRIPTION
                    </div>
                </div>
                <div class="col d-flex align-items-center gap-2 mt-5 mb-5">
                    <div class="ms_icon_image">
                        <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="">
                    </div>
                    <div class="ms_title">
                       COMIC SHOP LOCATOR
                    </div>
                </div>
                <div class="col d-flex align-items-center gap-2 mt-5 mb-5">
                    <div class="ms_icon_image">
                        <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="">
                    </div>
                    <div class="ms_title">
                        DIGITAL COMICS
                    </div>
                </div>
            </div>
    </section>
@endsection
