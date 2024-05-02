@extends('index')
@section('title')
    Trang chủ
@endsection
@section('content')
    <!-- OUR-ROOMS-->
    <section class="rooms">
        <div class="container">
            <h2 class="title-room">Loại Phòng</h2>
            <div class="outline"></div>
            <p class="rooms-p">Khi bạn tổ chức một bữa tiệc hoặc đoàn tụ gia đình, các lễ kỷ niệm đặc biệt sẽ giúp bạn củng
                cố mối quan hệ với mọi người.</p>
            <div class="wrap-rooms">
                <div class="row">
                    <div id="rooms" class="owl-carousel owl-theme">
                        <div class="item ">

                            @foreach ($listloaiphong as $item)
                                <a href="{{ route('room', ['id'=>$item->id]) }}">
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 ">
                                        <div class="wrap-box">
                                            <div class="box-img">
                                                <img src="upload_img/{{ $item->avatar }}" class="img-responsive"
                                                    alt="PLuxury Room" title="Luxury Room">
                                            </div>
                                            <div class="rooms-content">
                                                <h4 class="sky-h4">{{ $item->ten }}</h4>
                                                {{-- <p class="price">{{$item->gia}}/mỗi đêm</p> --}}
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach

                        </div>
                        <div class="item ">

                            @foreach ($listloaiphong as $item)
                                <a href="">
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 ">
                                        <div class="wrap-box">
                                            <div class="box-img">
                                                <img src="upload_img/{{ $item->avatar }}" class="img-responsive"
                                                    alt="PLuxury Room" title="Luxury Room">
                                            </div>
                                            <div class="rooms-content">
                                                <h4 class="sky-h4">{{ $item->ten }}</h4>
                                                {{-- <p class="price">{{$item->gia}}/mỗi đêm</p> --}}
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach

                        </div>
                        <div class="item ">

                            @foreach ($listloaiphong as $item)
                                <a href="">
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 ">
                                        <div class="wrap-box">
                                            <div class="box-img">
                                                <img src="upload_img/{{ $item->avatar }}" class="img-responsive"
                                                    alt="PLuxury Room" title="Luxury Room">
                                            </div>
                                            <div class="rooms-content">
                                                <h4 class="sky-h4">{{ $item->ten }}</h4>
                                                {{-- <p class="price">{{$item->gia}}/mỗi đêm</p> --}}
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach

                        </div>
                        {{-- <div class="item ">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 ">
                            <div class="wrap-box">
                                <div class="box-img">
                                    <img src="landing/html/skyline/demo/images/Home-1/our-1.jpg" class="img-responsive" alt="PLuxury Room" title="Luxury Room">
                                </div>
                                <div class="rooms-content">
                                    <h4 class="sky-h4">Luxury Room</h4>
                                    <p class="price">$320 / Per Night</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 ">
                            <div class="wrap-box">
                                <div class="box-img">
                                    <img src="landing/html/skyline/demo/images/Home-1/our-2.jpg" class="img-responsive" alt="Double Room" title="Double Room">
                                </div>
                                <div class="rooms-content">
                                    <h4 class="sky-h4">Double Room</h4>
                                    <p class="price">$320 / Per Night</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 ">
                            <div class="wrap-box">
                                <div class="box-img">
                                    <img src="landing/html/skyline/demo/images/Home-1/our-3.jpg" class="img-responsive" alt="Family Room" title="Family Room">
                                </div>
                                <div class="rooms-content">
                                    <h4 class="sky-h4">Family Room</h4>
                                    <p class="price">$320 / Per Night</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 ">
                            <div class="wrap-box">
                                <div class="box-img">
                                    <img src="landing/html/skyline/demo/images/Home-1/our-4.jpg" class="img-responsive" alt="Deluxe Room" title="Deluxe Room">
                                </div>
                                <div class="rooms-content">
                                    <h4 class="sky-h4">Deluxe Room</h4>
                                    <p class="price">$320 / Per Night</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 ">
                            <div class="wrap-box">
                                <div class="box-img">
                                    <img src="landing/html/skyline/demo/images/Home-1/our-5.jpg" class="img-responsive" alt="Single Room" title="Single Room">
                                </div>
                                <div class="rooms-content">
                                    <h4 class="sky-h4">Single Room</h4>
                                    <p class="price">$320 / Per Night</p>
                                </div>
                            </div>
                        </div>
                        <div class=" col-lg-4 col-md-4 col-sm-6 col-xs-6 ">
                            <div class="wrap-box">
                                <div class="box-img">
                                    <img src="landing/html/skyline/demo/images/Home-1/our-6.jpg" class="img-responsive" alt="Presidential Room" title="Presidential Room">
                                </div>
                                <div class="rooms-content">
                                    <h4 class="sky-h4">Presidential Room</h4>
                                    <p class="price">$320 / Per Night</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item ">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 ">
                            <div class="wrap-box">
                                <div class="box-img">
                                    <img src="landing/html/skyline/demo/images/Home-1/our-1.jpg" class="img-responsive" alt="PLuxury Room" title="Luxury Room">
                                </div>
                                <div class="rooms-content">
                                    <h4 class="sky-h4">Luxury Room</h4>
                                    <p class="price">$320 / Per Night</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 ">
                            <div class="wrap-box">
                                <div class="box-img">
                                    <img src="landing/html/skyline/demo/images/Home-1/our-2.jpg" class="img-responsive" alt="Double Room" title="Double Room">
                                </div>
                                <div class="rooms-content">
                                    <h4 class="sky-h4">Double Room</h4>
                                    <p class="price">$320 / Per Night</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 ">
                            <div class="wrap-box">
                                <div class="box-img">
                                    <img src="landing/html/skyline/demo/images/Home-1/our-3.jpg" class="img-responsive" alt="Family Room" title="Family Room">
                                </div>
                                <div class="rooms-content">
                                    <h4 class="sky-h4">Family Room</h4>
                                    <p class="price">$320 / Per Night</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 ">
                            <div class="wrap-box">
                                <div class="box-img">
                                    <img src="landing/html/skyline/demo/images/Home-1/our-4.jpg" class="img-responsive" alt="Deluxe Room" title="Deluxe Room">
                                </div>
                                <div class="rooms-content">
                                    <h4 class="sky-h4">Deluxe Room</h4>
                                    <p class="price">$320 / Per Night</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 ">
                            <div class="wrap-box">
                                <div class="box-img">
                                    <img src="landing/html/skyline/demo/images/Home-1/our-5.jpg" class="img-responsive" alt="Single Room" title="Single Room">
                                </div>
                                <div class="rooms-content">
                                    <h4 class="sky-h4">Single Room</h4>
                                    <p class="price">$320 / Per Night</p>
                                </div>
                            </div>
                        </div>
                        <div class=" col-lg-4 col-md-4 col-sm-6 col-xs-6 ">
                            <div class="wrap-box">
                                <div class="box-img">
                                    <img src="landing/html/skyline/demo/images/Home-1/our-6.jpg" class="img-responsive" alt="Presidential Room" title="Presidential Room">
                                </div>
                                <div class="rooms-content">
                                    <h4 class="sky-h4">Presidential Room</h4>
                                    <p class="price">$320 / Per Night</p>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- /container -->
    </section>
    <!-- END / ROOMS -->
    <!-- ABOUT-US-->
    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5">
                    <div class="about-centent">
                        <h2 class="about-title">Về Chúng Tôi</h2>
                        <div class="line"></div>
                        <p class="about-p">Trái ngược với niềm tin phổ biến, Lorem không chỉ đơn giản là văn bản ngẫu nhiên. Nó có nguồn gốc từ văn học Latinh cổ điển từ năm 45 trước Công nguyên, tính đến nay đã hơn 2000 năm tuổi. Khách sạn hàng đầu của Avalon với lòng hiếu khách nồng hậu trên đảo, tiện nghi chu đáo và sự khác biệt</p>
                        <p class="about-p1">RRichard McClintock, một giáo sư tiếng Latinh tại Đại học Hampden-Sydney ở Virginia, đã tra cứu một trong những từ tiếng Latinh khó hiểu hơn, consectetur, từ một đoạn văn Lorem Ipsum ...</p>
                        <a href="#" class="read-more">Đọc Thêm </a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-7 col-lg-7 ">
                    <div class="about-img">
                        <div class="img-1">
                            <img src="landing/html/skyline/demo/images/Home-1/about-3.jpg" class="img-responsive"
                                alt="Image">
                            <div class="img-2">
                                <img src="landing/html/skyline/demo/images/Home-1/about-1.jpg" class="img-responsive"
                                    alt="Image">
                            </div>
                            <div class="img-3">
                                <img src="landing/html/skyline/demo/images/Home-1/about-2.jpg" class="img-responsive"
                                    alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END/ ABOUT-US-->
    <!-- TESTIMONOALS -->
    <section class="testimonials">
        <div class="testimonials-h">
            <div class="testimonials-content">
                <div class="container">
                    <div id="testimonials" class="owl-carousel owl-theme">
                        <div class="item ">
                            <div class="img-testimonials"><img
                                    src="landing/html/skyline/demo/images/Home-1/about-testimonials-img.png" alt="#">
                            </div>
                            <p class="testimonials-p"><span>“</span>​‌ ​ Đây là nơi duy nhất để ở Catalina! Tôi đã ở trong những khách sạn rẻ hơn và họ vẫn ổn, nhưng đây chỉ là lớp kem trên bánh! Sau khi dành cả ngày đạp xe và đi bộ đường dài để quay lại và thưởng thức một ly rượu vang trong khi nhìn ra cửa sổ  <span>​‌​‌”</span> ocean view window and then to top it all off...</p>
                            <h5 class="sky-h5">JULIA ROSE</h5>
                            <p class="testimonials-p1"> nhìn ra đại dương của bạn và sau đó trên hết...</p>
                        </div>
                        <div class="item">
                            <div class="img-testimonials"><img
                                    src="landing/html/skyline/demo/images/Home-1/about-testimonials-img.png" alt="#">
                            </div>
                            <p class="testimonials-p"><span>“</span>​‌ Thisis the only place to stay in Catalina! I have
                                stayed in the cheaper hotels and they were fine, but this is just the icing onthe cake!
                                After spending the day bike riding and hiking to come back and enjoy a glass of wine while
                                looking out your <span>​‌​‌”</span> ocean view window and then to top it all off...</p>
                            <h5 class="sky-h5">JULIA ROSE</h5>
                            <p class="testimonials-p1">From Los Angeles, California</p>
                        </div>
                        <div class="item">
                            <div class="img-testimonials"><img
                                    src="landing/html/skyline/demo/images/Home-1/about-testimonials-img.png" alt="#">
                            </div>
                            <p class="testimonials-p"><span>“</span>​‌ This is the only place to stay in Catalina! I have
                                stayed in the cheaper hotels and they were fine, but this is just the icing on the cake!
                                After spending the day bike riding and hiking to come back and enjoy a glass of wine while
                                looking out your <span>​‌​‌”</span> ocean view window and then to top it all off...</p>
                            <h5 class="sky-h5">JULIA ROSE</h5>
                            <p class="testimonials-p1">From Los Angeles, California</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END / TESTIMONOALS -->
    <!-- OUR-GALLERY-->
    <section class="gallery-our">
        <div class="container-fluid">
            <div class="gallery">
                <h2 class="title-gallery">Phòng Trưng Bày Của Chúng Tôi</h2>
                <div class="outline"></div>
                <ul class="nav nav-tabs text-uppercase">
                    <li class="active"><a data-toggle="tab" href="#Hotel">Khách Sạn</a></li>
                    <li><a data-toggle="tab" href="#menu1">Phòng Suite </a></li>
                    <li><a data-toggle="tab" href="#menu2">Phòng Tắm</a></li>
                    <li><a data-toggle="tab" href="#menu3">Ăn Uống</a></li>
                </ul>
                <br />
                <div class="tab-content">
                    <div id="Hotel" class="tab-pane fade in active">
                        <div class="product ">
                            <div class="row">
                                <div class="gallery_product col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
                                    <div class="wrap-box">
                                        <div class="box-img">
                                            <img src="landing/html/skyline/demo/images/Home-1/gallery-1.jpg"
                                                class="img-responsive" alt="Product" title="images products">
                                        </div>
                                        <div class="gallery-box-main " title>
                                            <div class="gallery-icon">
                                                <a class="lightbox "
                                                    href="landing/html/skyline/demo/images/Home-1/gallery-1-1.jpg"
                                                    data-littlelightbox-group="gallery" title="Luxury Room view all"><i
                                                        class="ion-ios-plus-empty" aria-hidden="true"></i> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gallery_product col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
                                    <div class="wrap-box">
                                        <div class="box-img">
                                            <img src="landing/html/skyline/demo/images/Home-1/gallery-2.jpg"
                                                class="img-responsive" alt="Product" title="images products">
                                        </div>
                                        <div class="gallery-box-main">
                                            <div class="gallery-icon">
                                                <a class="lightbox "
                                                    href="landing/html/skyline/demo/images/Home-1/gallery-2-2.jpg"
                                                    data-littlelightbox-group="gallery" title="HIHI"><i
                                                        class="ion-ios-plus-empty" aria-hidden="true"></i> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gallery_product col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
                                    <div class="wrap-box">
                                        <div class="box-img">
                                            <img src="landing/html/skyline/demo/images/Home-1/gallery-3.jpg"
                                                class="img-responsive" alt="Product" title="images products">
                                        </div>
                                        <div class="gallery-box-main">
                                            <div class="gallery-icon">
                                                <a class="lightbox "
                                                    href="landing/html/skyline/demo/images/Home-1/gallery-3-3.jpg"
                                                    data-littlelightbox-group="gallery" title="Flying is life"><i
                                                        class="ion-ios-plus-empty" aria-hidden="true"></i> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gallery_product col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
                                    <div class="wrap-box">
                                        <div class="box-img">
                                            <img src="landing/html/skyline/demo/images/Home-1/gallery-4.jpg"
                                                class="img-responsive" alt="Product" title="images products">
                                        </div>
                                        <div class="gallery-box-main">
                                            <div class="gallery-icon">
                                                <a class="lightbox "
                                                    href="landing/html/skyline/demo/images/Home-1/gallery-4-4.jpg"
                                                    data-littlelightbox-group="gallery" title="Flying is life"><i
                                                        class="ion-ios-plus-empty" aria-hidden="true"></i> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gallery_product col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
                                    <div class="wrap-box">
                                        <div class="box-img">
                                            <img src="landing/html/skyline/demo/images/Home-1/gallery-5.jpg"
                                                class="img-responsive" alt="Product" title="images products">
                                        </div>
                                        <div class="gallery-box-main">
                                            <div class="gallery-icon">
                                                <a class="lightbox "
                                                    href="landing/html/skyline/demo/images/Home-1/gallery-5-5.jpg"
                                                    data-littlelightbox-group="gallery" title="Flying is life"><i
                                                        class="ion-ios-plus-empty" aria-hidden="true"></i> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gallery_product col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
                                    <div class="wrap-box">
                                        <div class="box-img">
                                            <img src="landing/html/skyline/demo/images/Home-1/gallery-6.jpg"
                                                class="img-responsive" alt="Product" title="images products">
                                        </div>
                                        <div class="gallery-box-main">
                                            <div class="gallery-icon">
                                                <a class="lightbox "
                                                    href="landing/html/skyline/demo/images/Home-1/gallery-6-6.jpg"
                                                    data-littlelightbox-group="gallery" title="Flying is life"><i
                                                        class="ion-ios-plus-empty" aria-hidden="true"></i> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gallery_product col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
                                    <div class="wrap-box">
                                        <div class="box-img">
                                            <img src="landing/html/skyline/demo/images/Home-1/gallery-7.jpg"
                                                class="img-responsive" alt="Product" title="images products">
                                        </div>
                                        <div class="gallery-box-main">
                                            <div class="gallery-icon">
                                                <a class="lightbox "
                                                    href="landing/html/skyline/demo/images/Home-1/gallery-7-7.jpg"
                                                    data-littlelightbox-group="gallery" title="Flying is life"><i
                                                        class="ion-ios-plus-empty" aria-hidden="true"></i> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gallery_product col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
                                    <div class="wrap-box">
                                        <div class="box-img">
                                            <img src="landing/html/skyline/demo/images/Home-1/gallery-8.jpg"
                                                class="img-responsive" alt="Product" title="images products">
                                        </div>
                                        <div class="gallery-box-main">
                                            <div class="gallery-icon">
                                                <a class="lightbox "
                                                    href="landing/html/skyline/demo/images/Home-1/gallery-8-8.jpg"
                                                    data-littlelightbox-group="gallery" title="Flying is life"><i
                                                        class="ion-ios-plus-empty" aria-hidden="true"></i> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="menu1" class="tab-pane fade">
                        <div class="product ">
                            <div class="row">
                                <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 ">
                                    <div class="wrap-box">
                                        <div class="box-img">
                                            <img src="landing/html/skyline/demo/images/Home-1/gallery-6.jpg"
                                                class="img-responsive" alt="Product" title="images products">
                                        </div>
                                        <div class="gallery-box-main">
                                            <div class="gallery-icon">
                                                <a class="lightbox "
                                                    href="landing/html/skyline/demo/images/Home-1/gallery-2-2.jpg"
                                                    data-littlelightbox-group="gallery" title="Flying is life"><i
                                                        class="ion-ios-plus-empty" aria-hidden="true"></i> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 ">
                                    <div class="wrap-box">
                                        <div class="box-img">
                                            <img src="landing/html/skyline/demo/images/Home-1/gallery-7.jpg"
                                                class="img-responsive" alt="Product" title="images products">
                                        </div>
                                        <div class="gallery-box-main">
                                            <div class="gallery-icon">
                                                <a class="lightbox "
                                                    href="landing/html/skyline/demo/images/Home-1/gallery-3-3.jpg"
                                                    data-littlelightbox-group="gallery" title="Flying is life"><i
                                                        class="ion-ios-plus-empty" aria-hidden="true"></i> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 ">
                                    <div class="wrap-box">
                                        <div class="box-img">
                                            <img src="landing/html/skyline/demo/images/Home-1/gallery-8.jpg"
                                                class="img-responsive" alt="Product" title="images products">
                                        </div>
                                        <div class="gallery-box-main">
                                            <div class="gallery-icon">
                                                <a class="lightbox "
                                                    href="landing/html/skyline/demo/images/Home-1/gallery-4-4.jpg"
                                                    data-littlelightbox-group="gallery" title="Flying is life"><i
                                                        class="ion-ios-plus-empty" aria-hidden="true"></i> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="menu2" class="tab-pane fade">
                        <div class="product ">
                            <div class="row">
                                <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 ">
                                    <div class="wrap-box">
                                        <div class="box-img">
                                            <img src="landing/html/skyline/demo/images/Home-1/gallery-7.jpg"
                                                class="img-responsive" alt="Product" title="images products">
                                        </div>
                                        <div class="gallery-box-main">
                                            <div class="gallery-icon">
                                                <a class="lightbox "
                                                    href="landing/html/skyline/demo/images/Home-1/gallery-2-2.jpg"
                                                    data-littlelightbox-group="gallery" title="Flying is life"><i
                                                        class="ion-ios-plus-empty" aria-hidden="true"></i> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 ">
                                    <div class="wrap-box">
                                        <div class="box-img">
                                            <img src="landing/html/skyline/demo/images/Home-1/gallery-8.jpg"
                                                class="img-responsive" alt="Product" title="images products">
                                        </div>
                                        <div class="gallery-box-main">
                                            <div class="gallery-icon">
                                                <a class="lightbox "
                                                    href="landing/html/skyline/demo/images/Home-1/gallery-6-6.jpg"
                                                    data-littlelightbox-group="gallery" title="Flying is life"><i
                                                        class="ion-ios-plus-empty" aria-hidden="true"></i> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="menu3" class="tab-pane fade">
                        <div class="product ">
                            <div class="row">
                                <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 ">
                                    <div class="wrap-box">
                                        <div class="box-img">
                                            <img src="landing/html/skyline/demo/images/Home-1/gallery-3.jpg"
                                                class="img-responsive" alt="Product" title="images products">
                                        </div>
                                        <div class="gallery-box-main">
                                            <div class="gallery-icon">
                                                <a class="lightbox "
                                                    href="landing/html/skyline/demo/images/Home-1/gallery-2-2.jpg"
                                                    data-littlelightbox-group="gallery" title="Flying is life"><i
                                                        class="ion-ios-plus-empty" aria-hidden="true"></i> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 ">
                                    <div class="wrap-box">
                                        <div class="box-img">
                                            <img src="landing/html/skyline/demo/images/Home-1/gallery-4.jpg"
                                                class="img-responsive" alt="Product" title="images products">
                                        </div>
                                        <div class="gallery-box-main">
                                            <div class="gallery-icon">
                                                <a class="lightbox "
                                                    href="landing/html/skyline/demo/images/Home-1/gallery-2-2.jpg"
                                                    data-littlelightbox-group="gallery" title="Flying is life"><i
                                                        class="ion-ios-plus-empty" aria-hidden="true"></i> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 ">
                                    <div class="wrap-box">
                                        <div class="box-img">
                                            <img src="landing/html/skyline/demo/images/Home-1/gallery-5.jpg"
                                                class="img-responsive" alt="Product" title="images products">
                                        </div>
                                        <div class="gallery-box-main">
                                            <div class="gallery-icon">
                                                <a class="lightbox "
                                                    href="landing/html/skyline/demo/images/Home-1/gallery-2-2.jpg"
                                                    data-littlelightbox-group="gallery" title="Flying is life"><i
                                                        class="ion-ios-plus-empty" aria-hidden="true"></i> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 ">
                                    <div class="wrap-box">
                                        <div class="box-img">
                                            <img src="landing/html/skyline/demo/images/Home-1/gallery-6.jpg"
                                                class="img-responsive" alt="Product" title="images products">
                                        </div>
                                        <div class="gallery-box-main">
                                            <div class="gallery-icon">
                                                <a class="lightbox "
                                                    href="landing/html/skyline/demo/images/Home-1/gallery-2-2.jpg"
                                                    data-littlelightbox-group="gallery" title="Flying is life"><i
                                                        class="ion-ios-plus-empty" aria-hidden="true"></i> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 ">
                                    <div class="wrap-box">
                                        <div class="box-img">
                                            <img src="landing/html/skyline/demo/images/Home-1/gallery-7.jpg"
                                                class="img-responsive" alt="Product" title="images products">
                                        </div>
                                        <div class="gallery-box-main">
                                            <div class="gallery-icon">
                                                <a class="lightbox "
                                                    href="landing/html/skyline/demo/images/Home-1/gallery-2-2.jpg"
                                                    data-littlelightbox-group="gallery" title="Flying is life"><i
                                                        class="ion-ios-plus-empty" aria-hidden="true"></i> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 ">
                                    <div class="wrap-box">
                                        <div class="box-img">
                                            <img src="landing/html/skyline/demo/images/Home-1/gallery-8.jpg"
                                                class="img-responsive" alt="Product" title="images products">
                                        </div>
                                        <div class="gallery-box-main">
                                            <div class="gallery-icon">
                                                <a class="lightbox "
                                                    href="landing/html/skyline/demo/images/Home-1/gallery-2-2.jpg"
                                                    data-littlelightbox-group="gallery" title="Flying is life"><i
                                                        class="ion-ios-plus-empty" aria-hidden="true"></i> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end-tab-content -->
                <div class="text-center">
                    <button type="button" class="btn btn-default btn-our">VIEW MORE</button>
                </div>
            </div>
            <!-- /gallery -->
        </div>
        <!-- /container -->
    </section>
    <!-- END / OUR GALLERY -->
@endsection
