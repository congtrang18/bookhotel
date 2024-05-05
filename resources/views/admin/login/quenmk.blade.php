
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
                    <img src="../upload_img/fg-img.png" alt="IMG">
                </div>
                <form action="" method="post">
                    <span class="login100-form-title">
                        <b>KHÔI PHỤC MẬT KHẨU</b>
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Bạn cần nhập đúng thông tin như: ex@abc.xyz">

                        <input class="input100" type="text" placeholder="Nhập email" name="email" value="" />
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class='bx bx-mail-send'></i>
                        </span>
                    </div>

                    <div>
                        <input type="submit" name="btnsubmit" value="Lấy mật khẩu" />
                    </div>
                    
                  
                    <div class="text-center p-t-12">
                        <a class="txt2" href="{{ route('formdangnhap') }}">
                            Trở về đăng nhập
                        </a>
                    </div>

                </form>
            </div>
        </div>
    </div>

</body>

</html>
