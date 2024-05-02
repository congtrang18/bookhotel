@extends('index')
@section('content')
     @section('slider')
 <!-- BODY-LOGIN -->
 <section class="body-page page-v1 page-v2">
    <div class="container">
        <div class="content">
            <h2 class="sky-h3">Đăng kí</h2>
            
            <form method="post" enctype="multipart/form-data" action="{{ route('dangky') }}" >
                <div class="form-group">
                    <input type="text" class="form-control" name="ten" value="{{old("ten")}}" placeholder="Tên">
                    @error('ten')
                        <span style="color: red">{{$message}}</span>
                    @enderror
                </div>
                {{-- <div class="form-group">
                    <input type="text" class="form-control" name="sdt" value="{{old("sdt")}}" placeholder="Số điện thoại">
                    @error('sdt')
                        <span style="color: red">{{$message}}</span>
                    @enderror
                </div> --}}
                <div class="form-group">
                    <input type="text" name="email" class="form-control" value="{{old("email")}}"  title="" placeholder="Email *">
                    @error('email')
                    <span style="color: red">{{$message}}</span>
                @enderror
                </div>
                <div class="form-group">
                    <input id="password-field" value="{{old("mat_khau")}}" type="password" class="form-control" name="mat_khau" placeholder="mật khẩu *">
                    <span data-toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                    @error('mat_khau')
                    <span style="color: red">{{$message}}</span>
                @enderror
                </div>
                <div class="form-group">
                    <input type="file" class="form-control" name="avatar" value="" placeholder="img">
                    @error('avatar')
                    <span style="color: red">{{$message}}</span>
                @enderror
                </div>
                <button type="submit" class="btn btn-default">Đăng Kí</button>
                @csrf
            </form>
        </div>
    </div>
</section>
<!-- END/BODY-LOGIN-->
     @endsection
@endsection