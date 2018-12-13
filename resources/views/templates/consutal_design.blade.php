@extends('index')
@section('content')
<div class="box-video" style="background: url('{{asset('public/images/banner_video.jpg')}}');">
	<div class="video_content">
		<div class="middle">
			<h3>{{$video->name}}</h3>
			<div class="video-button" data-fancybox="video" href="https://www.youtube.com/embed/{{$video->code}}">
				<img src="{{asset('public/images/videoplayer.png')}}">
			</div>
		</div>
	</div>
</div>
<div class="box-content1">
	<div class="box1-left rolex-home">
		<a href="{{url('thiet-ke')}}" title="">
			<div class="background">
				<img src="{{asset('public/images/kien-truc.jpg')}}">
			</div>
			<div class="column-wrap wrap">
				<div class="wrap-content">
					<h3>Thiết kế</h3>
				</div>
			</div>
		</a>
	</div>
	<div class="box1-right rolex-home">
		<a href="{{url('dich-vu')}}" title="">
			<div class="background">
				<img src="{{asset('public/images/kien-truc.jpg')}}">
			</div>
			<div class="column-wrap wrap">
				<div class="wrap-content">
					<h3>Dịch vụ</h3>
				</div>
			</div>
		</a>
	</div>
</div>
@foreach($posts as $post)
<div class="my-post">
	<div class="background">
		<img src="{{asset('upload/news/'.$post->background)}}">
	</div>
	<div class="wrapx">
		<div class="middle">
			<h3>{{$post->name}}</h3>
			<h4><a href="{{url('thiet-ket/'.$post->alias.'.html')}}" title="">Xem thêm</a></h4>
		</div>
	</div>
</div>
@endforeach
<div class="box-content1">
	<div class="box1-left rolex-home">
		<a href="{{url('gioi-thieu')}}" title="">
			<div class="background">
				<img src="{{asset('public/images/kien-truc.jpg')}}">
			</div>
			<div class="column-wrap wrap">
				<div class="wrap-content">
					<h3>Chúng tôi</h3>
				</div>
			</div>
		</a>
	</div>
	<div class="box1-right rolex-home">
		<a href="{{url('y-tuong')}}" title="">
			<div class="background">
				<img src="{{asset('public/images/kien-truc.jpg')}}">
			</div>
			<div class="column-wrap wrap">
				<div class="wrap-content">
					<h3>Ý tưởng</h3>
				</div>
			</div>
		</a>
	</div>
</div>
@endsection