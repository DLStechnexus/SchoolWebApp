@extends('frontend.layouts.master')
@section('title')
    Photo Gallery
@endsection
@section('content')
    <section class="rts-breadcrumb breadcrumb-height breadcumb-bg"
        style="background-image: url({{ asset('frontend/assets/images/banner/breadcrumb.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Photo Gallery</li>
                        </ul>
                        <h2 class="section-title">Photo Gallery</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="rts-campus-section rts-section-padding v_2">
        <div class="container">
            <div class="row">
                <div class="rts-section rt-center mb--45">
                    <h3 class="rts-section-title"></h3>
                </div>
            </div>
            <div class="row g-5">
                @if (!empty($sliders))
                    @foreach ($sliders as $key => $value)
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-item">
                                <div class="single-item__content">
                                    <div class="single-item__image">
                                        <img src="{{ asset('upload/slider') }}/{{ $value->slider_image }}" alt="item-image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif



            </div>
        </div>
    </div>
@endsection
@section('script')
@endsection
