<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu">            
            <li class="treeview {{ Request::segment(2) == 'productcate' || Request::segment(2) == 'product' ? 'active' : '' }}">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Quản lý sản phẩm</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="{{ Request::segment(2) == 'productcate' ? 'active' : '' }}"><a href="backend/productcate?type=san-pham"><i class="fa fa-circle-o"></i> <span>Danh mục sản phẩm</span></a></li>
                <li class="{{Request::segment(2) == 'product' ? 'active' : ''}}"><a href="backend/product?type=san-pham"><i class="fa fa-circle-o"></i> <span>Danh sách</span></a></li>
              </ul>
            </li>
            <!-- <li><a href="backend/orders"><i class="fa fa-shopping-cart"></i> <span>Quản lý đơn hàng</span></a></li> -->
            <li><a href="backend/about/edit?type=gioi-thieu"><i class="fa fa-circle-o"></i> <span>Giới thiệu</span></a></li>
            <li class=""><a href="backend/news?type=tin-tuc"><i class="fa fa-circle-o"></i> <span>Tin tức</span></a></li>
            <li class=""><a href="backend/news?type=du-an"><i class="fa fa-circle-o"></i> <span>Dự án</span></a></li>  
            <!-- <li class="treeview {{ Request::segment(2) == 'newscate' || Request::segment(2) == 'news' ? 'active' : '' }}">
                <a href="javascript:;">
                    <i class="fa fa-pie-chart"></i>
                    <span>Bài viết</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">            
                    <li class="{{ Request::segment(2) == 'newscate' ? 'active' : '' }}"><a href="backend/newscate?type=thiet-ke"><i class="fa fa-circle-o"></i> <span>Danh mục</span></a></li>                
                </ul>
            </li> -->             
            <!-- <li><a href="backend/video"><i class="fa fa-circle-o"></i> <span>Quản lý video</span></a></li> -->
            <li><a href="backend/partner"><i class="fa fa-circle-o"></i> <span>Quản lý đối tác</span></a></li>
            <li><a href="backend/slogan"><i class="fa fa-circle-o"></i> <span>Quản lý slogan</span></a></li>
            <!-- <li><a href="backend/feedback"><i class="fa fa-gear" aria-hidden="true"></i> <span>Ý kiến khách hàng</span></a></li> -->
            <li><a href="backend/contact"><i class="fa fa-envelope"></i> <span>Quản lý liên hệ</span></a></li>
            <!-- <li><a href="backend/newsletter?type=newsletter"><i class="fa fa-circle-o"></i> <span>Đăng ký nhận tin</span></a></li> -->
            <!-- <li><a href="backend/chinhanh"><i class="fa fa-envelope"></i><span>Quản lý cửa hàng</span></a></li> -->
            <li><a href="backend/slider?type=gioi-thieu"><i class="fa fa-circle-o"></i> <span>Quản lý slider</span></a></li>
            <!-- <li><a href="backend/slider?type=home"><i class="fa fa-circle-o"></i> <span>Quản lý banner trang chủ</span></a></li> -->
            <!-- <li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Hình ảnh slider-banner</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">            
                
                <li><a href="backend/banner"><i class="fa fa-gear" aria-hidden="true"></i> <span>Quản lý banner</span></a></li>
                <li><a href="backend/lienket?type=quang-cao"><i class="fa fa-gear" aria-hidden="true"></i> <span>Quản lý quảng cáo</span></a></li>
                <li><a href="backend/position"><i class="fa fa-gear" aria-hidden="true"></i> <span>Vị trí quảng cáo</span></a></li>
              </ul>
            </li> -->
            <!-- <li><a href="backend/bankaccount"><i class="fa fa-envelope"></i><span>Quản lý tài khoản ngân hàng</span></a></li> -->
            <li><a href="{{ asset('backend/setting') }}"><i class="fa fa-gear" aria-hidden="true"></i> <span>Quản lý thiết lập</span></a></li>        
            
        </ul>
    </section>
</aside>