<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Đăng nhập quản trị | Website quản trị v2.0</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="../ad/doc/login.css" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />
</head>

<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="../upload_img/team.jpg" alt="IMG" />
                </div>
                <!--=====TIÊU ĐỀ======-->
                <form class="col-md-6" method="post" action="{{ route('dangnhap') }}">
                    <span class="login100-form-title">
                        <b>ĐĂNG NHẬP HỆ THỐNG</b>
                    </span>
                    <!--=====FORM INPUT TÀI KHOẢN VÀ PASSWORD======-->
                    <!-- <form action="" method="post"> -->
                    {{-- <div class="wrap-input100">
                        <input class="input100" type="text" placeholder="name"  name="name" />

                        <span class="symbol-input100">
                            <i class="bx bx-user"></i>
                        </span>
                    </div> --}}
                    <div class="wrap-input100">
                        <input class="input100" type="text" placeholder="Tài khoản quản trị"   name="email" />

                        <span class="symbol-input100">
                            <i class="bx bx-user"></i>
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input">
                        <input autocomplete="off"  type="password" class="input100" placeholder="Mật khẩu"
                            name="password" />
                        <span toggle="#password-field" class="bx fa-fw bx-hide field-icon click-eye"></span>

                        <span class="symbol-input100">
                            <i class="bx bx-key"></i>
                        </span>
                    </div>


                    <!--=====ĐĂNG NHẬP======-->
                    <div>
                        <input type="submit" value="Đăng nhập"  />
                    </div>
                    <div class="my-3">
                     
                        <span style="color: red">
                            @error('err')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <!--=====LINK TÌM MẬT KHẨU======-->
                    <div class="text-right p-t-12">
                        <a class="txt2" href="{{ route('quenmk') }}"> Bạn quên mật khẩu? </a>
                    </div>
                    <!-- </form> -->
                    @csrf
                </form>
            </div>
        </div>
    </div>

</body>

</html>
