@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    $cateProducts = Cache::get('cateProducts');
?>
<content>
    <div class="container main-project mg-bt-30">
        <div class="row">
            <div class="collection-grid col-md-12">
               <div class="row">
                @foreach($products as $item)
                    <div class="col-sm-4">
                        <div class="item item_product">
                            <a href="{{url('san-pham/'.$item->alias.'.html')}}" title="{{$item->name}}">
                                <img src="{{asset('upload/product/'.$item->photo)}}" alt="{{$item->name}}">
                                <h3>{{$item->name}}</h3>
                            </a>
                        </div>
                    </div>
                @endforeach

               </div>
                <div class="row">
                    <div class="pagination">{!! $products->links() !!}</div>
                </div>
            </div>
        </div>
        <div class="main-contact">
        <div class="container">
            <div class="row">
                <div class="contact-form col-xs-12 col-sm-6 col-md-6 col-large-6">
                    <h2>Liên hệ nhận báo giá</h2>
                    <form accept-charset="UTF-8" action="/contact" id="contact" method="post">
                        {{csrf_field()}}
                        <input type="text" name="name" placeholder="Họ &amp; Tên" required="">

                        <input type="email" name="email" placeholder="Email" required="">

                        <input type="text" name="phone" placeholder="Điện thoại" required="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">

                        <input type="text" name="content" placeholder="Viết lời nhắn" required="">

                        <button> Gửi tin nhắn</button>
                    </form>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-large-6 map">
                    <div class="map-footer">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7449.303271081731!2d105.782171!3d21.006597!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135acaccb75e3e7%3A0xea9c103e46cce492!2zMTggTWnDqsyBdSDEkMOizIBtLCBN4buFIFRyw6wsIFThu6sgTGnDqm0sIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2sus!4v1537498017169"
                            width="100%" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                    </div> 
                </div>
            </div>
        </div>
       
    </div>
    </div>
</content>
@endsection
