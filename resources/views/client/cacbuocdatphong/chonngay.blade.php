@extends('index')
@section('title')
    đặt phòng
@endsection
@section('slider')
    <!-- BANNER -->
    <section class="banner-tems text-center">
        <div class="container">
            <div class="banner-content">
                <h2>ĐẶT PHÒNG VÀ THANH TOÁN</h2>

            </div>
        </div>
    </section>
    <!-- END-BANNER -->
@endsection
@section('content')
    <!-- RESERVATION -->
    <section class="section-reservation-page">
        <div class="container">
            <div class="reservation-page">
                <!-- STEP -->
                {{-- <div class="reservation_step">
                    <ul>
                        <li class="active"><a href="#"><span>1.</span> Chọn ngày</a></li>
                        <li><a href="#"><span>2.</span>Chọn phòng</a></li>
                        <li><a href="#"><span>3.</span> Đặt chỗ</a></li>
                        <li><a href="#"><span>4.</span>Xác Nhận</a></li>
                    </ul>
                </div> --}}
                <!-- END / STEP -->
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                        <div class="sidebar">
                            <!-- WIDGET CHECK AVAILABILITY -->
                            <div class="widget widget_check_availability">
                                <h4 class="widget-title">Đặt phòng của bạn</h4>
                                <form action="{{ route('datphong') }}" method="post">
                                    @csrf
                                    <div class="check_availability">
                                        <h6 class="check_availability_title">ngày lưu trú của bạn</h6>
                                        <div class="check_availability-field">
                                            <label>ngày đến</label>
                                            <div class="input-group date" data-date-format="dd-mm-yyyy" id="datepicker1">
                                                <input class="form-control wrap-box" type="text" name="ngay_den" placeholder="ngày đến">
                                                <span class="input-group-addon"><i class="fa fa-calendar"
                                                        aria-hidden="true"></i></span>
                                                        @error('ngay_den')
                                                            <span style="color: red">{{$message}}</span>
                                                        @enderror
                                            </div>
                                        </div>
                                       
                                        <div class="check_availability-field">
                                            <label>ngày khởi hành</label>
                                            <div id="datepicker2" class="input-group date" data-date-format="dd-mm-yyyy">
                                                <input class="form-control wrap-box"  name="ngay_kh" type="text"
                                                    placeholder="ngày khởi hành">
                                                <span class="input-group-addon"><i class="fa fa-calendar"
                                                        aria-hidden="true"></i></span>
                                                        @error('ngay_kh')
                                                        <span style="color: red">{{$message}}</span>
                                                    @enderror
                                            </div>
                                        </div>
                                        
                                        <button class="btn-room btn" type="submit">Đặt phòng</button>
                                    </div>
                                </form>
                            </div>
                            <!-- END / WIDGET CHECK AVAILABILITY -->
                        </div>
                    </div>
                    {{-- <div class=" col-lg-9 col-md-8 col-sm-12 col-xs-12">
                        <div class="reservation_content bg-gray">
                            <h2 class="reservation-heading">Availability</h2>
                            <div class="col-sm-6">
                                <div class="reservation-calendar_custom">
                                    <div class="reservation-calendar_title">
                                        <span class="reservation-calendar_month">JUNE</span>
                                        <span class="reservation-calendar_year">2017</span>
                                        <a href="#" class="reservation-calendar_prev reservation-calendar_corner"><i class="ion-ios-arrow-thin-left"></i></a>
                                    </div>
                                    <table class="reservation-calendar_tabel">
                                        <thead>
                                            <tr>
                                                <th>Su</th>
                                                <th>Mo</th>
                                                <th>Tu</th>
                                                <th>We</th>
                                                <th>Th</th>
                                                <th>Fr</th>
                                                <th>Sa</th>
                                            </tr>
                                        </thead>
                                        <tr>
                                            <td></td>
                                            <td class="reservation-calendar_current-date">
                                                <a href="#"><small>1</small> <span>Today</span></a>
                                            </td>
                                            <td><a href="#"><small>2</small> </a></td>
                                            <td class=" active"><a href="#"><small>3</small><span>Arrive</span></a></td>
                                            <td class=" active"><a href="#"><small>4</small></a></td>
                                            <td class=" active"><a href="#"><small>5</small></a></td>
                                            <td class=" active"><a href="#"><small>6</small><span>Depart</span></a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="#"><small>7</small></a></td>
                                            <td><a href="#"><small>8</small></a></td>
                                            <td><a href="#"><small>9</small></a></td>
                                            <td><a href="#"><small>10</small></a></td>
                                            <td class="reservation-calendar_current-select"><a href="#"><small>11</small></a></td>
                                            <td class="reservation-calendar_current-select"><a href="#"><small>12</small></a></td>
                                            <td><a href="#"><small>13</small></a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="#"><small>14</small></a></td>
                                            <td><a href="#"><small>15</small></a></td>
                                            <td><a href="#"><small>16</small></a></td>
                                            <td><a href="#"><small>17</small></a></td>
                                            <td><a href="#"><small>18</small></a></td>
                                            <td><a href="#"><small>19</small></a></td>
                                            <td><a href="#"><small>20</small></a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="#"><small>21</small></a></td>
                                            <td><a href="#"><small>22</small></a></td>
                                            <td><a href="#"><small>23</small></a></td>
                                            <td><a href="#"><small>24</small></a></td>
                                            <td><a href="#"><small>25</small></a></td>
                                            <td><a href="#"><small>26</small></a></td>
                                            <td><a href="#"><small>27</small></a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="#"><small>28</small></a></td>
                                            <td><a href="#"><small>29</small></a></td>
                                            <td><a href="#"><small>30</small></a></td>
                                            <td><a href="#"><small>31</small></a></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="reservation-calendar_custom">
                                    <div class="reservation-calendar_title">
                                        <span class="reservation-calendar_month">JUNE</span>
                                        <span class="reservation-calendar_year">2017</span>
                                        <a href="#" class="reservation-calendar_next reservation-calendar_corner"><i class="ion-ios-arrow-thin-right"></i></a>
                                    </div>
                                    <table class="reservation-calendar_tabel">
                                        <thead>
                                            <tr>
                                                <th>Su</th>
                                                <th>Mo</th>
                                                <th>Tu</th>
                                                <th>We</th>
                                                <th>Th</th>
                                                <th>Fr</th>
                                                <th>Sa</th>
                                            </tr>
                                        </thead>
                                        <tr>
                                            <td></td>
                                            <td class="reservation-calendar_current-date">
                                                <a href="#"><small>1</small></a>
                                            </td>
                                            <td class="current-select"><a href="#"><small>2</small></a></td>
                                            <td class="current-select"><a href="#"><small>3</small></a></td>
                                            <td class="current-select"><a href="#"><small>4</small></a></td>
                                            <td class="current-select"><a href="#"><small>5</small></a></td>
                                            <td><a href="#"><small>6</small></a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="#"><small>7</small></a></td>
                                            <td><a href="#"><small>8</small></a></td>
                                            <td><a href="#"><small>9</small></a></td>
                                            <td><a href="#"><small>10</small></a></td>
                                            <td class="reservation-calendar_current-select"><a href="#"><small>11</small></a></td>
                                            <td class="reservation-calendar_current-select"><a href="#"><small>12</small></a></td>
                                            <td><a href="#"><small>13</small></a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="#"><small>14</small></a></td>
                                            <td><a href="#"><small>15</small></a></td>
                                            <td><a href="#"><small>16</small></a></td>
                                            <td><a href="#"><small>17</small></a></td>
                                            <td><a href="#"><small>18</small></a></td>
                                            <td><a href="#"><small>19</small></a></td>
                                            <td><a href="#"><small>20</small></a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="#"><small>21</small></a></td>
                                            <td><a href="#"><small>22</small></a></td>
                                            <td><a href="#"><small>23</small></a></td>
                                            <td><a href="#"><small>24</small></a></td>
                                            <td><a href="#"><small>25</small></a></td>
                                            <td><a href="#"><small>26</small></a></td>
                                            <td><a href="#"><small>27</small></a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="#"><small>28</small></a></td>
                                            <td><a href="#"><small>29</small></a></td>
                                            <td><a href="#"><small>30</small></a></td>
                                            <td><a href="#"><small>31</small></a></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <!-- CONTENT -->
                    {{-- @dd($getphongyth) --}}
                    <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                        <div class="reservation_content">
                            <!-- RESERVATION ROOM -->
                            <div class="reservation-room">
                                @foreach ($getphongyth as $item)
                                    <!-- ITEM -->
                                    <div class="reservation-room_item">
                                        <h2 class="reservation-room_name"><a href="#">{{ $item->ten_phong }}</a></h2>
                                        <div class="reservation-room_img">
                                            <a href="#"><img src="upload_img/{{ $item->anh_phong }}" alt="#"
                                                    class="img-responsive"></a>
                                        </div>
                                        <div class="reservation-room_text">
                                            <div class="reservation-room_desc">
                                                <p>{{ $item->mo_ta }}</p>
                                                <ul>
                                                    <li>Diện tích:{{ $item->dien_tich }}</li>
                                                    <li>Hướng nhìn:{{ $item->huong_nhin }}</li>
                                                    <li>Giường:{{ $item->giuong }}</li>
                                                </ul>
                                            </div>
                                            <a href="{{ route('detail', ['id' => $item->id_phong, 'idloaiphong' => $item->id_loai_phong]) }}"
                                                class="reservation-room_view-more">Xem chi tiết</a>
                                            <div class="clear"></div>
                                            <p class="reservation-room_price">
                                                <span
                                                    class="reservation-room_amout">{{ number_format($item->gia_phong) }}</span>VND
                                                / Ngày
                                            </p>
                                            {{-- <a href="#" class="btn btn-room">Đặt phòng</a> --}}
                                        </div>
                                        {{-- <div class="reservation-room_package">
                                        <a data-toggle="collapse" href="#reservation-room_package-1" class="reservation-room_package-more collapsed">Show more package</a>
                                        <div class="reservation-room_package-content collapse" id="reservation-room_package-1">
                                            <!-- ITEM PACKAGE -->
                                            <div class="reservation-package_item">
                                                <div class="reservation-package_img">
                                                    <a href="#"><img src="images/Reservation/luxury.jpg" alt="#" class="img-responsive"></a>
                                                </div>
                                                <div class="reservation-package_text">
                                                    <h4><a href="#">package standar</a></h4>
                                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                                                    <div class="reservation-package_book-price">
                                                        <p class="reservation-package_price">
                                                            <span class="amout">$330</span>
                                                        </p>
                                                        <a href="#" class="btn btn-room">Book package</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END / ITEM PACKAGE -->
                                            <!-- ITEM PACKAGE -->
                                            <div class="reservation-package_item">
                                                <div class="reservation-package_img">
                                                    <a href="#"><img src="images/Reservation/STANDARD.jpg" alt="#" class="img-responsive"></a>
                                                </div>
                                                <div class="reservation-package_text">
                                                    <h4><a href="#">package standar</a></h4>
                                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                                                    <div class="reservation-package_book-price">
                                                        <p class="reservation-package_price">
                                                            <span class="amout">$330</span>
                                                        </p>
                                                        <a href="#" class="btn btn-room">Book package</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END / ITEM PACKAGE -->
                                            <!-- ITEM PACKAGE -->
                                            <div class="reservation-package_item">
                                                <div class="reservation-package_img">
                                                    <a href="#"><img src="images/Reservation/STANDARD.jpg" alt="#" class="img-responsive"></a>
                                                </div>
                                                <div class="reservation-package_text">
                                                    <h4><a href="#">package standar</a></h4>
                                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                                                    <div class="reservation-package_book-price">
                                                        <p class="reservation-package_price">
                                                            <span class="amout">$330</span>
                                                        </p>
                                                        <a href="#" class="btn btn-room">Book package</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END / ITEM PACKAGE -->
                                        </div>
                                    </div> --}}
                                    </div>
                                    <!-- END / ITEM -->
                                @endforeach

                                {{-- <!-- ITEM -->
                                <div class="reservation-room_item">
                                    <h2 class="reservation-room_name"><a href="#">COUPLE room</a></h2>
                                    <div class="reservation-room_img">
                                        <a href="#"><img src="images/Reservation/COUPLE.jpg" alt="#" class="img-responsive"></a>
                                    </div>
                                    <div class="reservation-room_text">
                                        <div class="reservation-room_desc">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type ...</p>
                                            <ul>
                                                <li>1 King Bed</li>
                                                <li>Free Wi-Fi in all guest rooms</li>
                                                <li>Separate sitting area</li>
                                            </ul>
                                        </div>
                                        <a href="#" class="reservation-room_view-more">View More Infomation</a>
                                        <div class="clear"></div>
                                        <p class="reservation-room_price">
                                            <span class="reservation-room_amout">$330</span> / days
                                        </p>
                                        <a href="#" class="btn btn-room">BOOK ROOM</a>
                                    </div>
                                    <div class="reservation-room_package">
                                        <a data-toggle="collapse" href="#reservation-room_package-2" class="reservation-room_package-more collapsed">Show more package</a>
                                        <div class="reservation-room_package-content collapse" id="reservation-room_package-2">
                                            <!-- ITEM PACKAGE -->
                                            <div class="reservation-package_item">
                                                <div class="reservation-package_img">
                                                    <a href="#"><img src="images/Reservation/COUPLE.jpg" alt="#" class="img-responsive"></a>
                                                </div>
                                                <div class="reservation-package_text">
                                                    <h4><a href="#">package standar</a></h4>
                                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                                                    <div class="reservation-package_book-price">
                                                        <p class="reservation-package_price">
                                                            <span class="amout">$330</span>
                                                        </p>
                                                        <a href="#" class="btn btn-room">Book package</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END / ITEM PACKAGE -->
                                            <!-- ITEM PACKAGE -->
                                            <div class="reservation-package_item">
                                                <div class="reservation-package_img">
                                                    <a href="#"><img src="images/Reservation/COUPLE.jpg" alt="#" class="img-responsive"></a>
                                                </div>
                                                <div class="reservation-package_text">
                                                    <h4><a href="#">package standar</a></h4>
                                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                                                    <div class="reservation-package_book-price">
                                                        <p class="reservation-package_price">
                                                            <span class="amout">$330</span>
                                                        </p>
                                                        <a href="#" class="btn btn-room">Book package</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END / ITEM PACKAGE -->
                                            <!-- ITEM PACKAGE -->
                                            <div class="reservation-package_item">
                                                <div class="reservation-package_img">
                                                    <a href="#"><img src="images/Reservation/COUPLE.jpg" alt="#" class="img-responsive"></a>
                                                </div>
                                                <div class="reservation-package_text">
                                                    <h4><a href="#">package standar</a></h4>
                                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                                                    <div class="reservation-package_book-price">
                                                        <p class="reservation-package_price">
                                                            <span class="amout">$330</span>
                                                        </p>
                                                        <a href="#" class="btn btn-room">Book package</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END / ITEM PACKAGE -->
                                        </div>
                                    </div>
                                </div>
                                <!-- END / ITEM -->
                                <!-- ITEM -->
                                <div class="reservation-room_item  current-select">
                                    <h2 class="reservation-room_name"><a href="#">STANDARD room</a></h2>
                                    <div class="reservation-room_img">
                                        <a href="#"><img src="images/Reservation/STANDARD.jpg" alt="#" class="img-responsive"></a>
                                    </div>
                                    <div class="reservation-room_text">
                                        <div class="reservation-room_desc">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type ...</p>
                                            <ul>
                                                <li>1 King Bed</li>
                                                <li>Free Wi-Fi in all guest rooms</li>
                                                <li>Separate sitting area</li>
                                            </ul>
                                        </div>
                                        <a href="#" class="reservation-room_view-more">View More Infomation</a>
                                        <div class="clear"></div>
                                        <p class="reservation-room_price">
                                            <span class="reservation-room_amout">$330</span> / days
                                        </p>
                                        <a href="#" class="btn btn-room">BOOK ROOM</a>
                                    </div>
                                    <div class="reservation-room_package">
                                        <a data-toggle="collapse" href="#reservation-room_package-3" class="reservation-room_package-more collapsed">Show more package</a>
                                        <div class="reservation-room_package-content collapse" id="reservation-room_package-3">
                                            <!-- ITEM PACKAGE -->
                                            <div class="reservation-package_item">
                                                <div class="reservation-package_img">
                                                    <a href="#"><img src="images/Reservation/STANDARD.jpg" alt="#" class="img-responsive"></a>
                                                </div>
                                                <div class="reservation-package_text">
                                                    <h4><a href="#">package standar</a></h4>
                                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                                                    <div class="reservation-package_book-price">
                                                        <p class="reservation-package_price">
                                                            <span class="amout">$330</span>
                                                        </p>
                                                        <a href="#" class="btn btn-room">Book package</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END / ITEM PACKAGE -->
                                            <!-- ITEM PACKAGE -->
                                            <div class="reservation-package_item">
                                                <div class="reservation-package_img">
                                                    <a href="#"><img src="images/Reservation/STANDARD.jpg" alt="#" class="img-responsive"></a>
                                                </div>
                                                <div class="reservation-package_text">
                                                    <h4><a href="#">package standar</a></h4>
                                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                                                    <div class="reservation-package_book-price">
                                                        <p class="reservation-package_price">
                                                            <span class="amout">$330</span>
                                                        </p>
                                                        <a href="#" class="btn btn-room">Book package</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END / ITEM PACKAGE -->
                                            <!-- ITEM PACKAGE -->
                                            <div class="reservation-package_item">
                                                <div class="reservation-package_img">
                                                    <a href="#"><img src="images/Reservation/STANDARD.jpg" alt="#" class="img-responsive"></a>
                                                </div>
                                                <div class="reservation-package_text">
                                                    <h4><a href="#">package standar</a></h4>
                                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                                                    <div class="reservation-package_book-price">
                                                        <p class="reservation-package_price">
                                                            <span class="amout">$330</span>
                                                        </p>
                                                        <a href="#" class="btn btn-room">Book package</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END / ITEM PACKAGE -->
                                        </div>
                                    </div>
                                </div>
                                <!-- END / ITEM -->
                                <!-- ITEM -->
                                <div class="reservation-room_item">
                                    <h2 class="reservation-room_name"><a href="#">FAMILY room</a></h2>
                                    <div class="reservation-room_img">
                                        <a href="#"><img src="images/Reservation/family.jpg" alt="#" class="img-responsive"></a>
                                    </div>
                                    <div class="reservation-room_text">
                                        <div class="reservation-room_desc">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type ...</p>
                                            <ul>
                                                <li>1 King Bed</li>
                                                <li>Free Wi-Fi in all guest rooms</li>
                                                <li>Separate sitting area</li>
                                            </ul>
                                        </div>
                                        <a href="#" class="reservation-room_view-more">View More Infomation</a>
                                        <div class="clear"></div>
                                        <p class="reservation-room_price">
                                            <span class="reservation-room_amout">$330</span> / days
                                        </p>
                                        <a href="#" class="btn btn-room">BOOK ROOM</a>
                                    </div>
                                    <div class="reservation-room_package">
                                        <a data-toggle="collapse" href="#reservation-room_package-4" class="reservation-room_package-more collapsed">Show more package</a>
                                        <div class="reservation-room_package-content collapse" id="reservation-room_package-4">
                                            <!-- ITEM PACKAGE -->
                                            <div class="reservation-package_item">
                                                <div class="reservation-package_img">
                                                    <a href="#"><img src="images/Reservation/family.jpg" alt="#" class="img-responsive"></a>
                                                </div>
                                                <div class="reservation-package_text">
                                                    <h4><a href="#">package standar</a></h4>
                                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                                                    <div class="reservation-package_book-price">
                                                        <p class="reservation-package_price">
                                                            <span class="amout">$330</span>
                                                        </p>
                                                        <a href="#" class="btn btn-room">Book package</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END / ITEM PACKAGE -->
                                            <!-- ITEM PACKAGE -->
                                            <div class="reservation-package_item current-select">
                                                <div class="reservation-package_img">
                                                    <a href="#"><img src="images/Reservation/family.jpg" alt="#" class="img-responsive"></a>
                                                </div>
                                                <div class="reservation-package_text">
                                                    <h4><a href="#">package standar</a></h4>
                                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                                                    <div class="reservation-package_book-price">
                                                        <p class="reservation-package_price">
                                                            <span class="amout">$330</span>
                                                        </p>
                                                        <a href="#" class="btn btn-room">Book package</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END / ITEM PACKAGE -->
                                            <!-- ITEM PACKAGE -->
                                            <div class="reservation-package_item">
                                                <div class="reservation-package_img">
                                                    <a href="#"><img src="images/Reservation/family.jpg" alt="#" class="img-responsive"></a>
                                                </div>
                                                <div class="reservation-package_text">
                                                    <h4><a href="#">package standar</a></h4>
                                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                                                    <div class="reservation-package_book-price">
                                                        <p class="reservation-package_price">
                                                            <span class="amout">$330</span>
                                                        </p>
                                                        <a href="#" class="btn btn-room">Book package</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END / ITEM PACKAGE -->
                                        </div>
                                    </div>
                                </div>
                                <!-- END / ITEM --> --}}
                            </div>
                            <!-- END / RESERVATION ROOM -->
                        </div>
                    </div>
                    <!-- END / CONTENT -->
                </div>
            </div>
        </div>
    </section>
    <!-- END / RESERVATION -->
@endsection
