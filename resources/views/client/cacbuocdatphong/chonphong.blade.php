@extends('index')
@section('title')
   Liên hệ
@endsection
@section('slider')
        <!-- BANNER -->
        <section class="banner-tems text-center">
            <div class="container">
                <div class="banner-content">
                    <h2>Các bước đặt phòng</h2>
                    
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
                <div class="reservation_step">
                    <ul>
                        <li><a href="#"><span>1.</span>  Choose Date</a></li>
                        <li class="active"><a href="#"><span>2.</span> Choose Room</a></li>
                        <li><a href="#"><span>3.</span> Make a Reservation</a></li>
                        <li><a href="#"><span>4.</span> Confirmation</a></li>
                    </ul>
                </div>
                <!-- END / STEP -->
                <div class="row">
                    <!--  SIDEBAR -->
                    <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                        <div class="sidebar">
                            <!-- SELECT-ROOM -->
                            <div class="reservation-room-selected ">
                                <!-- HEADING -->
                                <h2 class="reservation-heading">Select Rooms</h2>
                                <!-- END / HEADING -->
                                <!-- CURRENT -->
                                <div class="reservation-room-seleted_current bg-blue">
                                    <h6>YOU ARE BOOKING ROOM 2</h6>
                                    <span>2 Adult, 1 Chirld</span>
                                </div>
                                <!-- CURRENT -->
                                <div class="content-room">
                                    <div class="room room-1">ROOM 2 <span>2 Adult, 1 Child</span></div>
                                </div>
                            </div>
                            <!-- END/SELECT-ROOM -->
                            <!-- WIDGET CHECK AVAILABILITY -->
                            <div class="widget widget_check_availability widget-1">
                                <h4 class="widget-title">YOUR RESERVATION</h4>
                                <div class="check_availability">
                                    <h6 class="check_availability_title">your stay dates</h6>
                                    <div class="check_availability-field">
                                        <label>Arrive</label>
                                        <div class="input-group date" data-date-format="dd-mm-yyyy" id="datepicker1">
                                            <input class="form-control wrap-box" type="text" placeholder="Arrival Date">
                                            <span class="input-group-addon"><i class="fa fa-calendar"  aria-hidden="true"></i></span>
                                        </div>
                                    </div>
                                    <div class="check_availability-field">
                                        <label>Night</label>
                                        <select class="awe-select">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                    <div class="check_availability-field">
                                        <label>Depature</label>
                                        <div id="datepicker2" class="input-group date" data-date-format="dd-mm-yyyy">
                                            <input class="form-control wrap-box" type="text" placeholder="Departure Date">
                                            <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                        </div>
                                    </div>
                                    <h6 class="check_availability_title">ROOMS &amp; GUest</h6>
                                    <div class="check_availability-field">
                                        <label>ROOMS</label>
                                        <select class="awe-select">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                    <div class="check_availability_group">
                                        <span class="label-group">ROOMS 1</span>
                                        <div class="check_availability-field_group">
                                            <div class="check_availability-field">
                                                <label>Adult</label>
                                                <select class="awe-select">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                </select>
                                            </div>
                                            <div class="check_availability-field">
                                                <label>Chirld</label>
                                                <select class="awe-select">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="check_availability_group">
                                        <span class="label-group">ROOMS 2</span>
                                        <div class="check_availability-field_group">
                                            <div class="check_availability-field">
                                                <label>Adult</label>
                                                <select class="awe-select">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                </select>
                                            </div>
                                            <div class="check_availability-field">
                                                <label>Chirld</label>
                                                <select class="awe-select">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn-room btn">CHECK AVAILABLE</button>
                                </div>
                            </div>
                            <!-- END / WIDGET CHECK AVAILABILITY -->
                        </div>
                    </div>
                    <!--  END/SIDEBAR -->
                    <!-- CONTENT -->
                    <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                        <div class="reservation_content">
                            <!-- RESERVATION ROOM -->
                            <div class="reservation-room">
                                <!-- ITEM -->
                                <div class="reservation-room_item">
                                    <h2 class="reservation-room_name"><a href="#">Luxury room</a></h2>
                                    <div class="reservation-room_img">
                                        <a href="#"><img src="images/Reservation/luxury.jpg" alt="#" class="img-responsive"></a>
                                    </div>
                                    <div class="reservation-room_text">
                                        <div class="reservation-room_desc">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of</p>
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
                                    </div>
                                </div>
                                <!-- END / ITEM -->
                                <!-- ITEM -->
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
                                <!-- END / ITEM -->
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