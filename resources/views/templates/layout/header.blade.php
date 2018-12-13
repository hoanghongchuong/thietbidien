<?php
    $setting = Cache::get('setting');
    $categories = DB::table('product_categories')->where('status',1)->where('parent_id',0)->orderBY('id','desc')->get();
    $sliders = DB::table('slider')->where('com','gioi-thieu')->get();
?>
<header>
   <div class="container-fluid header-first">
    <div class="row header-top">
        <div class="col-xs-12 col-md-6 col-large-6 logo">
            <img src="{{asset('upload/hinhanh/'.$setting->photo)}}">
        </div>
        <div class="col-xs-12 col-md-6 col-large-6 title-header">
           <img src="{{asset('public/images/phone.png')}}">
        </div>
    </div>
    <div class="row menu">
            <nav class="navbar navbar-expand-md navbar-dark  bg-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto menu-list">
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('')}}">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('gioi-thieu')}}">Giới thiệu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SẢN PHẨM</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown01">
                                @foreach($categories as $cate)
                                <a class="dropdown-item menu-son" href="{{url('san-pham/'.$cate->alias)}}"><i class="fa fa-caret-right" aria-hidden="true"></i> {{$cate->name}}</a>
                                @endforeach                               
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="{{url('du-an')}}">Dự án</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="{{url('tin-tuc')}}">Tin tức</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="{{url('lien-he')}}">Liên hệ</a>
                        </li>
                    </ul>
                    <form class="form-inline mt-2 mt-md-0 form" action="" method="get">
                        {{csrf_field()}}
                        <input class="form-control mr-sm-2" type="text" id="txtSeach" name="txtSeach" value="" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" id="btnSeach" type="submit">Search</button>
                    </form>
                </div>
            </nav>
    </div>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                @foreach($sliders as $k=>$slider)
                <li data-target="#myCarousel" data-slide-to="{{$k}}" class="@if($k==0) active @endif"></li>
                @endforeach
            </ol>
            <div class="carousel-inner">
                @foreach($sliders as $k=>$slider)
                <div class="carousel-item @if($k==0) active @endif sli">
                    <img src="{{asset('upload/hinhanh/'.$slider->photo)}}" alt="First slide">

                </div>
                @endforeach
                
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</header>