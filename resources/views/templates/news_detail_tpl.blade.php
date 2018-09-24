@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    $banner = DB::table('banner_content')->where('position', 8)->first();
?>
<main class="index">
    <section class="about">
        <div class="vk-breadcrumb">
            <div class="container">
                <div class="col-md-12">
                    <ul class="vk-breadcrumb__list">
                        <li><a href="{{url('')}}">Trang chủ / </a></li>
                        <!-- <li><a href="doc.html">Sửa tivi / </a></li> -->
                        <li class="">Tin tức / </li>
                        <li class="active">{{$news_detail->name}}</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="">
            <div class="container">
                <div class="">
                    <div class="col-lg-12">
                        <div class="bg-white da-detail-content">
                            <div class="kt-detail-header">
                                <h1 class="s24 light text-uppercase pb-3 tit">{{$news_detail->name}}</h1>
                                <p class="s14 t1 text-uppercase da-detail-time">11/9/2018</p>
                            </div>
                            <div class="kt-detail-body">
                                <div class="text-center da-gal-item">
                                    <a data-fancybox href="images/z1.jpg" title=""><img src="images/kt4.jpg" alt="" title=""></a>
                                </div>

                                <p>Nhật Bản không chỉ được biết đến là một đất nước phát triển về công nghệ mà kiến trúc đặc sắc của Nhật Bản cũng chính là một yếu tố nổi bật. Nhắc đến kiến trúc Nhật, người ta thường nghĩ đến ngay những căn nhà gỗ mộc mạc, đậm chất phong cách truyền thống nhưng vẫn ẩn chứa trong đó nét hiện đại vốn có. Chắc hẳn bất kì ai khi nhìn thấy những căn nhà Nhật Bản đều phải thốt lên những lời thán phục. Mỗi căn nhà sở hữu một phong cách, nét đẹp riêng, qua đó giúp ta phần nào thấy được sự sáng tạo trong thiết kế của các chuyên gia Nhật Bản.</p>

                                <p>Nhật Bản không chỉ được biết đến là một đất nước phát triển về công nghệ mà kiến trúc đặc sắc của Nhật Bản cũng chính là một yếu tố nổi bật. Nhắc đến kiến trúc Nhật, người ta thường nghĩ đến ngay những căn nhà gỗ mộc mạc, đậm chất phong cách truyền thống nhưng vẫn ẩn chứa trong đó nét hiện đại vốn có. Chắc hẳn bất kì ai khi nhìn thấy những căn nhà Nhật Bản đều phải thốt lên những lời thán phục. Mỗi căn nhà sở hữu một phong cách, nét đẹp riêng, qua đó giúp ta phần nào thấy được sự sáng tạo trong thiết kế của các chuyên gia Nhật Bản.</p>

                                <p>Nhật Bản không chỉ được biết đến là một đất nước phát triển về công nghệ mà kiến trúc đặc sắc của Nhật Bản cũng chính là một yếu tố nổi bật. Nhắc đến kiến trúc Nhật, người ta thường nghĩ đến ngay những căn nhà gỗ mộc mạc, đậm chất phong cách truyền thống nhưng vẫn ẩn chứa trong đó nét hiện đại vốn có. Chắc hẳn bất kì ai khi nhìn thấy những căn nhà Nhật Bản đều phải thốt lên những lời thán phục. Mỗi căn nhà sở hữu một phong cách, nét đẹp riêng, qua đó giúp ta phần nào thấy được sự sáng tạo trong thiết kế của các chuyên gia Nhật Bản.</p>
                                <div class="text-center pt-4 pb-5 da-gal-item">
                                    <a data-fancybox href="images/kt5.jpg" title=""><img src="images/kt5.jpg" alt="" title=""></a>
                                </div>

                                <p>Nhật Bản không chỉ được biết đến là một đất nước phát triển về công nghệ mà kiến trúc đặc sắc của Nhật Bản cũng chính là một yếu tố nổi bật. Nhắc đến kiến trúc Nhật, người ta thường nghĩ đến ngay những căn nhà gỗ mộc mạc, đậm chất phong cách truyền thống nhưng vẫn ẩn chứa trong đó nét hiện đại vốn có. Chắc hẳn bất kì ai khi nhìn thấy những căn nhà Nhật Bản đều phải thốt lên những lời thán phục. Mỗi căn nhà sở hữu một phong cách, nét đẹp riêng, qua đó giúp ta phần nào thấy được sự sáng tạo trong thiết kế của các chuyên gia Nhật Bản.</p>

                                <p>Nhật Bản không chỉ được biết đến là một đất nước phát triển về công nghệ mà kiến trúc đặc sắc của Nhật Bản cũng chính là một yếu tố nổi bật. Nhắc đến kiến trúc Nhật, người ta thường nghĩ đến ngay những căn nhà gỗ mộc mạc, đậm chất phong cách truyền thống nhưng vẫn ẩn chứa trong đó nét hiện đại vốn có. Chắc hẳn bất kì ai khi nhìn thấy những căn nhà Nhật Bản đều phải thốt lên những lời thán phục. Mỗi căn nhà sở hữu một phong cách, nét đẹp riêng, qua đó giúp ta phần nào thấy được sự sáng tạo trong thiết kế của các chuyên gia Nhật Bản.</p>
                            </div>

                            <h2 class="da-detail-re"><span>Xem thêm</span></h2>

                            <ul class="list-unstyled da-detail-re-list">
                                <li><a href="da-detail.html" title="">bài viết khác 1</a></li>
                                <li><a href="da-detail.html" title="">bài viết khác 2</a></li>
                                <li><a href="da-detail.html" title="">bài viết khác 2</a></li>
                                <li><a href="da-detail.html" title="">bài viết khác 2</a></li>
                            </ul>

                            <div class="da-detail-cm">
                                <div class="da-detail-like">
                                    <img src="images/like.png" title="" alt="">
                                </div>
                                
                                <img src="images/cm.jpg" title="" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
</main>

<main class="index">
    <section class="about">
        <div class="vk-breadcrumb">
            <div class="container">
                <div class="col-md-12">
                    <ul class="vk-breadcrumb__list">
                        <li><a href="{{url('')}}">Trang chủ / </a></li>                       
                        <li class="">Tin tức /</li>
                        <li class="active">{{ $news_detail->name }} </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="mt-150px">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="bg-white da-detail-content">
                            <div class="kt-detail-header">
                                <h1 class="s24 light text-uppercase pb-3 tit">{{ $news_detail->name }}</h1>
                                <p class="s14 t1 text-uppercase da-detail-time">{{date('d/m/Y', strtotime($news_detail->created_at))}}</p>
                            </div>
                            <div class="kt-detail-body">                                
                                <div class="">{!! $news_detail->content !!}</div>
                            </div>

                            <h2 class="da-detail-re"><span>Xem thêm</span></h2>

                            <ul class="list-unstyled da-detail-re-list">
                                @foreach($baiviet_khac as $b)
                                <li><a href="{{url('tin-tuc/'.$b->alias.'.html')}}" title="">{{$b->name}}</a></li>
                                @endforeach
                            </ul>

                            <div class="da-detail-cm">
                                <div class="da-detail-like">
                                    <div class="fb-like" data-href="{{URL::Current()}}" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                                </div>                                
                                <div class="fb-comments" data-href="{{URL::Current()}}" data-numposts="2" data-width="100%"></div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
</main>


@endsection

