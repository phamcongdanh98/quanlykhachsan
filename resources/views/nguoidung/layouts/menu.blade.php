<!-- Menu -->
    <div class="site-navbar-wrap js-site-navbar bg-white ">
      
      <div class="container">
        <div class="site-navbar bg-light">
          <div class="py-1">
            <div class="row align-items-center">
              <div class="col-2">
                <h2 class="mb-0 site-logo"><a href="index.html">One Night</a></h2>
              </div>
              <div class="col-10">
                <nav class="site-navigation text-right" role="navigation">
                  <div class="container">
                    
                    <div class="d-inline-block d-lg-none  ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu h3"></span></a></div>
                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                      <li id="lamthu" class="{{ Request::is('nguoidung/trangchu') ? 'active' : null}}">
                        <a href="{{route('trangchu')}}">Trang chủ</a>
                      </li>
                      <li class="has-children {{ Request::is('nguoidung/loaiphong/*') ? 'active' : null}} {{ Request::is('nguoidung/phong/*') ? 'active' : null}}">
                        <a href="#">Phòng</a>
                        <ul class="dropdown arrow-top">
                          @foreach($loaiphong as $lp)
                          <li ><a href="{{route('viewloaiphong',['id'=>$lp->id])}}">{{$lp->tenloai}}</a></li>
                          @endforeach
                        </ul>
                      </li>
                      <li class="has-children ">
                        <a href="rooms.html">Sự kiện</a>
                        <ul class="dropdown arrow-top">
                          @foreach($loaibaiviet as $lbv)
                          <li><a href="#">{{$lbv->tenloai}}</a></li>
                          @endforeach
                        </ul>
                      </li>

                      <li class="{{ Request::is('nguoidung/gioithieu') ? 'active' : null}}"><a href="{{route('viewgioithieu')}}">Giới thiệu</a></li>
                      <li class="{{ Request::is('nguoidung/lienhe') ? 'active' : null}}"><a href="{{route('viewlienhe')}}">Liên hệ</a></li>
                    </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@section('script')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
@endsection