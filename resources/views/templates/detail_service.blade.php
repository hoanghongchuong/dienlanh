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
		                    <li class="active">{{$data->name}}</li>
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
									<h1 class="s24 light text-uppercase pb-3 tit">{{$data->name}}</h1>
									<p class="s14 t1 text-uppercase da-detail-time">{{date('d/m/Y', strtotime($data->created_at))}}</p>
									
								</div>
								<div class="kt-detail-body">
									{!! $data->content !!}
								</div>

								<h2 class="da-detail-re"><span>Xem thêm</span></h2>

								<ul class="list-unstyled da-detail-re-list">
									@foreach($items as $item)
									<li><a href="{{url('dich-vu/'.$item->alias.'.html')}}" title="">{{$item->name}}</a></li>
									@endforeach
								</ul>

								<div class="da-detail-cm">
									<div class="da-detail-like">
										<div class="fb-comments" data-href="{{URL::Current()}}" data-width="100%" data-numposts="5"></div>
									</div>
									
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</section>
	</main>
@endsection