@extends('master.master')
<link rel="stylesheet" href="../css/taikhoan.css">
@section('content')
<div class="container">
  
  <!-- Bootstrap row -->
  <div class="row" id="body-row">
      <!-- Sidebar -->
      <div id="sidebar-container" class="sidebar-expanded d-none d-md-block"><!-- d-* hiddens the Sidebar in smaller devices. Its itens can be kept on the Navbar 'Menu' -->
          <!-- Bootstrap List Group -->
          <ul class="list-group">
              <!-- Separator with title -->
              <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                  QUẢN LÝ TÀI KHOẢN
              </li>
              <!-- /END Separator -->
              <!-- Menu with submenu -->
              <a href="#submenu1" data-toggle="collapse" aria-expanded="false" class="bg-light list-group-item list-group-item-action flex-column align-items-start">
                  <div class="d-flex w-100 justify-content-start align-items-center">
                      <span class="fa fa-dashboard fa-fw mr-3"></span> 
                      <span class="menu-collapsed">Quản Lý</span>
                      <span class="submenu-icon ml-auto"></span>
                  </div>
              </a>
              <!-- Submenu content -->
              <div id='submenu1' class="collapse sidebar-submenu">
                  <a href="tour-user/{{ Auth::user()->id }}" class="list-group-item list-group-item-action bg-light text-black">
                      <span class="menu-collapsed">Đơn đặt tour</span>
                  </a>
                  <a href="hotel-user/{{ Auth::user()->id }}" class="list-group-item list-group-item-action bg-light text-black">
                      <span class="menu-collapsed">Đơn đặt phòng</span>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action bg-light text-black">
                      <span class="menu-collapsed">Danh sách yêu thích</span>
                  </a>
              </div>
              <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="bg-light list-group-item list-group-item-action flex-column align-items-start">
                  <div class="d-flex w-100 justify-content-start align-items-center">
                      <span class="fa fa-user fa-fw mr-3"></span>
                      <span class="menu-collapsed">Cá nhân</span>
                      <span class="submenu-icon ml-auto"></span>
                  </div>
              </a>
              <!-- Submenu content -->
              <div id='submenu2' class="collapse sidebar-submenu">
                  <a href="#" class="list-group-item list-group-item-action bg-light text-black">
                      <span class="menu-collapsed">Cài đặt</span>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action bg-light text-black">
                      <span class="menu-collapsed">Mật khẩu</span>
                  </a>
              </div>            
              <!-- Separator with title -->
              <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                  <small>Tùy chọn</small>
              </li>
              <!-- /END Separator -->
              <a href="#" class="bg-light list-group-item list-group-item-action">
                  <div class="d-flex w-100 justify-content-start align-items-center">
                      <span class="fa fa-calendar fa-fw mr-3"></span>
                      <span class="menu-collapsed">Đặt lịch</span>
                  </div>
              </a>
              <a href="#" class="bg-light list-group-item list-group-item-action">
                  <div class="d-flex w-100 justify-content-start align-items-center">
                      <span class="fa fa-envelope-o fa-fw mr-3"></span>
                      <span class="menu-collapsed">Tin nhắn <span class="badge badge-pill badge-primary ml-2">5</span></span>
                  </div>
              </a>
              <!-- Separator without title -->
              <li class="list-group-item sidebar-separator menu-collapsed"></li>            
              <!-- /END Separator -->
              <a href="#" class="bg-light list-group-item list-group-item-action">
                  <div class="d-flex w-100 justify-content-start align-items-center">
                      <span class="fa fa-question fa-fw mr-3"></span>
                      <span class="menu-collapsed">Trợ giúp</span>
                  </div>
              </a> 
          </ul><!-- List Group END-->
      </div><!-- sidebar-container END -->
  
      <!-- MAIN -->
      @yield('user_content')
      <!-- Main Col END -->
      
  </div><!-- body-row END -->
    
    
  </div><!-- container -->
  <script>
  </script>
@endsection