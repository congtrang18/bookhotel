@extends('index')
@section('slider')
<section class="banner-tems text-center">
    <div class="container">
        <div class="banner-content">
            <h2>GUEST BOOK</h2>
            <p>Lorem Ipsum is simply dummy text of the printing</p>
        </div>
    </div>
</section>
@endsection
@section('content')
     <!-- GUEST BOOK -->
     <section class="section-guest-book">
        <div class="container">
            <div class="guest-book">
                <!-- GUEST BOOK HEAD -->
                <div class="guest-book_head guest-book_head-2 text-center">
                    <div class="text">
                        <h2>READ OUR GUEST BOOK FORM CUSTOMER</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                        <button type="button" class="btn btn-room" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">WRITE IN GUEST BOOK</button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header text-center">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="ion-ios-close-empty" aria-hidden="true"></i></span></button>
                                        <h2 class="modal-title" id="exampleModalLabel">GIVE ME YOU THING WITH US</h2>
                                        <p>Your feedback means the world to us, it's how we improve our level of service. Feel free to share your experience if you've stayed with us before.</p>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group">
                                                <input class="form-control" type="text" name="Name" value="" placeholder="Your Name">
                                                <input class="form-control" type="email" name="Email" value="" placeholder=" Email Address">
                                                <input class="form-control" type="text" name="Locations" value="" placeholder=" Locations (Town / Country)">
                                                <input class="form-control" type="text" name="Testimonial" value="" placeholder=" Testimonial Title">
                                                <input class="form-control" type="text" name="Testimoniale" value="" placeholder="Your Testimoniale">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-room">WRITE IN GUEST BOOK</button>
                                    </div>
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
                                <div class="item col-xs-6 col-md-4">
                                    <div class="guest-book_item ">
                                        <span class="icon"><img src="images/Guestbook/iconbook.png" alt="#"></span>
                                        <div class="avatar">
                                            <img src="images/Guestbook/Guest-Book-1.png" alt="#">
                                        </div>
                                        <h2>BEST PRICE</h2>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing</p>
                                        <span><b>Jonatha Owens</b> - Sydney Australia</span>
                                    </div>
                                </div>
                                <!-- END / ITEM -->
                                <!-- ITEM -->
                                <div class="item col-xs-6 col-md-4">
                                    <div class="guest-book_item ">
                                        <span class="icon"><img src="images/Guestbook/iconbook.png" alt="#"></span>
                                        <div class="avatar">
                                            <img src="images/Guestbook/Guest-Book-2.png" alt="#">
                                        </div>
                                        <h2>GOOD SERVICE</h2>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                                        <span><b>Jonatha Owens</b> - Sydney Australia</span>
                                    </div>
                                </div>
                                <!-- END / ITEM -->
                                <!-- ITEM -->
                                <div class="item col-xs-6 col-md-4">
                                    <div class="guest-book_item ">
                                        <span class="icon"><img src="images/Guestbook/iconbook.png" alt="#"></span>
                                        <div class="avatar">
                                            <img src="images/Guestbook/Guest-Book-3.png" alt="#">
                                        </div>
                                        <h2>Love the hotel</h2>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing</p>
                                        <span><b>Jonatha Owens</b> - Sydney Australia</span>
                                    </div>
                                </div>
                                <!-- END / ITEM -->
                                <!-- ITEM -->
                                <div class="item col-xs-6 col-md-4">
                                    <div class="guest-book_item ">
                                        <span class="icon"><img src="images/Guestbook/iconbook.png" alt="#"></span>
                                        <div class="avatar">
                                            <img src="images/Guestbook/Guest-Book-5.png" alt="#">
                                        </div>
                                        <h2>I LIKE YOUR HOTTEL</h2>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words</p>
                                        <span><b>Jonatha Owens</b> - Sydney Australia</span>
                                    </div>
                                </div>
                                <!-- END / ITEM -->
                                <!-- ITEM -->
                                <div class="item col-xs-6 col-md-4">
                                    <div class="guest-book_item ">
                                        <span class="icon"><img src="images/Guestbook/iconbook.png" alt="#"></span>
                                        <div class="avatar">
                                            <img src="images/Guestbook/Guest-Book-6.png" alt="#">
                                        </div>
                                        <h2>Love the hotel</h2>
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one</p>
                                        <span><b>Jonatha Owens</b> - Sydney Australia</span>
                                    </div>
                                </div>
                                <!-- END / ITEM -->
                                <!-- ITEM -->
                                <div class="item col-xs-6 col-md-4">
                                    <div class="guest-book_item">
                                        <span class="icon"><img src="images/Guestbook/iconbook.png" alt="#"></span>
                                        <div class="avatar">
                                            <img src="images/Guestbook/Guest-Book-4.png" alt="#">
                                        </div>
                                        <h2>GOOD SERVICE</h2>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                        <span><b>Jonatha Owens</b> - Sydney Australia</span>
                                    </div>
                                </div>
                                <!-- END / ITEM -->
                                <!-- ITEM -->
                                <div class="item col-xs-6 col-md-4">
                                    <div class="guest-book_item ">
                                        <span class="icon"><img src="images/Guestbook/iconbook.png" alt="#"></span>
                                        <div class="avatar">
                                            <img src="images/Guestbook/Guest-Book-8.png" alt="#">
                                        </div>
                                        <h2>BEST PRICE</h2>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing</p>
                                        <span><b>Jonatha Owens</b> - Sydney Australia</span>
                                    </div>
                                </div>
                                <!-- END / ITEM -->
                                <!-- ITEM -->
                                <div class="item col-xs-6 col-md-4">
                                    <div class="guest-book_item ">
                                        <span class="icon"><img src="images/Guestbook/iconbook.png" alt="#"></span>
                                        <div class="avatar">
                                            <img src="images/Guestbook/Guest-Book-7.png" alt="#">
                                        </div>
                                        <h2>I WILL COME BACK</h2>
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock</p>
                                        <span><b>Jonatha Owens</b> - Sydney Australia</span>
                                    </div>
                                </div>
                                <!-- END / ITEM -->
                                <!-- ITEM -->
                                <div class="item col-xs-6 col-md-4">
                                    <div class="guest-book_item guest-book_item-2">
                                        <span class="icon"><img src="images/Guestbook/iconbook.png" alt="#"></span>
                                        <div class="avatar">
                                            <img src="images/Guestbook/Guest-Book-9.png" alt="#">
                                        </div>
                                        <h2>BEST PRICE</h2>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
                                        <span><b>Jonatha Owens</b> - Sydney Australia</span>
                                    </div>
                                </div>
                                <!-- END / ITEM -->
                            </div>
                        </div>
                    </div>
                    <!-- PAGE NAVIGATION   -->
                    <ul class="page-navigation text-center">
                        <li class="first"><a href="#"><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i></a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li class="current-page"><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">6</a></li>
                        <li><a href="#">...</a></li>
                        <li><a href="#">15</a></li>
                        <li class="last"><a href="#"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a></li>
                    </ul>
                    <!-- END / PAGE NAVIGATION   -->
                </div>
                <!-- END / GUEST BOOK MASONRY -->
            </div>
        </div>
    </section>
    <!-- END / GUEST BOOK -->
@endsection