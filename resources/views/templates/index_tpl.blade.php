@extends('index')
@section('content')

<?php
$setting = Cache::get('setting');
$sliders = DB::table('slider')->select()->where('status',1)->where('com','gioi-thieu')->get();
?>
<main class="index">
    <section class="container">
        <div class="slider-area">
            <div id="slider">
                @foreach($sliders as $k=>$slider)
                <a href="#" title=""><img alt="" class="slider-img" src="{{asset('upload/hinhanh/'.$slider->photo)}}" alt="slider-img" title="#caption{{$k}}" /></a>
                @endforeach
            </div>
        </div>
    </section>
    <!-- slider-area-end -->
    @foreach($categories as $category)
    <section class="nt">
        <div class="container">
            <h2 class="s24 text-center text-uppercase tit">{{$category->name}}</h2>
            <?php 
                $ids = [];
                $ids[] = $category->id;
                $cateChidls = DB::table('news_categories')->where('status',1)->where('parent_id', $category->id)->get();
                foreach ($cateChidls as $key => $value) {
                    $ids[] = $value->id;
                }
                $services = DB::table('news')->where('com','dich-vu')->whereIn('cate_id', $ids)->take(6)->orderBy('stt','asc')->get();
            ?>
            <div class="nt-wrap">
                <div class="row">
                    @foreach($services as $service)
                    <div class="col-lg-4 col-md-6">
                        <div class="nt-item">
                            <figure class="text-center nt-img">
                                <a href="{{ url('dich-vu/'.$service->alias.'.html') }}" title=""><img src="{{asset('upload/news/'.$service->photo)}}" title="{{$service->name}}" alt="{{$service->name}}"></a>
                            </figure>
                            <figcaption class="nt-info">
                                <p class="text-center">
                                    <img src="{{ asset('public/images/line.png')}}" title="{{$service->name}}" alt="{{$service->name}}">
                                </p>
                                <h3 class="light s18 text-center stit"><a href="{{ url('dich-vu/'.$service->alias.'.html') }}" title="{{$service->name}}">{{$service->name}} </a></h3>
                            </figcaption>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    @endforeach
    <!-- <section class="text-white why">
        <div class="container">
            <h2 class="s24 text-center text-uppercase pb-4 tit wow bounceInUp" data-wow-delay='.2s'>Tại sao chọn chúng tôi</h2>

            <h3 class="w-lg-50 text-center pb-4 s14 wow bounceInUp" data-wow-delay='.6s'>Chúng ta vẫn biết rằng, làm việc với một đoạn văn bản dễ đọc và rõ nghĩa dễ gây rối trí và cản trở việc tập trung vào yếu tố trình bày văn bản.</h3>

            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="text-center why-item">
                        <div class="text-center wow rotateIn" data-wow-delay='1s' data-wow-duration=".8s"><img src="images/icon1.png" title="" alt=""></div>
                        <h4 class="s16 wow fadeInUp" data-wow-delay='1.2s'>100% sản phẩm nhập khẩu</h4>
                    </div>
                </div>

                <div class="col-lg-3 col-6 ">
                    <div class="text-center why-item">
                        <div class="text-center wow rotateIn" data-wow-delay='1s' data-wow-duration=".8s"><img src="images/icon2.png" title="" alt=""></div>
                        <h4 class="s16 wow fadeInUp" data-wow-delay='1.2s'>Đơn giản - Tinh tế</h4>
                    </div>
                </div>

                <div class="col-lg-3 col-6 ">
                    <div class="text-center why-item">
                        <div class="text-center wow rotateIn" data-wow-delay='1s' data-wow-duration=".8s"><img src="images/icon3.png" title="" alt=""></div>
                        <h4 class="s16 wow fadeInUp" data-wow-delay='1.2s'>Đẳng cấp - Sang trọng</h4>
                    </div>
                </div>

                <div class="col-lg-3 col-6 ">
                    <div class="text-center why-item">
                        <div class="text-center wow rotateIn" data-wow-delay='1s' data-wow-duration=".8s"><img src="images/icon4.png" title="" alt=""></div>
                        <h4 class="s16 wow fadeInUp" data-wow-delay='1.2s'>Thiết kế bởi các Designer hàng đầu thế giới</h4>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <section class="blog">
        <div class="container">
            <h2 class="s24 text-center text-uppercase tit">Tin tức</h2>
            <div class="blog-slider">
                @foreach($news as $item)
                <article class="blog-item">
                    <figure class="text-center blog-img">
                        <a href="{{ url('tin-tuc/'.$item->alias.'.html') }}" title=""><img src="{{asset('upload/news/'.$item->photo)}}" title="{{$item->name}}" alt="{{$item->name}}"></a>
                    </figure>
                    <figcaption class="blog-info">
                        <h3 class="s16 bold"><a href="{{ url('tin-tuc/'.$item->alias.'.html') }}" title="{{$item->name}}">{{$item->name}}</a></h3>
                        <div class="s14 blog-content">
                            <p>{{$item->mota}}</p>
                        </div>
                    </figcaption>
                </article>
                @endforeach
                
            </div>
        </div>
    </section>
</main>
@endsection
