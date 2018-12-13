@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
?>
<div class="content-box content-box-page">
    <nav aria-label="breadcrumb" class="nav-breadcrumb">
        <div class="container">
            <div class="row">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('')}}">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Giỏ hàng</li>
                </ol>
            </div>
        </div>
    </nav>
    <div class="content_cart">
        <form action="{{route('updateCart')}}" method="post" id="cartformpage">   
             <input type="hidden" name="_token" value="{{csrf_token()}}" > 
            <div class="container">
                <div class="table-responsive">
                    <table class="table vk-table--cart">
                        <thead>
                        <tr>
                            <th>Sản phẩm</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Tổng</th>
                            <th>Thao tác</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($product_cart as $key=>$item)
                            <tr>
                                <td>
                                    <div class="vk-shopcart-item">                                    
                                        <div class="vk-shopcart-item__brief">
                                            <h3 class="vk-shopcart-item__title"><a href="#">{{$item->name}}</a></h3>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="vk-shopcart-item__price">{{ number_format($item->price) }} đ</div>
                                </td>
                                <td>
                                    <div class="vk-calculator" data-calculator>
                                        <input type="number" id="{{ $item->rowId }}"  name="numb[{{$key}}]" value="{{$item->qty}}" min="1" class="form-control qty-input">
                                        
                                    </div> <!--./calculator-->
                                </td>
                                <td>
                                    <div class="vk-shopcart-item__price">{{number_format($item->price * $item->qty)}} đ</div>
                                </td>
                                <td>
                                    <a href="{{url('xoa-gio-hang/'.$item->rowId)}}" class="vk-btn vk-btn--outline-red-1">
                                        <i class="fa fa-trash-alt"></i>Xóa
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="vk-shopcart__bot">
                    <div class="_left col-md-6">
                        <a href="{{url('')}}" class="vk-btn vk-btn--yellow-1">Tiếp tục mua hàng</a>
                        <button type="submit" class="btn btn-update-cart">Cập nhật</button>
                    </div>
                    <div class="_right col-md-6">
                        <span>Thành tiền: </span><span class="vk-text--red-1 _price">{{number_format($total)}} đ</span>
                    </div>
                </div>
                <div class="text-right pt-30">
                    <a href="{{ url('thanh-toan') }}" class="vk-btn vk-btn--red-1">Thanh toán</a>
                </div>

            </div>
        </form>
    </div>
</div>

@endsection
