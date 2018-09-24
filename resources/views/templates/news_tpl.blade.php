@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    $sliders = DB::table('slider')->where('com', 'gioi-thieu')->get();
?>

<main class="index">
   
    <section class="about">
        <div class="vk-breadcrumb">
            <div class="container">
                <div class="col-md-12">
                    <ul class="vk-breadcrumb__list">
                        <li><a href="{{url('')}}">Trang chủ / </a></li>
                        <!-- <li><a href="doc.html">Sửa tivi / </a></li> -->
                        <li class="active">Tin tức </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="pt-wrap">
            <div class="container">
                <div class="row pt-wrap-row">
                    @foreach($tintuc as $item)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="pt-item">
                            <figure class="pt-img">
                                <a href="{{url('tin-tuc',$item->alias.'.html')}}" title=""><img src="{{asset('upload/news/'.$item->photo)}}" title="{{$item->name}}" alt="{{$item->name}}"></a>
                            </figure>
                            <figcaption class="pt-content">
                                <h2 class="bold t2 py-3 pt-content-tit"><a href="{{url('tin-tuc',$item->alias.'.html')}}" title="{{$item->name}}">{{$item->name}}</a></h2>
                                <div class="pt-content-wrap">
                                    <p>{!! $item->mota !!}</p>
                                </div>
                            </figcaption>
                        </div>
                    </div>
                    @endforeach                    
                </div>
                <div class="text-center pb-4">
                    {!! $tintuc->links() !!}
                </div>
            </div>
        </div>
        
    </section>
</main>

@endsection