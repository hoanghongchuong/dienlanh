<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <ul class="sidebar-menu">
        <!-- <li class="header">MAIN NAVIGATION</li> -->
        <li class="treeview ">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Quản lý sản phẩm</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="backend/productcate"><i class="fa fa-circle-o"></i> <span>Danh mục sản phẩm</span></a></li>
            <li><a href="backend/product"><i class="fa fa-circle-o"></i> <span>Sản phẩm</span></a></li>
           
          </ul>
        </li>
        <li class="treeview ">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Quản lý dịch vụ</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="backend/newscate?type=dich-vu"><i class="fa fa-circle-o"></i> <span>Danh mục</span></a></li>
            <li><a href="backend/news?type=dich-vu"><i class="fa fa-circle-o"></i> <span>Danh sách</span></a></li>
           
          </ul>
        </li>
        <li><a href="backend/about/edit?type=gioi-thieu"><i class="fa fa-circle-o"></i> <span>Giới thiệu</span></a></li>
        <li><a href="backend/news?type=tin-tuc"><i class="fa fa-circle-o"></i> <span>Quản lý tin tức</span></a></li>
        <!-- <li><a href="backend/partner"><i class="fa fa-circle-o"></i> <span>Quản lý đối tác</span></a></li> -->
        <!-- <li><a href="backend/feedback"><i class="fa fa-gear" aria-hidden="true"></i> <span>Ý kiến khách hàng</span></a></li> -->
        <li><a href="backend/contact"><i class="fa fa-envelope"></i> <span>Quản lý liên hệ</span></a></li>
        <li><a href="backend/newsletter?type=newsletter"><i class="fa fa-circle-o"></i> <span>Đăng ký nhận tin</span></a></li>
       
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Hình ảnh slider-banner</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">            
            <li><a href="backend/slider?type=gioi-thieu"><i class="fa fa-circle-o"></i> <span>Quản lý slider</span></a></li>
           
          </ul>
        </li>
       
        <li><a href="{{ asset('backend/setting') }}"><i class="fa fa-gear" aria-hidden="true"></i> <span>Quản lý thiết lập</span></a></li>        
        
      </ul>
    </section>
</aside>