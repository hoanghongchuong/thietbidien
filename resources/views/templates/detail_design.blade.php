@extends('index')
@section('content')
@if($data->background !='')
<div class="banner_idea">
	<img src="{{asset('upload/news/'.$data->background)}}">
</div>
@endif
<div class="content_detail_design">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-xs-12 left">
				<h1 class="name_idea">{{$data->name}}</h1>
				<p class="date-create">{{date('d/m/Y', strtotime($data->created_at))}}</p>
				<div class="detail_content_post_idea">
					{!! $data->content !!}
				</div>
				<div class="album-image">
					<!-- @foreach($albums as $item)
					<div class="col-md-3">
						<a class="fancybox-thumb" rel="fancybox-thumb" href="{{asset('upload/albumnews/'.$item->photo)}}" title="">
							<img src="{{asset('upload/albumnews/'.$item->photo)}}" alt="" />
						</a>
					</div>
					@endforeach -->
					@foreach($albums as $item)
					<p class="col-md-3 box-album imglist">
						<a href="{{asset('upload/albumnews/'.$item->photo)}}" data-fancybox="images">
						    <img src="{{asset('upload/albumnews/'.$item->photo)}}" />
						</a>											 
					</p>
					@endforeach
				</div>
			</div>
			
		</div>
	</div>
</div>
@endsection