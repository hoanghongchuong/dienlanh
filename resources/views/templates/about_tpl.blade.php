@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    $sliders = DB::table('slider')->where('com', 'gioi-thieu')->get();
?>
<main class="index">
    <section class="container">
        <div class="slider-area">
            <div id="slider">
                @foreach($sliders as $k=>$slider)
                <a href="#" title=""><img alt="" class="slider-img" src="{{ asset('upload/hinhanh/'.$slider->photo)}}" alt="slider-img" title="#caption{{$k}}" /></a>
                @endforeach
            </div>
        </div>
    </section>
    <!-- slider-area-end -->
    <section class="about">
        <div class="vk-breadcrumb">
            <div class="container">
                <div class="col-md-12">
                    <ul class="vk-breadcrumb__list">
                        <li><a href="{{url('')}}">Trang chủ / </a></li>
                        <!-- <li><a href="doc.html">Sửa tivi / </a></li> -->
                        <li class="active">Giới thiệu  </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="">
                <div class="col-lg-12">
                    <h1 style="font-size: 22px; font-weight: bold; margin-top: 30px; margin-bottom: 30px; text-align: center;">Về chúng tôi</h1>
                    <article class="light about-content">
                        {!! $about->content !!}
                    </article>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
