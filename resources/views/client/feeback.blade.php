@extends('index')
@section('title')
    Đánh giá
@endsection
@section('slider')
    <section class="banner-tems text-center">
        <div class="container">
            <div class="banner-content">
                <h2>Khách Hàng Đánh Giá</h2>

            </div>
        </div>
    </section>
@endsection
@section('content')
    {{-- @dd($listdanhgia) --}}
    <!-- GUEST BOOK -->
    <section class="section-guest-book">
        <div class="container">
            <div class="guest-book">
                <!-- GUEST BOOK HEAD -->
                <div class="guest-book_head guest-book_head-2 text-center">
                    <div class="text">
                        <h2>Danh sách khách hàng đánh giá</h2>
                        {{-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p> --}}
                        <button type="button" class="btn btn-room" data-toggle="modal" data-target="#exampleModal"
                            data-whatever="@getbootstrap">Viết đánh giá của bạn</button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header text-center">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                aria-hidden="true"><i class="ion-ios-close-empty"
                                                    aria-hidden="true"></i></span></button>
                                        <h2 class="modal-title" id="exampleModalLabel">Đánh Giá</h2>
                                        <p>Phản hồi của bạn có ý nghĩa rất lớn đối với chúng tôi, đó là cách chúng tôi cải
                                            thiện mức độ dịch vụ của mình. Hãy chia sẻ kinh nghiệm của bạn nếu bạn đã từng ở
                                            lại với chúng tôi trước đây.</p>
                                    </div>
                                    <form action="{{ route('guidanhgia') }}" method="POST">
                                        @csrf
                                        <div class="modal-body">

                                            <div class="form-group">
                                                <input type="hidden" name="id_khach_hang" value="{{ session('idkh') }}">
                                                <input class="form-control" type="text" name="ten"
                                                    value="{{ session('idkh') ? $user->ten : '' }}" placeholder="tên">
                                                @error('ten')
                                                    <span style='color:red'>{{ $message }}</span>
                                                @enderror
                                                <input class="form-control" type="email" name="email"
                                                    value="{{ session('idkh') ? $user->email : '' }}" placeholder=" Email ">
                                                @error('email')
                                                    <span style='color:red'>{{ $message }}</span>
                                                @enderror
                                                <input class="form-control" type="text" name="dia_chi"
                                                    value="{{ session('idkh') ? $user->dia_chi : '' }}" placeholder=" địa chỉ">
                                                @error('dia_chi')
                                                    <span style='color:red'>{{ $message }}</span>
                                                @enderror
                                                <input class="form-control" type="text" name="tieu_de" value=""
                                                    placeholder=" tiêu đề">
                                                @error('tieu_de')
                                                    <span style='color:red'>{{ $message }}</span>
                                                @enderror
                                                {{-- <input class="form-control" type="text" name="Testimoniale" value="" placeholder="ghi chú"> --}}
                                                <textarea class="form-control" placeholder="ghi chú" name="ghi_chu" id="" cols="30" rows="10"></textarea>
                                                @error('ghi_chu')
                                                    <span style='color:red'>{{ $message }}</span>
                                                @enderror
                                            </div>

                                        </div>
                                        @if (session()->has('idkh'))
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-room">Gửi</button>
                                            </div>
                                        @else
                                            <div class="modal-footer">
                                                <p><a href="{{ route('formdangnhapuser') }}">Đăng nhập</a></p>

                                            </div>
                                        @endif

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END / GUEST BOOK HEAD -->
                <!-- GUEST BOOK MASONRY -->
                <div class="guest-book_content">
                    <div class="row">
                        <div class="guest-book_mansory">
                            <div id="container">
                                <!-- ITEM -->
                                @foreach ($listdanhgia as $item)
                                    <div class="item col-xs-6 col-md-4">
                                        <div class="guest-book_item ">
                                            <span class="icon"><img src="images/Guestbook/iconbook.png"
                                                    alt="#"></span>
                                            <div class="avatar">
                                                <img src="upload_img/{{ $item->avatar }}" alt="#">
                                            </div>
                                            <h2>{{ $item->tieu_de }}</h2>
                                            <p>{{ $item->ghi_chu }}</p>
                                            <span><b>{{ $item->ten }}</b> - {{ $item->dia_chi }}</span>
                                        </div>
                                    </div>
                                @endforeach


                            </div>
                        </div>
                    </div>
                    <!-- PAGE NAVIGATION   -->
                    <ul class="page-navigation text-center">
                        <li class="first"><a href="#"><i class="fa fa-arrow-circle-o-left"
                                    aria-hidden="true"></i></a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li class="current-page"><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">6</a></li>
                        <li><a href="#">...</a></li>
                        <li><a href="#">15</a></li>
                        <li class="last"><a href="#"><i class="fa fa-arrow-circle-o-right"
                                    aria-hidden="true"></i></a></li>
                    </ul>
                    <!-- END / PAGE NAVIGATION   -->
                </div>
                <!-- END / GUEST BOOK MASONRY -->
            </div>
        </div>
    </section>
    <!-- END / GUEST BOOK -->
@endsection
