@extends('admin/index');
{{-- @dd($edit) --}}
{{-- <h1>{{$edit}}</h1> --}}
<main class="app-content">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item">Danh sách sản phẩm</li>
        <li class="breadcrumb-item"><a href="#">Sửa danh mục</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <h3 class="tile-title">Sửa danh mục</h3>
          <div class="tile-body">
            
           
            <form action="{{ route('update', ['id'=>$edit[0]->id]) }}" method="post" enctype="multipart/form-data">
                <div class="form-group col-md-3">
                  <label class="control-label">Tên danh mục</label>
                  <input class="form-control mb-3" value="{{$edit[0]->ten}}" name="namedm" type="text">
                  <label class="control-label">Ảnh</label>
                  <input class="form-control mb-3"  name="avatar" type="file">
                  <img style="width: 100px;" src="{{$edit[0]->avatar}}" alt="">
                  <div class="mt-3">
                    <button class="btn btn-save" type="submit" name="btnsubmit">Lưu lại</button>
                  <a class="btn btn-cancel" href="{{ route('listloaiphong') }}">Hủy bỏ</a>
                  </div>
                </div>
                @csrf
              </form>
  
  
  
  
  
  
          </div>
  
        </div>
  </main>