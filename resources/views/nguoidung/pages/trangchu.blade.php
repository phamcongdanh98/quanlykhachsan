@extends('nguoidung.layouts.master')

@section('content')
<!-- Danh sách phòng -->
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5">Danh sách phòng</h2>
          </div>
        </div>
        <div class="row">
          @foreach($phong as $p)
          <div class="col-md-6 col-lg-4 mb-5">
            <div class="hotel-room text-center">
              <a href="#" class="d-block mb-0 thumbnail"><img src="anhphong1/{{$p->anhdaidien}}" alt="Image" class="img-fluid"></a>
              <div class="hotel-room-body">
                <h3 class="heading mb-0"><a href="#">{{$p->tenphong}}</a></h3>
                <strong class="price">{{$p->giaphong}}đ / một đêm</strong>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>

    <!-- Giới Thiệu -->
    <div class="site-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 mb-5 mb-md-0">
            
              <div class="img-border">
                <a href="{{$gioithieu->linkvideo}}" class="popup-vimeo image-play">
                  <span class="icon-wrap">
                    <span class="icon icon-play"></span>
                  </span>
                  <img src="trangchu_asset/images/img_2.jpg" alt="" class="img-fluid">
                </a>
              </div>

              <img src="trangchu_asset/images/img_1.jpg" alt="Image" class="img-fluid image-absolute">
            
          </div>
          <div class="col-md-5 ml-auto">          
            <div class="section-heading text-left">
              <h2 class="mb-5">Thông tin</h2>
            </div>
            <p class="mb-4">{{$gioithieu->tomtat}}</p>
            <p><a href="{{$gioithieu->linkvideo}}" class="popup-vimeo text-uppercase">Xem Video <span class="icon-arrow-right small"></span></a></p>
          </div>
        </div>
      </div>
    </div>
    <!-- Dịch Vụ hiện có -->
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5">TÍNH NĂNG HIỆN CÓ</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="text-center p-4 item">
              <span class="flaticon-pool display-3 mb-3 d-block text-primary"></span>
              <h2 class="h5">Hồ bơi</h2>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="text-center p-4 item">
              <span class="flaticon-desk display-3 mb-3 d-block text-primary"></span>
              <h2 class="h5">Gọi thức ăn nhanh</h2>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="text-center p-4 item">
              <span class="flaticon-exit display-3 mb-3 d-block text-primary"></span>
              <h2 class="h5">Thoát hiểm an toàn</h2>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="text-center p-4 item">
              <span class="flaticon-parking display-3 mb-3 d-block text-primary"></span>
              <h2 class="h5">Bãi đổ xe</h2>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="text-center p-4 item">
              <span class="flaticon-hair-dryer display-3 mb-3 d-block text-primary"></span>
              <h2 class="h5">Tạo mẫu tóc</h2>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="text-center p-4 item">
              <span class="flaticon-minibar display-3 mb-3 d-block text-primary"></span>
              <h2 class="h5">Quầy bar</h2>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="text-center p-4 item">
              <span class="flaticon-drink display-3 mb-3 d-block text-primary"></span>
              <h2 class="h5">Thức uống</h2>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="text-center p-4 item">
              <span class="flaticon-cab display-3 mb-3 d-block text-primary"></span>
              <h2 class="h5">Thuê ô tô</h2>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- Khám phá hình ảnh -->
   @include('nguoidung.layouts.hinhanh')
    
    <div class="site-section block-15">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2>Thông tin phòng</h2>
          </div>
        </div>

        <!-- Bài viết -->
        <div class="nonloop-block-15 owl-carousel">
          

            <div class="media-with-text p-md-5">
              <div class="img-border-sm mb-4">
                <a href="#" class="popup-vimeo image-play">
                  <img src="trangchu_asset/images/img_1.jpg" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0"><a href="#">Lorem Ipsum Dolor Sit Amet</a></h2>
              <span class="mb-3 d-block post-date">Dec 20th, 2018 &bullet; By <a href="#">Admin</a></span>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat nobis veritatis tempora natus rerum obcaecati.</p>
            </div>
          
            <div class="media-with-text p-md-4">
              <div class="img-border-sm mb-4">
                <a href="#" class="popup-vimeo image-play">
                  <img src="trangchu_asset/images/img_2.jpg" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0"><a href="#">Lorem Ipsum Dolor Sit Amet</a></h2>
              <span class="mb-3 d-block post-date">Dec 20th, 2018 &bullet; By <a href="#">Admin</a></span>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat nobis veritatis tempora natus rerum obcaecati.</p>
            </div>
          
            <div class="media-with-text p-md-4">
              <div class="img-border-sm mb-4">
                <a href="#" class="popup-vimeo image-play">
                  <img src="trangchu_asset/images/img_3.jpg" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0"><a href="#">Lorem Ipsum Dolor Sit Amet</a></h2>
              <span class="mb-3 d-block post-date">Dec 20th, 2018 &bullet; By <a href="#">Admin</a></span>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat nobis veritatis tempora natus rerum obcaecati.</p>
            </div>

            <div class="media-with-text p-md-4">
              <div class="img-border-sm mb-4">
                <a href="#" class="popup-vimeo image-play">
                  <img src="trangchu_asset/images/img_1.jpg" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0"><a href="#">Lorem Ipsum Dolor Sit Amet</a></h2>
              <span class="mb-3 d-block post-date">Dec 20th, 2018 &bullet; By <a href="#">Admin</a></span>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat nobis veritatis tempora natus rerum obcaecati.</p>
            </div>
          
            <div class="media-with-text p-md-4">
              <div class="img-border-sm mb-4">
                <a href="#" class="popup-vimeo image-play">
                  <img src="trangchu_asset/images/img_2.jpg" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0"><a href="#">Lorem Ipsum Dolor Sit Amet</a></h2>
              <span class="mb-3 d-block post-date">Dec 20th, 2018 &bullet; By <a href="#">Admin</a></span>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat nobis veritatis tempora natus rerum obcaecati.</p>
            </div>
          
            <div class="media-with-text p-md-4">
              <div class="img-border-sm mb-4">
                <a href="#" class="popup-vimeo image-play">
                  <img src="trangchu_asset/images/img_3.jpg" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0"><a href="#">Lorem Ipsum Dolor Sit Amet</a></h2>
              <span class="mb-3 d-block post-date">Dec 20th, 2018 &bullet; By <a href="#">Admin</a></span>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat nobis veritatis tempora natus rerum obcaecati.</p>
            </div>
            
            <div class="media-with-text p-md-4">
              <div class="img-border-sm mb-4">
                <a href="#" class="popup-vimeo image-play">
                  <img src="trangchu_asset/images/img_1.jpg" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0"><a href="#">Lorem Ipsum Dolor Sit Amet</a></h2>
              <span class="mb-3 d-block post-date">Dec 20th, 2018 &bullet; By <a href="#">Admin</a></span>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat nobis veritatis tempora natus rerum obcaecati.</p>
            </div>
          
            <div class="media-with-text p-md-4">
              <div class="img-border-sm mb-4">
                <a href="#" class="popup-vimeo image-play">
                  <img src="trangchu_asset/images/img_2.jpg" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0"><a href="#">Lorem Ipsum Dolor Sit Amet</a></h2>
              <span class="mb-3 d-block post-date">Dec 20th, 2018 &bullet; By <a href="#">Admin</a></span>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat nobis veritatis tempora natus rerum obcaecati.</p>
            </div>
          
            <div class="media-with-text p-md-4">
              <div class="img-border-sm mb-4">
                <a href="#" class="popup-vimeo image-play">
                  <img src="trangchu_asset/images/img_3.jpg" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0"><a href="#">Lorem Ipsum Dolor Sit Amet</a></h2>
              <span class="mb-3 d-block post-date">Dec 20th, 2018 &bullet; By <a href="#">Admin</a></span>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores culpa qui aliquam placeat nobis veritatis tempora natus rerum obcaecati.</p>
            </div>
          


        </div>

      </div>
    </div>

    <!-- Phản hồi khách hàng -->
    <div class="site-section block-14 bg-light">

      <div class="container">
        
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2>Phản hồi khách hàng</h2>
          </div>
        </div>

        <div class="nonloop-block-14 owl-carousel">
          
          <div class="p-4">
            <div class="d-flex block-testimony">
              <div class="person mr-3">
                <img src="trangchu_asset/images/person_1.jpg" alt="Image" class="img-fluid rounded">
              </div>
              <div>
                <h2 class="h5">Katie Johnson</h2>
                <blockquote>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias accusantium qui optio, possimus necessitatibus voluptate aliquam velit nostrum tempora ipsam!&rdquo;</blockquote>
              </div>
            </div>
          </div>
          <div class="p-4">
            <div class="d-flex block-testimony">
              <div class="person mr-3">
                <img src="trangchu_asset/images/person_2.jpg" alt="Image" class="img-fluid rounded">
              </div>
              <div>
                <h2 class="h5">Jane Mars</h2>
                <blockquote>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias accusantium qui optio, possimus necessitatibus voluptate aliquam velit nostrum tempora ipsam!&rdquo;</blockquote>
              </div>
            </div>
          </div>
          <div class="p-4">
            <div class="d-flex block-testimony">
              <div class="person mr-3">
                <img src="trangchu_asset/images/person_3.jpg" alt="Image" class="img-fluid rounded">
              </div>
              <div>
                <h2 class="h5">Shane Holmes</h2>
                <blockquote>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias accusantium qui optio, possimus necessitatibus voluptate aliquam velit nostrum tempora ipsam!&rdquo;</blockquote>
              </div>
            </div>
          </div>
          <div class="p-4">
            <div class="d-flex block-testimony">
              <div class="person mr-3">
                <img src="trangchu_asset/images/person_4.jpg" alt="Image" class="img-fluid rounded">
              </div>
              <div>
                <h2 class="h5">Mark Johnson</h2>
                <blockquote>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias accusantium qui optio, possimus necessitatibus voluptate aliquam velit nostrum tempora ipsam!&rdquo;</blockquote>
              </div>
            </div>
          </div>

        </div>

      </div>
      
    </div>

@endsection

@section('slide')

<div class="slide-one-item home-slider owl-carousel">
      @foreach($slide as $sl)
      <div class="site-blocks-cover overlay" style="background-image: url(anhslide/{{$sl->hinh}});" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              
              <h1 class="mb-2">{{$sl->tieude}}</h1>
              <h2 class="caption">{{$sl->chuthich}}</h2>
            </div>
          </div>
        </div>
      </div>  
      @endforeach
    </div>
@endsection