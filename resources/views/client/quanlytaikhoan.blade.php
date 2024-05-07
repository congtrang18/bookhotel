@extends('index')
@section('slider')
    <!-- BANNER -->
    <section class="banner-tems text-center">
        <div class="container">
            <div class="banner-content">
                <h2>Quản lý tài khoản</h2>

            </div>
        </div>
    </section>
    <!-- END-BANNER -->

@endsection
@section('content')
{{-- @dd($qltk); --}}
    <div class="edit-tk">
        <div class="container">
            <div class="main-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="" alt="Admin" class="rounded-circle p-1 bg-dark" width="110" />
                                    <div class="mt-3">
                                        <h4></h4>
                                    </div>
                                </div>
                                <hr class="my-4" />
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0">Họ và tên:</h6>
                                        <span class="text-secondary">{{$qltk->ten}}</span>
                                    </li>
                                    
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0">Email:</h6>
                                        <span class="text-secondary">{{$qltk->email}}</span>
                                    </li>
                                    <!-- -- -->
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0">Số điện thoại:</h6>
                                        <span class="text-secondary">{{$qltk->sdt}}</span>
                                    </li>
                                    <!-- -- -->
    
                                    <!-- -- -->
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0">Địa chỉ:</h6>
                                        <span class="text-secondary">{{$qltk->dia_chi}}</span>
                                    </li>
                                    <!-- -- -->
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0">Mật khẩu:</h6>
                                        <span class="text-secondary">{{$qltk->mat_khau}}</span>
                                    </li>
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- BOX SỬA TÀI KHOẢN  -->
                    <form action="{{ route('suatk', ['id'=>$qltk->id]) }}" method="post" class="col-md-8" enctype="multipart/form-data">
                        <div class="">
                            <div class="card p-2">
                                <div class="card-body">
                                    <h3 class="p-1">SỬA THÔNG TIN</h3>
                                    <!-- --AVATAR -->
                                    <div class="d-flex flex-column justify-content-between">
                                        <img src="" alt="" class="rounded-circle p-1 bg-dark" width="85" />
                                        <input type="file" class="form-control-file p-2" name="avatar" />
                                    </div>
                                    <!-- --TÊN -->
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Họ và tên</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input name="ten" type="text" class="form-control" value="{{$qltk->ten}}" />
                                        </div>
                                    </div>
                                   
                                    <!--EMAIL -- -->
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Email</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input name="email" type="text" class="form-control" value="{{$qltk->email}}"  />
                                        </div>
                                    </div>
                                    <!--SỐ ĐIỆN THOẠI -- -->
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Số điện thoại</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input name="sdt" type="text" class="form-control" value="{{$qltk->sdt}}" />
                                        </div>
                                    </div>
                                    <!-- -- -->
    
                                    <!-- --ĐỊA CHỈ -->
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Địa chỉ</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input name="dia_chi" type="text" class="form-control" value="{{$qltk->dia_chi}}" />
                                        </div>
                                    </div>
                                    <!-- --MẬT KHẨU -->
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Mật khẩu</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input name="mat_khau" type="text" class="form-control" value="{{$qltk->mat_khau}}" />
                                        </div>
                                    </div>
    
                                   
                                    <div class="row">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-9 text-secondary">
                                            <input  type="submit" class="btn btn-dark px-4"
                                                value="Lưu thay đổi" />
                                        </div>
                                    </div>
                                    @csrf
                                </div>
                                @if (session()->has('mes'))
                                <div class="alert alert-success mt-5" role="alert">
                                    {{session('mes')}}
                                </div>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection