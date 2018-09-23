@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    $cateProducts = Cache::get('cateProducts');
    
?>
<main class="index">
    <section class="about">
        <div class="vk-breadcrumb">
            <div class="container">
                <div class="col-md-12">
                    <ul class="vk-breadcrumb__list">
                        <li><a href="{{url('')}}">Trang chủ / </a></li>
                        <!-- <li><a href="doc.html">Sửa tivi / </a></li> -->
                        <li class="active">{{$product_cate->name}} </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="pt-wrap">
            <div class="container">
                <div class="row pt-wrap-row">
                    @foreach($products as $item)
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="pt-item pt-item-fix">
                            <figure class="pt-img">
                                <a href="{{ url('san-pham/'.$item->alias.'.html') }}" title="{{$item->name}}"><img src="{{ asset('upload/product/'.$item->photo) }}" title="{{$item->name}}" alt="{{$item->name}}"></a>
                            </figure>
                            <figcaption class="pt-content">
                                <h2 class="bold t2 py-3 pt-content-tit"><a href="{{ url('san-pham/'.$item->alias.'.html') }}" title="{{$item->name}}">{{$item->name}}</a></h2>
                                <div class="pt-content-wrap">
                                    <p class="price_products">Giá:<span class="color-red">{{ number_format($item->price) }}</span> vnđ
                                    <span class="price_old">{{ number_format($item->price_old) }} vnđ</span>
                                    </p>
                                </div>
                            </figcaption>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
                <div class="text-center pb-4">
                    {!! $products->links() !!}
                    <!-- <a href="#" class="btn text-uppercase all-btn">Xem thêm</a> -->
                    
                </div>
            </div>
        </div>
        
    </section>
</main>
@endsection
