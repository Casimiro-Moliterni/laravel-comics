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
                                <img src="{{$singlecomic['thumb']}}" alt="">
                            </div>
                            <div class="text-white fs-6">{{$singlecomic['title']}}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
