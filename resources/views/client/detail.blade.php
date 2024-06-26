
@extends('index')
@section('content')
@section('slider')
<section class="banner-tems text-center">
    <div class="container">
        <div class="banner-content">
            <h2>LUXURY ROOM</h2>
            <p>Lorem Ipsum is simply dummy text of the printing</p>
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
                            <div class="gallery__img-block  ">
                                <span class="">
                                 Lorem Ipsum is simply dummy text of the printing and typesetting industry
                             </span>
                                <img src="landing/html/skyline/demo/images/Product/img-1.jpg" alt="images/Product/img-1.jpg" class="">
                            </div>
                            <div class="gallery__img-block  current">
                                <span class="">
                                     Lorem Ipsum is simply dummy text of the printing and typesetting industry 1
                                 </span>
                                <img src="landing/html/skyline/demo/images/Product/img-2.jpg" alt="images/Product/img-2.jpg" class="">
                            </div>
                            <div class="gallery__img-block  ">
                                <span class="">
                                     Lorem Ipsum is simply dummy text of the printing and typesetting industry 2
                                 </span>
                                <img src="landing/html/skyline/demo/images/Product/img-3.jpg" alt="images/Product/img-3.jpg" class="">
                            </div>
                            <div class="gallery__img-block  ">
                                <span class="">
                                     Lorem Ipsum is simply dummy text of the printing and typesetting industry 3
                                 </span>
                                <img src="landing/html/skyline/demo/images/Product/img-4.jpg" alt="images/Product/img-4.jpg" class="">
                            </div>
                            <div class="gallery__img-block  ">
                                <span class="">
                                      Lorem Ipsum is simply dummy text of the printing and typesetting industry 4
                                  </span>
                                <img src="landing/html/skyline/demo/images/Product/img-5.jpg" alt="images/Product/img-5.jpg" class="">
                            </div>
                            <div class="gallery__img-block  ">
                                <span class="">
                                 Lorem Ipsum is simply dummy text of the printing and typesetting industry 5
                             </span>
                                <img src="landing/html/skyline/demo/images/Product/img-6.jpg" alt="images/Product/img-6.jpg" class="">
                            </div>
                            <div class="gallery__img-block  ">
                                <span class="">
                                   Lorem Ipsum is simply dummy text of the printing and typesetting industry 6
                               </span>
                                <img src="landing/html/skyline/demo/images/Product/img-7.jpg" alt="images/Product/img-7.jpg" class="">
                            </div>
                            <div class="gallery__img-block  ">
                                <span class="">
                                  Lorem Ipsum is simply dummy text of the printing and typesetting industry 7
                              </span>
                                <img src="landing/html/skyline/demo/images/Product/img-7.jpg" alt="images/Product/img-7.jpg" class="">
                            </div>
                            <div class="gallery__img-block  ">
                                <span class="">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry 8
                                </span>
                                <img src="landing/html/skyline/demo/images/Product/img-7.jpg" alt="images/Product/img-7.jpg" class="">
                            </div>
                            <div class="gallery__img-block  ">
                                <span class="">
                                   Lorem Ipsum is simply dummy text of the printing and typesetting industry 9
                               </span>
                                <img src="landing/html/skyline/demo/images/Product/img-7.jpg" alt="images/Product/img-7.jpg" class="">
                            </div>
                            <div class="gallery__controls">
                            </div>
                        </div>
                    </div>
                    <!-- END / LAGER IMGAE -->
                </div>
                <div class="col-lg-3">
                    <!-- FORM BOOK -->
                    <div class="product-detail_book">
                        <div class="product-detail_total">
                            <img src="landing/html/skyline/demo/images/Product/icon.png" alt="#" class="icon-logo">
                            <h6>STARTING ROOM FROM</h6>
                            <p class="price">
                                <span class="amout">$330</span> /days
                            </p>
                        </div>
                        <div class="product-detail_form">
                            <div class="sidebar">
                                <!-- WIDGET CHECK AVAILABILITY -->
                                <div class="widget widget_check_availability">
                                    <div class="check_availability">
                                        <div class="check_availability-field">
                                            <label>Arrive</label>
                                            <div class="input-group date" data-date-format="dd-mm-yyyy" id="datepicker1">
                                                <input class="form-control wrap-box" type="text" placeholder="Arrival Date">
                                                <span class="input-group-addon"><i class="fa fa-calendar"  aria-hidden="true"></i></span>
                                            </div>
                                        </div>
                                        <div class="check_availability-field">
                                            <label>Depature</label>
                                            <div id="datepicker2" class="input-group date" data-date-format="dd-mm-yyyy">
                                                <input class="form-control wrap-box" type="text" placeholder="Departure Date">
                                                <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                            </div>
                                        </div>
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
                                                <option>4</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- END / WIDGET CHECK AVAILABILITY -->
                            </div>
                            <button class="btn btn-room btn-product">Book Now</button>
                        </div>
                    </div>
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
                        <li><a href="#overview" data-toggle="tab">OVERVIEW</a></li>
                        <li class="active"><a href="#amenities" data-toggle="tab">amenities</a></li>
                        <li><a href="#package" data-toggle="tab">PACKAGE</a></li>
                        <li><a href="#rates" data-toggle="tab">RATES</a></li>
                        <li><a href="#calendar" data-toggle="tab">Calendar</a></li>
                    </ul>
                </div>
                <div class="col-md-9">
                    <div class="product-detail_tab-content tab-content">
                        <!-- OVERVIEW -->
                        <div class="tab-pane fade" id="overview">
                            <div class="product-detail_overview">
                                <h5 class='text-uppercase
                    '>de Finibus Bonorum et Malorum", written by Cicero in 45 BC</h5>
                                <p>Located in the heart of Aspen with a unique blend of contemporary luxury and historic heritage, deluxe accommodations, superb amenities, genuine hospitality and dedicated service for an elevated experience in the Rocky Mountains.</p>
                                <div class="row">
                                    <div class="col-xs-6 col-md-4">
                                        <h6>SPECIAL ROOM</h6>
                                        <ul>
                                            <li>Max: 4 Person(s)</li>
                                            <li>Size: 35 m2 / 376 ft2</li>
                                            <li>View: Ocen</li>
                                            <li>Bed: King-size or twin beds</li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-6 col-md-4">
                                        <h6>SERVICE ROOM</h6>
                                        <ul>
                                            <li>Oversized work desk</li>
                                            <li>Hairdryer</li>
                                            <li>Iron/ironing board upon request</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END / OVERVIEW -->
                        <!-- AMENITIES -->
                        <div class="tab-pane fade active in" id="amenities">
                            <div class="product-detail_amenities">
                                <p>Located in the heart of Aspen with a unique blend of contemporary luxury and historic heritage, deluxe accommodations, superb amenities, genuine hospitality and dedicated service for an elevated experience in the Rocky Mountains.</p>
                                <div class="row">
                                    <div class="col-xs-6 col-lg-4">
                                        <h6>LIVING ROOM</h6>
                                        <ul>
                                            <li>Oversized work desk</li>
                                            <li>Hairdryer</li>
                                            <li>Iron/ironing board upon request</li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-6 col-lg-4">
                                        <h6>KITCHEN ROOM</h6>
                                        <ul>
                                            <li>AM/FM clock radio</li>
                                            <li>Voicemail</li>
                                            <li>High-speed Internet access</li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-6 col-lg-4">
                                        <h6>balcony</h6>
                                        <ul>
                                            <li>AM/FM clock radio</li>
                                            <li>Voicemail</li>
                                            <li>High-speed Internet access</li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-6 col-lg-4">
                                        <h6>bedroom</h6>
                                        <ul>
                                            <li>Coffee maker</li>
                                            <li>25 inch or larger TV</li>
                                            <li>Cable/satellite TV channels</li>
                                            <li>AM/FM clock radio</li>
                                            <li>Voicemail</li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-6 col-lg-4">
                                        <h6>bathroom</h6>
                                        <ul>
                                            <li>Dataport</li>
                                            <li>Phone access fees waived</li>
                                            <li>24-hour Concierge service</li>
                                            <li>Private concierge</li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-6 col-lg-4">
                                        <h6>Oversized work desk</h6>
                                        <ul>
                                            <li>Dataport</li>
                                            <li>Phone access fees waived</li>
                                            <li>24-hour Concierge service</li>
                                            <li>Private concierge</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END / AMENITIES -->
                        <!-- PACKAGE -->
                        <div class="tab-pane fade" id="package">
                            <div class="product-detail_package">
                                <!-- ITEM package -->
                                <div class="product-package_item">
                                    <div class="text">
                                        <h4><a href="#">package standar</a></h4>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</p>
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
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</p>
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
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</p>
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
                                            <a href="#" class="calendar_prev calendar_corner"><i class="ion-ios-arrow-thin-left"></i></a>
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
                                                <td class="apb-calendar_current-select"><a href="#"><small>11</small></a></td>
                                                <td class="apb-calendar_current-select"><a href="#"><small>12</small></a></td>
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
                                            <a href="#" class="calendar_next calendar_corner"><i class="ion-ios-arrow-thin-right"></i></a>
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
                                                <td class="apb-calendar_current-select"><a href="#"><small>11</small></a></td>
                                                <td class="apb-calendar_current-select"><a href="#"><small>12</small></a></td>
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
            <h2 class="product-detail_title">Another accommodations</h2>
            <div class="product-detail_content">
                <div class="row">
                    <!-- ITEM -->
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="product-detail_item">
                            <div class="img">
                                <a href="#"><img src="landing/html/skyline/demo/images/Product/Another-.jpg" alt="#"></a>
                            </div>
                            <div class="text">
                                <h2><a href="#">LUxury room</a></h2>
                                <ul>
                                    <li><i class="fa fa-child" aria-hidden="true"></i> Max: 2 Person(s)</li>
                                    <li><i class="fa fa-bed" aria-hidden="true"></i> Bed: King-size or twin beds</li>
                                    <li><i class="fa fa-eye" aria-hidden="true"></i> View: Ocen</li>
                                </ul>
                                <a href="#" class="btn btn-room">VIEW DETAIL</a>
                            </div>
                        </div>
                    </div>
                    <!-- END / ITEM -->
                    <!-- ITEM -->
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="product-detail_item">
                            <div class="img">
                                <a href="#"><img src="landing/html/skyline/demo/images/Product/Another-1.jpg" alt="#"></a>
                            </div>
                            <div class="text">
                                <h2><a href="#">Family Room</a></h2>
                                <ul>
                                    <li><i class="fa fa-child" aria-hidden="true"></i> Max: 2 Person(s)</li>
                                    <li><i class="fa fa-bed" aria-hidden="true"></i> Bed: King-size or twin beds</li>
                                    <li><i class="fa fa-eye" aria-hidden="true"></i> View: Ocen</li>
                                </ul>
                                <a href="#" class="btn btn-room">VIEW DETAIL</a>
                            </div>
                        </div>
                    </div>
                    <!-- END / ITEM -->
                    <!-- ITEM -->
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="product-detail_item">
                            <div class="img">
                                <a href="#"><img src="landing/html/skyline/demo/images/Product/Another-3.jpg" alt="#"></a>
                            </div>
                            <div class="text">
                                <h2><a href="#">standard Room</a></h2>
                                <ul>
                                    <li><i class="fa fa-child" aria-hidden="true"></i> Max: 2 Person(s)</li>
                                    <li><i class="fa fa-bed" aria-hidden="true"></i> Bed: King-size or twin beds</li>
                                    <li><i class="fa fa-eye" aria-hidden="true"></i> View: Ocen</li>
                                </ul>
                                <a href="#" class="btn btn-room">VIEW DETAIL</a>
                            </div>
                        </div>
                    </div>
                    <!-- END / ITEM -->
                    <!-- ITEM -->
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="product-detail_item">
                            <div class="img">
                                <a href="#"><img src="landing/html/skyline/demo/images/Product/Another-4.jpg" alt="#"></a>
                            </div>
                            <div class="text">
                                <h2><a href="#">couple Room</a></h2>
                                <ul>
                                    <li><i class="fa fa-child" aria-hidden="true"></i> Max: 2 Person(s)</li>
                                    <li><i class="fa fa-bed" aria-hidden="true"></i> Bed: King-size or twin beds</li>
                                    <li><i class="fa fa-eye" aria-hidden="true"></i> View: Ocen</li>
                                </ul>
                                <a href="#" class="btn btn-room">VIEW DETAIL</a>
                            </div>
                        </div>
                    </div>
                    <!-- END / ITEM -->
                </div>
            </div>
        </div>
        <!-- END / ANOTHER ACCOMMODATION -->
    </div>
</section>
<!-- END / SHOP DETAIL -->
@endsection