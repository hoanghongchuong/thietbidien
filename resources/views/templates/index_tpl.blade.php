@extends('index')
@section('content')
<?php 
    $setting = Cache::get('setting');
    $banner = DB::table('slider')->where('com','home')->get();
?>
<content>
    <div class="container">
        <div class="row content">
            @foreach($slogans as $slogan)
            <div class="col-xs-12 col-md-3 col-large-3 content-1">
                <div class="content-img">
                    <img src="{{asset('upload/hinhanh/'.$slogan->photo)}}">
                </div>
                <h4>{{$slogan->name}}</h4>
            </div>
            @endforeach
        </div>
        <div class="row content-2">
            <div class="col-xs-12 col-md-3 col-large-3 sidebar">
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
                    @foreach($products as $product)
                    <div class="col-xs-12 col-md-4 col-large-4 images-ct">
                        <div class="content-img1">
		                    <a href="{{url('san-pham/'.$product->alias.'.html')}}"><img src="{{asset('upload/product/'.$product->photo)}}"></a>
                        </div>
                        <div class="title">
                            <a href="{{url('san-pham/'.$product->alias.'.html')}}"><h4>{{$product->name}}</h4></a>
                            <p>{{number_format($product->price)}} vnđ</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
        <div class="row content-3">
            <div class="col-xs-2 col-md-2 col-sm-2 col-large-2 one-img-1 images1">
                <img src="{{asset('public/images/1.png')}}">
            </div>
            <div class="col-xs-5 col-md-5 col-sm-5 col-large-5 title-p">
                <h3><strong>Ưu điểm của chúng tôi</strong>: Sản xuất đèn ngoài trời – chất lượng tốt nhất</h3>
                <ul class="uudiem">
                	<li>Công ty tnhh…. Có các thiết bị sản xuất tiên tiến nhất, chủ động trong công việc sản xuất
					</li>
					<li>Nhận đặt hàng các thiết bị đèn ngoài trời của khách hàng: các sp dung cho công trình
					</li>
					<li>Có kinh nghiệm nhiều năm trong cv sx các thieeys bị chiếu sáng ngoài trời.
					</li>
                </ul>
            </div>
            <div class="col-xs-5 col-md-5 col-sm-5 col-large-5 one-img-2 ">
                <img src="{{asset('public/images/one.png')}}">
            </div>
        </div>
        <div class="row content-3">
            <div class="col-xs-5 col-md-5 col-sm-5 col-large-5 one-img-1 ">
                <img src="{{asset('public/images/one.png')}}">
            </div>
            <div class="col-xs-5 col-md-5 col-sm-5 col-large-5 title-p">
                <h3>Chất lượng của sp, có giấy chững nhận đạt chuẩn quốc gia – bảo đảm tuyệt đối về chất lượng sản phẩm
				</h3>
				<p>Sản phẩm nhiều lần đạt được thương hiệu đạt chuẩn quốc gia</p>
				<p>Sản phẩm ưa chuộng ở châu âu đông nam á và các quốc gia khác
				</p>		
            </div>
           
            <div class="col-xs-2 col-md-2 col-sm-2 col-large-2 one-img-2 images1">
                <img src="{{asset('public/images/2.png')}}">
            </div>
        </div>
        <div class="row content-3">
            <div class="col-xs-2 col-md-2 col-sm-2 col-large-2 one-img-1 images1">
                <img src="{{asset('public/images/3.png')}}">
            </div>
            <div class="col-xs-5 col-md-5 col-sm-5 col-large-5 title-p">
                <h3>Đáp ứng đầy đủ các yêu cầu của khách hàng</h3>
                <p>Công ty có thể đáp ứng đầy đủ mọi yêu cầu về sản phẩm của khách hàng
				</p>
				<p>Báo giá trực tiếp từ xưởng – không qua trung gian giá cả hợp lý
				</p>
            </div>
            <div class="col-xs-5 col-md-5 col-sm-5 col-large-5 one-img-2">
                <img src="{{asset('public/images/one.png')}}">
            </div>
        </div>
        <div class="row content-3">
            <div class="col-xs-5 col-md-5 col-sm-5 col-large-5 one-img-1 ">
                <img src="{{asset('public/images/one.png')}}">
            </div>
            <div class="col-xs-5 col-md-5 col-sm-5 col-large-5 title-p">
                <h3>Chất lượng phục vụ</h3>
                <p>Nhân viên tư vấn nhiệt hình – có kinh nghiệm trong lĩnh vực đèn chiếu sáng
				</p>
            </div>           
            <div class="col-xs-2 col-md-2 col-sm-2 col-large-2 one-img-2 images1">
                <img src="{{asset('public/images/4.png')}}">
            </div>
        </div>
    </div>
    <div class="main-contact">
        <div class="container">
            <div class="row">
                <div class="contact-form col-xs-12 col-sm-6 col-md-6 col-large-6">
                    <h2>Liên hệ nhận báo giá</h2>
                    <form accept-charset="UTF-8" action="{{route('postContact')}}" id="contact" method="post">
                        {{csrf_field()}}
                        <input type="text" name="name" placeholder="Họ &amp; Tên" required="">

                        <input type="email" name="email" placeholder="Email" required="">

                        <input type="text" name="phone" placeholder="Điện thoại" required="">

                        <input type="text" name="content" placeholder="Viết lời nhắn" required="">

                        <button> Gửi tin nhắn</button>
                    </form>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-large-6 map">
                    <div class="map-footerz">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7449.303271081731!2d105.782171!3d21.006597!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135acaccb75e3e7%3A0xea9c103e46cce492!2zMTggTWnDqsyBdSDEkMOizIBtLCBN4buFIFRyw6wsIFThu6sgTGnDqm0sIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2sus!4v1537498017169"
                                width="100%" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                    </div> 
                </div>
            </div>
        </div>
       
    </div>
    <div class="container-fluid" style="background-color: #525050; border-bottom: 3px solid #fff;">
        <div class="container slider">
            <h2 style="padding-top: 10px;">Đối tác</h2>
            <div class="row ">
                <div class="owl-carousel owl-theme content2-2">
                    @foreach($partners as $p)
                    <div><img src="{{asset('upload/banner/'.$p->photo)}}" style="height: 120px; width: 70%; "></a></div>
                    @endforeach
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
