@extends('index')
@section('title')
    Phòng Và Giá
@endsection
@section('slider')
        <!-- BANNER -->
        <section class="banner-tems text-center">
            <div class="container">
                <div class="banner-content">
                    <h2>PHÒNG VÀ GIÁ</h2>
                    <p>Đơn giản và đẹp đẽ</p>
                </div>
            </div>
        </section>
        <!-- END-BANNER -->
@endsection
@section('content')
   <!-- BODY-ROOM-5 -->
   <section class="body-room-5">
    <div class="container">
        <div class="wrap-room-5">
            <div class="row">
                @foreach ($listphong as $item)
              
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="wrap-item ">
                        <div class="img">
                            <img src="../upload_img/{{$item->imgroom}}" alt="#" class="img-responsive">
                        </div>
                        <div class="text-room-5">
                            <h2 class="h2-rooms">{{$item->ten }}</h2>
                            <h5 class="h5-room">{{number_format($item->gia)}}VND/ngày</h5>
                        </div>
                        <div class="text-hover">
                            <div class="text">
                                <h2 class="h2-rooms">{{$item->ten }}</h2>
                                <h5 class="h5-room">{{number_format($item->gia)}}VND/ngày</h5>
                                <p>{{$item->mo_ta }}</p>
                                <a href="{{ route('detail', ['id'=>$item->id,'idloaiphong'=>$item->id_loai_phong]) }}" class="view-dateails btn btn-room">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
               
             
            </div>
        </div>
    </div>
</section>
<!-- END/BODY-ROOM-5-->
@endsection