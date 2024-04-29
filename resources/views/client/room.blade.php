@extends('index')
@section('slider')
        <!-- BANNER -->
        <section class="banner-tems text-center">
            <div class="container">
                <div class="banner-content">
                    <h2>ROOMS &  RATES</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing</p>
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
                @dd($item);
                @disabled(true)
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="wrap-item ">
                        <div class="img">
                            <img src="" alt="#" class="img-responsive">
                        </div>
                        <div class="text-room-5">
                            <h2 class="h2-rooms">STANDARD ROOM</h2>
                            <h5 class="h5-room">Start form $120 per day</h5>
                        </div>
                        <div class="text-hover">
                            <div class="text">
                                <h2 class="h2-rooms">STANDARD ROOM</h2>
                                <h5 class="h5-room">Start form $120 per day</h5>
                                <p>Lorem Ipsum is simply dummy text of the <b>printing</b> and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since <b>the 1500s</b>, when an unknown printer took a <b>gallery</b> of type and scrambled it to make a type specimen book ...</p>
                                <a href="#" class="view-dateails btn btn-room">VIEW DETAILS</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
               
                {{-- <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="wrap-item ">
                        <div class="img">
                            <img src="images/Room/room-27.jpg" alt="#" class="img-responsive">
                        </div>
                        <div class="text-room-5">
                            <h2 class="h2-rooms">FAMILY ROOM</h2>
                            <h5 class="h5-room">Start form $120 per day</h5>
                        </div>
                        <div class="text-hover">
                            <div class="text">
                                <h2 class="h2-rooms">FAMILY ROOM</h2>
                                <h5 class="h5-room">Start form $120 per day</h5>
                                <p>Lorem Ipsum is simply dummy text of the <b>printing</b> and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since <b>the 1500s</b>, when an unknown printer took a <b>gallery</b> of type and scrambled it to make a type specimen book ...</p>
                                <a href="#" class="view-dateails btn btn-room">VIEW DETAILS</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="wrap-item ">
                        <div class="img">
                            <img src="images/Room/room-28.jpg" alt="#" class="img-responsive">
                        </div>
                        <div class="text-room-5">
                            <h2 class="h2-rooms">COUPLE ROOM</h2>
                            <h5 class="h5-room">Start form $120 per day</h5>
                        </div>
                        <div class="text-hover">
                            <div class="text">
                                <h2 class="h2-rooms">COUPLE ROOM</h2>
                                <h5 class="h5-room">Start form $120 per day</h5>
                                <p>Lorem Ipsum is simply dummy text of the <b>printing</b> and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since <b>the 1500s</b>, when an unknown printer took a <b>gallery</b> of type and scrambled it to make a type specimen book ...</p>
                                <a href="#" class="view-dateails btn btn-room">VIEW DETAILS</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="wrap-item ">
                        <div class="img">
                            <img src="images/Room/room-29.jpg" alt="#" class="img-responsive">
                        </div>
                        <div class="text-room-5">
                            <h2 class="h2-rooms">STANDARD ROOM</h2>
                            <h5 class="h5-room">Start form $120 per day</h5>
                        </div>
                        <div class="text-hover">
                            <div class="text">
                                <h2 class="h2-rooms">STANDARD ROOM</h2>
                                <h5 class="h5-room">Start form $120 per day</h5>
                                <p>Lorem Ipsum is simply dummy text of the <b>printing</b> and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since <b>the 1500s</b>, when an unknown printer took a <b>gallery</b> of type and scrambled it to make a type specimen book ...</p>
                                <a href="#" class="view-dateails btn btn-room">VIEW DETAILS</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="wrap-item ">
                        <div class="img">
                            <img src="images/Room/room-30.jpg" alt="#" class="img-responsive">
                        </div>
                        <div class="text-room-5">
                            <h2 class="h2-rooms">STANDARD ROOM</h2>
                            <h5 class="h5-room">Start form $120 per day</h5>
                        </div>
                        <div class="text-hover">
                            <div class="text">
                                <h2 class="h2-rooms">STANDARD ROOM</h2>
                                <h5 class="h5-room">Start form $120 per day</h5>
                                <p>Lorem Ipsum is simply dummy text of the <b>printing</b> and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since <b>the 1500s</b>, when an unknown printer took a <b>gallery</b> of type and scrambled it to make a type specimen book ...</p>
                                <a href="#" class="view-dateails btn btn-room">VIEW DETAILS</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="wrap-item ">
                        <div class="img">
                            <img src="images/Room/room-31.jpg" alt="#" class="img-responsive">
                        </div>
                        <div class="text-room-5">
                            <h2 class="h2-rooms">FAMILY ROOM</h2>
                            <h5 class="h5-room">Start form $120 per day</h5>
                        </div>
                        <div class="text-hover">
                            <div class="text">
                                <h2 class="h2-rooms">FAMILY ROOM</h2>
                                <h5 class="h5-room">Start form $120 per day</h5>
                                <p>Lorem Ipsum is simply dummy text of the <b>printing</b> and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since <b>the 1500s</b>, when an unknown printer took a <b>gallery</b> of type and scrambled it to make a type specimen book ...</p>
                                <a href="#" class="view-dateails btn btn-room">VIEW DETAILS</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="wrap-item ">
                        <div class="img">
                            <img src="images/Room/room-32.jpg" alt="#" class="img-responsive">
                        </div>
                        <div class="text-room-5">
                            <h2 class="h2-rooms">COUPLE ROOM</h2>
                            <h5 class="h5-room">Start form $120 per day</h5>
                        </div>
                        <div class="text-hover">
                            <div class="text">
                                <h2 class="h2-rooms">COUPLE ROOM</h2>
                                <h5 class="h5-room">Start form $120 per day</h5>
                                <p>Lorem Ipsum is simply dummy text of the <b>printing</b> and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since <b>the 1500s</b>, when an unknown printer took a <b>gallery</b> of type and scrambled it to make a type specimen book ...</p>
                                <a href="#" class="view-dateails btn btn-room">VIEW DETAILS</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="wrap-item ">
                        <div class="img">
                            <img src="images/Room/room-33.jpg" alt="#" class="img-responsive">
                        </div>
                        <div class="text-room-5">
                            <h2 class="h2-rooms">FAMILY ROOM</h2>
                            <h5 class="h5-room">Start form $120 per day</h5>
                        </div>
                        <div class="text-hover">
                            <div class="text">
                                <h2 class="h2-rooms">FAMILY ROOM</h2>
                                <h5 class="h5-room">Start form $120 per day</h5>
                                <p>Lorem Ipsum is simply dummy text of the <b>printing</b> and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since <b>the 1500s</b>, when an unknown printer took a <b>gallery</b> of type and scrambled it to make a type specimen book ...</p>
                                <a href="#" class="view-dateails btn btn-room">VIEW DETAILS</a>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</section>
<!-- END/BODY-ROOM-5-->
@endsection