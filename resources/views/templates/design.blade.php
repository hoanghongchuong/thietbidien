@extends('index')
@section('content')
<div class="banner_idea">
	<img src="{{asset('public/images/ytuong.jpg')}}">
	<div class="info-brecrum">
		<h1>Thiết kế</h1>
		<p><a href="{{url('/')}}" title="">Trang chủ</a> / Thiết kế</p>
	</div>
</div>
<div class="content_idea">
	<div class="container">
		<div class="row">
			@foreach($data as $item)
			<div class="col-md-4">
				<div class="box-item-idea box-item-design">
					<div class="box-img-idea zoom rollover design">
						<a href="{{url('thiet-ke/'.$item->alias.'.html')}}" title="{{$item->name}}">
							<img src="{{asset('upload/news/'.$item->photo)}}">
							<i style="background: url('{{asset('public/images/icon.jpg')}}') center no-repeat;background-size: 45px;background-color: rgba(37,128,186,0.71);"></i>
						</a>
					</div>
					<div class="box-info-idea box-info-design">
						<div class="name_idea"><a href="{{url('thiet-ke/'.$item->alias.'.html')}}" title="{{$item->name}}">{{$item->name}}</a></div>
						<div class="mota_design">{!! $item->mota !!}</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>
@endsection