@extends('index')
@section('title')
    Chi Tiết
@endsection
@section('content')
@section('slider')
    <section class="banner-tems text-center">
        <div class="container">
            <div class="banner-content">
                <h2>{{ $tenphong[0]->ten_phong }}</h2>
                <p>{{ $tenphong[0]->ten_loai_phong }}</p>
            </div>
        </div>
    </section>
@endsection
<!-- ROOM DETAIL -->
<section class="section-product-detail">
    <div class="container">
        <!-- DETAIL -->
        <div class="product-detail margin">
            <div class="row">
                <div class="col-lg-9">
                    <!-- LAGER IMGAE -->
                    <div class="wrapper">
                        <div class="gallery3">
                            @foreach ($detailanhphong as $item)
                                <div class="gallery__img-block  ">
                                    <span class="">
                                        {{ $item->ten }}
                                    </span>
                                    <img src="upload_img/{{ $item->anh_phongs }}"
                                        alt="upload_img/{{ $item->anh_phongs }}" class="">
                                </div>
                            @endforeach

                            <div class="gallery__controls">
                            </div>
                        </div>
                    </div>
                    <!-- END / LAGER IMGAE -->
                </div>
                <div class="col-lg-3">
                    <!-- FORM BOOK -->
                    <form action="{{ route('roomlove') }}" method="post">
                        @csrf
                        <input type="hidden" name="idphong" value="{{ $tenphong[0]->idphong }}">
                        <div class="product-detail_book">
                            <div class="product-detail_total">
                                <img src="landing/html/skyline/demo/images/Product/icon.png" alt="#"
                                    class="icon-logo">
                                <h6>{{ $tenphong[0]->ten_phong }} </h6>
                                <p class="price">
                                    <span> {{ number_format($detailphong[0]->gia) }}VND</span> /NGÀY
                                </p>
                            </div>
                            <div class="product-detail_form">
                                <div class="sidebar">
                                    <!-- WIDGET CHECK AVAILABILITY -->
                                    <div class="widget widget_check_availability">
                                        <div class="check_availability">
                                            <div class="check_availability-field">
                                                <label>Ngày Tới</label>
                                                <div class="input-group date" data-date-format="dd-mm-yyyy"
                                                    id="datepicker1">
                                                    <input class="form-control wrap-box" type="text"
                                                        placeholder="ngày tới">
                                                    <span class="input-group-addon"><i class="fa fa-calendar"
                                                            aria-hidden="true"></i></span>
                                                </div>
                                            </div>
                                            <div class="check_availability-field">
                                                <label>Khởi Hành</label>
                                                <div id="datepicker2" class="input-group date"
                                                    data-date-format="dd-mm-yyyy">
                                                    <input class="form-control wrap-box" type="text"
                                                        placeholder="ngày khởi hành">
                                                    <span class="input-group-addon"><i class="fa fa-calendar"
                                                            aria-hidden="true"></i></span>
                                                </div>
                                            </div>
                                            <div class="check_availability-field">
                                                <label>Người lớn</label>
                                                <select class="awe-select">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                </select>
                                            </div>
                                            <div class="check_availability-field">
                                                <label>Trẻ em</label>
                                                <select class="awe-select">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END / WIDGET CHECK AVAILABILITY -->
                                </div>
                                <button class="btn btn-room btn-product">Đặt Phòng</button>
                            </div>
                        </div>
                        <div class="roomlove text-center" style="margin-top: 50px">
                            {{-- @if (session()->has('idkh')) --}}
                                <button class="btn btn-room btn-product">Phòng Yêu Thích</button>
                            {{-- @endif --}}
                        </div>
                        @if (session()->has('err'))
                        <div class="alert alert-warning" style="margin-top: 20px" role="alert">
                            {{session('err')}}
                        </div>
                        @endif
                        @if (session()->has('phongdatontai'))
                        <div class="alert alert-danger" style="margin-top: 20px" role="alert">
                            {{session('phongdatontai')}}
                        </div>
                        @endif
                    </form>
                    <!-- END / FORM BOOK -->
                </div>
            </div>
        </div>
        <!-- END / DETAIL -->
        <!-- TAB -->
        <div class="product-detail_tab">
            <div class="row">
                <div class="col-md-3">
                    <ul class="product-detail_tab-header">
                        <li><a href="#overview" data-toggle="tab">Tổng Quan</a></li>
                        <li class="active"><a href="#amenities" data-toggle="tab">Tiện Nghi</a></li>
                        <li><a href="#package" data-toggle="tab">Bưu Kiện</a></li>
                        <li><a href="#rates" data-toggle="tab">Giá</a></li>
                        <li><a href="#calendar" data-toggle="tab">Lịch</a></li>
                    </ul>
                </div>
                <div class="col-md-9">
                    <div class="product-detail_tab-content tab-content">
                        <!-- OVERVIEW -->
                        <div class="tab-pane fade" id="overview">
                            <div class="product-detail_overview">



                                <h5 class='text-uppercase'>
                                    {{ $detailphong[0]->ten }}
                                </h5>
                                <p>{{ $detailphong[0]->mo_ta }}</p>
                                <div class="row">
                                    <div class="col-xs-6 col-md-4">
                                        <h6>Phòng Đặc Biệt</h6>
                                        <ul>
                                            <li>Tối đa: {{ $detailphong[0]->sl_nguoi }} người</li>
                                            <li>Kích thước: {{ $detailphong[0]->dien_tich }} m2</li>
                                            <li>Lượt xem: {{ $detailphong[0]->luot_xem }}</li>
                                            <li>Giường: {{ $detailphong[0]->giuong }}</li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-6 col-md-4">
                                        <h6>Phòng Dịch Vụ</h6>
                                        <ul>
                                            <li>Bàn làm việc ngoại cỡ</li>
                                            <li>Máy sấy</li>
                                            <li>Bàn là</li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- END / OVERVIEW -->
                        <!-- AMENITIES -->
                        <div class="tab-pane fade active in" id="amenities">
                            <div class="product-detail_amenities">

                                <div class="row">
                                    <div class="col-xs-6 col-lg-4">
                                        <h6>Phòng Khách</h6>
                                        <ul>
                                            <li>Bàn làm việc ngoại cỡ</li>

                                            <li> Máy sấy tóc</li>
                                            <li> Bàn ủi/bàn ủi theo yêu cầu</li>

                                        </ul>
                                    </div>
                                    <div class="col-xs-6 col-lg-4">
                                        <h6>Phòng Bếp</h6>
                                        <ul>
                                            <li>Bếp nướng/nẩu</li>
                                            <li>Bếp gas</li>
                                        </ul>
                                    </div>

                                    <div class="col-xs-6 col-lg-4">
                                        <h6>Phòng Ngủ</h6>
                                        <ul>
                                            <li>Máy Pha cà phê</li>
                                            <li>Tivi 25 inch</li>
                                            <li>Giường tình yêu</li>
                                            <li>Điều hòa</li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-6 col-lg-4">
                                        <h6>Phòng Tắm</h6>
                                        <ul>
                                            <li>Bồn tắm</li>
                                            <li>Bình nóng lạnh</li>

                                            <li>Máy sấy</li>
                                            <li>Tủ </li>
                                            <li>Móc quần áo</li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- END / AMENITIES -->
                        <!-- PACKAGE -->
                        <div class="tab-pane fade" id="package">
                            <div class="product-detail_package">
                                <!-- detailphong package -->
                                <div class="product-package_item">
                                    <div class="text">
                                        <h4><a href="#">package standar</a></h4>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled</p>
                                        <div class="product-package_price">
                                            <p class="price">
                                                <span class="amout">$260</span> / Package
                                            </p>
                                            <a href="#" class="btn btn-room">BOOK PACKIT</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- END / ITEM package -->
                                <!-- ITEM package -->
                                <div class="product-package_item">
                                    <div class="text">
                                        <h4><a href="#">package standar</a></h4>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled</p>
                                        <div class="product-package_price">
                                            <p class="price">
                                                <span class="amout">$340</span> / Package
                                            </p>
                                            <a href="#" class="btn btn-room">BOOK PACKIT</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- END / ITEM package -->
                                <!-- ITEM package -->
                                <div class="product-package_item">
                                    <div class="text">
                                        <h4><a href="#">package standar</a></h4>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type and scrambled</p>
                                        <div class="product-package_price">
                                            <p class="price">
                                                <span class="amout">$420</span> / Package
                                            </p>
                                            <a href="#" class="btn btn-room">BBOOK PACKIT</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- END / ITEM package -->
                            </div>
                        </div>
                        <!-- END / PACKAGE -->
                        <!-- RATES -->
                        <div class="tab-pane fade" id="rates">
                            <div class="product-detail_rates">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Rate Period</th>
                                            <th>Nightly</th>
                                            <th>Weekend Night</th>
                                            <th>Weekly</th>
                                            <th>Monthly</th>
                                            <th>Event</th>
                                        </tr>
                                    </thead>
                                    <tr>
                                        <td>
                                            <h6>Spring/Summer Season</h6>
                                            <ul>
                                                <li>Jun 1 - Aug 31</li>
                                                <li>3 night minimum stay</li>
                                            </ul>
                                        </td>
                                        <td>
                                            <p class="price"><span class="amout">$320</span></p>
                                        </td>
                                        <td>
                                            <p class="price"><span class="amout">$23</span></p>
                                        </td>
                                        <td>
                                            <p class="price"><span class="amout">$120</span></p>
                                        </td>
                                        <td>
                                            <p class="price"><span class="amout">$100</span></p>
                                        </td>
                                        <td>
                                            <p class="price"><span class="amout">$89</span></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h6>Summer/Fall Season</h6>
                                            <ul>
                                                <li>Jun 1 - Aug 31</li>
                                                <li>3 night minimum stay</li>
                                            </ul>
                                        </td>
                                        <td>
                                            <p class="price"><span class="amout">$150</span></p>
                                        </td>
                                        <td>
                                            <p class="price"><span class="amout">$130</span></p>
                                        </td>
                                        <td>
                                            <p class="price"><span class="amout">$100</span></p>
                                        </td>
                                        <td>
                                            <p class="price"><span class="amout">$80</span></p>
                                        </td>
                                        <td>
                                            <p class="price"><span class="amout">$85</span></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h6>Christmas Season</h6>
                                            <ul>
                                                <li>Jun 1 - Aug 31</li>
                                                <li>3 night minimum stay</li>
                                            </ul>
                                        </td>
                                        <td>
                                            <p class="price"><span class="amout">$225</span></p>
                                        </td>
                                        <td>
                                            <p class="price"><span class="amout">$200</span></p>
                                        </td>
                                        <td>
                                            <p class="price"><span class="amout">$180</span></p>
                                        </td>
                                        <td>
                                            <p class="price"><span class="amout">$160</span></p>
                                        </td>
                                        <td>
                                            <p class="price"><span class="amout">$140</span></p>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!-- END / RATES -->
                        <!-- CALENDAR -->
                        <div class="tab-pane fade" id="calendar">
                            <div class="product-detail_calendar-wrap row">
                                <div class="col-sm-6">
                                    <!-- CALENDAR ITEM -->
                                    <div class="calendar_custom">
                                        <div class="calendar_title">
                                            <span class="calendar_month">JUNE</span>
                                            <span class="calendar_year">2017</span>
                                            <a href="#" class="calendar_prev calendar_corner"><i
                                                    class="ion-ios-arrow-thin-left"></i></a>
                                        </div>
                                        <table class="calendar_tabel">
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
                                                <td class="apb-calendar_current-date">
                                                    <a href="#"><small>1</small></a>
                                                </td>
                                                <td><a href="#"><small>2</small></a></td>
                                                <td><a href="#"><small>3</small></a></td>
                                                <td><a href="#"><small>4</small></a></td>
                                                <td><a href="#"><small>5</small></a></td>
                                                <td><a href="#"><small>6</small></a></td>
                                            </tr>
                                            <tr>
                                                <td><a href="#"><small>7</small></a></td>
                                                <td><a href="#"><small>8</small></a></td>
                                                <td><a href="#"><small>9</small></a></td>
                                                <td><a href="#"><small>10</small></a></td>
                                                <td class="apb-calendar_current-select"><a
                                                        href="#"><small>11</small></a></td>
                                                <td class="apb-calendar_current-select"><a
                                                        href="#"><small>12</small></a></td>
                                                <td><a href="#"><small>13</small></a></td>
                                            </tr>
                                            <tr>
                                                <td><a href="#"><small>14</small></a></td>
                                                <td><a href="#"><small>15</small></a></td>
                                                <td class="not-available"><a href="#"><small>16</small></a></td>
                                                <td class="not-available"><a href="#"><small>17</small></a></td>
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
                                    <!-- END CALENDAR ITEM -->
                                </div>
                                <div class="col-sm-6">
                                    <!-- CALENDAR ITEM -->
                                    <div class="calendar_custom">
                                        <div class="calendar_title">
                                            <span class="calendar_month">JUNE</span>
                                            <span class="calendar_year">2017</span>
                                            <a href="#" class="calendar_next calendar_corner"><i
                                                    class="ion-ios-arrow-thin-right"></i></a>
                                        </div>
                                        <table class="calendar_tabel">
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
                                                <td class="apb-calendar_current-date">
                                                    <a href="#"><small>1</small></a>
                                                </td>
                                                <td><a href="#"><small>2</small></a></td>
                                                <td><a href="#"><small>3</small></a></td>
                                                <td><a href="#"><small>4</small></a></td>
                                                <td><a href="#"><small>5</small></a></td>
                                                <td><a href="#"><small>6</small></a></td>
                                            </tr>
                                            <tr>
                                                <td><a href="#"><small>7</small></a></td>
                                                <td><a href="#"><small>8</small></a></td>
                                                <td><a href="#"><small>9</small></a></td>
                                                <td><a href="#"><small>10</small></a></td>
                                                <td class="apb-calendar_current-select"><a
                                                        href="#"><small>11</small></a></td>
                                                <td class="apb-calendar_current-select"><a
                                                        href="#"><small>12</small></a></td>
                                                <td><a href="#"><small>13</small></a></td>
                                            </tr>
                                            <tr>
                                                <td><a href="#"><small>14</small></a></td>
                                                <td><a href="#"><small>15</small></a></td>
                                                <td class="not-available"><a href="#"><small>16</small></a></td>
                                                <td class="not-available"><a href="#"><small>17</small></a></td>
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
                                    <!-- END CALENDAR ITEM -->
                                </div>
                                <div class="calendar_status text-center col-sm-12">
                                    <span>Available</span>
                                    <span class="not-available">Not Available</span>
                                </div>
                            </div>
                        </div>
                        <!-- END / CALENDAR -->
                    </div>
                </div>
            </div>
        </div>
        <!-- END / TAB -->
        <!-- ANOTHER ACCOMMODATION -->
        <div class="product-detail">
            <h2 class="product-detail_title">Chỗ ở khác</h2>
            {{-- @dd($phonglienquan) --}}
            <div class="product-detail_content">
                <div class="row">
                    <!-- ITEM -->
                    @foreach ($phonglienquan as $item)
                        <div class="col-sm-6 col-md-3 col-lg-3">
                            <div class="product-detail_item">
                                <div class="img">
                                    <a href="#"><img src="upload_img/{{ $item->imgroom }}" alt="#"></a>
                                </div>
                                <div class="text">
                                    <h2><a href="#">{{ $item->ten }}</a></h2>
                                    <ul>
                                        <li><i class="fa fa-child" aria-hidden="true"></i> Tối đa:
                                            {{ $item->sl_nguoi }}</li>
                                        <li><i class="fa fa-bed" aria-hidden="true"></i> Giường: {{ $item->giuong }}
                                        </li>
                                        <li><i class="fa fa-eye" aria-hidden="true"></i>Lượt xem:
                                            {{ $item->luot_xem }}</li>
                                    </ul>
                                    <a href="{{ route('detail', ['id' => $item->id, 'idloaiphong' => $item->id_loai_phong]) }}"
                                        class="btn btn-room">VIEW DETAIL</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <!-- END / ITEM -->

                </div>
            </div>
        </div>
        <!-- END / ANOTHER ACCOMMODATION -->
    </div>
</section>
<!-- END / SHOP DETAIL -->
@endsection
