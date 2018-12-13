@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
?>
<content>
    <div class="container">
        @foreach($cate_pro as $category)
        <div class="row"> <!-- mỗi 1 row là 1 mục  -->
            <div class="col-xs-8 col-md-11 col-large-11 title-content">
                <h1>{{$category->name}}</h1>
            </div>
            <div class="col-xs-4 col-md-1 col-large-1 next-content">
                <p><a href="{{url('san-pham/'.$category->alias)}}">Xem thêm</a></p>
            </div>
            <?php $products = DB::table('products')->where('com','san-pham')
                ->where('cate_id',$category->id)
                ->take(8)
                ->get(); 
            ?>
            @foreach($products as $item)
            <div class="col-xs-6 col-md-3 col-large-3 content" >
                <div class="images">
                    <a href="{{url('san-pham/'.@$item->alias.'.html')}}"><img src="{{asset('upload/product/'.@$item->photo)}}" alt="{{$item->name}}"></a>
                </div>
                <div class="title">
                    <h4><a href="{{url('san-pham/'.@$item->alias.'.html')}}" title="">{{@$item->name}}</a></h4>
                    <p>Giá: <strong>{{number_format(@$item->price)}}</strong> vnđ</p>
                </div>
            </div>
            @endforeach
        </div>
        @endforeach
    </div>
</content>

@endsection
