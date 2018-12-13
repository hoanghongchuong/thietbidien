@extends('index')
@section('content')
<?php 
    $setting = Cache::get('setting');
    $banner = DB::table('slider')->where('com','home')->get();
?>
<content>
    <div class="container">
        <div class="row content">
            <div class="col-xs-12 col-md-3 col-large-3 content-1">
                <div class="content-img">
                    <img src="{{asset('public/images/icon.png')}}">
                </div>
                <h4>Lắp đặt chuyên nghiệp</h4>
            </div>
            <div class="col-xs-12 col-md-3 col-large-3 content-1">
                <div class="content-img">
                    <img src="images/icon1.png">
                </div>
                <h4>Lắp đặt chuyên nghiệp</h4>
            </div>
            <div class="col-xs-12 col-md-3 col-large-3 content-1">
                <div class="content-img">
                    <img src="images/icon2.png">
                </div>
                <h4>Lắp đặt chuyên nghiệp</h4>
            </div>
            <div class="col-xs-12 col-md-3 col-large-3 content-1">
                <div class="content-img">
                    <img src="images/icon3.png">
                </div>
                <h4>Lắp đặt chuyên nghiệp</h4>
            </div>
        </div>
        <div class="row content-2">
            <div class="col-xs-12 col-md-3 col-md-pull-9 col-large-3 sidebar">
                <aside class="block list-articles">
                    <h3>Danh sách</h3>
                    <ul class="list-unstyled">
                        @foreach($categories_home as $cate)
                        <li>
                            <a href="{{url('san-pham/'.$cate->alias)}}" class="image"><i class="fa fa-caret-right" aria-hidden="true"></i>{{$cate->name}}</a>
                        </li>
                        @endforeach
                    </ul>
                </aside>
            </div>
            <div class="col-xs-12 col-md-9 col-large-9">
                <div class="row">
                    <div class="col-xs-12 col-md-4 col-large-4 images-ct">
                        <div class="content-img1">
		                            <a href="#"><img src="{{asset('public/images/ct.png')"></a>
                        </div>
                        <div class="title">
                            <a href="#"><h4>I'm crazy</h4></a>
                            <p>$150</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4 col-large-4 images-ct">
                        <div class="content-img1">
		                            <a href="#"><img src="{{asset('public/images/ct.png')"></a>
                        </div>
                        <div class="title">
                            <a href="#"><h4>I'm crazy</h4></a>
                            <p>$150</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4 col-large-4 images-ct">
                        <div class="content-img1">
		                            <a href="#"><img src="{{asset('public/images/ct.png')"></a>
                        </div>
                        <div class="title">
                            <a href="#"><h4>I'm crazy</h4></a>
                            <p>$150</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4 col-large-4 images-ct">
                        <div class="content-img1">
                            <a href="#"><img src="images/ct.png"></a>
                        </div>
                        <div class="title">
                            <a href="#"><h4>I'm crazy</h4></a>
                            <p>$150</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4 col-large-4 images-ct">
                        <div class="content-img1">
                            <a href="#"><img src="images/ct.png"></a>
                        </div>
                        <div class="title">
                            <a href="#"><h4>I'm crazy</h4></a>
                            <p>$150</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4 col-large-4 images-ct">
                        <div class="content-img1">
                            <a href="#"><img src="images/ct.png"></a>
                        </div>
                        <div class="title">
                            <a href="#"><h4>I'm crazy</h4></a>
                            <p>$150</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4 col-large-4 images-ct">
                        <div class="content-img1">
                            <a href="#"><img src="images/ct.png"></a>
                        </div>
                        <div class="title">
                            <a href="#"><h4>I'm crazy</h4></a>
                            <p>$150</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4 col-large-4 images-ct">
                        <div class="content-img1">
                            <a href="#"><img src="images/ct.png"></a>
                        </div>
                        <div class="title">
                            <a href="#"><h4>I'm crazy</h4></a>
                            <p>$150</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4 col-large-4 images-ct">
                        <div class="content-img1">
                            <a href="#"><img src="images/ct.png"></a>
                        </div>
                        <div class="title">
                            <a href="#"><h4>I'm crazy</h4></a>
                            <p>$150</p>
                        </div>
                    </div>
                    
                </div>
            </div>

        </div>
        <div class="row content-3">
            <div class="col-xs-2 col-md-2 col-sm-2 col-large-2 one-img-1 images1">
                <img src="images/1.png">
            </div>
            <div class="col-xs-5 col-md-5 col-sm-5 col-large-5 title-p">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>
            </div>
            <div class="col-xs-5 col-md-5 col-sm-5 col-large-5 one-img-2 ">
                <img src="images/one.png">
            </div>
        </div>
        <div class="row content-3">
            <div class="col-xs-5 col-md-5 col-sm-5 col-large-5 one-img-1 ">
                <img src="images/one.png">
            </div>
            <div class="col-xs-5 col-md-5 col-sm-5 col-large-5 title-p">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>
            </div>
           
            <div class="col-xs-2 col-md-2 col-sm-2 col-large-2 one-img-2 images1">
                <img src="images/2.png">
            </div>
        </div>
        <div class="row content-3">
            <div class="col-xs-2 col-md-2 col-sm-2 col-large-2 one-img-1 images1">
                <img src="images/3.png">
            </div>
            <div class="col-xs-5 col-md-5 col-sm-5 col-large-5 title-p">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>
            </div>
            <div class="col-xs-5 col-md-5 col-sm-5 col-large-5 one-img-2">
                <img src="images/one.png">
            </div>
        </div>
        <div class="row content-3">
            <div class="col-xs-5 col-md-5 col-sm-5 col-large-5 one-img-1 ">
                <img src="images/one.png">
            </div>
            <div class="col-xs-5 col-md-5 col-sm-5 col-large-5 title-p">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>
            </div>
           
            <div class="col-xs-2 col-md-2 col-sm-2 col-large-2 one-img-2 images1">
                <img src="images/4.png">
            </div>
        </div>
    </div>
    <div class="main-contact">
        <div class="container">
            <div class="row">
                <div class="contact-form col-xs-12 col-sm-6 col-md-6 col-large-6">
                    <h2>Liên hệ nhận báo giá</h2>
                    <form accept-charset="UTF-8" action="/contact" id="contact" method="post">
                        <input name="FormType" type="hidden" value="contact">
                        <input name="utf8" type="hidden" value="true">



                        <input type="text" name="contact[Name]" placeholder="Họ &amp; Tên" required="">

                        <input type="email" name="contact[email]" placeholder="Email" required="">

                        <input type="text" name="contact[phone]" placeholder="Điện thoại" required="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">

                        <input type="text" name="contact[Body]" placeholder="Viết lời nhắn" required="">

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
    <div class="container-fluid" style="background-color: #525050; border-bottom: 3px solid #fff;">
        <div class="container slider">
            <h2>Đối tác</h2>
            <div class="row ">
                <div class="owl-carousel owl-theme content2-2">
                    <div><img src="images/logo_1.png" style="height: 120px; width: 70%; "></a></div>
                    <div><img src="images/logo_2.png" style="height: 120px; width: 70%; "></a></div>
                    <div><img src="images/logo_3.png" style="height: 120px; width: 70%; "></a></div>
                    <div><img src="images/logo_4.png" style="height: 120px; width: 70%; "></a></div>
                    <div><img src="images/logo_1.png" style="height: 120px; width: 70%; "></a></div>
                    <div><img src="images/logo_2.png" style="height: 120px; width: 70%; "></a></div>
                    <div><img src="images/logo_3.png" style="height: 120px; width: 70%; "></a></div>
                    <div><img src="images/logo_4.png" style="height: 120px; width: 70%; "></a></div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
          $(".content2-2").owlCarousel({
              autoplay: 1000, //Set AutoPlay to 3 seconds
              loop: true,

              dots: false,
              

              responsive: {
                360: {
                    items: 1
                },
                620: {
                    items: 3
                },
                1100: {
                    items: 6
                }
              }

         
          });
         
        });
    </script>
   
</content>
@endsection
