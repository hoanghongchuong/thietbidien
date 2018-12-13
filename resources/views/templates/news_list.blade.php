@extends('index')
@section('content')
<div class="breadcrumbx">
    <div class="container">
        <div class="row">
            <ul>
                <li><a href="{{url('')}}">Trang chủ /</a></li>
                <li><a href="javascript:;">{{$tintuc_cate->name}}</a></li>
                <!-- <li><a href=""></a></li> -->
            </ul>
        </div>
    </div>
</div>
<div class="content_idea">
    <div class="container">
        <div class="row">
            @foreach($tintuc as $item)
            <div class="col-md-4">
                <div class="box-item-idea box-item-design">
                    <div class="box-img-idea zoom rollover design">
                        <a href="{{route('getNewsDetail',$item->alias)}}" title="{{$item->name}}">
                            <img src="{{asset('upload/news/'.$item->photo)}}">
                            <i style="background: url('{{asset('public/images/icon.jpg')}}') center no-repeat;background-size: 45px;background-color: rgba(37,128,186,0.71);"></i>
                        </a>
                    </div>
                    <div class="box-info-idea box-info-design">
                        <div class="name_idea"><a href="{{route('getNewsDetail',$item->alias)}}" title="{{$item->name}}">{{$item->name}}</a></div>
                        <div class="mota_design">{!! $item->mota !!}</div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <div class="row" style="text-align: center;">
            <div class="pagination">{!! $tintuc->links() !!}</div>
        </div>
    </div>
</div>
@endsection