@extends('index')
@section('content')
     @section('slider')
          <!-- BODY-LOGIN -->
      <section class="body-page page-v1">
        <div class="container">
            <div class="content">
                <h2 class="sky-h3">Đăng nhập</h2>
                {{-- <h5 class="p-v1">Lorem Ipsum is simply dummy text of the printing</h5> --}}
                <form method="post" action="{{ route('dangnhapuser') }}">
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" value="" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input id="password-field" type="password" class="form-control" name="password" placeholder="Password">
                        <span class="fa fa-fw fa-eye field-icon toggle-password " data-toggle="#password-field"></span>
                    </div>
                    <button type="submit" class="btn btn-default">Đăng nhập</button>
                    @csrf
                </form>
                <span style="color: red">
                @error('message')
                    {{$message}}
                @enderror
                </span>
                <p>Đăng ký &nbsp;- &nbsp; Quên mật khẩu</p>
            </div>
        </div>
    </section>
    <!-- END/BODY-LOGIN-->
     @endsection
@endsection