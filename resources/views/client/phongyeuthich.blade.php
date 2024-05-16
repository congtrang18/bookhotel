@extends('index')
@section('title')
    phòng yêu thích
@endsection
{{-- @dd($phongyeuthich) --}}
@section('slider')
    <!-- BANNER -->
    <section class="banner-tems text-center">
        <div class="container">
            <div class="banner-content">
                <h2>PHÒNG YÊU THÍCH</h2>
                <p>Đơn giản và đẹp đẽ</p>
            </div>
        </div>
    </section>
    <!-- END-BANNER -->
@endsection
@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    {{-- <th></th> --}}
                    <th scope="col">STT</th>
                    <th scope="col">Tên phòng</th>
                    <th scope="col">ảnh</th>
                    <th scope="col">giá</th>
                    <th scope="col">số lượng</th>
                    <th scope="col">chức năng</th>


                </tr>
            </thead>
            <tbody>
                @foreach ($phongyeuthich as $key => $item)
                    <tr>
{{-- @dd($item) --}}
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $item->ten_phong }}</td>
                        <td><a href="{{ route('detail', ['id' => $item->idphong, 'idloaiphong' => $item->idlp]) }}"><img
                                    src="upload_img/{{ $item->anh_phong }}" style="width: 100px; height: 80px;"
                                    alt=""></a></td>
                        <td>{{ number_format($item->gia_phong) }}VND</td>
                        <td>{{ $item->sl_nguoi }}</td>
                        <td colspan="2">
                            <a href="{{ route('datphongone', ['id'=>$item->id]) }}" class="btn btn-outline-success">Đặt phòng</a>

                            <a onclick="return confirm('bạn chắc chắn muốn xóa không')"
                                href="{{ route('deletephongyeuthich', ['id' => $item->id]) }}" class="btn btn-danger">
                                <i class="fas fa-trash-alt"></i></a>
                        </td>

                    </tr>
                @endforeach
                <tr>
                    <td colspan="5"></td>
                    <td ><a href="{{ route('datphong') }}" class="btn btn-outline-success">Đặt phòng</a></td>
                </tr>


            </tbody>
        </table>
       
    </div>
@endsection