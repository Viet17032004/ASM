<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link" href="{{ url('admin') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <div class="sb-sidenav-menu-heading">Interface</div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Khách Hàng
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{url('taikhoan')}}">Danh Sách Tài Khoản</a>
                            <a class="nav-link" href="{{url('chucvu')}}">Chức Vụ Hiện Có</a>
                        </nav>
                    </div>
                    <a class="nav-link collapsed" href="" data-bs-toggle="collapse" data-bs-target="#collapseLayouts2" aria-expanded="false" aria-controls="collapseLayouts2">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Sản Phẩm
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts2" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{url('sanpham')}}">Danh Sách Sản Phẩm</a>
                            <a class="nav-link" href="{{url('danhmuc')}}">Danh sách danh mục</a>
                        </nav>
                    </div>
                    <a class="nav-link collapsed" href="" data-bs-toggle="collapse" data-bs-target="#collapseLayouts23" aria-expanded="false" aria-controls="collapseLayouts2">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Đơn hàng
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts23" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{url('donhang')}}">Danh Sách Đơn Hàng</a>
                            <a class="nav-link" href="{{url('danhmuc')}}">Danh sách danh mục</a>
                        </nav>
                    </div>
                    <div class="sb-sidenav-menu-heading">Addons</div>
                    <a class="nav-link" href="{{'binhluan'}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Bình luận
                    </a>
                   
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                Start Bootstrap
            </div>
        </nav>
    </div>
  
    <div id="layoutSidenav_content">
      <!-- Content goes here -->
    </div>
  </div>
  