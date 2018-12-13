@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
   
?>
<content>
     <div class="container">
        <div class="row" style="margin-top:40px;">
            <div class="col-xs-12 col-md-9 col-md-push-3 article-details">
                <div class="article-content">
                    <h1 class="title-module-small">{{$product_detail->name}}</h1>

                    <div class="rte">
                        {!! $product_detail->content !!}
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-3 col-md-pull-9 sidebar">
                <aside class="block list-articles">
                    <ul class="list-unstyled">
                        @foreach($categories_prouducts as $category)
                        <li>
                            <a href="{{url('san-pham/'.$category->alias)}}" class="image"><i class="fa fa-caret-right" aria-hidden="true"></i> {{$category->name}}</a>
                        </li>
                        @endforeach
                    </ul>
                </aside>
                <aside class="block contact-sidebar">
                    <h4 class="page-title">Thông tin liên hệ</h4>
                    <ul class="linklist list-unstyled">
                        <li>
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <a href="tel:{{$setting->phone}}">
                                {{$setting->phone}}
                            </a>
                        </li>
                        <li>
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <a href="mailto:{{$setting->email}}">
                                {{$setting->email}}
                            </a>
                        </li>
                        <li>
                            <i class="fa fa-map-marker" aria-hidden="true"></i> {{$setting->address}}
                        </li>                        
                    </ul>
                </aside>
            </div>

        </div>
    </div>
</content>
@endsection
