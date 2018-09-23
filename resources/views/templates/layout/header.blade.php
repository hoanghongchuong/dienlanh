<?php
    $setting = Cache::get('setting');
    $categories = DB::table('product_categories')->where('status',1)->where('parent_id',0)->get();
    $category_news = DB::table('news_categories')->where('status',1)->where('parent_id',0)->orderBy('stt','asc')->get();
?>
<h1 class="sr-only">Vidcom</h1>
<header class="Fixed fixed-top top">
    <div class="top-wrapmenu">
        <div class="container">
            <div class="w-100 d-flex align-items-center justify-content-between top-menu">
                <!-- logo -->
                <div class="d-flex w-100 align-items-center justify-content-between top-menu-btn">
                    <!-- hamburger menu -->
                    <a id="nav-icon" href="#menu" class="Fixed fix d-xl-none">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                    <a href="{{url('')}}" title=""><img src="{{asset('upload/hinhanh/'.$setting->photo)}}" alt="" title="" class="logo"></a>
                <!-- </div>
                
                <div class="d-flex align-items-center"> -->
                    <!-- menu -->
                    <nav id="menu" class="menu-wrap">   
                        <ul class="menu medium text-uppercase">
                            <!-- <li class="active"><a href="index.html" title="">Trang chủ</a></li> -->
                            <li><a href="{{ url('gioi-thieu') }}" title="">Giới thiệu</a></li>
                            @foreach($category_news as $cate_news)
                            <li><a href="{{url('dich-vu/'.$cate_news->alias)}}" title="{{$cate_news->name}}">{{$cate_news->name}}</a>
                                <?php $cateChilds = DB::table('news_categories')->where('status',1)->where('parent_id', $cate_news->id)->get(); ?>
                                @if(count($cateChilds) > 0)
                                <ul class="">
                                    @foreach($cateChilds as $child)
                                    <li><a href="{{url('dich-vu/'.$child->alias)}}" title="">{{$child->name}}</a></li>
                                    @endforeach                                
                                </ul>
                                @endif
                            </li>
                            @endforeach
                            <li><a href="{{url('bao-duong')}}" title="">Bảo dưỡng</a></li>
                            <li>
                                <a href="{{url('san-pham')}}" title="">Thanh lý đồ cũ</a>
                                 <ul class="">
                                    @foreach($categories as $cate)
                                    <li><a href="{{url('san-pham/'.$cate->alias)}}" title="{{$cate->name}}">{{$cate->name}}</a></li>
                                    @endforeach
                                </ul>
                            </li>

                            <li><a href="{{url('lien-he')}}" title="">Liên hệ</a></li>
                        </ul>
                    </nav>
                    
                    <div class="menu-r">
                        <div class="d-flex align-items-center menu-r-top">
                            <!-- search  -->
                            <div class="pl-lg-5 pl-0 search-dropdown">
                                <a href="#" title="" data-toggle="dropdown"><img src="{{ asset('public/images/search.png')}}" alt="" title=""></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <form action="{{ route('search') }}" method="get" class="trans d-flex align-items-center search-frm">
                                        <input class="form-control light s14 search-ip" type="text" required="required" name="txtSearch" placeholder="Tìm sản phẩm">
                                        <button class="btn search-btn"><img src="{{ asset('public/images/search.png')}}" alt="" title=""></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</header>