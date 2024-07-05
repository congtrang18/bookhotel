@extends('index')
@section('title')
    Đặt Phòng
@endsection
@section('slider')
    <!-- BANNER -->
    <section class="banner-tems text-center">
        <div class="container">
            <div class="banner-content">
                <h2>Thủ tục thanh toán</h2>

            </div>
        </div>
    </section>
    <!-- END-BANNER -->
@endsection
{{-- @dd($khachhang); --}}
@section('content')
    <!-- BODY-ROOM-5 -->
    <section class="check-out">
        <div class="container">
            <form action="" method="post">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="check-left ">
                            <h2> Thông tin khách hàng</h2>

                            <div class="form-group">
                                <label>Họ và tên <span>*</span></label>
                                <input type="text" value="{{ $khachhang->ten }}" class="form-control">
                            </div>
                            {{-- <div class="form-group">
                            <label>Company Name</label>
                            <input type="text" name="Name" class="form-control" value="" required="required" pattern="" title="">
                        </div> --}}
                            <div class="form-group">
                                <label>Địa chỉ <span>*</span></label>
                                <input type="text" name="Address" class="form-control" value="{{ $khachhang->dia_chi }}"
                                    required="required" pattern="" title="">
                                {{-- <input type="text" name="Address" class="form-control" value="" required="required" pattern="" title="" placeholder="Apartment, suite, unit etc. (Optional)"> --}}
                            </div>
                            {{-- <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label>Town / City &nbsp;<span>*</span></label>
                                    <input type="text" class="form-control" placeholder="Street Address">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label>Country &nbsp;<span>*</span></label>
                                    <input type="text" class="form-control" placeholder="Country">
                                </div>
                            </div>
                        </div> --}}
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label>Email &nbsp; <span>*</span></label>
                                        <input type="email" name="Email" class="form-control"
                                            value="{{ $khachhang->email }}" required="required" title=""
                                            placeholder="Street Address">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label>số điện thoại &nbsp;<span>*</span></label>
                                        <input type="text" value="{{ $khachhang->sdt }}" class="form-control"
                                            placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Ghi chú</label>
                                <textarea name="textarea" class="form-control" rows="3" required="required" placeholder=""></textarea>
                            </div>
                            {{-- <div class="radio b">
                            <label>
                                <input type="radio" name="optradio1"> Create an account?</label>
                        </div> --}}
                            {{-- <div class="click form-control">You have a coupon? <a href="#" title="">Click here to enter your code</a>
                        </div> --}}
                        </div>
                        <!-- item-right -->
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5 col-lg-offset-1">
                        <div class="check-right ">
                            <h2 class="text-uppercase">CHI TIẾT THANH TOÁN CỦA BẠN</h2>
                            <div class="checkout_cart">
                                <!-- ITEM -->

                                @foreach ($getallphongyth as $item)
                                    <div class="cart-item">
                                        <div class="img">
                                            <a href="#"><img src="upload_img/{{ $item->anh_phong }}"
                                                    alt="#"></a>
                                        </div>
                                        <div class="text">
                                            <a href="#">{{ $item->ten_phong }}</a>
                                            <p><span>2 days - 2 rooms</span> <b>{{ number_format($item->gia_phong) }}VND</b>
                                            </p>
                                        </div>
                                        <a href="#" class="remove"> <i class="ion-close-round"
                                                aria-hidden="true"></i></a>
                                    </div>
                                @endforeach
                                <!-- END / ITEM -->

                            </div>
                            <div class="checkout-cartinfo">
                               
                                <p><span>Tổng tiền:</span>{{number_format($tongtien[0]->tongtien)}} VND</p>
                                {{-- <p><span>Shipping:</span>Free Shipping</p>
                                <p><span>Order Total:</span><strong>$1080</strong></p> --}}
                            </div>
                            <div class="checkout-option">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optradio">Thanh toán tiền mặt
                                        {{-- <span>Make your payment directly into our bank account. Please use your Order ID as
                                            the payment reference. Your order won’t be shipped until the funds have cleared
                                            in our account.</span> --}}
                                    </label>
                                </div>
                                {{-- <div class="radio margin-bottom">
                                    <label>
                                        <input type="radio" name="optradio">Cheque Payment</label>
                                </div> --}}
                                <div class="radio ">
                                    <label class="padding-right">
                                        <input type="radio" name="optradio">Chuyển khoản</label>
                                    <div class="card">
                                        <img src="images/Checkout/ex.png" alt="#" class="img-responsive">
                                        <img src="images/Checkout/mas.png" alt="#" class="img-responsive">
                                        <img src="images/Checkout/o.png" alt="#" class="img-responsive">
                                        <img src="images/Checkout/pay.png" alt="#" class="img-responsive">
                                        <img src="images/Checkout/visa.png" alt="#" class="img-responsive">
                                        <img src="images/Checkout/2co.png" alt="#" class="img-responsive">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout-btn btn">Thanh toán </div>
                        </div>
                    </div>
                    <!-- /row -->
                </div>
            </form>
            <!-- /container -->
        </div>
    </section>
    <!-- END/BODY-ROOM-5-->
@endsection
