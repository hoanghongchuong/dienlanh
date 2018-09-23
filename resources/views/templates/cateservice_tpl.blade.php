@extends('index')
@section('content')
<main class="index">
	<section class="about">
		<div class="vk-breadcrumb">
            <div class="container">
                <div class="col-md-12">
                	<ul class="vk-breadcrumb__list">
	                    <li><a href="{{url('')}}">Trang chủ / </a></li>
	                    <!-- <li><a href="doc.html">Sửa tivi / </a></li> -->
	                    <li class="active">{{$cate_service->name}}  </li>
	                </ul>
                </div>
            </div>
        </div>
		<div class="pt-wrap">
			<div class="container">
				<div class="row pt-wrap-row">
					@foreach($data as $item)
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="pt-item">
							<figure class="pt-img">
								<a href="{{ url('dich-vu/'.$item->alias.'.html') }}" title="{{$item->name}}"><img src="{{asset('upload/news/'.$item->photo)}}" title="{{$item->name}}" alt="{{$item->name}}"></a>
							</figure>
							<figcaption class="pt-content">
								<h2 class="bold t2 py-3 pt-content-tit"><a href="{{ url('dich-vu/'.$item->alias.'.html') }}" title="{{$item->name}}">{{$item->name}}</a></h2>

								<div class="pt-content-wrap">
									<p>{!! $item->mota !!}</p>
								</div>
							</figcaption>
						</div>
					</div>
					@endforeach
					
				</div>
				<div class="text-center pb-4">
					{{ $data->links() }}
					
				</div>
			</div>
		</div>
		
	</section>
</main>

@endsection