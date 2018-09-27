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
        <div class="" style="margin-bottom: 30px; margin-top: 50px;">
            <div class="container">

                <div class="vk-shop-detail__top">
                    <div class="row">
                        <div class="col-lg-6 ">
                            <!-- <div class="vk-shop-detail__thumbnail">
                                <div class="vk-slider slider-for">
                                    <div class="_item">
                                        <a href="#" class="vk-img vk-img--mw100">
                                            <img src="images/shop-detail-1.jpg" alt="">
                                        </a>
                                    </div>                                    
                                </div>
                            </div> -->
                            <div class="vk-shop-detail__thumbnail-slider">
                                <div class="vk-slider slider-nav">
                                    <div class="_item">
                                        <div class="vk-img  vk-img--cover" style="text-align: center;">
                                            <img src="{{asset('upload/product/'.$product_detail->photo)}}" alt="">
                                        </div>
                                    </div>                                    
                                </div>

                            </div>
                        </div> <!--./col-->
                        <div class="col-lg-6 pt-5 pt-lg-0">
                            <h1 class="vk-shop-detail__title">{!! $product_detail->name !!}</h1>
                            <!-- <div class="vk-shop-detail__status">Tình trạng: Còn hàng</div> -->

                            <div class="vk-shop-detail__price-box">
                                <span class="_main">{{number_format($product_detail->price)}} đ</span>
                                <span class="_old">Giá cũ: {{number_format($product_detail->price_old)}}đ</span>
                            </div>

                            <div class="vk-shop-detail__short-des">
                                <p>
                                    {!! $product_detail->mota !!}
                                </p>
                                
                            </div>

                           

                        </div> <!--./col-->
                    </div> <!--./row-->
                </div> <!--./top-->
                <div class="vk-shop-detail__bot ">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="vk-shop-detail__title-sub vk-heading vk-heading--style-1">Thông tin sản phẩm</h2>

                            <div class="vk-shop-detail__des">
                                {!! $product_detail->content !!}
                            </div> <!--./description-->
                        </div>
                    </div> <!--./row-->
                </div> <!--./bot-->
            </div> <!--./container-->
        </div>        
    </section>
</main>
@endsection
