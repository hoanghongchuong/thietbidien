@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
?>
<content>
    <div class="container" style="margin-top: 30px;">
        <div class="row">
            <div class="col-md-12">
                <div class="title-page">
                    <h1 class="page-title">Dự án</h1>
                    <div class="page-description"></div>
                </div>
            </div>
            <div class="col-md-12 wrapper-blog pad0">
                <div class="row">
                    @foreach($tintuc as $item)
                    <div class="article-item col-md-4 col-sm-6">
                        <div class="image">
                            <a href="{{ url('du-an/'.$item->alias.'.html') }}">
                                <img src="{{asset('upload/news/'.$item->photo)}}" alt="{{$item->name}}" class="img-fix">                                        
                            </a>
                        </div>
                        <h3><a href="{{ url('du-an/'.$item->alias.'.html') }}" title="{{$item->name}}">{{$item->name}}</a></h3>
                        <div class="desc"> {{$item->mota}}</div>
                    </div>
                    @endforeach
                    <div class="col-md-12 pagination">
                        {!! $tintuc->links() !!}
                    </div>
                </div>
        </div>
        
    </div>
</content>
@endsection