@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
?>

<main class="index">
    <section class="about">
        <div class="vk-breadcrumb">
            <div class="container">
                <div class="col-md-12">
                    <ul class="vk-breadcrumb__list">
                        <li><a href="{{url('')}}">Trang chủ / </a></li>
                        <!-- <li><a href="doc.html">Sửa tivi / </a></li> -->
                        <li class="">Sản phẩm / </li>
                        <li class="active">{{$product_detail->name}}  </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="">
            <div class="container">
                <div class="">
                    <div class="">
                        <div class="bg-white da-detail-content">
                            <div class="col-lg-5 col-md-5">
                                <img src="{{ asset('upload/product/'.$product_detail->photo) }}" alt="">
                            </div>
                            <div class="col-lg-7 col-md-7">
                                <h1>{{ $product_detail->name}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
</main>


@endsection
