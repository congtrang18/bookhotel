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
                        <li class="active"><a href="#"><span>1.</span>  Choose Date</a></li>
                        <li><a href="#"><span>2.</span> Choose Room</a></li>
                        <li><a href="#"><span>3.</span> Make a Reservation</a></li>
                        <li><a href="#"><span>4.</span> Confirmation</a></li>
                    </ul>
                </div>
                <!-- END / STEP -->
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                        <div class="sidebar">
                            <!-- WIDGET CHECK AVAILABILITY -->
                            <div class="widget widget_check_availability">
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
                    <div class=" col-lg-9 col-md-8 col-sm-12 col-xs-12">
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
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END / RESERVATION -->
@endsection